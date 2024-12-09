<?php
include "../../../modelo/conexion.php";
$sql = $conexion->query("SELECT * FROM usuarios");
while ($datos = $sql->fetch_object()) { ?>
    <tr>
        <td><?php echo $datos->nombre ?></td>
        <td><?php echo $datos->cedula ?></td>
        <td><?php echo $datos->cargo ?></td>
        <td><?php echo $datos->tipo_usuario ?></td>
        <td><?php echo $datos->usuario ?></td>
        <td><?php echo $datos->fecha ?></td>
        <td><a class="fa-solid fa-pen-to-square" href="index.php?id=<?php echo $datos->id ?>"></a>
            <a class="fa-solid fa-trash" href="../../../controllers/usuarios/delete.php?id=<?php echo $datos->id ?>"></a>
        </td>
    </tr>
<?php   }
?>