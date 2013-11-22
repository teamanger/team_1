module.exports = function(sequelize, Seq){

return  sequelize.define('campeonato_equipo',{
    
    campeonato_id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    equipo_id : {
        type : Seq.INTEGER,
        primaryKey : true
    },
    estado : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "campeonato_equipo"
});
};