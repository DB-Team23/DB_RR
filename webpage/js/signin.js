var $ = require('jQuery');
$(document).on('ready', function(){
	getUser();
});


function getUser(){
	$.ajax({
		url: 'http://localhost/signin.php',
		type: 'GET',
		dataType: 'json',
		success: function(data){
			console.log(data);
		}
	})
}

