var Seq = require('sequelize');

var seq = require('./conf.js');

var MsjUser = require('./usuario_mensaje');

var Usuario = require('./usuario');
var Equipo = require('./equipo');
var EquipoMensaje = require('./equipo_mensaje');

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

Msj.hasMany(Usuario, { as : 'Usuarios', joinTableModel : MsjUser, foreignKey : 'mensaje_id' });
Msj.hasMany(Equipo, { as : 'Equipos', joinTableModel : EquipoMensaje, foreignKey : 'mensaje_id' });

module.exports = Msj;