<!DOCTYPE html><html>
<head>
<title> Log In </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url("back.css");
</style>
<script type="text/javascript">
  function validateForm() {
  var x = document.forms["login"]["Username"].value;
  if (x == "") {
    alert("Please  enter Username");
    return false;
  }
} 
</script>
	<link rel="stylesheet" type="text/css" href="login.css">
	<style type="text/css">
		body
		{
			background-image: url(a.jpeg);
			background-size: cover;
			background-attachment: fixed;
			background-position: center;
		}
	</style>
	
</head>
<body>
<section>
<nav>
<div class="topnav">
  <a href="dummy.html">HOME</a>
  <a href="dummy.html">COUSTIMIZE PIZZA</a>
  <a href="dummy.html">ABOUT US</a>
    <div class ="topnav1">
  <a href="feed.xml">FEEDBACK</a>
  <a href="dummy.html">MY ACCOUNT</a>
</div>

</div>

</nav>
</section>
<div class="login-page">
  <main>

  <div class="form">
    
   <!-- <form name= "login" class="login-form" action = "dummy.html" onsubmit="return validateForm()">!-->
   	<form name= "login" class="login-form" action = "process.php" method="post">
      <input type="text" placeholder="Username" name="Username" />
      <input type="password" placeholder="Password" name="Password"/>
	 <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
      <button name="login">login</button>
	
      <p class = "message"><a href="dummy.html">Forgot Password?</a></p> 
      <p class="message">Not registered? <a href="dummy.html">Create an account</a></p>
    </form>
  </div>
  </main>
  	
</div>

 <footer>
 <div class= "topnav">
	<div class="topnav1">
  <a href="mailto:someone@example.com">
  Mail us </a>

</div>
</div>
</footer> 	
</body>
</html>			
