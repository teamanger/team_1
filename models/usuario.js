var Seq = require('sequelize');

var seq = require('./conf.js');

var Media = require('./media');

var Usuario = seq.define('usuario',{
   
   id : { 
       type : Seq.INTEGER, 
       primaryKey: true
   },
   email : {
   	   type : Seq.STRING(100),
   	   validate : {
   	   	 isEmail : true
   	   }
   },
   password : {
   	 type : Seq.STRING(100),
   	 validate : {
   	 	len : [ 6, 100 ]
   	 }
   },
   estado : {
   	  type : Seq.INTEGER
   },
   fecha : {
   	  type : Seq.DATE
   },
   tipo_usuario_id : {
   	  type : Seq.INTEGER
   },
   direccion : {
   	type : Seq.STRING(100)
   },
   localidad_id : {
   	type : Seq.INTEGER
   },
   apodo : {
   	type : Seq.STRING(80)
   }
} ,{
	timestamps: false,
	tableName : "usuario",
	freezeTableName: true
});

Usuario.hasMany( Media, { as : 'Medias', foreignKey : 'usuario_id' } );

module.exports = Usuario;