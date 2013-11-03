var Seq = require('sequelize');

var seq = require('./conf.js');

var Usuario = require('./usuario');
var Campeonato = require('./campeonato');
var Cancha = require('./cancha');


var Localidad = seq.define('localidad',{

    id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    nombre : {
    	type : Seq.STRING(70)
    },
    provincia_id : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "localidad",
	freezeTableName: true
});

Localidad.hasMany( Usuario, { as : 'Usuarios', foreignKey : 'localidad_id' } );
Localidad.hasMany( Cancha, { as : 'Canchas', foreignKey : 'localidad_id' } );
Localidad.hasMany( Campeonato, { as : 'Campeonatos', foreignKey : 'localidad_id' } );


module.exports = Localidad;