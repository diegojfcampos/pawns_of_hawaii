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
	font-family: Trattatello, fantasy;
	font-style:italic;
	
	
	
}

.logo-header{
	display: flex;
	align-items: center;
	justify-content: flex-start;
	border: solid;
	border-color: #087992;
	margin: 2px;
	background-color: #B4D6DE;
	
	
}




/*
Setting up styles on the main navigation menu 
*/


.nav-bar{
    display: flex;
    justify-content: space-between; 
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

