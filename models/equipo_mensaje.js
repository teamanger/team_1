var Seq = require('sequelize');

var seq = require('./conf.js');

var equipoMensaje = seq.define('equipo_mensaje',{
    
    mensaje_id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    usuario_id : {
        type : Seq.INTEGER,
        primaryKey : true
    },
    leido : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "equipo_mensaje",
	freezeTableName: true
});


module.exports = equipoMensaje;