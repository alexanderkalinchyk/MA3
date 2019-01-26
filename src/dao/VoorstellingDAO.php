<?php

require_once( __DIR__ . '/DAO.php');

class VoorstellingDAO extends DAO {

  public function search($max=10, $name = '', $nationality = ''){
    $sql = "SELECT * FROM `players` WHERE 1";

    if (!empty($name)) {
      $sql .= " AND `Name` LIKE :name";
    }
    if (!empty($nationality)) {
      $sql .= " AND `Nationality` = :nationality";
    }

    $sql .= " ORDER BY `Overall` DESC LIMIT :max";

    $stmt = $this->pdo->prepare($sql);
    if (!empty($name)) {
      $stmt->bindValue(':name','%'.$name.'%');
    }
    if (!empty($nationality)) {
      $stmt->bindValue(':nationality', $nationality);
    }
    $stmt->bindValue(':max', $max);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllCountries() {
    $sql = "SELECT DISTINCT `Nationality` FROM `players` ORDER BY `Nationality` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function selectAllTop() {
    $sql = "SELECT * FROM `ma3_top_voorstellingen`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function selectAllShows() {
    $sql = "SELECT * FROM `ma3_voorstellingen` ORDER BY `day`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function selectOthers() {
    $sql = "SELECT * FROM ma3_voorstellingen ORDER BY RAND() LIMIT 3";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function selectDetailsById($id){
    $sql = "SELECT * FROM `ma3_voorstellingen` WHERE `Id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  public function selectById($id){
    $sql = "SELECT * FROM `players` WHERE `Id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }


}