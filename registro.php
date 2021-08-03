<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h4 class="text-light">Registro de usuario </h4>
            <hr>
            <form action="servidor/registros.php" method="POST">
                <label for="nombre" class="text-light">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" require>
                <label for="apellidoPaterno" class="text-light">Apellido Paterno</label>
                <input type="text" name="apellidoPaterno" class="form-control" id="apellidoPaterno" require>
                <label for="apellidoMaterno" class="text-light">Apellido Materno</label>
                <input type="text" name="apellidoMaterno" class="form-control" id="apellidoMaterno" require>
                <label for="sexo" class="text-light">Sexo</label>
                <select name="sexo" id="sexo" required class="form-control">
                    <option value="mujer">Mujer</option>
                    <option value="hombre">Hombre</option>
                </select>
                <label for="telefono" class="text-light">Telefono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" require>
                <label for="email" class="text-light">Email</label>
                <input type="email" name="email" class="form-control" id="email" require>
                <label for="usuario" class="text-light">Usuario</label>
                <input type="text" name="usuario" class="form-control" id="usuario" require  >
                <label for="password" class="text-light">Password</label>
                <input type="password" name="password" class="form-control" id="password" require  >
                <br>
                <button class="btn btn-primary">Registro</button>
                <a href="index.php" class="btn btn-success">Login</a>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<?php include 'footer.php'; ?>