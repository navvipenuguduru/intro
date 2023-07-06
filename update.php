

<?php
    
    include_once('db.php');
    

if(isset($_GET['id'])){
    $id =$_GET['id'];

    $sql ="select * from pro where id =$id";
    if($result =mysqli_query($con,$sql)){
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

       
            
            $name1 =$row['name'];
            $name2 =$row['email'];
            $name3 =$row['pass'];
            $name4 =$row['reps'];
        
            $name5 =$row['gender'];
            
            $name6 =$row['qul'];
            $name7 =$row['state'];
            $name8 =$row['dob'];
        }
    }
 


if(isset($_POST['submit'])){

$name = $_POST['uname'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$res = $_POST['res'];
$gen = $_POST['gn'];
$qul = $_POST['tech'];
$st = $_POST['state'];
$db = $_POST['dob'];

$sql = "update pro set name= '$name', email='$mail', pass='$pass',reps='$res' ,gender='$gen' , qul='$qul',state='$st', dob= '$db' where id=$id  ";
$result =mysqli_query($con,$sql);
if($result){
   header('location:read.php');
}
else{
die(mysqli_error($con));
}


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
</head>
<style>
    body{
        /* background-image: url('https://wallpapercave.com/wp/wc1786810.jpg'); */
    }
</style>
<body>

    <div class="container">
        <form action="<?php htmlspecialchars($_SERVER['REQUEST_URI']) ?>" class="form-horizontal" name="form" method="post">
            <h2 class="text-primary">REGISTRATION</h2>
            <div class="form-group">
                <label for="first" class="control-label col-sm-2">USER NAME :</label>
                <div class="col-sm-10">
                    <input type="text" id="first" class="form-control" value="<?php echo $name1 ?>" name="uname">
                    <span id="message" style="color:red"></span>
                </div>
            </div>

            <div class="form-group">
                <label for="first1" class="control-label col-sm-2">EMAIL :</label>
                <div class="col-sm-10">
                    <input type="email" id="first1" class="form-control"  value="<?php echo $name2 ?>" name="mail">
                </div>
            </div>

            <div class="form-group">
                <label for="first2" class="control-label col-sm-2">PASSWORD :</label>
                <div class="col-sm-10">
                    <input type="password" id="first2" class="form-control" value="<?php echo $name3 ?>" name="pass">
                </div>
            </div>
            <div class="form-group">
                <label for="first3" class="control-label col-sm-2">RE-PASSWORD :</label>
                <div class="col-sm-10">
                    <input type="password" id="first3" class="form-control" value="<?php echo $name4 ?>" name="res">
                </div>
            </div>

            <div class="form-group">
                <label for="first4" class="col-sm-2 control-label">SELECT GENDER :</label>
                <div class="col-sm-10">
                    <input type="radio" id="male" name="gn" value="male">&nbsp;&nbsp;MALE
                    <input type="radio" id="female" name="gn" value="female"  >&nbsp;&nbsp;FEMALE
                    <input type="radio" id="others" name="gn" value="others" >&nbsp;&nbsp;OTHERS 
                    
                   
                </div>
            </div>

            <div class="form-group">
                <label for="first5" class="control-label col-sm-2 ">QUALIFICATION :</label>
                <div class="col-sm-10">
                    <input type="radio" id="tech" name="tech" value="B.TECH"> B.TECH&nbsp;&nbsp;
                    <input type="radio" id="tech1" name="tech" value="DEGREE"> DEGREE&nbsp;&nbsp;
                    <input type="radio" id="tech2" name="tech" value="M.TECH"> M.TECH&nbsp;&nbsp;
                  <input type="radio" id="tech3" name="tech" value="PG"> PG    &nbsp;&nbsp;

                    
                    <span id="yes" style="color:blue"></span>
                    <p id="no" style="color:red"></p>
                </div>
            </div>

            <div class="form-group">
                <label for="first6" class="control-label col-sm-2">SELECT STATE :</label>
                <div class="col-sm-10" value="" id="first6">
                    <select name="state" class="form-control" id="first6">
                        <option value="select">--SELECT STATE--</option>
                        <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                        <option value="TELANGANA">TELANGANA</option>
                        <option value="ODISSA">ODISSA</option>

                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="first7" class="control-label col-sm-2" >DATE OF BIRTH :</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" value="<?php echo $name8 ?>" id="first7" name="dob">
                </div>
            </div>
<div class="form-group">
    <label for="first8" class="col-sm-2 control-label">REMEMBER ME :</label>
    <div class="col-sm-10">
        <input type="checkbox" value="" id="first8">&nbsp;&nbsp;CHECKBOX
    </div>
</div>
    <button type="submit" class="btn btn-info btn-md col-sm-offset-6" onclick="fun()" value="" name="submit">UPDATE</button>
        </form>
    </div>

<h3 id="fun" class="text-danger"></h3>


    </body></html>


 
