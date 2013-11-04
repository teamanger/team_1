var Seq = require('sequelize');

var seq = require('./conf.js');

var UsuarioEquipo = require('./usuario_equipo');
var Usuario = require('./usuario');
var CampeonatoEquipo = require('./campeonato_equipo');
var Campeonato = require('./campeonato');
var EquipoParido = require('./equipo_partido');
var Partido = require('./partido');
var Mensaje = require('./mensaje');
var EquipoMensaje = require('./equipo_mensaje');

var Equipo = seq.define('equipo',{
    id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    nombre : {
    	type : Seq.STRING(80)
    },
    fecha : {
        type : Seq.DATE
    },
    activado : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "equipo",
	freezeTableName: true
});

Equipo.hasMany( Usuario, { as : 'Usuarios', foreignKey : 'equipo_id', joinTableModel : UsuarioEquipo } );
Equipo.hasMany( Campeonato, { as : 'Campeonatos', foreignKey : 'equipo_id', joinTableModel : CampeonatoEquipo } );
Equipo.hasMany( Partido, { as : 'Partidos', foreignKey : 'equipo_id', joinTableModel : EquipoParido } );
Equipo.hasMany( Mensaje, { as : 'Mensajes', foreignKey : 'equipo_id', joinTableModel : EquipoMensaje } );

module.exports = Equipo;