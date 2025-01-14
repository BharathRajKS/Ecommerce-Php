<?php

class Database
{
    public $db;

    public function __construct()
    {
        try {
            $this->db = new PDO(
                'mysql:host=127.0.0.1;dbname=Ecommerce',
                'dckap',
                'Dckap2023Ecommerce'
            );

        } 
        catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    

    public function query($query)
    {
        $statement = $this->db->prepare($query);
        $statement->execute();
        return $statement;
    }

}