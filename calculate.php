  <!DOCTYPE html>
  <html lang="en">
  <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>calulate</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
mark { 
  background-color: yellow;
  color: black;
}
body{
  background-color:grey;
}
#card{
      box-shadow:2px 2px 2px 2px white;
}
.report{
         text-shadow:0 0 1px 1px white;
         background-color:black;
         color:white;
         height:3vh;
}
#but{
     position:absolute;
     left:46%;
     top:93.5%;
     color:white;
     border:1px solid black;
     margin-top:3px;
     
}
#but:hover{
  box-shadow:1px 2px 3px 4px lightblue;
  background-color:black;
  font-size:o.5rem;
   
}
</style>
  </head>
  <body> 

  <?php

            if (isset($_POST['submit']))
            {
              global $first;
              global $calc;
               $inputunit=$_POST['input'];
               $total=$inputunit-100;
              // echo "<h1>Government Free 100 unit </h1>";
              // echo "<h1>Electricity Consumption:$total</h1>";
              
               if($total<=100)

                            {
                                  calculator($total);
                                }
                               else
                               {    
                                   $newvalue=$total/2;
                                   if($newvalue==100)
                                  {
                                  $first=$newvalue*2;
                                 // echo "<h1>First 100 unit cost:$first</h1>";
                                  calculator($total);
                                   }
                                  else{
                                    calculator($total);
                                   }
                              }
                
            }

            function  calculator($total)
            {
               $ca=$total/100;
               calc($total,$ca);
            }

         function calc($total,$ca)
            {    
                 global $first;
                 $call=$total/$ca;

                if($call==100)
                 {
                   $first=$call*2;
                
                  // echo "<h1>First 100 unit cost cleared:$first</h1>";
                   
                   $second=$total-100;
                   calcu($second,$first);
                 }       
           }
        


         function calcu($second,$first)
            { 
              global $calc;
                  if($second>=100) 
                  {
                                  
                                  $finalval=$second*3;
                                  $calc=$first+$finalval+30;
                                 // echo  "<h1>Total amount is Rs:$calc</h1>"; 
                                 // echo  "<p>subsidery charges:<strong>RS:30</strong></p>";
                  }
                     else
                     {
                       echo "cannot get it";
                     }
            
            }                    
 ?>                       
 <center>
 <div class="container">
   <div class="card bg-light " style="width:400px"  style="height:50vh" id="card">
      <div class="card-title" style="height:90vh;">
  <h3>Tamilnadu Genertion and Distribution Corporation Limited</h3>
  <p class="report"><strong>Electricity Bill Report</strong></p>
 <?php echo "Today is " . date("Y/m/d") . "<br>"; ?>
  </hr>
  <img class="card-img-top" src="images/imgc.jpeg" alt="Card image"  style="width:100%;" style="height:40vh;">
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Total unit</th>
        <th>Total Electricity Consumption</th>
        <th>First 100 unit cost</th>
        <th>Total Amount </th>
      </tr>
    </thead>
          </div>
         
    <tbody>
      <tr>
        <td><?php echo "<h4>$inputunit</h4>";?></td>
        <td><?php echo "<h4>$total</h4>";?></td>
        <td><?php echo "<h4>$first</h4>";?></td>
        <td><?php echo "<h4>$calc</h4>";?></td>
      </tr>
      </tbody> 
      <h7>NOTE:Subsidery Charges Added:<mark>30Rs</mark></h7><br>
      <h7><mark> Government free scheme 100 unit</mark></h7> 
    </table>
</div>
          </center>

    <button id="but" type="submit" class="btn btn-primary-outline"  onclick="printer()">Print Now</button>  
    <script>
    function printer()
    {
      window.print();  
    }    
</script>
</body>
</html>
