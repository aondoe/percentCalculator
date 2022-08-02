<?php

  $percent=$_POST['percent'];
  $ofNum=$_POST['ofNum'];
  $isNum=$_POST['isNum'];
  // $whatNum=$_POST['whatNum'];

  $solution='';

    // $percent=$_POST['percent'];
?>

<html>
<h1>Your Percentage report is below: </h1>

<?php

if(!empty($isNum) && !empty($ofNum) && !empty($percent)){
      echo "<tr><td style='color:blue; font-size:25px; font-weight:bold;'> ".$isNum."</td> <td style='font-size:25px;font-weight:bold; color:red;'> <p style='color:black; font-size:25px;'>is ".$percent."% of ".$ofNum." </h2>";
}

if(empty($isNum) && !empty($ofNum)){

          $solution=($percent*$ofNum)/100;
          $solution=round($solution,1);

          echo "<table>";
          echo "<tr><td></td></tr>";
          echo "<tr><td style='color:blue; font-size:25px; font-weight:bold;'> The number: ".number_format($solution)."</td> <td style='font-size:25px;font-weight:bold; color:red;'> <p style='color:black; font-size:25px;'>is ".$percent."% of ".$ofNum." </h2>";
}

if(empty($ofNum) && !empty($isNum)){
        $solution=($isNum*100)/$percent;
        $solution=round($solution,1);

        echo "<table>";
        echo "<tr><td></td></tr>";
        echo "<tr><td style='color:blue; font-size:25px; font-weight:bold;'> The number: ".$isNum."</td> <td style='font-size:25px;font-weight:bold; color:red;'> <p style='color:black; font-size:25px;'>is ".$percent."% of ".number_format($solution)."</td></tr>";
    }

if(empty($percent) && !empty($isNum)){
        $solution=($isNum*100)/$ofNum;
        $solution=round($solution,1);

        echo "<table>";
        echo "<tr><td></td></tr>";
        echo "<tr><td style='color:blue; font-size:25px; font-weight:bold;'> The number: ".$isNum."</td> <td style='font-size:25px;font-weight:bold; color:red;'> <p style='color:black; font-size:25px;'>is ".number_format($solution)."% of ".$ofNum."</td></tr>";;
  }

// {
//     echo "Please make sure you fill out at least 2 out of the 3 fields with data <br><br>";
//     echo var_dump($isNum);
//     echo var_dump($ofNum);
// }


 ?>

</html>
