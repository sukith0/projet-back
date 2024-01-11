<header>

<div id="headerTitle">
<h1><?php echo $pageTitle ?></h1>
<h2><?php echo $pageSubTitle ?></h2>
</div>







</header>

<?php
    if(isset($_SESSION["nom"])){
  ?> <h2>Bonjour <?php echo $_SESSION["nom"]?></h2>
    
    <?php
       } else {
    ?>
<form method="post" action="../controller/home.php">
    <input name="nom" type="text">
    <input type="submit" value="votre nom">
</form>
<?php
       }
       ?>


