<?php
	header('Content-type: text/css; charset:UFT-8' )
?>

/*
Setting up styles on the general elements
*/

body {
  font-family: sans-serif;
  font-size: 14px;  
  position: relative;    
}

footer{
	display: flex:
	justify-content: center;
	align-items: center;
	background-color: #087992;
	text-align: center;
  	height: 170px;
 	line-height: 20x;
  	font-family: sans-serif;
  	font-size: 1.2em;
	color: white;  	
  	position: static;
  	width: 100%;
	margin-top:20px;
	padding-top:3px;
	background-image: url("../assets/img/background.png");
	background-position: center;
  	background-repeat: no-repeat;
  	background-size: cover;
}

a{
	text-decoration:none;
	
}

/*
Setting up styles on the top session navigation menu 
*/

.nav-session{
	display: flex;
    justify-content: flex-end; 
    height: 50px;
    background-color: #066074;
    align-items: center;
	font-size: large;
	padding-left: 2%;
	padding-right: 2%;	
	background-image: url("../assets/img/background.png");
	background-position: center;
  	background-repeat: no-repeat;
  	background-size: cover;
}

.nav-session a{
	text-decoration:none;
	color: white; 
	
	padding-right: 2%;
}

/*
Setting up styles on the logo section
*/

#titlePrahse{
	font-size: 3.5em;
	padding-left: 50px;
	color: #043C49;
	font-family:  Sans-serif, Trattatell, fantasy;
	font-style:italic;
	
}

.logo-header{
	display: flex;
	align-items: center;
	justify-content: space-around;	
	flex-wrap: wrap;
	border: solid;
	border-color: #087992;
	margin: 2px;	
}

/*
Setting up styles on the main navigation menu 
*/


.nav-bar{
    display: flex;
    justify-content: space-around; 
    height: 100px;
    background-color: #087992;
    align-items: center;
	font-size: large;
	padding-left: 2%;
	padding-right: 2%;	
		     
}
.nav-bar a{
	text-decoration:none;
	color: white; 
}
.nav-bar a:hover{
	font-style: italic; 
}

.nav-bar:first-child{
    padding: 0;
}

/*
Setting up styles on Hero Banner 
*/

.hero-banner {  
	display: flex;
	justify-content: flex-start;
	align-items: center;
	background-image: url("../assets/img/hero-img.jpg");
   	height: 400px;
   	width: 100%;  
  	background-position: center;
  	background-repeat: no-repeat;
  	background-size: cover;
  	position: relative;
	margin-top: 15px;	
}

.hero-content{
	display:flex-column;
	align-items: center;
	justify-content: center;
	width: 235px;
	height: 60%;
	border: solid;
	border-color: white;
	background: none;
	margin-left: 5%;
	
		
}

.hero-content h1{
	padding-left: 23%;
	margin-bottom: 12%;
	color:white;
}

.hero-content p{
	margin-left: 8%;
	margin-right: 5%;
	font-size: 1.2rem;
	color:#0083ad;
	font-weight: bold;
	
}

#btn-hero{
	margin-left: 25%;
	margin-top: 10%;
	font-size: large;
	background: white;
	border: none;
	color: #0083ad;
	height: 40px;
	width: 120px
}

/*

LOGIN STYLES

*/

.login-section{
	display: flex;
	justify-content: center;
	align-items:center;
	
}

.login-form{
	width: 230px;
	margin-top: 10%;
	padding: 12%;
	border: solid;
	font-weight: bold;	
	color: #087992;
	line-height: 25px;
	font-size: 1.2em;
}


.linkform{
	display: flex;
	justify-content: center;
	margin-top:10%;
	align-items: center;
	color: #087992;
}
.login-form a{
	
	color: #087992;
	font-size: 1.2em;
}

.btnForm{
	margin-left: 5%;
	background-color: #67bada;
	color:white;
	font-weight: bold;
	border: none;
	width: 40%;
	height: 40px;
	font-size: 1.0em;
	
}