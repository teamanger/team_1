var Seq = require('sequelize');

var seq = require('./conf.js');

var campeonatoEquipo = seq.define('campeonato_equipo',{
    
    campeonato_id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    equipo_id : {
        type : Seq.INTEGER,
        primaryKey : true
    },
    estado : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "campeonato_equipo",
	freezeTableName: true
});


module.exports = campeonatoEquipo;