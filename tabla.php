<?php
    $conexion = conexion();
    $sql = "SELECT * FROM t_autos";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-hover table-bordered mt-4">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php while($ver = mysqli_fetch_array($respuesta)){?>
            <tr>
                <td> <?php echo $ver['nombre']; ?> </td>
                <td> <?php echo $ver['marca']; ?> </td>
                <td> <?php echo $ver['modelo']; ?> </td>
                <td> <?php echo $ver['color']; ?> </td>
                <td>
                <a href="./actualizar.php?id=<?php echo $ver['id']; ?>" 
                class="btn btn-warning btn-sm">
                    Editar
                </a>
                </td>
                <td>
                    <a href="./conexion/eliminar.php?id=<?php echo $ver['id']; ?>" 
                    class="btn btn-danger btn-sm">
                    Eliminar
                </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>