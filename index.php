<?php
  session_start();
  if (isset($_SESSION["user"])) {
    header("location:beranda.php");
  }
  include("function.php");
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head><title>LOGIN</title></head>
   <style media="screen">
   *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}

body{
  background: #FFEEAD;
}
h2{
  margin-top: 8%;
}
h1{
  color: #fffce6;
  margin-top: 64px;
  font-size: 28px;
}

a{
  text-decoration: none;
}

div.kotak{
  background: #ffffff;
  width: 380px;
  height: 300px;
  margin: 20px auto 10px;
  overflow: hidden;
  margin-top: 180px;
}

.tengah{
  text-align: center;
}


div.kiri{
  float: left;
}

div.kanan{
  float: right;
}

span{
  font-size: 13px;
}

div.atas{
  height: 290px;
  padding: 30px 30px 0;
}

div.grup{
  margin: 10px 0;
}

a.a{
  font-size: 13px;
  color: #808080;
}

a.a.tombol{
  font-size: 14px;
  padding: 0 7px;
  border-radius: 3px;
  color: #ffffff;
  display: inline-block;
  line-height: 28px;
  width: 49.3%;
}

form{
  margin: 20px 0;
}

.login{
  margin-top: 10px;
  text-align: center;
}

input[type="text"],
input[type="password"]{
  width: 100%;
  height: 30px;
  padding: 0 10px;
  border: 1px solid #d9d9d9;
  color: #454545;
  outline: none;
}


input[type="submit"]{
  color: #ffffff;
  width: 88px;
  height: 28px;
  border: none;
  font-weight: bold;
  cursor: pointer;
  width: 100px;
  height: 40px;
  background:#FF6F69;
  margin: 30px 0
}

input[type="submit"]:hover{
  background-color: white;
  color: #FF6F69;
  transition: 0.3s;
}


span.info{
  color: #e6f8ff;
  line-height: 60px;
}

h3{
  text-align: center;
}
   </style>
   <body>

   <div class="kotak">
        <div class="atas">

     <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "wrong") {
            echo "<h3>Data Tidak Sesuai!!!</h3>";
          }
        }
        if (isset($_GET["notif"])) {
          if ($_GET["notif"] == "logout") {
            echo "<h3>Berhasil Logout! </h3>";
          }
        }
        if (isset($_POST['submit'])) {
          echo do_login($_POST['username'], $_POST['password']);
        }
      ?>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="login">
          <h2>L O G I N</h2>
          <br>
        </div>
      <div class="grup">
      <input type="text" placeholder="Username" name="username">
  </div>

  <div class="grup">
      <input type="password" placeholder="Password" name="password">
  </div>


      <div class="grup tengah">
          <input type="submit" name="submit" value="SIGN IN"></input>
      </div>


</form>
</div>

</div>
      </form>
   </body>
 </html>
