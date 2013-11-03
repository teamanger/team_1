var Seq = require('sequelize');

var seq = require('./conf.js');

var Msj = seq.define('mensaje',{
    id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    texto : {
    	type : Seq.TEXT
    }
},{
	timestamps: false,
	tableName : "mensaje",
	freezeTableName: true
});


module.exports = Msj;