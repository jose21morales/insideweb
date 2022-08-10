<?php

class User {
  private $users;

  public function __construct() {
    $this->users = [];
  }

  public function getUser($mail) {
    require_once("conexion.php");
    $conexion = Conectar::conexion();

    $sql = "SELECT * FROM users WHERE user = :mail OR mail = :mail";
    $statements = $conexion->prepare($sql);
    $statements->bindValue(":mail", $mail);
    $statements->execute();

    while ($row = $statements->fetch(PDO::FETCH_ASSOC)) {
      $this->users[] = $row;
    }
    return $this->users;
  }
}

?>
