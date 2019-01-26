<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/VoorstellingDAO.php';

class VoorstellingenController extends Controller {

    //private $tourDAO;
    private $voorstellingDAO;

    function __construct() {
     //   $this->tourDAO = new TourDAO();
     $this->voorstellingDAO = new VoorstellingDAO();
    }
    public function voorstellingen(){

        $this->set('title', 'Voorstellingen');
        $this->set('currentPage', 'voorstellingen');

        $shows = $this->voorstellingDAO->selectAllShows();
        $this->set('shows', $shows);
    }
    public function details(){
         $this->set('currentPage', 'details');

         if (!empty($_GET['id'])) {
          $detail = $this->voorstellingDAO->selectDetailsById($_GET['id']);
          $this->set('detail', $detail);

          $others = $this->voorstellingDAO->selectOthers();
          $this->set('others', $others);

          $this->set('title', strtoupper ($detail['name']));
         }

     }

}