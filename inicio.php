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
        <div class="col text-center">
            <br>
            <h2 class="text-light">Bienvenido <?php echo $_SESSION['usuario']; ?></h2>
        </div>
        
    </div>
    <div class="row mt-5">
        <div class="col"></div>
        <div class="col">
            <p class="text-light">Aqui encontraras información acerca de mi ;)</p>
            
        </div>
        <div class="col"></div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <img src="img/mario.jpg" alt="" style="width:500px; heignt: 400px">
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