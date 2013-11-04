var Seq = require('sequelize');

var seq = require('./conf.js');

var Media = require('./media');
var Partido = require('./partido');
var Equipo = require('./equipo');
var CampeonatoEquipo = require('./campeonato_equipo');

var Campeonato = seq.define('campeonato',{
   
   id : { 
       type : Seq.INTEGER, 
       primaryKey: true
   },
   nombre : {
   	   type : Seq.STRING(100)
   },
   usuario_id : {
   	 type : Seq.INTEGER
   },
   localidad_id : {
   	  type : Seq.INTEGER
   },
   direccion : {
   	  type : Seq.STRING(100)
   },
   latitud : {
   	  type : Seq.FLOAT
   },
   longitud : {
   	type : Seq.FLOAT
   },
   descripcion : {
   	type : Seq.TEXT
} ,{
	timestamps: false,
	tableName : "campeonato",
	freezeTableName: true
});


Campeonato.hasMany( Media, { as : 'Medias', foreignKey : 'campeonato_id' } );
Campeonato.hasMany( Partido, { as : 'Partidos', foreignKey : 'campeonato_id' } );
Campeonato.hasMany( Equipo, { as : 'Equipos', foreignKey : 'campeonato_id', joinTableModel : CampeonatoEquipo } );

module.exports = Campeonato;