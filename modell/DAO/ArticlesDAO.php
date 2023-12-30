<?php

require_once __DIR__ . '/../General/IMethods.php';
require_once __DIR__ . '/../Entitys/Articles.php';

class ArticlesDAO implements IMethods {

    private Tables $table;

    public function __construct() {
        $this->table = $this->buildTable();
    }

    public function Create(object $object): bool {
        try {
            $columns = $this->table->getCamposTabla();
            $stmt = DBConn::obtenerConexion()->prepare("INSERT INTO {$this->table->getNombreTabla()} ($columns[0], $columns[1], $columns[2], $columns[3], $columns[4], $columns[5], $columns[6], $columns[7], $columns[8], $columns[9], $columns[10], $columns[11], $columns[12], $columns[13]) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
            $stmt->bindValue(1, $object->getUpsArticle(), PDO::PARAM_STR);
            $stmt->bindValue(2, $object->getNameArticle(), PDO::PARAM_STR);
            $stmt->bindValue(3, $object->getCosteArticle(), PDO::PARAM_INT);
            $stmt->bindValue(4, $object->getSaleArticle(), PDO::PARAM_INT);
            $stmt->bindValue(5, $object->getCategoryArticle(), PDO::PARAM_INT);
            $stmt->bindValue(6, $object->getDepartmentArticle(), PDO::PARAM_INT);
            $stmt->bindValue(7, $object->getImageArticle(), PDO::PARAM_STR);
            $stmt->bindValue(8, $object->getMeasureArticle(), PDO::PARAM_INT);
            $stmt->bindValue(9, $object->getInternalReferenceArticle(), PDO::PARAM_STR);
            $stmt->bindValue(10, $object->getInternalNotesArticle(), PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch (Exception $exc) {
            echo "Error en la consulta: " . $exc->getMessage();
            return false;
        }
    }

    public function DeleteByID(int $id): bool {
        try {
            $columns = $this->table->getCamposTabla();
            $stmt = DBConn::obtenerConexion()->prepare("UPDATE {$this->table->getNombreTabla()} SET $columns[11] = 0 WHERE $columns[0] = :ID");
            $stmt->bindParam(':ID', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->rowCount() > 0;
        } catch (PDOException $exc) {
            throw new Exception("Error de base de datos: " . $exc->getMessage());
        }
    }

    public function ReadAll(): array {
        try {
            $columns = $this->table->getCamposTabla();
            $stmt = DBConn::obtenerConexion()->prepare("SELECT * FROM {$this->table->getNombreTabla()} WHERE $columns[11] = 1 ORDER BY $columns[0] DESC;");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $array = [];

            foreach ($results as $result) :
                $article = new Articles(
                        $result[$columns[0]],
                        $result[$columns[1]],
                        $result[$columns[2]],
                        $result[$columns[3]],
                        $result[$columns[4]],
                        $result[$columns[5]],
                        $result[$columns[6]],
                        $result[$columns[7]],
                        $result[$columns[8]],
                        $result[$columns[9]],
                        $result[$columns[10]],
                        $result[$columns[11]],
                        $result[$columns[12]],
                        $result[$columns[13]]
                );
                $array[] = $article;
            endforeach;
            return $array;
        } catch (Exception $exc) {
            echo '<pre>';
            echo $exc->getTraceAsString();
            echo '</pre>';
        }
    }

    public function ReadByID(int $id): ?object {
        try {
            $columns = $this->table->getCamposTabla();
            $stmt = DBConn::obtenerConexion()->prepare("SELECT * FROM {$this->table->getNombreTabla()} WHERE $columns[11] = 1 AND $columns[0] = :ID");
            $stmt->bindParam(':ID', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                return new Articles(
                        $result[$columns[0]],
                        $result[$columns[1]],
                        $result[$columns[2]],
                        $result[$columns[3]],
                        $result[$columns[4]],
                        $result[$columns[5]],
                        $result[$columns[6]],
                        $result[$columns[7]],
                        $result[$columns[8]],
                        $result[$columns[9]],
                        $result[$columns[10]],
                        $result[$columns[11]],
                        $result[$columns[12]],
                        $result[$columns[13]]
                );
            } else {
                echo '<pre>';
                throw new Exception("El artículo con ID $id no fue encontrado");
                echo '</pre>';
            }
        } catch (Exception $exc) {
            echo '<pre>';
            echo ("Error de base de datos: " . $exc->getMessage());
            echo '</pre>';
        }
    }

    public function buildTable(): \Tables {
        $table = new Tables('table_articles');
        $table->addCamposTabla('id_article');
        $table->addCamposTabla('column_ups_article');
        $table->addCamposTabla('column_name_article');
        $table->addCamposTabla('column_price_coste_article');
        $table->addCamposTabla('column_price_sale_article');
        $table->addCamposTabla('id_article_category');
        $table->addCamposTabla('id_department');
        $table->addCamposTabla('column_route_image_article');
        $table->addCamposTabla('id_articles_measure');
        $table->addCamposTabla('column_internal_reference_article');
        $table->addCamposTabla('column_internal_notes_article');
        $table->addCamposTabla('active');
        $table->addCamposTabla('created');
        $table->addCamposTabla('updated');
        return $table;
    }

    public function UpdateByID(int $id, object $object): bool {
        try {
            $columns = $this->table->getCamposTabla();
            $stmt = DBConn::obtenerConexion()->prepare("UPDATE {$this->table->getNombreTabla()} SET $columns[1] = ?, $columns[2] = ?, $columns[3] = ?, $columns[4] = ?, $columns[5] = ?, $columns[6] = ?, $columns[7] = ?, $columns[8] = ?, $columns[9] = ?, $columns[10] = ?  WHERE $columns[11] = 1 AND $columns[0] = ?;");
            $stmt->bindValue(1, $object->getUpsArticle(), PDO::PARAM_STR);
            $stmt->bindValue(2, $object->getNameArticle(), PDO::PARAM_STR);
            $stmt->bindValue(3, $object->getCosteArticle(), PDO::PARAM_INT);
            $stmt->bindValue(4, $object->getSaleArticle(), PDO::PARAM_INT);
            $stmt->bindValue(5, $object->getCategoryArticle(), PDO::PARAM_INT);
            $stmt->bindValue(6, $object->getDepartmentArticle(), PDO::PARAM_INT);
            $stmt->bindValue(7, $object->getImageArticle(), PDO::PARAM_STR);
            $stmt->bindValue(8, $object->getMeasureArticle(), PDO::PARAM_INT);
            $stmt->bindValue(9, $object->getInternalReferenceArticle(), PDO::PARAM_STR);
            $stmt->bindValue(10, $object->getInternalNotesArticle(), PDO::PARAM_STR);
            $stmt->bindValue(11, $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (Exception $exc) {
            echo '<pre>';
            print_r($exc->getTraceAsString());
            echo '</pre>';
            return false;
        }
    }
}
