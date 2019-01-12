<?php
 session_start();
 include("function.php");
 echo check_login();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
   <title>Praktik Login Session</title>
   <style>


   body{

   background-color: #FFEEAD;
}
   h1 {
     margin-top:20%;
     font-family:sans-serif;
     color: #AAD8B0;
   }

   a {
     font-family: sans-serif;
     text-decoration: none;
     color: #FF6F69;
   }
   a:hover{
     color: #B76F69;
     transition: 0,5s;
   }
   </style>
   </head>
   <body>
     <center><h1>Selamat Datang ^^</h1></center>
     <center><h3><a href="logout.php" onclick="return confirm('Apa anda yakin ingin keluar?')">LOGOUT</a></h3></center>
   </body>
 </html>
