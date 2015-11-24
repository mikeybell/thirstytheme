$(function(){

	$("nav").stick_in_parent();


	var userFeed = new Instafeed({
	        get: 'user',
	        userId: '3719166',
	        accessToken: 'dd89909cb79348089161923c6f00b683'
	    });
	    userFeed.run();

});