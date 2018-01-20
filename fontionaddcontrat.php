<?php 
	
	class contrat{

        private $_id;
        private $_datedebutsignature;
        private $_datefinsignature;
        private $_montantvoulu;
        private $_montantlocation;
        private $_idproprietaire;


        // constructeur de la classe

        public function __construct($id, $datedebutsignature, $datefinsignature, $montantvoulu, $montantlocation,$idproprietaire ){
            $this->_id = $id;
            $this->_datedebutsignature = $datedebutsignature;;
            $this->_datefinsignature =$datefinsignature;
            $this->_montantvoulu = $montantvoulu;
            $this->_montantlocation = $montantlocation;
            $this->_idproprietaire = $idproprietaire;


        }

        private function getConnexion(){
            $db = new PDO('mysql:host=localhost;dbname=BDLocation', 'root', 'passer');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }

        //methode add contrat.

        public function add(){
            $this->getConnexion();
            $sql = $db-> prepare("INSERT INTO contrat VALUES (null, :datedebutsignature, :datefinsignature, :montantvoulu, :montantlocation, :idproprietaire)");
            $sql -> execute(array(
                'datedebutsignature' => $this->_datedebutsignature,
                'datefinsignature' => $this->_datefinsignature,
                'montantvoulu' => $this->_montantvoulu,
                'montantlocation' => $this->_montantlocation,
                'idproprietaire' =>$this->_idproprietaire,
            ));
        }

    }
        
  ?>