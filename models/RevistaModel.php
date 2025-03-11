<?php

class RevistaModel extends Conexion
{

    private $pdo;

    public function __construct()
    {
        $this->pdo = parent::connect();
    }

    public function guardarRevista($params)
    {
        try {
            $sql = "INSERT INTO revista (nombre, enlace, fecreg) VALUES (?, ?, ?)";
            $stm = $this->pdo->prepare($sql);
            $stm->bindParam(1, $params[0], PDO::PARAM_STR);
            $stm->bindParam(2, $params[1], PDO::PARAM_STR);
            $stm->bindParam(3, $params[2], PDO::PARAM_STR);
            $res = $stm->execute();
            if ($res) {
                return $this->pdo->lastInsertId();
            } else {
                return false;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editarRevista($params)
    {
        try {
            $sql = "UPDATE revista SET nombre = ?, enlace = ?, fecreg = ? WHERE idrev = ?";
            $stm = $this->pdo->prepare($sql);
            $stm->bindParam(1, $params[0], PDO::PARAM_STR);
            $stm->bindParam(2, $params[1], PDO::PARAM_STR);
            $stm->bindParam(3, $params[2], PDO::PARAM_STR);
            $stm->bindParam(4, $params[3], PDO::PARAM_INT);
            $res = $stm->execute();
            return $res;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function eliminarRevista($idrev)
    {
        try {
            $sql = "DELETE FROM revista WHERE idrev = ?";
            $stm = $this->pdo->prepare($sql);
            $stm->bindParam(1, $idrev, PDO::PARAM_INT);
            $res = $stm->execute();
            return $res;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getListRevista()
    {
        try {
            $sql = "SELECT * FROM revista ORDER BY fecreg DESC";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $res = array();
            if ($stm->rowCount() > 0) {
                $res = $stm->fetchAll(PDO::FETCH_ASSOC);
            }
            return $res;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
