<?php
    include "../../modelo/conexion.php";
        $sql = $conexion->query("SELECT * FROM equipos");
            while ($datos=$sql->fetch_object()) {?>
            <a href="#">
                <tr>
                    <td><?php echo $datos->nombre?></td>
                    <td><?php echo $datos->jugadores?></td>
                    <td><?php echo $datos->fecha?></td>
                    <td><a  class="fa-solid fa-pen-to-square" style="color:black;" href="#?id=<?php echo $datos->id?>"></a>
                        <a class="fa-solid fa-trash" style="color:black;" href="../../controladores/equipos/eliminar.php?id=<?php echo $datos->id?>"></a>
                    </td>
                </tr>
            </a>
    <?php   }
 ?>