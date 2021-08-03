<?php include 'header.php';?>

<div class="container" >
    <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden" style="background:transparent !important" >
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body p-4 p-sm-5" >
                    <h1 class="card-title text-center mb-5 fw-light fs-5 text-light">Login</h1>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                        <img src="img/usu.png" alt="" style="width:200px; heignt: 100px" >
                        </div>
                        <div class="col"></div>
                    </div>
                    
                    <form action="servidor/loginUsuario.php" method="POST">
                        <div class="form-floating mb-3">
                            <label for="usuario" class="text-light">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="username"
                                required  autocomplete="off">
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                        <label for="password" class="text-light">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                            required  autocomplete="off">
                            
                        </div>
                        <div class="d-grid mb-2">
                            <button class="btn btn-primary">Entrar</button>
                            <a href="registro.php" class="btn btn-success">Registro</a>
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>