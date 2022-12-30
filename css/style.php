<?php
header('Content-type: text/css; charset:UFT-8')
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
font-family: Sans-serif, Trattatell, fantasy;
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


.form-sections {
font-size: 1.4em;
color:#087992;
font-weight: bold;
display: flex:
justify-content: center;
align-items: center;
width: 60%;
border-radius: 5px;
background-color: #68bbd9;
padding: 20px;
margin: 20px;
margin-left: 18%
}

.linkform{
display: flex;
justify-content: center;
margin-top:5%;
align-items: center;
color: #087992;
text-decoration:none;
}

.link{
text-decoration:none;
color: #087992;
font-size: 1.4em;
}

.link:hover{
	color: white;
}


input[type=text],input[type=password], select, textarea {
width: 100%;
font-size: 0.8em;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical ;

}


input[type=submit], input[type=reset] {
background-color: #087992;
font-size: 1.4em;
width: 100px;
color: white;
justify-content: center;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;

}

input[type=submit]:hover, input[type=reset]:hover {
background-color: #68d86f;
}

.btnForm{
display:flex;
justify-content: center;
margin-left: 15px;

}

#login-form, #reg-form{
	margin-left: 35%;
	width: 30%;
}

