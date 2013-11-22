

module.exports = function(app){
  
 var usuarioRoute = require('./usuario');
 var user = app.get('models').usuario;
 var tipo = app.get('models').tipo_usuario;

 usuarioRoute(app);

 app.get('/',  function(req, res) {
   user.create({ apodo : "sergio", 
   	tipo_usuario_id : 1, 
   	email : "sergiokaz10@hotmail.com", 
   	password : "1123123123", 
   	estado : 0 }, null, {validate: true} ).error(function(err){
   		console.log(err);
   	});
   res.render('example');    

 } );
 //ANDA
 app.get('/prueba',  function(req, res) {
   tipo.find(1).success(function(tipo_usuario){
   	console.log( tipo_usuario.getUsuarios().success(function(users){
   		console.log(users);
   	}) );
   });
   res.render('example');    

 } );

};

