<?php include './header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1>Agregar auto</h1>
            <form action="./conexion/agregar.php" method="post">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control">
                <label for="color">Color</label>
                <input type="text" name="color" id="color" class="form-control">
                <button class="btn btn-primary mt-4">
                    Agregar auto
                </button>
            </form>
        </div>
    </div>
</div>


<?php include './footer.php' ?>