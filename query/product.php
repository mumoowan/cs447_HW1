<?php
	require "dbConfig/database.php";

	class Product {
		private $pdo;

		function __construct() {
			$database = new Database();
			$this->pdo = $database->connect();
		}

		function readProduct() {
			$query = $this->pdo->prepare('SELECT * FROM product');
			$query->execute();

			return $query;
		}

		function deleteProduct($name) {
			$query = $this->pdo->prepare('DELETE FROM product WHERE name=:name');
			$query->bindValue(":name", $name);
			$query->execute();
			return $query;
		}

		function addProduct($name, $price, $detail, $amount, $imageurl) {
			$query = $this->pdo->prepare('INSERT INTO product(
				name, price, detail, amount, imageurl) VALUES (
            	:name, :price, :detail, :amount, :imageurl)');

			$query->bindValue(":name", $name);
			$query->bindValue(":price", $price);
			$query->bindValue(":detail", $detail);
			$query->bindValue(":amount", $amount);
			$query->bindValue(":imageurl", $imageurl);

			$query->execute();

			return $query;
		}
	}
?>