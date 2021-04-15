<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/stylejeu.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

</head>

<body>
    
    
    <?php 
    
    $niveau = $_GET["niveau"];
    $quest = $_GET["quest"];
    $name = $_GET["name"];

    echo('<div class="jeu">');

    Background($niveau);

    echo('</div>');


    $link = new PDO('mysql:host=localhost;dbname=mmidating', 'root', '', array
    (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    // pour le serveur de l'UPEM, remplacer localhost par sqletud.u-pem.fr


    if(isset($_GET["niveau"])){
        $sql = "SELECT prenom FROM prof WHERE id=:niveau";
        // On prépare la requête avant l'envoi :
        $req = $link -> prepare($sql);
        // On exécute la requête en insérant la valeur transmise en GET
        $req -> execute(array(":niveau" => $niveau));
        while($data = $req -> fetch()){

            $prenomprof = $data['prenom'];
            // On affiche chaque résultat sous forme d'un item de la liste
        }
        $req = null;
        // On affiche l'adresse inscrite en évitant une injection de code JS

       }

       if(isset($_GET["quest"])){
        $sql = "SELECT Question FROM question WHERE id=:quest";
        // On prépare la requête avant l'envoi :
        $req = $link -> prepare($sql);
        // On exécute la requête en insérant la valeur transmise en GET
        $req -> execute(array(":quest" => $quest));
        while($data = $req -> fetch()){

            $questionnette = $data['Question'];
            // On affiche chaque résultat sous forme d'un item de la liste
           }
        $req = null;
        // On affiche l'adresse inscrite en évitant une injection de code JS

       }

       if(isset($_GET["quest"])){
        $sql = "SELECT Reponse1 FROM question WHERE id=:quest";
        // On prépare la requête avant l'envoi :
        $req = $link -> prepare($sql);
        // On exécute la requête en insérant la valeur transmise en GET
        $req -> execute(array(":quest" => $quest));
        while($data = $req -> fetch()){

            $ReponseUno = $data['Reponse1'];
            // On affiche chaque résultat sous forme d'un item de la liste
        }
        $req = null;
        // On affiche l'adresse inscrite en évitant une injection de code JS

       }

       if(isset($_GET["quest"])){
        $sql = "SELECT Reponse2 FROM question WHERE id=:quest";
        // On prépare la requête avant l'envoi :
        $req = $link -> prepare($sql);
        // On exécute la requête en insérant la valeur transmise en GET
        $req -> execute(array(":quest" => $quest));
        while($data = $req -> fetch()){

            $ReponseDuo = $data['Reponse2'];
            // On affiche chaque résultat sous forme d'un item de la liste
        }
        $req = null;
        // On affiche l'adresse inscrite en évitant une injection de code JS

       }

       if(isset($_GET["quest"])){
        $sql = "SELECT Reponse3 FROM question WHERE id=:quest";
        // On prépare la requête avant l'envoi :
        $req = $link -> prepare($sql);
        // On exécute la requête en insérant la valeur transmise en GET
        $req -> execute(array(":quest" => $quest));
        while($data = $req -> fetch()){

            $ReponseTrio = $data['Reponse3'];
            // On affiche chaque résultat sous forme d'un item de la liste
        }
        $req = null;
        // On affiche l'adresse inscrite en évitant une injection de code JS

       }


       if(isset($_GET["quest"])){
        $sql = "SELECT idQ_rep1, idQ_rep2, idQ_rep3 FROM question WHERE id=:quest";
        // On prépare la requête avant l'envoi :
        $req = $link -> prepare($sql);
        // On exécute la requête en insérant la valeur transmise en GET
        $req -> execute(array(":quest" => $quest));
        while($data = $req -> fetch()){

            $lien1 = $data['idQ_rep1'];
            $lien2 = $data['idQ_rep2'];
            $lien3 = $data['idQ_rep3'];
            // On affiche chaque résultat sous forme d'un item de la liste
        }
        $req = null;
        // On affiche l'adresse inscrite en évitant une injection de code JS

       }

       


    
    
       echo('
       <div class="prof">
           <img class="imgProf" src="img/ImgJeu/Prof/'.$niveau. '.png" alt="">
       </div>
       <div class="zone-txt">
           <a href="http://localhost/LPDJ_ProjetTut/jeu.php?name=michel&niveau=2&quest='. $lien1 . '#" class="choix1">'. $ReponseUno.'</a>
           <a href="http://localhost/LPDJ_ProjetTut/jeu.php?name=michel&niveau=2&quest='. $lien2 . '#" class="choix1">'. $ReponseDuo.'</a>
           <a href="http://localhost/LPDJ_ProjetTut/jeu.php?name=michel&niveau=2&quest='. $lien3 . '#" class="choix1">'. $ReponseTrio.'</a>
       </div>
       <div class="dialogue">
           <h1>'.$prenomprof.'</h1>
           <h2>' .$questionnette. '</h2>'
           
   
           
       );
      
   
   
       echo('     
       </div>
       </div>');

    function Background($niveau){
          echo(' <img src="img/ImgJeu/Background/'.$niveau.'.jpg" class="bg blured">');
    }

    

      ?>

    
        
        
            

       
</body>

</html>