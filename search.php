
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="font.css">
    <title>Search Places|Search Category|Favourite Places|placey2</title>
  </head>
  <body style="background-color:white;">

<div class="backgorund"style="background-image:url('expo.jpg');">
<p style="font-size:50px;text-align:center;font-style:italic;color:pink;padding-top:40px;"> Explore the new places</P>
<div style="padding-top:100px;font-size:50px;text-align:center;font-style:georgia;">
 Places as per your choice
</div>
</div>
</div>
</body>
  
  <div style="padding-top:50px;">
  <link rel="stylesheet" type="text/css" href="font.css">
	

    
<?php
 global $db;
 $db = mysqli_connect('localhost', 'root', '', 'registration');
?>
 
  
<?php

    
    $query = (isset($_GET['query']) ? $_GET['query'] : null);
    // gets value sent over search form
    $min_length = 1;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        
        // makes sure nobody uses SQL injection

    
             $sql = "SELECT * FROM places
             WHERE (`countryname` LIKE '%".$query."%') 
             OR (`cityname` LIKE '%".$query."%')
             OR (`statename` LIKE '%".$query."%')
             OR (`placename` LIKE '%".$query."%')
             OR (`category` LIKE '%".$query."%')";
             $raw_results = mysqli_query($db,$sql);
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
echo"<div class='info'>";
            
            while($row = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
           
          
          
            echo"<div style='padding-top:30px;'>";
            echo"</div>";
            echo"<div style='  font-size:30px;
                display: block;
                    word-break: break-wordS;
                    float:centre;'>";
            
              echo "<img src='images/".$row['image']."' style='height:23vw;width:40vw;'>"."<br>";
               
            echo "Location:". "<b>".ucfirst( $row['countryname']).",". ucfirst( $row['statename'])."</b>"."<br>";
            echo "placename:"."<b>" .ucfirst( $row['cityname']).",". ucfirst( $row['placename'])."</b>"."<br>";
            echo "category:"."<b>" .ucfirst( $row['category'])."</b>"."<br>";
            echo "description:";
               echo"</div>"; 
            
            $newdata=ucfirst( $row['description']);
            $newdata1=trim($newdata);
            echo"<div style='font-size:20px;'>";
            echo "$newdata1";
            echo"<div style='padding-top:100px;'>";
               echo"</div>"; 
            

          
                // posts results gotten from database(title and text) you can also show id ($results['id'],['$username
               // ']['$password],["$scusses sessoion"]);
            }
            echo"</div>"; 
          }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Atleat enter ".$min_length." letter to search place";
    }
?>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>