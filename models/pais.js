var Seq = require('sequelize');

var seq = require('./conf.js');

var Provincia = require('./provincia');

var Pais = seq.define('pais',{
    id : {
    	type : Seq.INTEGER,
    	primaryKey : true
    },
    nombre : {
    	type : Seq.STRING(45)
    }
},{
	timestamps: false,
	tableName : "pais",
	freezeTableName: true
});

Pais.hasMany( Provincia, { as : 'Provincias', foreignKey : 'pais_id' } );

module.exports = Pais;