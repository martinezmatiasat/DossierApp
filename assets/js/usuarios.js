$(document).ready(initEvents);

function initEvents() {
   if ($('.nav-item a').hasClass('active')) $('.nav-item a').removeClass('active');
   $('#menuUsuarios').addClass('active');

   $('#formEditarUsuario').on('submit', validateForm);
   $('.btnEliminar').on('click', confirmarEliminar);
}

function validateForm(event) {
   event.preventDefault();
   if ($('#nombres').val() === '' || $('#apellidos').val() === '' || $('#dni').val() === '' || $('#email').val() === '') {
      toastr["error"]('Los campos señalados son obligatorios');
      return;
   }
   this.submit();
   return;
}

function confirmarEliminar(event) {
   let opcion = confirm("¿Realmente desea eliminar este usuario?");
   if (opcion == false) {
      event.preventDefault();
   }
   return;
}

function mostrarAlertas() {
   $('.alert').hide();
         var type = $('.alert span').attr('class');
         var msg = $('.alert span').val();
         toastr['error']('mensaje de prueba');
         return;
}

/*
function initEvents() {
   $('#formAgregarUsuario').hide();
   $('#formEditarUsuario').hide();
   $('.btnAgregar').on('click', mostrarAgregar);
   $('.btnEditar').on('click', mostrarEditar);
   $('.btnEliminar').on('click', eliminarUsuario);
}

function mostrarAgregar() {
   $('#formAgregarUsuario').show();
   $('#divUsuarios').hide();
   $('.btnAgregar').hide();
   $('#formAgregarUsuario').on('submit', agregarUsuario);
   $('.btnCancelar').on('click', mostrarUsuarios);
}

function mostrarUsuarios() {
   $('#formAgregarUsuario').hide();
   $('#formEditarUsuario').hide();
   $('#divUsuarios').show();
   $('.btnAgregar').show();
}

function mostrarEditar(event) {
   event.preventDefault();
   $('#formEditarUsuario').show();
   cargarDatos( $(this).attr('href') );
   $('#divUsuarios').hide();
   $('.btnAgregar').hide();
   $('.btnAceptar').on('click', editarUsuario);
   $('.btnCancelar').on('click', mostrarUsuarios);
}

function agregarUsuario(event) {
   event.preventDefault();
   $.post(
      'usuarios/agregar',
      {
         dni: $('.dni').val(),
         nombres: $('.nombres').val(),
         apellidos: $('.apellidos').val(),
         email: $('.email').val(),
         telefono: $('.telefono').val(),
         direccion: $('.direccion').val(),
         localidad: $('.localidad').val(),
         provincia: $('.provincia').val(),
         cp: $('.cp').val(),
         peso: $('.peso').val(),
         altura: $('.altura').val(),
         foto: $('.foto').val(),
         entrenador: $('.entrenador').val(),
      }
   ).done(function (res) {
      alert(res);
   }).fail(function () {
      alert("Disculpe, no se pudo completar la operación");
   }).always(function () {
      limpiarDatos();
      mostrarUsuarios();
   });
}

function editarUsuario(event) {
   event.preventDefault();

   $.post(
      'usuarios/editar',
      {
         dni: $('.dni').val(),
         nombres: $('.nombres').val(),
         apellidos: $('.apellidos').val(),
         email: $('.email').val(),
         telefono: $('.telefono').val(),
         direccion: $('.direccion').val(),
         localidad: $('.localidad').val(),
         provincia: $('.provincia').val(),
         cp: $('.cp').val(),
         peso: $('.peso').val(),
         altura: $('.altura').val(),
         foto: $('.foto').val(),
         entrenador: $('.entrenador').val(),
      }
   ).done(function (res) {
      alert(res);
   }).fail(function () {
      alert("Disculpe, no se pudo completar la operación");
   }).always(function () {
      limpiarDatos();
      mostrarUsuarios();
   });
}

function eliminarUsuario() {
   alert('¿Realmente desea eliminar este usuario?');
}

function cargarDatos(id) {
   $.post(
      'usuarios/cargar',
      { usuario_id: id },
      function (res) {
         res = JSON.parse(res);
         $('.dni').val(res.dni);
         $('.nombres').val(res.nombres);
         $('.apellidos').val(res.apellidos);
         $('.email').val(res.email);
         $('.telefono').val(res.telefono);
         $('.direccion').val(res.direccion);
         $('.localidad').val(res.localidad);
         $('.provincia').val(res.provincia);
         $('.cp').val(res.cp);
         $('.peso').val(res.peso);
         $('.altura').val(res.altura);
         $('.foto').val(res.foto);
         $('.entrenador').val(res.entrenador);
         console.log(res.dni);
      }
   );
}

function limpiarDatos() {
   $('.dni').val(''),
   $('.nombres').val(''),
   $('.apellidos').val(''),
   $('.email').val(''),
   $('.telefono').val(''),
   $('.direccion').val(''),
   $('.localidad').val(''),
   $('.provincia').val(''),
   $('.cp').val(''),
   $('.peso').val(''),
   $('.altura').val(''),
   $('.foto').val(''),
   $('.entrenador').val('')
}

function agregarUsuario() {
   var frm = new FormData();
   frm.append('dni', $('.dni').val());
   frm.append('nombres', $('.nombres').val());
   frm.append('apellidos', $('.apellidos').val());
   frm.append('email', $('.email').val());
   frm.append('telefono', $('.telefono').val());
   frm.append('direccion', $('.direccion').val());
   frm.append('localidad', $('.localidad').val());
   frm.append('provincia', $('.provincia').val());
   frm.append('cp', $('.cp').val());
   frm.append('peso', $('.peso').val());
   frm.append('altura', $('.altura').val());
   frm.append('foto', $('.foto').val());
   frm.append('entrenador', $('.entrenador').val());
   frm.append('entrenamiento', $('.entrenamiento').[0].files[0]);
   frm.append('dieta', $('.dieta').[0].files[0]);

   $.ajax({
      url: 'usuarios/agregar',
      type: 'POST',
      dataType: 'json',
      cache: false,
      data: {
         hook, action, id
      },

   }).done(function (res) {
      if (res.status === 200) {

      } else {

      }
   }).fail(function (err) {

   }).always(function () {

   })
}

*/