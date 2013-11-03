var Seq = require('sequelize');

var seq = require('./conf.js');

var Media = require('./media');

var Cancha = seq.define('cancha',{

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
   tableName : "cancha",
   freezeTableName: true
});

Cancha.hasMany( Medias, { as : 'Medias', foreignKey : 'cancha_id' } );


module.exports = Cancha;