module.exports = function(sequelize, Seq){

return  sequelize.define('Equipo',{
    id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    nombre : {
    	type : Seq.STRING(80)
    },
    fecha : {
        type : Seq.DATE
    },
    activado : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "equipo"
});

};
