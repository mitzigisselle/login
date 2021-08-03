<?php
session_start();
if (isset($_SESSION['usuario'])) {

?>

<?php include 'header.php';?>
<div class="container" >
    <div class="row mt-4">
        <div class="col">
            <?php include 'menu.php';?>
        </div>
    </div>
    <div class="row mt-5">
        
        <div class="col">
        <h1 class="text-light">¿Por que estoy estudiando Sistemas Computacionales?</h1>
        <hr>
        <p class="text-light">Pues practicamente cuando estuve en el cetis estudie informatica. De ahi deje de estudiar por un tiempo, asi que cuando decidi volver a estudiar pues dije: 
            "En San }juan hay un tecnologico asi que me queda cerca y de las carreras que ofrece conozco un poco mas sobre sistemas, asi que escojeré esa carreea"<div class=""></div>
        </p>
        </div>
        <
    </div>
    <div class="row mt-5">
        <div class="col"></div>
        <div class="col">
            <img src="img/sistemas.jpg" alt="" height="500xp" width="700xp">
        </div>
        <div class="col"></div>
    </div>
    
</div>

<?php include 'footer.php';?>
<?php
}else {
    header("location:../index.php");
}
?>