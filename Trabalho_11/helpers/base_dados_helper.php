<?php

$base_dados = [
  "host" => "localhost",
  "dbname" => "trabalho_11",
  "user" => "root",
  "pass" => "",
];

$pdo = null;

function get_pdo() {
  global $pdo, $base_dados;
  if ($pdo === null) {
    try {
      $pdo = new PDO("mysql:host=$base_dados[host];dbname=$base_dados[dbname];charset=utf8mb4;", $base_dados["user"], $base_dados["pass"]);
    } catch (PDOException $e) {
      throw new Exception("Erro de conexão com a base de dados: " . $e->getMessage());
    }
  }
  return $pdo;
}

function select_sql($sql){
  try {
    $pdo = get_pdo();
    $consulta = $pdo->query($sql);
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
  } catch (Exception $e) {
    return [];
  }
}

function select_sql_unico($sql){
  try {
    $pdo = get_pdo();
    $consulta = $pdo->query($sql);
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    return $resultado;
  } catch (Exception $e) {
    return null;
  }
}

function idu_sql($sql){
  try {
    $pdo = get_pdo();
    $consulta = $pdo->query($sql);
    return true;
  } catch (Exception $e) {
    return false;
  }
}

?>