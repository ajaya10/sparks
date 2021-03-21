
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transfer Money</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">

  <style type="text/css">
    button{
      transition: 1.5s;
    }
    button:hover{
      background-color:white;
      color: white;
    }
    body{
      background-color:pink;




      font-size: 15px;
      font-weight: bolder;

    }
  </style>
</head>


<?php
  include 'connection.php';
  $conn = mysqli_connect("localhost", "root","","dbmy");
  $sql = "SELECT * FROM viewcustomer";
  $result = mysqli_query($conn,$sql);
?>



<div class="container">
      <h2 class="text-center pt-4" style="color : black;">Transfer Money</h2>
      <br>
          <div class="row">
              <div class="col">
                  <div class="table-responsive-sm">
                  <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                      <thead style="color :  black">
                          <tr>
                          <th scope="col" class="text-center py-2">Id</th>
                          <th scope="col" class="text-center py-2">Name</th>
                          <th scope="col" class="text-center py-2">E-Mail</th>
                          <th scope="col" class="text-center py-2">Balance</th>
                          <th scope="col" class="text-center py-2">Operation</th>
                          </tr>
                      </thead>
                      <tbody>
              <?php
                  while($rows=mysqli_fetch_assoc($result)){
              ?>
                  <tr style="color :black">
                      <td class="py-2"><?php echo $rows['ID'] ?></td>
                      <td class="py-2"><?php echo $rows['Name']?></td>
                      <td class="py-2"><?php echo $rows['Email']?></td>
                      <td class="py-2"><?php echo $rows['Balance']?></td>
                      <td><a href="selecteduserdetail.php?id= <?php echo $rows['ID'] ;?>"> <button type="button" class="btn" style="background-color : #A569BD;">Transact</button></a></td>
                  </tr>
              <?php
                  }
              ?>

                      </tbody>
                  </table>
                  </div>
              </div>
          </div>
       </div>

       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
