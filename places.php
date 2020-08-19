
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="font.css">
    
    

    <title>All Places|Placey2|Places</title>
  </head>
  <body style="background-color:white;">
<div class="backgorund"style="background-image:url('background.jpg');">
<p style="font-size:50px;text-align:center;font-style:italic;color:pink;padding-top:40px;"> Explore the new places</P>
<div style="padding-top:100px;font-size:50px;text-align:center;font-style:georgia;">
All Places
</div>
</div>
</div>

<?php 
$host = "localhost";
$user = "u139817065_shrutik";
$pass = "9822174187";
$db = "u139817065_registration";

$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "select * from places order by id desc ";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
//for single row
//$singleRow = mysqli_fetch_row($result);
 
//print_r($singleRow);
 
//echo "<hr>";
//images

//for all records	

echo"<div style='padding-top:30px;'>";
echo"</div>";

echo"<div class='info'>";

while($row = mysqli_fetch_assoc($result))
{ 
  echo"<div style='padding-top:30px;'>";
echo"</div>";

echo"<div style='  font-size:30px;
display: block;
word-break: break-wordS;
float:centre;'>";
  echo "<img src='images/".$row['image']."' style='height:23vw;width:40vw;'>"."<br>";
   
echo "Location:  ". "<b>".ucfirst( $row['countryname']).",". ucfirst( $row['statename'])."</b>"."<br>";
echo "placename:  "."<b>" .ucfirst( $row['cityname']).",". ucfirst( $row['placename'])."</b>"."<br>";
echo "category :  "."<b>" .ucfirst( $row['category'])."</b>"."<br>";
echo "description: ";
echo"</div>";

$newdata=ucfirst( $row['description']);
$newdata1=trim($newdata);
echo"<div style='font-size:20px;'>";
echo "$newdata1";
echo"</div>";
echo"<div class='info'style='padding-top:100px;'>";

}
echo"</div>";

?>

<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://shrutikplacey2.matomo.cloud/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src='//cdn.matomo.cloud/shrutikplacey2.matomo.cloud/matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
<!-- Matomo Image Tracker-->
<img src="https://shrutikplacey2.matomo.cloud/matomo.php?idsite=1&amp;rec=1" style="border:0" alt="" />
<!-- End Matomo -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type='text/javascript' src='//pl15430392.passtechusa.com/e3/aa/31/e3aa311dd4f0dc1435e5cd7a6274e68d.js'></script>
  </body>
</html>