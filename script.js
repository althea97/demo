
window.setInterval(function(){
		console.log(1);
		obj.getList();
}, 1000);

(function(global){
	global.obj = {};

	obj.getList = function(){
		var user = document.getElementById("user").value;

				var xhttp = new XMLHttpRequest();

				xhttp.onreadystatechange = function(){
					if (this.readyState == 4 && this.status == 200) {
						var data = JSON.parse(this.responseText);
						var list = data.data;
						var html = '';
						if(data.status == 1){
							var i;
							for(i = 0; i < list.length; i++){
								html+= "<li>"+list[i].user+"</li>";
							}
							document.getElementById('userList').innerHTML = html;
						}		     
				    }
				}; 

		xhttp.open("GET", "php/getUsers.php");
		xhttp.send();
	}

	obj.addUser = function(){
		var user = document.getElementById("user").value;

		var xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {
				var userData = document.getElementById('user').value;
				var data = JSON.parse(this.responseText);
				if(data.status == 1){
					document.getElementById("response").innerHTML = data.msg;
					document.getElementById('userList').innerHTML += "<li>"+userData+"</li>";
				}		     
		    }
		}; 

		xhttp.open("GET", "php/add.php?user="+user);
		xhttp.send();
	}

}(window))