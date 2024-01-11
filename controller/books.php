<?php
session_start();

if(!isset($_SESSION["nom"])){
        header('location: ../controller/home.php');
}
        require_once('../model/model.php');
        $bookBDD = connectDB();
        $bookList=getALLbooks($bookBDD);
        

        $pageTitle = "Silence on lit";
        $pageSubTitle = "Dura lex sed lex, la loi est dure mais c'est la loi";


        $buttonList=[["label"=>"Accueil", "url"=>"../controller/home.php"],
                    ["label"=>"bibliothèque", "url"=>"../controller/books.php"]];


        if(isset($_SESSION["nom"])) {
                $buttonList[]=["label"=>"déco toi", "url"=>"../controller/logout.php"];
        }
                    
        require_once("../view/booksView.php");
        ?>
        
        

      