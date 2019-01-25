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

}