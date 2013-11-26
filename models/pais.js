module.exports = function(sequelize, Seq){

return sequelize.define('pais',{
    id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    nombre : {
    	type : Seq.STRING(45)
    }
},{
	timestamps: false,
	tableName : "pais"
});

};