<?php

require 'modell/General/IMethods.php';
require 'modell/Entitys/Articles.php';

class ArticlesDAO implements IMethods {

    private string $table = 'table_articles';
    private string $columnID = 'id_article';

    public function Create(object $object): bool {
        return true;
    }

    public function DeleteByID(int $id): bool {
        try {
            $stmt = DBConn::obtenerConexion()->prepare("UPDATE $this->table SET active = 0 WHERE $this->columnID = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->rowCount() > 0;
        } catch (PDOException $exc) {
            throw new Exception("Error de base de datos: " . $exc->getMessage());
        }
    }

    public function ReadAll(): array {
        try {
            $stmt = DBConn::obtenerConexion()->prepare("SELECT * FROM $this->table WHERE active = 1  ORDER BY $this->table.id_article DESC");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $array = [];
            foreach ($results as $result) {
                $article = new Articles(
                        $result['id_article'],
                        $result['column_ups_article'],
                        $result['column_name_article'],
                        $result['column_price_coste_article'],
                        $result['column_price_sale_article'],
                        $result['id_article_category'],
                        $result['id_department'],
                        $result['column_route_image_article'],
                        $result['id_articles_measure'],
                        $result['column_internal_reference_article'],
                        $result['column_internal_notes_article'],
                        $result['active'],
                        $result['created'],
                        $result['updated']
                );
                $array[] = $article;
            }
            return $array;
        } catch (PDOException $exc) {
            throw new Exception("Error de base de datos: " . $exc->getMessage());
        }
    }

    public function ReadByID(int $id): ?object {
        try {
            $stmt = DBConn::obtenerConexion()->prepare("SELECT * FROM $this->table WHERE active = 1 AND $this->columnID = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                return new Articles(
                        $result['id_article'],
                        $result['column_ups_article'],
                        $result['column_name_article'],
                        $result['column_price_coste_article'],
                        $result['column_price_sale_article'],
                        $result['id_article_category'],
                        $result['id_department'],
                        $result['column_route_image_article'],
                        $result['id_articles_measure'],
                        $result['column_internal_reference_article'],
                        $result['column_internal_notes_article'],
                        $result['active'],
                        $result['created'],
                        $result['updated']
                );
            } else {
                throw new Exception("El artículo con ID $id no fue encontrado");
            }
        } catch (PDOException $exc) {
            throw new Exception("Error de base de datos: " . $exc->getMessage());
        }
    }
}
