
/*
 * GET home page.
 */

exports.producto = function(req, res) {
	var productoModel = require('../models/producto');

   var id = new Buffer(req.params[0], 'base64').toString('ascii');
    productoModel.findById({ id : id }, function(err, result, fields){
       if(!err){
         res.render('producto', { data : result } );
         }
       else{
       	console.log(err);
       	res.render('error');
       }
            
    });
    
};

