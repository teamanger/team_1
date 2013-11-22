var Sequelize  = require('sequelize');
var config  = require('./conf').database;


var sequelize = new Sequelize(
	config.database,
	config.username,
	config.password
	);


var models = [ "campeonato",
"campeonato_equipo",
"cancha",
"desempenio",
"equipo",
"equipo_mensaje",
"equipo_partido",
"localidad",
"media",
"mensaje",
"pais",
"partido",
"posicion",
"provincia",
"tipo_usuario",
"usuario",
"usuario_equipo",
"usuario_mensaje"
 ];

 models.forEach(function(model){
 	module.exports[model] = sequelize.import( __dirname + "/" + model );
 });

 (function(m){
   
   m.campeonato.hasMany( m.media, { as : 'Medias', foreignKey : 'campeonato_id' } );
   m.campeonato.hasMany( m.partido, { as : 'Partidos', foreignKey : 'campeonato_id' } );
   m.campeonato.hasMany( m.equipo,{  foreignKey : 'campeonato_id', joinTableModel : m.campeonato_equipo } );

   m.cancha.hasMany( m.media, { as : 'Medias', foreignKey : 'cancha_id' } );
   m.cancha.hasMany( m.partido, { as : 'Partidos', foreignKey : 'cancha_id' } );


   m.equipo.hasMany( m.partido, {  foreignKey : 'equipo_id', joinTableModel : m.equipo_partido } );
   m.equipo.hasMany( m.usuario, {  foreignKey : 'equipo_id', joinTableModel : m.usuario_equipo } );
   m.equipo.hasMany( m.campeonato, {  foreignKey : 'equipo_id', joinTableModel : m.campeonato_equipo } );
   m.equipo.hasMany( m.mensaje, {  foreignKey : 'equipo_id', joinTableModel : m.equipo_mensaje } );
   
   m.localidad.hasMany( m.usuario, { as : 'usuarios', foreignKey : 'localidad_id' } );
   m.localidad.hasMany( m.cancha, { as : 'Canchas', foreignKey : 'localidad_id' } );
   m.localidad.hasMany( m.campeonato, { as : 'Campeonatos', foreignKey : 'localidad_id' } );

   m.mensaje.hasMany(m.usuario, { joinTableModel : m.usuario_mensaje, foreignKey : 'mensaje_id' });
   m.mensaje.hasMany(m.equipo, {  joinTableModel : m.equipo_mensaje, foreignKey : 'mensaje_id' });

   m.pais.hasMany( m.provincia, { as : 'Provincias', foreignKey : 'pais_id' } );

   m.partido.hasMany( m.media, { as : 'Medias', foreignKey : 'partido_id' } );
   m.partido.hasMany( m.equipo, {  foreignKey :'partido_id', joinTableModel : m.equipo_partido  } );
   m.partido.hasMany( m.usuario, {  foreignKey : 'partido_id', joinTableModel : m.desempenio } );

   m.posicion.hasMany( m.usuario_equipo, { as : 'usuarioEquipos', foreignKey : 'posicion_id' } );

   m.provincia.hasMany( m.localidad, { as : 'Localidades', foreignKey : 'provincia_id' } );

   m.tipo_usuario.hasMany(m.usuario, { as : 'usuarios',foreignKey : "tipo_usuario_id"});
   
   m.usuario.hasMany( m.media, { as : 'Medias', foreignKey : 'usuario_id' } );
   m.usuario.hasMany( m.campeonato, { as : 'Campeonatos', foreignKey : 'usuario_id' } );
   m.usuario.hasMany ( m.mensaje,{  joinTableModel : m.usuario_mensaje, foreignKey : 'usuario_id' } );
   m.usuario.hasMany ( m.equipo,{   joinTableModel : m.usuario_equipo, foreignKey : 'usuario_id' } );
   m.usuario.hasMany ( m.partido,{  joinTableModel : m.desempenio, foreignKey : 'usuario_id' } );



 })(module.exports);

module.exports.sequelize = sequelize;



