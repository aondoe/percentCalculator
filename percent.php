<?php
// if(!isset($isNum)){
//     $isNum='';
// }
// if(!isset($ofNum)){
//     $ofNum='';
// }
// if(!isset($percnet)){
//     $percent='';
// }
//
// ?>

<DOCTYPE>

<html>
<head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <style>
          li{font-weight:bold}
      </style>
</head>

<body>
  <div class="row">
    <div class="col-lg-2">
    </div>
      <div class="col-lg-7">
        <h1>Percentage Calculator</h1>
      </div>
      <div class="col-lg-3">
      </div>
  </div>
  <form action="results.php" method="post">
    <h2>Fill in the blanks below and get your answer after you click calculate!</h2>
      <ul>
        <li style="list-style-type:none">Make Sure you:</li>
        <li style="list-style-type:none">
            <ol>
                <li>Fill in only two values. Leave One space blank</li>
                <li>Then click calculate</li>
                <li>You will be redirected to your report!</li>
          </ol>
    </li>
      </ul>
      <br>
      <br>

<!-- Below I'm using a form for calculating percentages using user inputs. The formula should be set up from the proportional ratio:
      if input is in the isNum x needs to multiply by 100 and then divide by
 -->

        The number <input placeholder="blank" name="isNum" type="number" step="0.01"> is
        <input name="percent" placeholder="what percentage" type="number" >% of <input placeholder="a number" name="ofNum" type="number">

          <input type="submit" value="Calculate">
          <input type="reset" value="Reset">
    </form>


</body>
</html>
