module.exports = function(sequelize, Seq){

return sequelize.define('usuario_mensaje',{
    
    mensaje_id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    usuario_id : {
        type : Seq.INTEGER,
        primaryKey : true
    }
},{
	timestamps: false,
	tableName : "usuario_mensaje"
});

};