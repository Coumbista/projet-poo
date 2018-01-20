<?php
namespace location\dao;
use \PDO;
class contra{
    var $idtexte;
    var $texte;
   
    private $bdd;
    private function getConnexion(){
        try{
            if($this->bdd == null){
                $this->bdd = new PDO('mysql:host=;dbname=bdlocation;charset=utf8', 'root', 'azerty',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
            }       
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
//function pour ajouter un nouvaux proprietaire
    function listcontra()
    {
        $this->getConnexion();
        // requete a executer
       $sql = "insert into textctr 
                  values(null, :texte)";
        // preparation de la requete
        $req = $this->bdd->prepare($sql);
        //execution de la requete
        $data = $req->execute(
            array(
                  'texte'=>$this->texte,
                  
        ));
        return $data;
    }


    function allProprietaire()
    {
        $this->getConnexion();
        // requete a executer
       $sql = "SELECT texte from textctr ";
        // preparation de la requete
        $donnees = $this->bdd->query($sql);
        return $donnees;
    }
}