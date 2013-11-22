module.exports = function(sequelize, Seq){

return sequelize.define('usuario_equipo',{
    
    equipo_id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    usuario_id : {
        type : Seq.INTEGER,
        primaryKey : true
    },
    posicion_id : {
        type : Seq.INTEGER
    },
    puntaje : {
        type : Seq.INTEGER
    },
    rol : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "usuario_equipo"
});

};