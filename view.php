
<?php
    include_once('db.php');
    if(isset($_GET['id'])){
        $num =$_GET['id'];

        $sql ="select * from pro where id=$num";

        if($stmt=mysqli_prepare($con,$sql)){
            if(mysqli_stmt_execute($stmt)){
                $result =mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result)==1){
                    $row =mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $name =$row['name'];
                    $name1 =$row['email'];
                    $name2 =$row['pass'];
                    $name3 =$row['reps'];
                    $name4 =$row['gender'];
                    $name5 =$row['qul'];
                    $name6 =$row['state'];
                    $name7 =$row['dob'];
                }
            }
        }
    }

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">USERS</th>
      <th scope="col">DETAILS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>NAME</td>
      <td><?php echo $name ?></td>
    </tr>
    <tr>
      <td>EMAIL</td>
      <td><?php echo $name1 ?></td>
    </tr>
    <tr>
      <td>PASSWORD</td>
      <td><?php echo $name2 ?></td>
    </tr>
    <tr>
      <td>REPS</td>
      <td><?php echo $name3 ?></td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td><?php echo $name4 ?></td>
    </tr>
    <tr>
      <td>QUALIFICATION</td>
      <td><?php echo $name5 ?></td>
    </tr>
    <tr>
      <td>STATE</td>
      <td><?php echo $name6 ?></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><?php echo $name7 ?></td>
    </tr>
  </tbody>
</table>