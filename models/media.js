module.exports = function(sequelize, Seq){

return  sequelize.define('media',{
    id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    url : {
    	type : Seq.TEXT
    },
    ext : {
        type : Seq.STRING(10)
    },
    usuario_id : {
        type : Seq.INTEGER
    },
    partido_id : {
        type : Seq.INTEGER
    },
    cancha_id : {
        type : Seq.INTEGER
    },
    campeonato_id : {
        type : Seq.INTEGER
    }

},{
	timestamps: false,
	tableName : "media"
});

};