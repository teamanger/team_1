var Seq = require('sequelize');

var seq = require('./conf.js');

var Localidad = require('./localidad');

var Prov = seq.define('provincia',{
    id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    nombre : {
    	type : Seq.STRING(45)
    },
    pais_id : {
        type : Seq.INTEGER
    }
},{
	timestamps: false,
	tableName : "provincia",
	freezeTableName: true
});

Prov.hasMany( Localidad, { as : 'Localidades', foreignKey : 'provincia_id' } );

module.exports = Prov;