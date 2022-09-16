<?php
// (A) DATABASE SETTINGS - CHANGE TO YOUR OWN !
define("DB_HOST" , "localhost");
define("DB_NAME" , "test");
define("DB_CHARSET" , "utf8");
define("DB_USER" , "root");
define("DB_PASSWORD" , "");

// (B) CONNECT TO DATABASE
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";charset=" . DB_CHARSET . ";dbname=" . DB_NAME,
        DB_USER, DB_PASSWORD, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
        ]
      );
    } catch (Exception $ex) { exit($ex->getMessage()); }
    
    // (C) GET PRODUCTS
    $stmt = $pdo->prepare("SELECT * FROM `products`");
    $stmt->execute();
    $products = $stmt->fetchAll();
    
    class Products {
        function get ($id) {
          // SELECT * FROM `products` WHERE `id`= $ID
        }
       
        function add ($name, $desc) {
          // INSERT INTO `products` (... FIELDS ...)
        }
       
        function delete ($id) {
          // DELETE FROM `products` WHERE `id` = $ID
        }
      }