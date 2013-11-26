module.exports = function(sequelize, Seq){


return  sequelize.define('desempenio',{
    goles : {
    	type : Seq.INTEGER
    },
    puntaje : {
        type : Seq.INTEGER
    },
    mejor : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "desempenio"
});

}