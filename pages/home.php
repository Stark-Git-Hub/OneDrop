<?php 
   session_start(); 
   include "../server/connectdb.php";

if(isset($_SESSION["Email"]))
{
$query= "SELECT * FROM users WHERE is_donor='Donor' ";
$query_run= $conn->query($query);
$num_rows=mysqli_num_rows($query_run);

$query1= "SELECT * FROM users WHERE is_doctor='Doctor' ";
$query_run1= $conn->query($query1);
$num_rows1=mysqli_num_rows($query_run1);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneDrop | Home</title>
    <link href="../styles/slideshow.css" rel="stylesheet" type="text/css">
    <link href="../styles/main.css" rel="stylesheet" type="text/css">
    <style>
        #home {
            background-color: #9a9b9c;
        }

        #home a {
            color: white;
        }
    </style>
</head>

<body>
    <section id="main">
    <?php include 'header.php';?>
    <div class="container">
        <div class="slideshow-container">
            <div class="slideshow-inner">
                <div class="mySlides fade">
                    <img src='../Images/poster1.jpg' style='width: 100%; height: 100%;' alt="poster1" />
                </div>

                <div class="mySlides fade">
                    <img src='../Images/poster2.jpg' style='width: 100%; height: 100%;' alt="poster2" />
                </div>

                <div class="mySlides fade">
                    <img src='../Images/poster3.jpg' style='width: 100%; height: 100%;' alt="poster3" />
                </div>

                <a class="prev" onclick='plusSlides(-1)'>&#10094;</a>
                <a class="next" onclick='plusSlides(1)'>&#10095;</a>
            </div>
            <br>

            <div style='text-align: center;'>
                <span class="dot" onclick='currentSlide(1)'></span>
                <span class="dot" onclick='currentSlide(2)'></span>
                <span class="dot" onclick='currentSlide(3)'></span>
            </div>
        </div>
        <br>
        <div id="number">
           
            <?php
                if(isset($_SESSION["Email"]))
                {
                 echo " <div class='nc'> <p style='font-size: 30px; color: #cf5742;'> ";
                 echo "$num_rows";
                 echo " </p>
                 <p>Verified Donors</p>
             </div>";
                }
                else
                {
                    echo "";
                }
                ?>
                
            <?php
                if(isset($_SESSION["Email"]))
                {
                echo "
            <div class='nc'>
                <p style='font-size: 30px; color: #cf5742;'>0</p>
                <p>Completed Requests</p>
            </div>
            <div class='nc'>
                <p style='font-size: 30px; color: #cf5742;'>0</p>
                <p>Partnered Hospitals</p>
            </div>";
            }
            ?>
            
                <?php
                if(isset($_SESSION["Email"]))
                {
                 echo " <div class='nc'> <p style='font-size: 30px; color: #cf5742;'> ";
                 echo "$num_rows1";
                 echo " </p>
                 <p>Registered Doctors</p>
             </div>";
                }
                else
                {
                    echo "";
                }
                ?>
                
        </div>
        <div class="box">
            <div style="padding: 20px; grid-column: 1/4;">
                <h2 style="color: #cf5742;">Why Blood Donation?</h2>
                <hr>
                <p style="text-align: justify; padding: 10px;">An adequate supply of safe blood is an essential
                    component of any healthcare system. Blood donations help person
                    suffering from chronic-illness, individuals undergoing surgical procedures, and people who are
                    wounded or have
                    undergone physical trauma. Access to safe blood also has an essential, life-saving, role in maternal
                    and neonatal
                    care.As there is no alternative for human blood, an adequate supply of blood can only be assured
                    through regular donations.
                    Sri Lanka is one of the few countries where all blood and blood product needs are met through
                    voluntary, non-remunerated donations,
                    and the country has been able to maintain this status for decades. Sri Lanka is a shining example of
                    how it is possible to maintain
                    an adequate supply through voluntary donation; this status should be maintained as it is a model
                    that can be applied across the world.
                </p>
            </div>
            <div class="boxim" style="background-image: url('../Images/box1.jpg')"></div>
        </div>
        <div class="box">
            <div class="boxim" style="grid-column: 1/3; background-image: url('../Images/box2.jpg')"></div>
            <div style="padding: 20px; grid-column: 3/5;">
                <h2 style="color: #cf5742;">Benefits for you...</h2>
                <hr>
                <ul>
                    <li>Beneficial for the human heart.</li>
                    <li>Reduces cancer risk.</li>
                    <li>Boosts red blood cell production.</li>
                    <li>Lower cholestrol level.</li>
                    <li>Helps in weight loss.</li>
                    <li>Replenishes blood.</li>
                    <li>Aids in fighting hemochromitosis.</li>
                    <li>Improves overall cardiovascular health.</li>
                </ul>
            </div>
        </div>
        <div class="box">
            <div style="padding: 20px; grid-column: 1/3;">
                <h2 style="color: #cf5742;">Eligibilities to become a Donor</h2>
                <hr>
                <ul>
                    <li>Age above 18 years and below 60 years.</li>
                    <li>4 months should have passes since last donation.</li>
                    <li>Hemoglobin level should be more that 12g/dL.</li>
                    <li>Free from any serious disease condition or pregnancy.</li>
                    <li>Should have a valid identity card or any other document.</li>
                    <li>Free from "Risk Behaviours".</li>
                </ul>
            </div>
            <div class="boxim" style="grid-column:3/5; background-image: url('../Images/box3.jpg')"></div>
        </div>
        <div id="vm">
            <div class="nc">
                <h2 style="color: #cf5742; text-align: center;">Our Vision</h2>
                <hr>
                <p style="padding: 20px;">To be a unique model for the world securing Quality Assured Blood Services,
                    through a nationally coordinated system.</p>
            </div>
            <div class="nc">
                <h2 style="color: #cf5742; text-align: center;">Our Mission</h2>
                <hr>
                <p style="padding: 20px;">To ensure the quality, safety, adequacy and cost effectiveness of the blood
                    supply and related laboratory,
                    clinical, academic and research services in accordance with national requirements and WHO
                    recommendations.
                </p>
            </div>
        </div>
        <div id="video">
            <div class="vid">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ezafVzfJw60" allowfullscreen></iframe>
            </div>
            <div class="vid">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/O6w7W8WDP20" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
    </section>
    <script src="../scripts/slideshow.js"></script>
</body>

</html>