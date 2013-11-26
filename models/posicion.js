module.exports = function(sequelize, Seq){

return  sequelize.define('posicion',{
    id : {
      type : Seq.INTEGER,
      primaryKey : true
    },
    nombre : {
      type : Seq.STRING(100)
    }
},{
  timestamps: false,
  tableName : "posicion"
});
};