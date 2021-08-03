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
    <div class="row mt-4">
        <div class="col-sm-12 text-center">
            <br>
            <h1 class="text-light">Mis gustos son: </h1>
        </div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h3 class="text-light">
            Me gusta mucho escuchar musica mientras realizo alguna actividad. 
            En especial me gusta escuchar rap
            </h3>
            
        </div>
        <div class="col"></div>
    </div>
    <div class="row mt-5">
        <div class="col"></div>
        <div class="col">
            <p class="text-light">Mi artista favorito es: Charles Ans </p>
            <img src="img/charles.jpg" alt="" height="500xp" width="400xp">
        </div>
        <div class="col"></div>
    </div>
    <div class="row mt-5">
        <div class="col"></div>
        <div class="col">
            <p class="text-light">Un pasatiempo es jugar Halo 5. Bueno cada vez que tengo tiempo :( </p>
            <img src="img/halo.jpg" alt="" height="500xp" width="500xp">
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