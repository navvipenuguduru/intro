
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg position-sticky top-0 " style="z-index:2" id="myP" > 
        <div class="container-fluid  bg-dark" >
          <a class="navbar-brand text-info ms-5 " href="#"><img src="https://th.bing.com/th/id/R.f23778460df068a070243104345e2f0b?rik=rM8Ugybe1GQ7cA&riu=http%3a%2f%2f4.bp.blogspot.com%2f-ds227LvoTqk%2fThCuNYcoGYI%2fAAAAAAAAAGQ%2fG5NQZ-zxPsM%2fs1600%2fgandhi_sepia.jpg&ehk=CRuSyVWpifSU1qOmjk0plACK05crrzh55FquZl%2fzWHQ%3d&risl=&pid=ImgRaw&r=0" style="height:90px;width:120px" class="rounded-circle z"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a class="nav-link active text-light a" href="INDEX.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light a" href="#my" >ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light a" href="login.php">LOGIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light a" href="career.php">CAREER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light a" href="REGISTER1.php">REGISTER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light a" href="#con">CONTACT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light a" href="admin.php">ADMIN PAGE</a>
              </li>
            
          </div>
       
      </nav>

    <div class="container bg-primary">
    <h2 class="text-center">LOGIN PAGE</h2>
<form class="form-horizontal " action="" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">NAME</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" name ="uname">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">PASSWORD</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword3" name ="pass">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit">Sign in</button>
    </div>
  </div>
</form>
</div>
</body>
</html>

<?php
include_once('db.php');
 if(isset($_POST['submit'])){
  $name =$_POST['uname'];
  $pass =$_POST['pass'];
$sql ="select * from login where name='$name' and pass='$pass'";

  $result =mysqli_query($con,$sql);
  $row =mysqli_fetch_array($result,MYSQLI_ASSOC);
$count =mysqli_num_rows($result);
if($count==1){
    header("location:read.php");
}
else{
  echo '<script>
  alert("failed to login");
  </script>';
}
 }

?>
<?php
include_once('footer.php');
?>