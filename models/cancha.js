module.exports = function(sequelize, Seq){

return  sequelize.define('cancha',{

    id : {
      type : Seq.INTEGER,
      primaryKey : true
    },
    nombre : {
      type : Seq.STRING(100)
    },
    direccion : {
      type : Seq.STRING(100)
    },
    latitud : {
        type : Seq.FLOAT
    },
    longitud : {
        type : Seq.FLOAT
    },
    localidad_id : {
       type : Seq.INTEGER
    }
},{
   timestamps: false,
   tableName : "cancha"
});

}