var Seq = require('sequelize');

var seq = require('./conf.js');

var equipoPartido = seq.define('equipo_partido',{
    
    equipo_id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    usuario_id : {
        type : Seq.INTEGER,
        primaryKey : true
    },
    estado : {
        type : Seq.INTEGER
    },
    goles : {
        type : Seq.INTEGER
    },
    ganador : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "equipo_partido",
	freezeTableName: true
});


module.exports = equipoPartido;