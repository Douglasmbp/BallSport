function mostrarJugadores(equipoId) {
  const jugadoresFila = document.getElementById("jugadores-" + equipoId);
  const formJugadores = document.getElementById("form-jugadores-" + equipoId);
  if (jugadoresFila.classList.contains("hidden_player")) {
    // Ocultar todos los formularios y tablas de jugadores
    document
      .querySelectorAll(".jugadores")
      .forEach((el) => el.classList.add("hidden_player"));
    document
      .querySelectorAll(".add-player-form")
      .forEach((el) => el.classList.add("hidden_player"));
    // Mostrar la tabla y formulario del equipo seleccionado
    jugadoresFila.classList.remove("hidden_player");
    formJugadores.classList.remove("hidden_player");
  } else {
    // Ocultar la tabla y formulario si ya están visibles
    jugadoresFila.classList.add("hidden_player");
    formJugadores.classList.add("hidden_player");
  }
}
