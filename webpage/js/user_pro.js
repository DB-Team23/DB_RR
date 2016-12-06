$(document).on('ready', function(){
	populateUserPro(username);
});


function populateUserPro(username){
	$.ajax({
		url: '../../php/user_pro.php',
		type: 'GET',
		dataType: 'json',
		data: ({username: username}),
		success: function(data){
			console.log(data);
			$(".user_pro_info").append(`<h2>${data[0].lname} ${data[0].fname}</h2>
											<p>Username: ${data[0].username}</p>
											<p>Birthday: ${data[0].birthday}</p>`);
			for(var i = 1; i < data.length; i++){
				$(".favorites").append(`<h4>${data[i].name}</h4>`);
			}
		}
	})
}