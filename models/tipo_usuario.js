module.exports = function(sequelize, Seq){

return sequelize.define('tipo_usuario',{
   id : {
   	type : Seq.INTEGER, 
   	primaryKey: true
   },
   nombre : {
   	type : Seq.STRING(45)
   }
},{
	timestamps: false,
	tableName : "tipo_usuario"
});
};