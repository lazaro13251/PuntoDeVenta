<?php

require 'modell/General/IMethods.php';
require 'modell/Entitys/ArticlesCategory.php';

class ArticlesCategoryDAO implements IMethods {

    private string $table = 'table_articles_category';
    private string $columnID = 'id_article_category';

    public function Create(object $object): bool {
        
    }

    public function DeleteByID(int $id): bool {
        try {
            $stmt = DBConn::obtenerConexion()->prepare("UPDATE $this->tables SET active = 0 WHERE $this->columnID = :ID");
            $stmt->bindParam(':ID', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->rowCount() > 0;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function ReadAll(): array {
        try {
            $stmt = DBConn::obtenerConexion()->prepare("SELECT * FROM $this->table WHERE active = 1 ORDER BY $this->columnID DESC");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $array = [];
            foreach ($results as $result):
                $category = new ArticlesCategory(
                        $result['id_article_category'],
                        $result['column_name_category'],
                        $result['active'],
                        $result['created'],
                        $result['updated']
                );
                $array[] = $category;
            endforeach;
            return $array;
        } catch (PDOException $exc) {
            throw new Exception("Error de base de datos: " . $exc->getMessage());
        }
    }

    public function ReadByID(int $id): ?object {
        try {
            $stmt = DBConn::obtenerConexion()->prepare("SELECT * FROM $this->table WHERE $this->columnID = :ID AND active = 1;");
            $stmt->bindParam(':ID', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new ArticlesCategory(
                        $result['id_article_category'],
                        $result['column_name_category'],
                        $result['active'],
                        $result['created'],
                        $result['updated']
                );
            } else {
                throw new Exception("La categoria con ID: $id no fue encontrado");
            }
        } catch (PDOException $exc) {
            throw new Exception("Error de base de datos: " . $exc->getMessage());
        }
    }
}
