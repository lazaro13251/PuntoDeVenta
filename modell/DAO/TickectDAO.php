<?php

require_once __DIR__ . '/../General/IMethods.php';
require_once __DIR__ . '/../Entitys/Tickets.php';

class TickectDAO implements IMethods {

    private Tables $table;

    public function __construct() {
        $this->table = $this->buildTable();
    }

    public function Create(object $object): bool {
        try {
            $columns = $this->table->getCamposTabla();
            $stmt = DBConn::obtenerConexion()->prepare("INSERT INTO {$this->table->getNombreTabla()} ($columns[0], $columns[1], $columns[2], $columns[3], $columns[4], $columns[5]) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
            $stmt->bindValue(1, $object->gettotalticket(), PDO::PARAM_STR);
            $stmt->bindValue(2, $object->getidsale(), PDO::PARAM_STR);
            $stmt->bindValue(3, $object->getactive(), PDO::PARAM_INT);
            $stmt->bindValue(4, $object->getcreated(), PDO::PARAM_INT);
            $stmt->bindValue(5, $object->getupdate(), PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (Exception $exc) {
            echo "Error en la consulta: " . $exc->getMessage();
            return false;
        }
        
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
            $columns = $this->table->getCamposTabla();
            $stmt = DBConn::obtenerConexion()->prepare("SELECT * FROM {$this->table->getNombreTabla()} WHERE $columns[3] = 1 ORDER BY $columns[0] DESC;");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $array = [];

            foreach ($results as $result) :
                $tickets = new Tickets(
                        $result[$columns[0]],
                        $result[$columns[1]],
                        $result[$columns[2]],
                        $result[$columns[3]],
                        $result[$columns[4]],
                        $result[$columns[5]]
          
                );
                $array[] = $tickets;
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
            $stmt = DBConn::obtenerConexion()->prepare("SELECT * FROM {$this->table->getNombreTabla()} WHERE $columns[3] = 1 AND $columns[0] = :ID");
            $stmt->bindParam(':ID', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                return new Tickets(
                        $result[$columns[0]],
                        $result[$columns[1]],
                        $result[$columns[2]],
                        $result[$columns[3]],
                        $result[$columns[4]],
                        $result[$columns[5]]
 
                );
            } else {
                echo '<pre>';
                throw new Exception("El Ticket con ID $id no fue encontrado");
                echo '</pre>';
            }
        } catch (Exception $exc) {
            echo '<pre>';
            echo ("Error de base de datos: " . $exc->getMessage());
            echo '</pre>';
        }
        
    }

    public function buildTable(): \Tables {

        $table = new Tables('table_tickets');
        $table->addCamposTabla('id_ticket');
        $table->addCamposTabla('column_total_ticket');
        $table->addCamposTabla('id_sale');
        $table->addCamposTabla('active');
        $table->addCamposTabla('created');
        $table->addCamposTabla('updated');
        return $table;
    }

}
