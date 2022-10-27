<?php include './conexion/conexion.php' ?>
<?php include './header.php' ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-4">Crud Autos</h1>
            <a href="./agregar.php" class="btn btn-primary">
                Agregar auto
            </a>
            <?php include './tabla.php' ?>
        </div>
    </div>
</div>





<?php include './footer.php' ?>