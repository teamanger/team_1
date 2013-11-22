module.exports = function(sequelize, Seq){

return sequelize.define('provincia',{
    id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    nombre : {
    	type : Seq.STRING(45)
    },
    pais_id : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "provincia"
});
};