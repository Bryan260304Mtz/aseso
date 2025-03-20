$(document).ready(function() {
  // Ocultar formularios de Teacher y Student al cargar
  $('#teacher').hide(); 
  $('#student').hide(); 

  $('#student-tab').click(function() {
      $('#student').show(); // Muestra el formulario de estudiantes
      $('#teacher').hide(); // Oculta el formulario de docentes
      $('#admin').hide(); // Oculta el formulario de admins
  });

  $('#teacher-tab').click(function() {
      $('#teacher').show(); // Muestra el formulario de docentes
      $('#student').hide(); // Oculta el formulario de estudiantes
      $('#admin').hide(); // Oculta el formulario de admins
  });
  
  $('#admin-tab').click(function() {
      $('#admin').show(); // Muestra el formulario de admins
      $('#student').hide(); // Oculta el formulario de estudiantes
      $('#teacher').hide(); // Oculta el formulario de docentes
  });
});
