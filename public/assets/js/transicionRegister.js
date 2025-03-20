$(document).ready(function() {
  $('#Teacher').hide(); // Oculta el formulario de docentes al cargar

  $('#Student-tab').click(function() {
      $('#Student').show(); // Muestra el formulario de alumnos
      $('#Teacher').hide(); // Oculta el formulario de docentes
  });

  $('#Teacher-tab').click(function() {
      $('#Teacher').show(); // Muestra el formulario de docentes
      $('#Student').hide(); // Oculta el formulario de alumnos
  });
});
