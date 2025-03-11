<?php

class ModalModel extends Conexion
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = parent::connect();
    }

    public function actualizarModal($params)
    {
        try {
            $sql = "UPDATE ventmodal SET titulo = ?, cuerpo = ?, visible = ? WHERE idmod = 1";
            $stm = $this->pdo->prepare($sql);
            $res = $stm->execute($params);
            return $res;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function obtenerDataModal()
    {
        try {
            $sql = "SELECT * FROM ventmodal LIMIT 1";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $res = $stm->fetchAll(PDO::FETCH_ASSOC)[0];
            return $res;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
