		<header class="bar bar-nav">
		  <h1 class="title"><a href="#">USER LOGIN</a></h1>
		  <a class="icon icon-search pull-right"></a>
		</header>
		<div class="content">
			<form action="user/handleLogin" method="POST" onsubmit="return check();">
			  <input type="text" placeholder="User Name" name="username">
			  <input type="password" placeholder="Enter Your Password" name="password">
			  <button class="btn btn-positive btn-block">Login</button>
			</form>
		</div>
		<script>
			function check(){
				var result=true;
				
				var inputs=document.getElementsByTagName("input");
				for (x in inputs){
					if(inputs[x].value==''){
						result=false;
						inputs[x].style.borderColor='red';
					}else{
						inputs[x].style.borderColor='initial';
					}
				}
				return result;
			}
		</script>