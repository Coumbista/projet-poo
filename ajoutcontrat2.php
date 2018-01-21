<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap0.css">
    <link rel="stylesheet" href="page/css/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="formulaire.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <title>contrat</title>
</head>
<body >

<div class="row" id="contain" style="margin-left: 250px;">
<!-- ***** -->
<form action="POST" method="post">
<div class="card"  id="id1" >
    <div class="card-header">
        <h4 class="card-title"><h2 style="font-style: italic;color:blue;text-align:center;">Page des proprietaire</h2></h4>
       
    </div>
    <div class="card-body">
    <label style="font-style: italic;color:blue;">Numero de pièce</label>
      <input  name="numpiece" type="text" class="form-control" placeholder="Entrez votre nom"  style="width: 800px;" data-champ="login"/>
      </input>
      <label style="font-style: italic;color:blue;">Nom proprietaire</label>
      <input  name="nompro" type="text" class="form-control" placeholder="Entrez votre nom"  style="width: 800px;" data-champ="login"/>
      </input>
      <label style="font-style: italic;color:blue;">Telephone</label>
      <input  name="tel" type="text" class="form-control" placeholder="Entrez votre nom"  style="width: 800px;" data-champ="login"/>
      </input>
      <input name="submit" id="submit" type="submit" value="enregistrer" class="btn btn-primary" >
      <button type="button" class="btn btn-info btn-lg" >continuer</button>
    </div>
    </from>
</div>
  <!-- **** -->

 <div class="card-block">
 
 <div class="card" id="id1" style="">
 <form  method="post" id="form2">
              <div class="card-header">
        <h4 class="card-title"><h2 style="font-style: italic;color:blue;text-align:center;">Page des biens</h2></h4>
               </div>

  

                          <div class="card-body">
                          <label style="font-style: italic;color:blue;">Nom du bien</label>
      <input  name="nombien" type="text" class="form-control" placeholder="Entrez votre nom"  style="width: 800px;" data-champ="login"/>
      </input>
                          <label style="font-style: italic;color:blue;">Adresse</label>
      <input  name="adressebien" type="text" class="form-control" placeholder="Entrez votre adresse"  style="width: 800px;" data-champ="login"/>
      </input>
                          <label style="font-style: italic;color:blue;">Montant du bien</label>
      <input  name="montanloc" type="text" class="form-control" placeholder="Entrez votre montant"  style="width: 800px;" data-champ="login"/>
      </input>
                          <label style="font-style: italic;color:blue;">Commission</label>
      <input  name="commission" type="text" class="form-control" placeholder="Entrez votre commission"  style="width: 800px;" data-champ="login"/>
      </input>
                                </div>
   
    <input name="submit" id="submit" type="submit" value="enregistrer" class="btn btn-primary" >
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">continuer</button>
                                  </div>


       </div><br><br>
       </form>
      
 </div><br><br>

     <!-- popup -->
     <div class="card-block">
     <div class="card"  id="id2">
     <form method="post" id="form2">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Formulaire de contrat</h4>
        </div>
        <div class="modal-body">
   
                        <div class="card-header">
        <h4 class="card-title"><h2 style="font-style: italic;color:blue;text-align:center;">bienvenue sur ma page d'inscription</h2></h4>
                        </div>
                 <div class="card-body">
                 	 	 	
                          <div class="form-group">
      <label  style="font-style: italic;color:blue;">date debut signature</label>
      <input type="text" class="form-control"  name="datedeb" placeholder="Entrez la date debut"  style="width: 450px;">
                           </div>
                       <div class="form-group">
      <label style="font-style: italic;color:blue;">date fin signature</label>
      <input type="text" class="form-control"  name="datefin" placeholder="Entrez la date fin"  style="width: 450px;">
                           </div>
                         <div class="form-group">
      <label style="font-style: italic;color:blue;">Montant voulu</label>
      <input type="text" class="form-control"     name="montantpro" placeholder="Entrez le montant voulu"  style="width: 450px;">
                         </div>
                          <div class="form-group">
      <label style="font-style: italic;color:blue;">Montant location</label>
      <input type="password" class="form-control"  name="montantloc" placeholder="Entrez le montant de location"  style="width: 450px;">
                           </div>
                           <div class="form-group">
                           <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
                           
                           <input type="radio" name="radio" id="r1">accepter
                           <input type="radio" name="radio" id="r2">refuser
                           </div>
                           <script src="ajoutcontrat2.js">

                         
                           </script>
          <input id="submit" type="submit" value="accepter" class="btn btn-primary  send" >

</script>

                         </div><br><br>
                         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  </div><br><br>
    
     </div>
    
</div>
</body>
</html>
