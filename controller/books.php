<?php
session_start();
        $pageTitle = "Silence on lit";
        $pageSubTitle = "Dura lex sed lex, la loi est dure mais c'est la loi";


        $buttonList=[["label"=>"Accueil", "url"=>"../controller/home.php"],
                    ["label"=>"bibliothèque", "url"=>"../controller/books.php"]];
                    
        require_once("../view/booksView.php");

      