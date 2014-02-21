

module.exports = function(app){
  
 var usuarioRoute = require('./usuario');
 var homeRoute = require('./home');



 /*var user = app.get('models').usuario;
 var tipo = app.get('models').tipo_usuario;
*/


   usuarioRoute(app);
   homeRoute(app);
  app.get('/',  function(req, res) {
   
   res.render('home');    

  });
 //ANDA

 /*
 app.get('/prueba',  function(req, res) {
   tipo.find(1).success(function(tipo_usuario){
   	console.log( tipo_usuario.getUsuarios().success(function(users){
   		console.log(users);
   	}) );
   });
   res.render('example');    

 } );
*/


};

