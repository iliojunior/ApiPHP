<?php

class Conexao
{

    private static $conexao = NULL;

    private static $DB_HOST = "192.168.200.49";
    private static $DB_NAME = "iic_guaicuru";
    private static $DB_USER = "root";
    private static $DB_PASS = "1ng@1nf11sql";

    public static function getInstance()
    {
        return self::connect();
    }

    private static function connect()
    {
        if (self::$conexao === NULL) {

            try {

                self::$conexao = new PDO('mysql:host=' . self::$DB_HOST . ';dbname=' . self::$DB_NAME . ';charset=utf8', self::$DB_USER, self::$DB_PASS);
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                if (!self::$conexao) {
                    echo "Houve um erro ao efetuar a conexao!";
                }

            } catch (PDOException $e) {

                die ("Nao foi possivel conectar ao banco de dados! " . $e->getMessage());
            }

        }

        return self::$conexao;
    }

    public static function reconnect()
    {
        self::disconnect();
        return self::connect();
    }

    public static function disconnect()
    {
        self::$conexao = NULL;
    }

}

?>