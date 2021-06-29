<?php 
    session_start();  
    include "../server/connectdb.php";
    if(!isset($_SESSION["Email"]))
{ header("location:sign.php?error=*Please login");
  exit();
}
 ?>
<!DOCTYPE html>
<html>

<head>
  <link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>OneDrop | Search</title>
  <link href="../styles/search.css" rel="stylesheet" type="text/css">
  <script src="../scripts/searchlist.js"></script>
  <link href="../styles/main.css" rel="stylesheet" type="text/css">
  <style>
    #en {
      background-color: #9a9b9c;
    }

    #en a {
      color: white;
    }
  </style>
</head>

<body>
 
  <section id="main2">
   <?php include 'header.php';?>
    <br>
    <div class="container5">
      <div class="box2">

        <form action="search.php" method="post" style="max-width:500px;margin:10px">
          <h2 style="margin-top: 0;margin-bottom: 5px;"><i class="material-icons" style="font-size:40px;color:red">search</i>Search</h2>
          <table><tr><th>
          
          <select name="bloodgroup" class="input-field" required>
            <option value="" disabled selected hidden>Blood group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
          </select>
          </th><th>
          
          <select name="province" id="province" input class="input-field" required>
            <option value="" selected="selected">Province</option>
          </select>
          </th><th >
          
          <select name="district" id="district" input class="input-field" required>
            <option value="" selected="selected">District</option>
          </select></th>
           <th><button type="submit"  name="search" class="button">Search</button>
           </th></tr></table>
          
        </form>
      </div>
    
     <?php
          if(isset($_POST['search']))
           {$blood = $_POST['bloodgroup'];
            $district = $_POST['district'];
            $query= "SELECT Full_name,Last_name,Email FROM users WHERE Blood_group='$blood' AND  District='$district' AND is_donor='Donor' ";
            $query_run= $conn->query($query);
            $num_rows=mysqli_num_rows($query_run);
      ?>
            
     <?php
     if($query_run->num_rows>0)
            { ?><br><table style="margin-left:5%;text-align:left;border: 3px solid white;width:90%;border-collapse: collapse;">
              <tr style="background-color: #ff3333;text-align:center;border: 3px solid white;color:white;" >
              <th class="th1"> Name</th>
              <th class="th1">E-mail</th>
              </tr>
            
              <?php
            while($row=mysqli_fetch_array($query_run))
               {                               
    ?>

     <tr>
     <td><?php echo $row['Full_name'] ." ".$row['Last_name']; ?></td>
     <td><?php echo $row['Email']; ?></td>
     </tr>  
     
     
      <?php
     }
     }
      else
           { 
             ?><br>
              <tr >
              <td ><p style="color:red;padding-left:5%" >* Sorry, No records available</p></td>
               </tr>
              <?php
           }
      ?>
        </table>
   <?php
      }
     ?>
    
 </div><br><br>
<?php include 'footer.php';?>
  </section>

</body>

</html>