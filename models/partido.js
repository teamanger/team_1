var Seq = require('sequelize');

var seq = require('./conf.js');

var Media = require('./media');
var EquipoPartido = require('./equipo_partido');
var Equipo = require('./equipo');
var Usuario = require('./usuario');
var Desempenio = require('./desempenio');


var Partido = seq.define('partido',{
   
   id : { 
       type : Seq.INTEGER, 
       primaryKey: true
   },
   fecha : {
   	   type : Seq.DATE
   },
   campeonato_id : {
   	 type : Seq.INTEGER
   },
   cancha_id : {
   	  type : Seq.INTEGER
   }
} ,{
	timestamps: false,
	tableName : "partido",
	freezeTableName: true
});


Partido.hasMany( Media, { as : 'Medias', foreignKey : 'partido_id' } );
Partido.hasMany( Equipo, { as: 'Equipos', foreignKey :'partido_id', joinTableModel : Equipo  } );
Partido.hasMany( Usuario, { as : 'Usuarios', foreignKey : 'partido_id', joinTableModel : Desempenio } );

module.exports = Partido;