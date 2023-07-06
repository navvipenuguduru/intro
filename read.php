

<?php
include_once('head.php');
?>







  <h2> <a href="INDEX.php" class="nav-link mt-3">BACK TO HOME &nbsp;&nbsp; &nbsp;&nbsp;<i class="bi bi-house-door"></i></a>
</h2>
<table class="table">
  <thead>
    <H1 class="mt-5">REGISTERED CANDIDATES</H1>
    <tr >
      <th scope="col">S.NO</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">REPASS</th>
      <th scope="col">GENDER</th>
      <th scope="col">QUALIFICATION</th>
      <th scope="col">STATE</th>
      <th scope="col">DOB</th>
      <th scope="col">OPERATIONS</th>
    </tr>
  </thead>
  <tbody>

  <?php
include_once('db.php');
$sql ="select * from pro";
    $result =mysqli_query($con,$sql);
    if($result){
        while($row =mysqli_fetch_array($result)){
           echo ' <tr>
           
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['pass'].'</td>
            <td>'.$row['reps'].'</td>
            <td>'.$row['gender'].'</td>
            <td>'.$row['qul'].'</td>
            <td>'.$row['state'].'</td>
            <td>'.$row['dob'].'</td>
            <td><a href="view.php?id='.$row['id'].'"><i class="bi bi-eye-fill"></i></a></td>
            <td><a href="delete.php?id='.$row['id'].'"><i class="bi bi-trash3-fill"></i></a></td>
            <td><a href="update.php?id='.$row['id'].'"><i class="bi bi-pencil-square"></i></a></td>

          </tr>';
        }
    }
  ?>
 

  </tbody>
</table>

<?php
include_once('footer.php');
?>
</body>
</html>