<?php

class LoginModel extends Conexion
{

    private $pdo;

    public function __construct()
    {
        $this->pdo = parent::connect();
    }

    public function validarAcceso($name, $pass)
    {
        $hashpass = $this->validarUsuario($name);
        if (empty($hashpass)) {
            return "Error:: El nombre de usuario no esta registrado";
        } else if (!$this->validarPassword($pass, $hashpass)) {
            return "Error:: La contraseña no es la correcta";
        } else {
            return "OK";
        }
    }

    private function validarUsuario($name)
    {
        try {
            $sql = "SELECT * FROM usuario WHERE nombre = ?";
            $stm = $this->pdo->prepare($sql);
            $stm->bindParam(1, $name, PDO::PARAM_STR);
            $stm->execute();
            $res = $stm->fetchAll(PDO::FETCH_ASSOC);
            return !empty($res) ? $res[0]['pass'] : null;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    private function validarPassword($pass, $hash)
    {
        return password_verify($pass, $hash);
    }
}
