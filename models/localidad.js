module.exports = function(sequelize, Seq){

return  sequelize.define('localidad',{

    id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    nombre : {
    	type : Seq.STRING(70)
    },
    provincia_id : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "localidad"
});
};