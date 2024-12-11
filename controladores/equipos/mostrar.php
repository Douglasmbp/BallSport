<style>
    .hidden_player {
        display: none;
    }
</style>
<?php
include "../../modelo/conexion.php";
$sql = $conexion->query("SELECT * FROM equipos");
while ($equipo = $sql->fetch_object()) {
    $_SESSION['equipos'] = $equipo ?>
    <tr onclick="mostrarJugadores(<?php echo $equipo->id; ?>)" class="bg-dark text-white">
        <td><?php echo $equipo->nombre ?></td>
        <td><?php echo $equipo->jugadores ?></td>
        <td><?php echo $equipo->fecha ?></td>
        <td><a class="fa-solid fa-pen-to-square" style="color:black;" href=""></a>
            <a class="fa-solid fa-trash" style="color:black;" href="../../controladores/equipos/eliminar.php?id=<?php echo $equipo->id ?>"></a>
        </td>
    </tr>
    <tr id="jugadores-<?php echo $equipo->id; ?>" class="jugadores hidden_player">
        <td colspan="4">
            <?php
            $totaljugadores = $conexion->query("SELECT COUNT(*) FROM players WHERE id_equipo = '$equipo->id'")->fetch_row()[0];
            if ($totaljugadores < $_SESSION['equipos']->jugadores) { ?>
                <div id="form-jugadores-<?php echo $equipo->id; ?>" class="hidden_player">
                    <form method="POST" action="../../controladores/jugadores/registrar.php">
                        <input type="hidden" name="equipo_id" value="<?php echo $equipo->id; ?>">
                        <input type="text" name="nombre" placeholder="Nombre y Apellido" required>
                        <input type="text" name="cedula" placeholder="Cédula" required>
                        <button type="submit" name="agregar_jugador">Agregar Jugador</button>
                    </form>
                </div>
            <?php }
            ?>
            <table class="table players-table">
                <thead>
                    <tr>
                        <th>Nombre del Jugador</th>
                        <th>Cédula</th>
                        <th>Equipo</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $jugadoresSql = $conexion->query("SELECT * FROM players WHERE id_equipo = '$equipo->id'");
                    while ($jugador = $jugadoresSql->fetch_object()) {
                        $_SESSION['jugador'] = $jugador; ?>
                        <tr>
                            <td><?php echo $jugador->nombre; ?></td>
                            <td><?php echo $jugador->cedula; ?></td>
                            <td><?php echo $equipo->nombre; ?></td>
                            <td><?php echo $jugador->fecha; ?></td>
                            <td><a class="fa-solid fa-trash" style="color:black;" href="../../controladores/jugadores/eliminar.php?jugador= <?php echo $equipo->id ?>"></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </td>
    </tr>
<?php   }
?>