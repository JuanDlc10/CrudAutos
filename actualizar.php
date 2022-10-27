<?php 
    include './conexion/conexion.php';
    $conexion = conexion();
    $id = $_GET['id'];
    $sql = "SELECT * FROM t_autos WHERE id = '$id'";
    $respuesta = mysqli_query($conexion,$sql);
    $item = mysqli_fetch_array($respuesta);

?>
<?php include './header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar auto</h1>
            <form action="./conexion/actualizar.php" method="post">
                <input type="text" hidden name="id" value="<?php echo $item['id'];?>">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control"
                value="<?php echo $item['nombre'];?>">
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control"
                value="<?php echo $item['marca'];?>">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control"
                value="<?php echo $item['modelo'];?>">
                <label for="color">Color</label>
                <input type="text" name="color" id="color" class="form-control"
                value="<?php echo $item['color'];?>">
                <button class="btn btn-primary mt-4">
                    Actualizar auto
                </button>
            </form>
        </div>
    </div>
</div>


<?php include './footer.php' ?>