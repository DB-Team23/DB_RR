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
			$(".user_pro_info").append(`<h5>${data[0].fname} ${data[0].lname}</h5>
											<p>${data[0].username}</p>`);
			for(var i = 1; i < data.length; i++){
				$(".user_pro_info").append(`<h5>${data[i].name}</h5>`);
			}
		}
	})
}