module.exports = function(sequelize, Seq){

return sequelize.define('equipoPartido',{
    equipo_id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    partido_id : {
        type : Seq.INTEGER,
        primaryKey : true
    },
    estado : {
        type : Seq.INTEGER
    },
    goles : {
        type : Seq.INTEGER
    },
    ganador : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "equipo_partido"
});

};