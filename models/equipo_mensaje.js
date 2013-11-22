module.exports = function(sequelize, Seq){

return sequelize.define('equipo_mensaje',{
    
    leido : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "equipo_mensaje"
});
};