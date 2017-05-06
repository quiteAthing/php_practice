

window.addEventListener("onload",setup);


	function setup(){
			

	}
	

/*
	
	attribute referenced methods

*/


	//登入
	function login(){
		var acc=document.getElementById("nx_acc").value;
		var pw=document.getElementById("nx_pw").value;
		var xhr=new XMLHttpRequest();
		
		xhr.onreadystatechange=function(resp){
			switch(this.readyState){
				case 1 : xhr.send("acc="+acc+"&pw="+pw);
						break;
				case 4 : if(this.status==200){
					var result=JSON.parse(this.responseText);
					document.getElementById("nx_logged_out").style.display="none";
					document.getElementById("nx_logged_in").style.dispalay="block";
					document.getElementById("nx_alias").innerHTML=result.alias;
					document.getElementById("nx_notify").innerHTML=result.notification;	
				}
				break;	
			}
		}
		
		xhr.open("GET","http://localhost/php_prac/login.php".true);
		
	}
	


