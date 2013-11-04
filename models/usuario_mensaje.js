var Seq = require('sequelize');

var seq = require('./conf.js');

var usuarioMensaje = seq.define('usuario_mensaje',{
    
    mensaje_id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    usuario_id : {
        type : Seq.INTEGER,
        primaryKey : true
    }
},{
	timestamps: false,
	tableName : "usuario_mensaje",
	freezeTableName: true
});


module.exports = usuarioMensaje;