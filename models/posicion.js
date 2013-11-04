var Seq = require('sequelize');

var seq = require('./conf.js');

var usuarioEquipo = require('./usuario_equipo');

var Posicion = seq.define('posicion',{
    id : {
      type : Seq.INTEGER,
      primaryKey : true
    },
    nombre : {
      type : Seq.STRING(100)
    }
},{
  timestamps: false,
  tableName : "posicion",
  freezeTableName: true
});

Posicion.hasMany( usuarioEquipo, { as : 'UsuarioEquipos', foreignKey : 'posicion_id' } );

module.exports = Posicion;