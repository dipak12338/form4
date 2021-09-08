<?php           
    $cons=mysqli_connect("localhost","root","","londry_db");


$rt = mysqli_query($cons,"SELECT  male as num from tbl_population");
                    echo mysqli_num_rows($rt) . "<br><br>";

$rt1 = mysqli_query($cons,"SELECT  Male as num from tbl_population where region='india' and age='0_4'");
                    while($row1 = mysqli_fetch_array($rt1)){ 
                    $m4 =  htmlentities($row1["num"]); 
                    echo $m4;

                  }


?>
                      
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['eyrfemf', 'Registration','Population'],
         
         <?php
$rt1 = mysqli_query($cons,"SELECT  Male as num from tbl_population where region='india' and age='61_100'");
 while($row1 = mysqli_fetch_array($rt1)){  $m61 =  htmlentities($row1["num"]); }
 $rt1 = mysqli_query($cons,"SELECT  Male as num from tbl_population where region='india' and age='36_60'");
 while($row1 = mysqli_fetch_array($rt1)){  $m36 =  htmlentities($row1["num"]); }
 $rt1 = mysqli_query($cons,"SELECT  Male as num from tbl_population where region='india' and age='19_35'");
 while($row1 = mysqli_fetch_array($rt1)){  $m19 =  htmlentities($row1["num"]); }
 $rt1 = mysqli_query($cons,"SELECT  Male as num from tbl_population where region='india' and age='5_18'");
 while($row1 = mysqli_fetch_array($rt1)){  $m5 =  htmlentities($row1["num"]); }
 $rt1 = mysqli_query($cons,"SELECT  Male as num from tbl_population where region='india' and age='0_4'");
 while($row1 = mysqli_fetch_array($rt1)){  $m4 =  htmlentities($row1["num"]); }

                
                                $ct1 = 0;
                                $ct2 = 0;
                                $ct3 = 0;
                                $ct4 = 0;
                                $ct5 = 0;

                              $q = "SELECT dob FROM trainer where gender = 'Male' Union ALL SELECT dob FROM abhyasi where gender = 'Male'";
                                $r = mysqli_query($cons,$q);
                                while($row = mysqli_fetch_array($r))
                                 {
                                    $today = date("Y-m-d");
                                    $dob = $row["dob"];
                                    $diff = date_diff(date_create($dob), date_create($today));

                                     if ($diff->y > 60){ 
                                        $ct1 = $ct1 + 1; 
                                     }
                                     if ($diff->y > 35 and $diff->y <= 60 ){   
                                        $ct2 = $ct2 + 1; 
                                    }
                                     if ($diff->y > 18 and $diff->y <= 35 ){   
                                        $ct3 = $ct3 + 1; 
                                     }
                                     if ($diff->y > 5 and $diff->y <= 18){     
                                        $ct4 = $ct4 + 1;
                                    }
                                     if ($diff->y <= 5){  
                                        $ct5 = $ct5 + 1; 
                                    }
                                  }
                                    $tct = $ct1 + $ct2 + $ct3 + $ct4 + $ct5;




echo " ['rgfrgrg', '". $ct1  ."','" . $m61 ."'], ";
echo " ['rgfrgrg', '". $ct2  ."','" . $m36 ."'], ";
echo " ['rgfrgrg', '". $ct3  ."','" . $m19 ."'], ";
echo " ['rgfrgrg', '". $ct4  ."','" . $m5 ."'], ";
echo " ['rgfrgrg', '". $ct5  ."','" . $m4 ."'], ";


           

          

           ?>









            









        ]);


        


        var options = {width: 600,
          chart: {
            title: 'Total Males and Females',
            subtitle: 'From Number of cities',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>

  </body>
</html>
