<?php

function register() {
    echo var_dump($_POST);
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];
    createProduct($name, $description, $price, $amount);
}

//Cria tabela caso ela não exista
function createTable($db, $dbUser, $dbPass){
    $query = $db->query("CREATE TABLE IF NOT EXISTS Product(
        id_prod INT AUTO_INCREMENT,
        prod_name varchar(100) NOT NULL,
        prod_description varchar(100),
        prod_price varchar(100) NOT NULL,
        prod_amount varchar(100) NOT NULL,
        CONSTRAINT pk_id_prod PRIMARY KEY(id_prod)
    )");
    echo var_dump($query);

    $db = null;
    $query = null;
}

function createProduct($name, $description, $price, $amount) {
    $dbUser = "root";
    $dbPass = "1234";
    try{
        $db = new PDO("mysql:host=localhost;dbname=shop", $dbUser, $dbPass);   
        //Cria tabela
        createTable($db, $dbUser, $dbPass);    
        //Insere registro
        $sql ="INSERT INTO Product(prod_name, prod_description, prod_price, prod_amount) values(?, ?, ?, ?)";
        $query = $db->prepare($sql);
        $query -> execute([$name, $description, $price, $amount]);

        $db = null;
        $query = null;

    } catch(PDOExeption $e) {
        print_r($e);
    }
}

register();