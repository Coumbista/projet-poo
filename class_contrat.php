<?php
namespace gestion\location;
use \PDO;
    //création de la class contrat//
class Contrat{
var $idcontra ;
var $datedeb;
var $datefin;
var $montantpro;
var $montantloc;


private $bdd;

    private function getConnexion(){
        try{
            if($this->bdd == null){
                $this->bdd = new PDO('mysql:host=;dbname=BDlocation;charset=utf8', 'root', 'passer',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
    public function adduser()
        {
            $this->getConnexion();
            $sql = "insert into contrat(idcontra,datedeb,datefin,montantpro,montantloc)
                           VALUES(null,?,?,?,?,?)";
            $req = $this->bdd->prepare($sql);
            $data = $req->execute(array(
               $this->datedeb,
               $this->datefin,
                $this->montantpro,
                $this->montantloc,
                -1
            ));
            return $data;
        }
        public function listUser()
        {
            $this->getConnexion();
            $sql = "SELECT * FROM contrat";
            $donnees = $this->bdd->query($sql);
            return $donnees;
        }


    }
       
    
   
    ?>