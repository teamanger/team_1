var Seq = require('sequelize');

var seq = require('./conf.js');


var Desempenio = seq.define('desempenio',{
    usuario_id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    partido_id : {
        type : Seq.INTEGER,
        primaryKey : true
    },
    goles : {
    	type : Seq.INTEGER
    },
    puntaje : {
        type : Seq.INTEGER
    },
    mejor : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "desempenio",
	freezeTableName: true
});


module.exports = Desempenio;