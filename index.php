<?
session_start();
 $query = (isset($_GET['query']) ? $_GET['query'] : null);
 $_SESSION['query']=$query;
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Placey2|Add Places|Find Places|Search Places|Placey<|Contact us|Search|Join Us|About</title>
    
  </head>
  <body>
    <div class="nav" style="font-size:20px;padding-left:25px;">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="index.php"><img src="placey2.png"height="80vw"width="100vw"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left:100px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      </li>
      <li class="nav-item"style="padding-left:20px;">
        <a class="nav-link" href="index.php#addnew">Add New</a>
      </li>
      <li class="nav-item"style="padding-left:20px;">
        <a class="nav-link" href="index.php#allplaces">Places</a>
      </li>
      <li class="nav-item"style="padding-left:20px;">
        <a class="nav-link" href="index.php#about">About</a>
        <a> 
      <li class="nav-item"style="padding-left:20px;">
        <a class="nav-link" href="index.php#contact">Connect Us</a>
      </li>
      <li class="nav-item"style="padding-left:20px;">
        <a class="nav-link" href="login.php">Join Us</a>
      </li>
      
      
    </ul>
    <form action="search.php"method="get" class="form-inline my-2 my-lg-0"style="padding-left:20px;">
      <input class="form-control mr-sm-2" type="text"name="query" placeholder="Search" aria-label="Search">
      <button type="submit" value="Search"class="btn btn-dark">Search</button>
    </form>
  </div>
</nav>
</div>

<div  class="text"style="background-image:url('expo.jpg'); background-size:cover;padding-left:50px;">
<p style="font-size:7.5vw;text-align:left;font-style:italic;padding-top:40vh;;color:white;"><b> Discover the New Places</b></P>
<div style="padding-top:5vh;font-size:4vw;text-align:left;font-style:georgia;color:white;">
   Search the Places which you want
</div> 
<div style="font-size:3vw;text-align:left;color:white">Search category , city , placename</div>
<form action="search.php"method="get" class="form-inline my-2 my-lg-0"style="padding-top:1vh;padding-bottom:30px;">
     <label> <input class="form-control mr-sm-2" type="text"name="query" placeholder="Search" aria-label="Search"size="40vw">
      <button type="submit" value="Search"class="btn btn-dark">Search</button>
    </form>
    </div> 

    <hr style="width:80%; background: #fff">
<div id="addnew" style="padding-top:5px;">
<table>
<tr>
              <td>  <img src="addnew.jpeg" style="heigth:60vw;width:40vw;padding-left:40px;" ></td>
              <td > 
                <P> <div style="font-size:5vw;">
                   Add New Places
                     </div> 
                     <div style="font-size:2vw;">
                      which you know around you.
                     <br> Share your experience with all of us. 
                    </div>
                     <p>
                    <form action="add.php"method="get"style="">
                    <label style="color:blue;font-size:2vw;"><b>Click here --><b> </label>
                    <button style="border-radius:40%;color:black;font-color:pink;width:16vw;height:7vw;font-size:3vw;" type="submit">Add New</button>
                    </form></td> 
                </tr>
                </table>
</div>


<hr style="width:80%; background: #fff">
<div id="allplaces" style="padding-top:40px;background-color:">
<Table>
<td style="padding-left:5vw;"><img src="1 (1).jpg" style="heigth:30vw;width:30vw;padding-right:1vw;" ></td>
<td><img src="1 (2).jpg" style="heigth:30vw;width:30vw;padding-right:1vw;" ></td>
<td style="padding-right:5vw;"><img src="1 (3).jpeg" style="heigth:33vw;width:33vw;padding-right:1vw;" ></td>
</Table>
<div style="padding-top:40px;">
<Table>
<td style="padding-left:5vw;"><img src="1 (4).jpg" style="heigth:30vw;width:30vw;padding-right:1vw;" ></td>
<td><img src="1(5).jpg" style="heigth:35vw;width:30vw;padding-right:1vw;" ></td>
<td style="padding-right:5vw;"><img src="1 (6).jpg" style="heigth:30vw;width:30vw;padding-right:1vw;" ></td>

</Table>

   <form action="places.php"method="get"style="padding-top:25px;padding-left:20vw;">
  <button class="btn btn-dark" type="submit">See All Places</button><img src="explore2.jpg"width="200vw"height="100vw" style="padding-left:50px;">
   </form>
</div>
</div>
<hr style="width:80%; background: #fff">

<div id="about" align="center">
<p style="font-size:4vw;">Want To Know More!</P>
<video style="width:60vw; height:20vw;align:center;" controls>
  <source src="video.mp4" type="video/mp4"> 
</video>
  </div>


  <hr style="width:80%; background: #fff">
  <div id="contact"style="background-color:black;color:white;">
  <table align="center">
  <td>
  <img src="placey.jpeg" width="100vw" width="100vw">
  <br>Placey2 helps you to explore <br>also share the explored places.<br>
</td>
<td style="padding-left:100px;">
  <b><P style="font-size:4vh">social links<p>
     <a href="https://www.instagram.com/placey27/"><img src="instagram.jpg"width="30vw"height="30vw"></a>
    <a href="https://www.linkedin.com/in/shrutik27/" style="padding-left:20px;"><img src="linkdin.jpg"width="30vw"height="30vw"></a>
      <a href="mailto:shrutik@placey2.com"style="padding-left:20px;"><img src="email.jpg"width="30vw"height="30vw"></a><br>
</td>
<table>

<diV style="text-align:center; padding-top:20px;">
     <b>site design / logo / images © 2020 placey2<b>
</diV>
</diV>




  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>