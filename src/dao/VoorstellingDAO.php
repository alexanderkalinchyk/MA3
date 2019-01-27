<?php

require_once( __DIR__ . '/DAO.php');

class VoorstellingDAO extends DAO {

  public function search($name, $day, $type1, $type2, $type3, $order){
    $sql = "SELECT * FROM `ma3_voorstellingen` WHERE 1";

    if (!empty($name)) {
      $sql .= " AND `name` LIKE :name";
    }
    if (!empty($day)) {
      $sql .= " AND `day` = :dag";
    }

    $sql .= " AND ( `type` = ''";

    if (!empty($type1)) { $sql .= " OR `type` = :type1"; }
    if (!empty($type2)) { $sql .= " OR `type` = :type2"; }
    if (!empty($type3)) { $sql .= " OR `type` = :type3"; }

    $sql .= ")";

    $sql .= " ORDER BY day ASC, start_hour $order";


    $stmt = $this->pdo->prepare($sql);
    if (!empty($name)) {
      $stmt->bindValue(':name','%'.$name.'%');
    }

    if (!empty($day)) {
      $stmt->bindValue(':dag', $day);
    }

    if (!empty($type1)) { $stmt->bindValue(':type1', $type1); }
    if (!empty($type2)) { $stmt->bindValue(':type2', $type2); }
    if (!empty($type3)) { $stmt->bindValue(':type3', $type3); }


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
    $sql = "SELECT * FROM `ma3_voorstellingen` WHERE `day` = 'Vrijdag' ORDER BY `day`";
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

}