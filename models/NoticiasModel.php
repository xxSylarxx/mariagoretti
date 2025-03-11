<?php

class NoticiasModel extends Conexion
{

    private $pdo;
    private $total = 0;

    public function __construct()
    {
        $this->pdo = parent::connect();
    }

    public function guardarNoticia($params)
    {
        try {
            $sql = "INSERT INTO noticias (idcat, titulo, tagname, portada, detalle, cuerpo, fecpub) VALUES (?,?,?,?,?,?,?)";
            $stm = $this->pdo->prepare($sql);
            $res = $stm->execute($params);
            return $res;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editarNoticia($params)
    {
        try {
            $sql = "UPDATE noticias SET idcat = ?, titulo = ?, tagname = ?, portada = ?, detalle = ?, cuerpo = ?, fecpub = ? WHERE idnot = ?";
            $stm = $this->pdo->prepare($sql);
            $res = $stm->execute($params);
            return $res;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function eliminarNoticia($id)
    {
        try {
            $sql = "DELETE FROM noticias WHERE idnot = ?";
            $stm = $this->pdo->prepare($sql);
            $stm->bindParam(1, $id, PDO::PARAM_INT);
            $res = $stm->execute();
            return $res;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function listarCategorias()
    {
        try {
            $sql = "SELECT * FROM categoria ORDER BY idcat ASC";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $res = $stm->fetchAll(PDO::FETCH_UNIQUE | PDO::FETCH_ASSOC);
            return $res;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function buscarNoticia($id)
    {
        try {
            $sql = "SELECT * FROM noticias WHERE idnot = ?";
            $stm = $this->pdo->prepare($sql);
            $stm->bindParam(1, $id, PDO::PARAM_INT);
            $stm->execute();
            $res = $stm->fetchAll(PDO::FETCH_ASSOC)[0];
            return $res;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function buscarNoticiaxTag($tagname)
    {
        try {
            $sql = "SELECT idnot, titulo, tagname, idcat as categoria, fecpub, cuerpo FROM noticias WHERE tagname = ?";
            $stm = $this->pdo->prepare($sql);
            $stm->bindParam(1, $tagname, PDO::PARAM_STR);
            $stm->execute();
            $res = array();
            if ($stm->rowCount() > 0) {
                $res = $stm->fetchAll(PDO::FETCH_ASSOC)[0];
            }
            return $res;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function listarNoticias($ini, $catg)
    {
        try {
            $sql = "SELECT (SELECT COUNT(*) FROM noticias WHERE idcat LIKE '%$catg') as total, n.idnot, n.titulo, n.tagname, n.idcat, UPPER(c.nombre) as catname, n.portada, n.fecpub, n.visible FROM noticias n INNER JOIN categoria c ON n.idcat = c.idcat WHERE n.idcat LIKE '%$catg' ORDER BY fecpub DESC LIMIT 12 OFFSET $ini;";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $res = $stm->fetchAll(PDO::FETCH_ASSOC);
            if ($stm->rowCount() > 0) {
                $this->total = $res[0]['total'];
            }
            return $res;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function listNoticiasWeb($ini, $limit, $catg)
    {
        try {
            $sql = "SELECT (SELECT COUNT(*) FROM noticias WHERE idcat LIKE '%$catg' AND n.fecpub <= NOW() AND n.visible = 'S') as total, n.idnot, n.titulo, n.tagname, n.idcat, n.portada, n.detalle, n.fecpub, n.visible FROM noticias n INNER JOIN categoria c ON n.idcat = c.idcat WHERE n.idcat LIKE '%$catg' AND n.fecpub <= NOW() AND n.visible = 'S' ORDER BY fecpub DESC LIMIT $limit OFFSET $ini";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $res = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function cambiarEstado($id, $estado)
    {
        try {
            $sql = "UPDATE noticias SET visible = ? WHERE idnot = ?";
            $stm = $this->pdo->prepare($sql);
            $stm->bindParam(1, $estado, PDO::PARAM_STR);
            $stm->bindParam(2, $id, PDO::PARAM_INT);
            $res = $stm->execute();
            return $res;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function totalRows()
    {
        return $this->total;
    }
}
