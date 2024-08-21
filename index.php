<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback from Student</title>
<style>

* {
	box-sizing: border-box;
}

html{
	font-size:100%;
}

body{
	font-family:"Arial Black", Gadget, sans-serif;
	margin:2px;
	background-color:;
}

.header{
	background-color:#9C6;
	padding:16px;
	text-align:center;
}
.header a{
	color:#FFF;
	text-decoration:none;
}

.header a:hover{
	color:#9F6;
}

.nav{
	display: flex;
	background:#333;
}

.nav a{
	color:#FFF;
	text-align:center;
	text-decoration:none;
	padding:15px 20px;
}

.nav a:hover{
	color:#333;
	background-color:#fff;
	text-align:center;
	text-decoration:none;
	padding:15px 20px;
}

.row{
	display: flex;
	flex-wrap: wrap;
}

.side{
	flex:30%;
}

.main{
	flex:70%;
	background-color:#f1f1f1;
	display:flex;
	flex-direction:column;
}

.op1{
	flex:30%;
	font-size:24px;
	border:2px solid black;
/*	height:50; */
	/*width:200px;*/
	border-radius:8px;
	padding:5px;
	text-align:center;
}

.op2{
	flex:30%;
	font-size:24px;
	border:2px solid black;
/*	height:50; */
/*	width:200px;*/
	border-radius:8px;
	text-align:center;
	padding:5px;
}

.op3{
	flex:40%;
}

a{
	text-decoration:none;
	color:#333;
}

a:hover{
	color:#F00;
}

/*.op1 a{
	text-decoration:none;
	color:#333;
}

.op2 a{
	text-decoration:none;
	color:#333;
}

.op1 a:hover{
	color:#CC0;
}

.op2 a:hover{
	color:#CC0;
}
*/



.footer{
	background-color:#333;
	text-align:center;
	padding:2px;
	color:#FFF;
}

@media (max-width: 700px){
	.nav, .row, .main{
		flex-direction:column;
	}
}


</style>

</head>
<body>
    
    <div class="header">
    	<h1><a href="?">Feedback Management System</a></h1>
    </div>
    
    <div class="nav">    	
        <a href="#">Admin</a>
        <a href="#">Others</a>
        <a href="#">About</a>
    </div>
    
    <div class="row">
    	<div class="side">
        <h1>Feedback :</h1>
	    </div>
	    <div class="main">
        	
            <div class="op"><a href="teacher.php" ><p class="op1">About Teacher</p></a></div>
            <div class="op0"><a href="teaching.php"><p class="op2">About Teaching</p></a></div>
            <p class="op3"></p>
    	</div>
    </div>
    
    
    <div class="footer">
    	<h1>Contact Us</h1>
        <h4>+916367629970</h4>
        <h4>GMAIL: ankushjatav.in@gmail.com</h4>
    </div>
    
</body>
</html>
