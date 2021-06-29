<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OneDrop | Register</title>
  <link rel="stylesheet" type="text/css" href="../styles/register.css">
</head>
<body>
<?php include '../server/register_val.php';?>
<?php include 'header.php';?>
<div class="container4">
    <div class="content">
<img src="https://alextimes.com/wp-content/uploads/2019/12/organ-donor.jpg">
            <h1 class="form-title">Register Here</h1>
      <form method="post" action=""> 
      
      <div class="row">
      
       <div class="col-50">

          <div class="beside">
            <!--title-->
            <select name="title_" >
                    <option value=""disabled selected hidden>Title</option>
                    <option <?php if (isset($title_) && $title_=="Mr") echo "selected";?> value="Mr">Mr</option>
                    <option <?php if (isset($title_) && $title_=="Mrs") echo "selected";?> value="Mrs">Mrs</option>
                    <option <?php if (isset($title_) && $title_=="Miss") echo "selected";?>value="Miss">Miss</option>
            </select>
            <br>
            <p class="error"><?php echo $errorTI;?></p>
            <br>
            <!--First_name-->
            <input type="text" id="fname" name="name" placeholder="First Name" value="<?php echo $name;?>">
            <span class="error"> <?php echo $nameErr;?></span><br><br>
            <!--Last_name-->
            <input type="text" id="fname" name="lname" placeholder="Last Name" value="<?php echo $lname;?>">
            <span class="error"> <?php echo $lnameErr;?></span><br><br>
          </div>

          <div class="beside">
            <!--gender-->
            <select name="gender">
                    <option value=""disabled selected hidden>GENDER</option>
                    <option <?php if (isset($gender) && $gender=="male") echo "selected";?> value="male">MALE</option>
                    <option <?php if (isset($gender) && $gender=="female") echo "selected";?> value="female">FEMALE</option>
                    <option <?php if (isset($gender) && $gender=="non_binary") echo "selected";?> value="non_binary">NON-BINARY</option>
            </select>
            <p class="error"><?php echo $errorGE;?></p>
            <!--Date of Birth-->
            <label for="dateofbirth">DOB</label>
            <input type="date" name="dateofbirth" id="dateofbirth" value="<?php echo $DateofBirth;?>">
            <p class="error"><?php echo $errorD;?></p>
          </div>

          <div class="x">
          <!--NIC number-->
               <input type="text" placeholder="NIC NUMBER" name="nic" value="<?php echo $nic;?>">
               <p class="error"><?php echo $errorNIC;?></p>
          </div>

          <div class="beside">  
            <!--contact number 1-->
            <input type="number" id="tel" name="tel" placeholder="Contact Number1" value="<?php echo $tel;?>">
            <span class="error"> <?php echo $phoneErr;?></span><br><br>
            <!--contact number 2-->
            <input type="number" id="tel" name="tel2" placeholder="Contact Number2" value="<?php echo $tel2;?>">
            <span class="error"> <?php echo $phoneErr2;?></span><br><br>
          </div>

          <!--permanent Address-->
          <input type="text" id="adr" name="address" placeholder="Permanent Address" value="<?php echo $add;?>">
          <p class="error"><?php echo $errorP;?></p>

          <!--temporary address-->
          <input type="text" id="adr" name="t_address" placeholder="Temporary Address" value="<?php echo $tadd;?>">
          <p class="error"><?php echo $errorT;?></p>
          <div class="x">
          <!--city-->
          <select name="city">
                    <option value=""disabled selected hidden>DISTRICT</option>
                    <optgroup label="Northern">
                      <option <?php if (isset($city) && $city=="Jaffna") echo "selected";?> value="Jaffna">Jaffna</option>
                      <option <?php if (isset($city) && $city=="Kilinochchi") echo "selected";?> value="Kilinochchi">Kilinochchi</option>
                      <option <?php if (isset($city) && $city=="Mannar") echo "selected";?> value="Mannar">Mannar</option>
                      <option <?php if (isset($city) && $city=="Mullaitivu") echo "selected";?> value="Mullaitivu">Mullaitivu</option>
                      <option <?php if (isset($city) && $city=="Vavuniya") echo "selected";?> value="Vavuniya">Vavuniya</option>
                    </optgroup>
                    <optgroup label="NorthWestern">
                      <option <?php if (isset($city) && $city=="Puttalam") echo "selected";?> value="Puttalam">Puttalam</option>
                      <option <?php if (isset($city) && $city=="Kurunegala") echo "selected";?> value="Kurunegala">Kurunegala</option>
                    </optgroup>
                    <optgroup label=" Western">
                      <option <?php if (isset($city) && $city=="Gampaha") echo "selected";?> value="Gampaha">Gampaha</option>
                      <option <?php if (isset($city) && $city=="Colombo") echo "selected";?> value="Colombo">Colombo</option>
                      <option <?php if (isset($city) && $city=="Kalutara") echo "selected";?> value="Kalutara">Kalutara</option>
                    </optgroup>
                    <optgroup label="NorthCentral">
                      <option <?php if (isset($city) && $city=="Anuradhapura") echo "selected";?> value="Anuradhapura">Anuradhapura</option>
                      <option <?php if (isset($city) && $city=="Polonnaruwa") echo "selected";?> value="Polonnaruwa">Polonnaruwa</option>
                    </optgroup>
                    <optgroup label="Central">
                      <option <?php if (isset($city) && $city=="Matale") echo "selected";?> value="Matale">Matale</option>
                      <option <?php if (isset($city) && $city=="Kandy") echo "selected";?> value="Kandy">Kandy</option>
                      <option <?php if (isset($city) && $city=="Nuwara Eliya") echo "selected";?> value="Nuwara Eliya">Nuwara Eliya</option>
                    </optgroup>
                    <optgroup label="Sabaragamuwa">
                      <option <?php if (isset($city) && $city=="Kegalle") echo "selected";?> value="Kegalle">Kegalle</option>
                      <option <?php if (isset($city) && $city=="Ratnapura") echo "selected";?> value="Ratnapura">Ratnapura</option>
                    </optgroup>
                    <optgroup label="Eastern">
                      <option <?php if (isset($city) && $city=="Trincomalee") echo "selected";?> value="Trincomalee">Trincomalee</option>
                      <option <?php if (isset($city) && $city=="Batticaloa") echo "selected";?> value="Batticaloa">Batticaloa</option>
                      <option <?php if (isset($city) && $city=="Ampara") echo "selected";?> value="Ampara">Ampara</option>
                    </optgroup>
                    <optgroup label="Uva">
                      <option <?php if (isset($city) && $city=="Badulla") echo "selected";?> value="Badulla">Badulla</option>
                      <option <?php if (isset($city) && $city=="Monaragala") echo "selected";?> value="Monaragala">Monaragala</option>
                    </optgroup>
                    <optgroup label="Southern">
                      <option <?php if (isset($city) && $city=="Hambantota") echo "selected";?> value="Hambantota">Hambantota</option>
                      <option <?php if (isset($city) && $city=="Matara") echo "selected";?> value="Matara">Matara</option>
                      <option <?php if (isset($city) && $city=="Galle") echo "selected";?> value="Galle">Galle</option>
                    </optgroup>
              </select>
              <p class="error"><?php echo $errorC;?></p>
          </div>
          <!--email-->
          <input type="text" id="email" name="email" placeholder="email-address" value="<?php echo $email;?>">
          <span class="error"> <?php echo $emailErr;?></span><br><br>

          </div>  
         

          <div class="col-50">
            <!--password and to doublecheck it-->
            <div class="beside">
                <input type="password" placeholder="PASSWORD" name="psw1" value="<?php echo $psw1;?>"><br>
                <!--<p class="error"><?php echo $errorPSW;?></p>-->
                <input type="password" placeholder="CONFIRM PASSWORD" name="psw2" value="<?php echo $psw2;?>">
                <p class="error"><?php echo $errorCPSW;?></p>
            </div>
            </br>
            <!--blood group-->
            <select name="bloodgroup">
                    <option value=""disabled selected hidden>BLOOD GROUP</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
            </select></br>
            <p class="error"><?php echo $errorB;?></p>
            <br>
            <p> I AM...</p>
            <!--<p class="error"><?php echo $errorR1;?></p>-->
            <!--check whether he is donor or not-->
            <input type="checkbox" id="role1" name="is_donor" value="Donor">
            <label for="role1"> DONOR</label><br>
            <p class="error"><?php echo $errorR1;?></p>
            <!--check whether he is doctor or not-->
            <input type="checkbox" id="role1" name="is_doctor" value="Doctor">
            <label for="role1"> DOCTOR</label><br><br>
            <p class="error"><?php echo $errorR2;?></p>
            <hr>
            <button type="button" class="c_t" style="background-color:#CC8888;">By creating account you are agreeing to our <span class="y">terms & conditions</span></button>
              <div class="terms">
               <p><ul>
                    <li>Age above 18 years and below 60 years.</li>
                    <li>4 months should have passes since last donation.</li>
                    <li>Hemoglobin level should be more that 12g/dL.</li>
                    <li>Free from any serious disease condition or pregnancy.</li>
                    <li>Should have a valid identity card or any other document.</li>
                    <li>Free from "Risk Behaviours".</li>
                </ul></p>
              </div>
       </div>

      </div>

        <input type="submit" name="save" value="Submit" class="btn">
      </form>
    </div>
</div>
</section>
<?php include 'footer.php';?>
<script>
var coll = document.getElementsByClassName("c_t");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</body>
</html>
