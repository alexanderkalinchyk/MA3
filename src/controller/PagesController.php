<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/VoorstellingDAO.php';

class PagesController extends Controller {

    //private $tourDAO;
    private $voorstellingDAO;

    function __construct() {
     //   $this->tourDAO = new TourDAO();
     $this->voorstellingDAO = new VoorstellingDAO();
    }
    public function index(){
        $this->set('title', 'Home');
        $this->set('currentPage', 'home');
        $top_voorstellingen = $this->voorstellingDAO->selectAllTop();
        $this->set('top_voorstellingen', $top_voorstellingen);
    }
    public function details(){
        $this->set('title', 'Praktische Informatie');
        $this->set('currentPage', 'praktisch');
    }

}