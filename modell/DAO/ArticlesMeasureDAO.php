<?php

require_once __DIR__ . '/../General/IMethods.php';
require_once __DIR__ . '/../Entitys/ArticlesMeasure.php';

class ArticlesMeasureDAO implements IMethods {

    private Tables $table;

    public function __construct() {
        $this->table = $this->buildTable();
    }

    public function Create(object $object): bool {
        try {
            $columns = $this->table->getCamposTabla();
            $stmt = DBConn::obtenerConexion()->prepare("INSERT INTO {$this->table->getNombreTabla()} ($columns[0], $columns[1], $columns[2], $columns[3], $columns[4]) VALUES (NULL, ?, 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
            $stmt->bindValue(1, $object->getNameArticlesMeasure(), PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch (Exception $exc) {
            echo '<pre>';
            print_r($exc->getMessage());
            echo '<pre>';
            return false;
        }
    }

    public function DeleteByID(int $id): bool {
        
    }

    public function ReadAll(): array {
        try {
            $columns = $this->table->getCamposTabla();
            $stmt = DBConn::obtenerConexion()->prepare("SELECT * FROM {$this->table->getNombreTabla()} WHERE $columns[2] = 1 ORDER BY $columns[0] DESC;");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $array = [];

            foreach ($results as $result) :
                $measure = new ArticlesMeasure(
                        $result[$columns[0]],
                        $result[$columns[1]],
                        $result[$columns[2]],
                        $result[$columns[3]],
                        $result[$columns[4]],
                );
                $array[] = $measure;
            endforeach;
            return $array;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function ReadByID(int $id): ?object {
        try {
            $columns = $this->table->getCamposTabla();
            $stmt = DBConn::obtenerConexion()->prepare("SELECT * FROM {$this->table->getNombreTabla()} WHERE $columns[2] = 1 AND $columns[0] = :ID");
            $stmt->bindParam(':ID', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                return new ArticlesMeasure(
                        $result[$columns[0]],
                        $result[$columns[1]],
                        $result[$columns[2]],
                        $result[$columns[3]],
                        $result[$columns[4]]
                );
            } else {
                echo '<pre>';
                throw new Exception("La medida de articulo con ID $id no fue encontrado");
                echo '</pre>';
            }
        } catch (Exception $exc) {
            echo '<pre>';
            echo ("Error de base de datos: " . $exc->getMessage());
            echo '</pre>';
        }
    }

    public function buildTable(): \Tables {
        $table = new Tables('table_articles_measure');
        $table->addCamposTabla('id_articles_measure');
        $table->addCamposTabla('column_name_measure');
        $table->addCamposTabla('active');
        $table->addCamposTabla('created');
        $table->addCamposTabla('updated');
        return $table;
    }

    public function UpdateByID(int $id, object $object): bool {
        
    }
}
