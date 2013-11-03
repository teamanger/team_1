

module.exports = function(app){
  
 var usuarioRoute = require('./usuario');
 var tipo = require('../models/tipo_usuario');
 usuarioRoute(app);

 app.get('/',  function(req, res) {
   user.create({ apodo : "sergio", 
   	tipo_usuario_id : 1, 
   	email : "sergiokaz10@hotmail.com", 
   	password : "1", 
   	estado : 0 }, null, {validate: true} ).error(function(err){
   		console.log(err);
   	});
   res.render('example');    

 } );

 app.get('/prueba',  function(req, res) {
   tipo.find(1).success(function(tipo_usuario){
   	console.log( tipo_usuario.getUsuarios().success(function(users){
   		console.log(users);
   	}) );
   });
   res.render('example');    

 } );

};

