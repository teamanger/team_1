var Seq = require('sequelize');

var seq = require('./conf.js');

var Usuario = require('./usuario');

var TipoUsuario = seq.define('tipo_usuario',{
   id : {
   	type : Seq.INTEGER, 
   	primaryKey: true
   },
   nombre : {
   	type : Seq.STRING(45)
   }
},{
	timestamps: false,
	tableName : "tipo_usuario",
	freezeTableName: true
});

TipoUsuario.hasMany(Usuario, { as : 'Usuarios',foreignKey : "tipo_usuario_id"});

module.exports = TipoUsuario;