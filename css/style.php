<?php
header('Content-type: text/css; charset:UFT-8')
  ?>

/* http://meyerweb.com/eric/tools/css/reset/
v2.0 | 20110126
License: none (public domain)
*/

/*Reseting*/
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
margin: 0;
padding: 0;
border: 0;
font-size: 100%;
font: inherit;
vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
display: block;
}
body {
line-height: 1;
}
ol,
ul {
list-style: none;
}
blockquote,
q {
quotes: none;
}
blockquote:before,
blockquote:after,
q:before,
q:after {
content: "";
content: none;
}
table {
border-collapse: collapse;
border-spacing: 0;
}

/*
Setting up styles on the general elements
*/

body {
font-family: sans-serif;
font-size: 14px;
position: relative;
}

footer {
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
background-color: #087992;
text-align: center;
height: 170px;
line-height: 20x;
font-family: sans-serif;
font-size: 2em;
color: white;
position: static;
width: 100%;
margin-top: 20px;
padding-top: 3px;
background-image: url("../assets/img/background.png");
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}

a {
text-decoration: none;
}

/*
Setting up styles on the top session navigation menu
*/

.nav-session {
display: flex;
justify-content: flex-end;
height: 50px;
align-items: center;
font-size: 2em;
padding-left: 2%;
padding-right: 2%;
background-image: url("../assets/img/background.png");
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}

.nav-session a {
text-decoration: none;
color: white;
font-size: 1.3.em;
padding-right: 2%;
}

/*
Setting up styles on the logo section
*/

#titlePrahse {
font-size: 3.5em;
padding-left: 50px;
color: #043c49;
font-family: Sans-serif, Trattatell, fantasy;
font-style: italic;
}

.logo-header {
display: flex;
align-items: center;
justify-content: space-around;
flex-wrap: wrap;


margin: 2px;
}

/*
Setting up styles on the main navigation menu
*/

.nav-bar {
display: flex;
justify-content: space-around;
height: 100px;
background-color: #087992;
align-items: center;
font-size: 2em;
font-weight: bold;
padding-left: 2%;
padding-right: 2%;
}

.nav-bar a {
text-decoration: none;
color: white;
}
.nav-bar a:hover {

color: white;
background-color: #68bbd9;
line-height: 80px;
padding-left: 10px;
padding-right: 10px;
}

.nav-bar:first-child {
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

.hero-content {
display: flex-column;
align-items: center;
justify-content: center;
width: 235px;
height: 60%;
border: solid;
border-color: white;
background: none;
margin-left: 5%;
}

.hero-content h1 {
padding-left: 23%;
margin-bottom: 12%;
color: white;
}

#btn-hero {
margin-left: 25%;
margin-top: 10%;
font-size: large;
background: white;
border: none;
color: #0083ad;
height: 40px;
width: 120px;
cursor: pointer;
}

.hero-content h1{
font-size: 2em;
font-weight: bold;
margin-top: 30px;

}

/*
Setting up styles on Section Pets
*/

.pet-cards{
display: flex;
justify-content: center;
align-items: center;
margin: 50px;
flex-wrap: wrap;
margin-top: 5px;
padding-top: 10px
}
.pet-section{
margin-top:50px;
}
.pet-adoption{
border: solid;
border-color: #0083ad;
margin-left: 11px;
margin-right: 10px;
background-color: #68bbd9;
border-width: 3px;
margin-top: 10px;
padding-top: 10px
}

.pet-name{
font-size: 1.5rem;
margin: 20px;
color: white;
font-weight: bold;
}

#pet-title{
font-weight: bold;
font-size: 3rem;
padding-left: 50px;
color: #087992;
}

/*
Setting up styles on First banner Hero Content
*/

.hero-content p {
margin-left: 8%;
margin-right: 5%;
font-size: 1.7rem;
color: #0083ad;
font-weight: bold;
}


/*
Setting Styles Section Why adpt a cat;
*/

.whyadopt{
display: flex;
justify-content:center;
align-items: center;
margin: 50px;
border: solid;
border-color: #0083ad;
}
.text-whyadopt h1{
font-size: 2.5em;
}

#text-whyadopt{
align-items:center;
justify-content: center;
font-family: sans-serif;
font-size: 1.5em;
color: #0083ad;
padding: 3%;
font-weight:bold;
}

#title-whyadopt{
font-size: 2.5em;
padding-bottom: 20px;
text-decoration: underline;
}


/*

Setting Styles on Testimonials

*/

.testimonial-section {
background-color: #087992;
margin: 50px;
height; 500px;
flex-wrap: wrap;

}
.testimonial-div {
display: flex;
justify-content: center;
align-items: center;

background-color: #087992;
flex-wrap: wrap;

}

.testimonials {

justify-content: center;
align-items: center;
background-color: white;
border: solid;
border-color: #0083ad;
height: 300px;
width: 365px;
padding: 5px;
margin: 4%;
margin-top: 5%;
border-radius: 5%;
flex-wrap: wrap;

}

#testimonial-title{
padding-left: 5px;
margin-left: 4%;
padding-top: 70px;
font-size: 4rem;
color: white;
}

#send-testimonial{
padding-left: 5px;
margin-left: 4%;
margin-bottom: 3%;
width: 130px;
height: 60px;
font-size: 2.5em;
color: #043c49;
border-radius: 4px;
cursor: pointer;
}

#send-testimonial:hoover{
  font-weight: bold;
  border:solid;
  color: white;
}

/*
Appling style Banner bottom
*/

.bottom-pic{
display: flex;
background-image: url("../assets/img/dont-buy-adopt.png");
height: 700px;
widht:100%;
background-position: left top;
background-repeat: no-repeat;
background-size: cover;
position: relative;
margin-top: 15px;
}


/*
Settig up Styles Forms
*/


.form-sections {
font-size: 1.4em;
color: #087992;
font-weight: bold;

justify-content: center;
align-items: center;
width: 60%;
border-radius: 5px;
background-color: #68bbd9;
padding: 20px;
margin: 20px;
margin-left: 18%;
}

.linkform {
display: flex;
justify-content: center;
margin-top: 5%;
align-items: center;
color: #087992;
text-decoration: none;
}

.link {
text-decoration: none;
color: #087992;
font-size: 1.4em;
}

.link:hover {
color: white;
}

input[type="text"],
input[type="password"],
select,
textarea {
width: 100%;
font-size: 0.8em;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical;
}

input[type="submit"],
input[type="reset"] {
background-color: #087992;
font-size: 1.2em;
width: 100px;
color: white;
justify-content: center;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}

input[type="submit"]:hover,
input[type="reset"]:hover {
background-color: #68d86f;
}

.btnForm {
display: flex;
justify-content: center;
margin-left: 15px;

}

#login-form {
  margin-left: 35%;
  width: 30%;
}

#reg-form{
margin-left: 35%;
width: 30%;
}

.formsTitle{
  color: #043c49;
  font-size: 1.5em;
  padding-bottom: 20px;
}