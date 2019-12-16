<?php
/*
	connect.php (PHP) 

	Objetivo: Conexão com o banco de dados utilizado PDO.

	Programador: Rodolfo A. C. Neves (Dirack) 11/12/2019
*/

//variaveis de  conexão adicionadas

require 'config.php';



			//////////// Conexão com banco de dados //////////////////
			try{

				$pdo= new PDO("mysql:dbname=DB_NAME;host=DB_HOST",DB_USER,DB_PASSWORD);

				//Configurar a conexão para utf8
				$pdo->query("SET NAMES 'utf8'");
				$pdo->query('SET character_set_connection=utf8');
				$pdo->query('SET character_set_client=utf8');
				$pdo->query('SET character_set_results=utf8');

			}catch(PDOException $e){

				echo "ERRO: ".$e->getMessage();
				exit;

			}catch(Exception $erro){
				return $erro->getMessage();
			}

?>
