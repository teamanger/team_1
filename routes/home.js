


module.exports = function(app){

	Get = function(req, res) {
		console.log("GET");
	};

	Delete = function(req, res) {
		console.log("DELETE");
	};

	Post = function(req, res) {
		console.log("POST");
	};

	Put = function(req, res) {
		console.log("PUT");
	};



	controller = function(app){
		var crypto = require('crypto');
		var Usuario = app.get('models').usuario;


		app.get('/',  function(req, res) { 
			res.render('home');    
			req.session['hola'] = 'hola';
		});

		//LOGIN
		app.get('/login', function(req,res){
			res.render('login');     
		});
        app.get('/login', function(req,res){
			res.render('login');     
		});


        //REGISTER
		app.get('/register', function(req,res){
			res.render('register');     
		});
		app.post('/register', function(req,res){
			if(req.body.password == req.body.confirm_password ){
				req.body.password = crypto.createHash('md5').update(req.body.password).digest('hex');
				delete req.body.confirm_password;
				Usuario.create( req.body )
				.success(function(user){
					res.redirect( '/' );
				}).error(function(err){
					console.log(err);
					res.render( 'register', err );     
				});
			}else{
				res.redirect( 'register' );     
			} 
		});


	};

	controller(app);


}



