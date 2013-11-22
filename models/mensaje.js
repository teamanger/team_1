module.exports = function(sequelize, Seq){

return  sequelize.define('mensaje',{
    id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    texto : {
    	type : Seq.TEXT
    }
},{
	timestamps: false,
	tableName : "mensaje"
});
};