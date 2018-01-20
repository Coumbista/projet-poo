<!DOCTYPE html>
<html lang="en">
    <head>
        <title>formulaire types de bien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    </head>
    <body>
    <form action="#" method="post" border-radius="2" >
    
</form>

<table border="3"  style="font-family: system-ui;">
    <tr>
       
        <th>nomtexte</th>
    </tr>
    <?php
        include ('ctr.php');

        $util = new location\dao\contra();
        $data = $util->allProprietaire();
        while($row = $data->fetch()){
    ?>
            <tr>
              
                <th><?php echo $row['texte']?></th>
            </tr>
    <?php
        }
    ?>
    </table>

    </body>
</html>