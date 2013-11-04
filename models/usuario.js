var Seq = require('sequelize');

var seq = require('./conf.js');

var Media = require('./media');

var MsjUser = require('./usuario_mensaje');

var Msj = require('./mensaje');

var Campeonato = require('./campeonato');
var Equipo = require('./equipo');
var UsuarioEquipo = require('./usuario_equipo');
var Partido = require('./partido');
var Desempenio = require('./desempenio');

var Usuario = seq.define('usuario',{
   
   id : { 
       type : Seq.INTEGER, 
       primaryKey: true
   },
   email : {
   	   type : Seq.STRING(100),
   	   validate : {
   	   	 isEmail : true
   	   }
   },
   password : {
   	 type : Seq.STRING(100),
   	 validate : {
   	 	len : [ 6, 100 ]
   	 }
   },
   estado : {
   	  type : Seq.INTEGER
   },
   fecha : {
   	  type : Seq.DATE
   },
   tipo_usuario_id : {
   	  type : Seq.INTEGER
   },
   direccion : {
   	type : Seq.STRING(100)
   },
   localidad_id : {
   	type : Seq.INTEGER
   },
   apodo : {
   	type : Seq.STRING(80)
   }
} ,{
	timestamps: false,
	tableName : "usuario",
	freezeTableName: true
});

Usuario.hasMany( Media, { as : 'Medias', foreignKey : 'usuario_id' } );
Usuario.hasMany( Campeonato, { as : 'Campeonatos', foreignKey : 'usuario_id' } );
Usuario.hasMany ( Msj, { as : "Mensajes", joinTableModel : MsjUser, foreignKey : 'usuario_id' } );
Usuario.hasMany ( Equipo, { as : "Equipos", joinTableModel : usuario_equipo, foreignKey : 'usuario_id' } );
Usuario.hasMany ( Partido, { as : "Partidos", joinTableModel : desempenio, foreignKey : 'usuario_id' } );


module.exports = Usuario;