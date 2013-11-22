module.exports = function(sequelize, Seq){
return sequelize.define('campeonato',{
   id : { 
       type : Seq.INTEGER, 
       primaryKey: true
   },
   nombre : {
   	   type : Seq.STRING(100)
   },
   usuario_id : {
   	 type : Seq.INTEGER
   },
   localidad_id : {
   	  type : Seq.INTEGER
   },
   direccion : {
   	  type : Seq.STRING(100)
   },
   latitud : {
   	  type : Seq.FLOAT
   },
   longitud : {
   	type : Seq.FLOAT
   },
   descripcion : {
   	type : Seq.TEXT
 }} ,{
	timestamps: false,
	tableName : "campeonato"
});

};
