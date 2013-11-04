var Seq = require('sequelize');

var seq = require('./conf.js');

var usuarioEquipo = seq.define('usuario_equipo',{
    
    equipo_id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    usuario_id : {
        type : Seq.INTEGER,
        primaryKey : true
    },
    posicion_id : {
        type : Seq.INTEGER
    },
    puntaje : {
        type : Seq.INTEGER
    },
    rol : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "usuario_equipo",
	freezeTableName: true
});


module.exports = usuarioEquipo;