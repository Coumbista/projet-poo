<?php
// Déclaration du namespace.
   namespace location\dao;
   use \PDO;
     

           // ****************debut class bien*******************

   class Bien{
       var $idbien;
       var $nombien;
       var $adressbien;
       var $montanloc;
       var $commission;
       private $bdd;
       

private function getConnexion(){
try{
 if($this->bdd == null){
     $this->bdd = new PDO('mysql:host=;dbname=bdlocation;charset=utf8', 'root', 'partie',
     array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
 }       
}
catch(Exception $e){
 die('Erreur : ' . $e->getMessage());
}
}  
//debut fonction add
function addBien(){

$this->getConnexion();  

$coumba="insert into bien (idbien,nombien,adressbien,montanloc,commission,idpro,idtype,etatbien )values(null,?,?,?,?,?,?,?)";
$mbow = $this->bdd->prepare($coumba);
$waly = $mbow->execute(
 array($this->nombien   ,
       $this->adressbien,
      $this->montanloc,
       $this->commission,
       $this->nompro,
       $this->nomBien,      
                     
     ));
     return $waly;

    
//fin fonction

//debut fonction find
}
function addpro(){

     $this->getConnexion();  
       
     $coumba="insert into proprietaire (idpro,nompro,numpiece,tel )values(null,?,?,?)";     
     $var = $this->bdd->prepare($coumba);
     $n = $var->execute(
         array($this->nompro,
                $this->numpiece,
                $this->tel
             )); 
             return $n;
     }
     function addtype(){
         $this->getConnexion();  
         $coumba="insert into typebien (idtype,nomBien )values(null,?)";
                
                 $nd= $this->bdd->prepare($coumba);
                 $mama = $nd->execute(array($this->nomBien));   
                   return $mama;  
                
                 }
                 function addcontrat(){
                   $this->getConnexion();  
                   $coumba="insert into contrat (idcontra,datedeb,datefin,montantloc ,montantpro)values(null,?,?,?,?)";
                          
                           $nd= $this->bdd->prepare($coumba);
                           $mama = $nd->execute(array(
                             $this->datedeb,
                             $this->datefin,                            
                             $this->montantpro,
                             20000
                                   ));   
                             return $mama;  
                                 }

function findbien(){

// preparation de la requete
$donnees = $this->bdd->query('select * from bien');
$donnees=$reponse->fetch();
return $donnees;
}


//debut fonction modifier

function updatebien(){
$this->getConnexion();
$sql=$this->bdd->prepare( 'update bien set nombien=:nombien,adressbien=:adressbien,montanbien=:montantbien,commission=:commission,idtype=:typebien');
$sql->execute( array(
 'nombien'=>$this->nombien   ,
 'adressbien'=>$this->adressbien,
 'montantbien'=>$this->montanloc,
 'commission'=>$this->commission,           
 'typebien'=>$this->idtype

));

}
                 
//fin fonction
function listerbien(){
 
      $this->getConnexion();
     // requete a executer
    $sql = ("select * from bien");
     // preparation de la requete
     $donnees = $this->bdd->query($sql);
     return $donnees;
 }

function listerbytypeb(){
 
      $this->getConnexion();
   // preparation de la requete
     $donnees = $this->bdd->query("select nombien,adress,montantloc,commission,idpro where  from bien as b, typebien as t where t.idtypebien = '.$typebien.' and b.idtypebien = '.$typebien") or die(print_r($bdd->errorinfo()));
     return $donnees;
 }

function listerbyetatb(){
 
      $this->getConnexion();
     //  if($donnees['etatbien']==0 || $donnees['etatbien']==1){
   // preparation de la requete
     $donnees = $this->bdd->query("select * from nombien,adressbien,montanbien,commission,idpro,idtype where etatbien==0 or etatbien==1") 
     or die(print_r($this->bdd->errorinfo()));
     return $donnees;
      }
     }
     
// **********************fin class bien*********************

?