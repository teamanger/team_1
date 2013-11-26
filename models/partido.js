module.exports = function(sequelize, Seq){


return sequelize.define('partido',{
   
   id : { 
       type : Seq.INTEGER, 
       primaryKey: true
   },
   fecha : {
   	   type : Seq.DATE
   },
   campeonato_id : {
   	 type : Seq.INTEGER
   },
   cancha_id : {
   	  type : Seq.INTEGER
   }
} ,{
	timestamps: false,
	tableName : "partido"
});
};