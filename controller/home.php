<?php
session_start();
   /*    $prenom="Fukith";
       $nom="1er vu nom";
       $age=22;

       $displaytext="Falut falut mon p'tit $prenom <br>Bonne foirée mon enflure";
*/
if(isset($_POST["nom"])){
    $_SESSION["nom"]=$_POST["nom"];
}

        $pageTitle="Silence on lit";
        $pageSubTitle="Bonne lecture mon zami";
        
        $buttonList=[["label"=>"Accueil", "url"=>"../controller/home.php"],
                    ["label"=>"bibliothèque", "url"=>"../controller/books.php"]];

                    if(isset($_SESSION["nom"])) {
                        $buttonList[]=["label"=>"déco toi", "url"=>"../controller/logout.php"];
                }

                    require_once('../view/homeView.php');

        
       /*$color;

        if($age>30) {
            $color="red";
        }else{ 
            $color="pink";
        }*/
    
    ?>
    

