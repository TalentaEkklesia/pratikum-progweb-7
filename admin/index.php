<!DOCTYPE html>
<html>
<head>
  <link rel="Stylesheet" type="text/css" href="style.css">
  <title>Login</title>
</head>
<body>
<div class="page">
  <?php 
   if(isset($_GET['pesan'])){
     if($_GET['pesan'] == "gagal"){
       echo "<center>Login gagal! username atau password salah!</center>";
     }
   }
  ?>
  <div class="container">
    <div class="right">
      <div class="login">Login</div>
      <div class="eula">Login untuk masuk ke menu utama.</div>
    </div>
    <div class="left">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193."
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#F1BFE7;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff4000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.5743" />
      </svg>
      <div class="form">
      <form method="post" action="ceklogin.php">
        <label for="Username">Username</label>
        <input type="text" name="username">
        <label for="password">Password</label>
        <input type="password" name="password">
        <input type="submit" id="login" value="Login">
      </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>