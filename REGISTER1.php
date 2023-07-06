

<?php

include_once('head.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="colors.css">
</head>
<body>

    <div class="container">
        <form action=""  name="form" method="post">
            <h2 class="text-primary text-center">REGISTRATION</h2>
            <div class="form-group">
                <label for="first" class="form-label col-sm-2">USER NAME :</label>
                <div class="col-sm-10">
                    <input type="text" id="first" class="form-control" value="" name="uname">
                    <span id="message" style="color:red"></span>
                </div>
            </div>

            <div class="form-group">
                <label for="first1" class="form-label col-sm-2">EMAIL :</label>
                <div class="col-sm-10">
                    <input type="email" id="first1" class="form-control" value="" name="mail">
                </div>
            </div>

            <div class="form-group">
                <label for="first2" class="form-label col-sm-2">PASSWORD :</label>
                <div class="col-sm-10">
                    <input type="password" id="first2" class="form-control" value="" name="pass">
                </div>
            </div>
            <div class="form-group">
                <label for="first3" class="form-label col-sm-2">RE-PASSWORD :</label>
                <div class="col-sm-10">
                    <input type="password" id="first3" class="form-control" value="" name="res">
                </div>
            </div>

            <div class="form-group ">
                <label for="first4" class="col-sm-2 form-label mb-3" >SELECT GENDER :</label>
                <div class="col-sm-10 ">
                    <input type="radio" id="male" name="gn" value="male">&nbsp;&nbsp;MALE
                    <input type="radio" id="female" name="gn" value="female">&nbsp;&nbsp;FEMALE
                    <input type="radio" id="others" name="gn" value="others" >&nbsp;&nbsp;OTHERS 
                    <span id="gen" style="color:red"></span>  
                    <p id="er" style="color:blue"></p>                
                </div>
            </div>

            <div class="form-group">
                <label for="first5" class="form-label col-sm-2 mb-3" >QUALIFICATION :</label>
                <div class="col-sm-10 mb-3">
                    <input type="radio" id="tech" name="tech" value="B.TECH"> B.TECH&nbsp;&nbsp;
                    <input type="radio" id="tech1" name="tech" value="DEGREE"> DEGREE&nbsp;&nbsp;
                    <input type="radio" id="tech2" name="tech" value="M.TECH"> M.TECH&nbsp;&nbsp;
                  <input type="radio" id="tech3" name="tech" value="PG"> PG    &nbsp;&nbsp;

                    
                    <span id="yes" style="color:blue"></span>
                    <p id="no" style="color:red"></p>
                </div>
            </div>

            <div class="form-group">
                <label for="first6" class="form-label col-sm-2 ">SELECT STATE :</label>
                <div class="col-sm-10" value="" id="first6">
                    <select name="state" class="form-control mb-3" id="first6">
                        <option value="select">--SELECT STATE--</option>
                        <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                        <option value="TELANGANA">TELANGANA</option>
                        <option value="ODISSA">ODISSA</option>

                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="first7" class="form-label col-sm-2 " >DATE OF BIRTH :</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" value="" id="first7" name="dob">
                </div>
            </div>
<div class="form-group">
    <!-- <label for="first8" class="col-sm-2 form-check">REMEMBER ME :</label> -->
    <div class="col-sm-10">
        <input type="checkbox" value="" id="first8" class="mt-4">&nbsp;&nbsp;CHECKBOX
    </div>
</div>
    <button type="submit" class="btn btn-info btn-md col-sm-offset-6  d-grid gap-2 col-6 mx-auto" onclick="fun()" value="" name="submit">SUBMIT</button>
        </form>
    </div>

<h3 id="fun" class="text-danger"></h3>


    </body></html>


    <?php
    
    include_once('db.php');
    
if(isset($_POST['submit'])){

$name = $_POST['uname'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$res = $_POST['res'];
$gen = $_POST['gn'];
$qul = $_POST['tech'];
$st = $_POST['state'];
$db = $_POST['dob'];

$sql = "insert into pro(name,email,pass,reps,gender,qul,state,dob ) values ('$name' , '$mail','$pass', '$res' , '$gen','$qul','$st','$db' )";

$result =mysqli_query($con,$sql);
if(!$result){
    die("failed".mysqli_error($con));
}

}




?>


<?php
include_once('footer.php')
?>




















    <!-- <script>

        var str= '';
        function fun(){

            // user name
            var name = document.getElementById('first').value;

             var letter = /^[a-zA-Z\-]+$/;
           if(name ==null || name==""){
            alert("mest be enter username");           
           }
           else if(!name.match(letter)){
            alert("alphabets only");
           }
           else if(name.length < 3){
            alert("min 3");

           }
           else if(name.length > 6){
           document.getElementById('message').innerHTML='<p>read</p>'
           }
           else{
            str+="<br>User name: "+name;
           }

// email
            var name2 = document.getElementById('first1').value;
            var mail =/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
       
           if(name2==null || name2==""){
            alert("email must be fill");
           }
           else if(!name2.match(mail)){
            alert("invalid mail")
           }
           else{
            str+="<br>Email : "+name2;
            
           }

        //    password

           var pass=document.getElementById('first2').value;
           var pass1=document.getElementById('first3').value;
           var capital =  /[A-Z]/.test(pass);
           if(pass == null || pass ==""){
            alert("must be enter")
           }
           else if(!capital){
            alert("first letter capital")
           }
            else if(pass != pass1){
                alert("not same pass")
            }
            else{
                str+="<br>PASSWORD :"+pass;
            }

            // gender
            var male=document.getElementById('male').value;
            var female=document.getElementById('female').value;
            var others=document.getElementById('others').value;

                if(document.getElementById('male').checked){
                    document.getElementById('gen').innerHTML='<p>selected male</p>';
                    str+="<br>Gender: Male";
                }
                else if(document.getElementById('female').checked){
                    document.getElementById('gn').innerHTML='<p>selected female</p>';
                    str+="<br>Gender: feMale";
                }

                else if(document.getElementById('others').checked){
                    document.getElementById('gn').innerHTML='<p>selected others</p>'
                    str+="<br>Gender: others";
                }
                else{
                    document.getElementById('er').innerHTML='<p>not selected</p>'
                }
                
                //state select
                var select=document.forms.form.state.value;

                if(select==0){
                    alert("must be select state");
                }
                else{
                    str+="<br>State: "+select;
                }

                var date =document.getElementById('first7').value;

                if(date==null || date==""){
                    alert("must be enter date");
                }

                var check=document.getElementById('first8').value;

                if(check == null || check==""){
                    alert("msut be fill checkbox")
                }


                // qualification


                var key =document.getElementById('tech'),value;
                var key1 =document.getElementById('tech1'),value;
                var key2 =document.getElementById('tech2'),value;
                var key3 =document.getElementById('tech3'),value;

                if(document.getElementById('tech').checked){
                    document.getElementById('yes').innerHTML='<p>selected btech</p>';
                   str+="<br>COURSE :BTECH";
                }
                else if(document.getElementById('tech1').checked){
                    document.getElementById('yes').innerHTML='<p>selected degree</p>';
                    str+="<br>COURSE :DEGREE";
                }
              else  if(document.getElementById('tech2').checked){
                    document.getElementById('yes').innerHTML='<p>selected mtech</p>';
                    str+="<br>COURSE :MTECH";
                }
               else if(document.getElementById('tech3').checked){
                    document.getElementById('yes').innerHTML='<p>selected pg</p>';
                    str+="<br>COURSE :PG";
                }
                else{
                    document.getElementById('no').innerHTML='<p>you are not selected</p>'
                }

                var dt =document.getElementById('first7');
                if(dt==null || dt==""){
                    alert("pls enter date");
                }
                else{
                    str+="<br>date of birth :"+dt;
                }

              document.getElementById('fun').innerHTML=str;
           }
            


        
    </script> -->

   