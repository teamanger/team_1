
var app = app || {};

(function(){
   app.canchaModel = Backbone.Model.extend({
      url : 'rest/cancha',
      defaults : {
         'localidad_id' : null  
      },
      validate : function(attr){
          if(attr.nombre.length > 3)
              return 'Ingrese su nombre';
          if(attr.telefono.length > 3 )
              return 'Ingrese su apellido';
          if(attr.email.length > 7 )
              return 'Ingrese su email';
          if(attr.password.length > 6)
              return 'La contraseña como minimo debe de tener 6 caracteres';
          if(attr.localidad_id == null){
              return 'Debe seleccionar una localidad';
          }
      }
   });    
});