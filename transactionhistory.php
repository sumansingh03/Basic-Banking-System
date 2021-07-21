<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: Arial;
    }
    h2{
        font-size: 40px;
    }
    table{
        letter-spacing: 1.2px;
    }
    .table-striped{
        background-color: #c1cad3	;
    }
    td{
        text-align: center;
    }
    button{
        border:none;
        background:#d8e1e7	;
        transition: 1s;
    }
    @media only screen and (orientation: portrait){
        *{
            letter-spacing: 1px;
        }
    }
    footer{
      background: #aa161e; 
    }
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap');
    .nav-link{
      margin-right: 15px;
      color:#f3eded;
      letter-spacing: 0.5px;
      transition: 0.5s;
    }
    nav{
      background-color: #aa161e;
    }
    .navbar-brand{
      color: #f3eded;
      letter-spacing: 0.5px;
    }

    .navbar-light .navbar-nav .nav-link{
      color: white;
    }
    .h2{
      color: #020202;
      letter-spacing: 1 px;
      font-family: raleway;
    }
    .heading h1{
      color:black;
      font-family: 'Comic Sans', cursive;
      text-align:center;
      font-weight:bold;
      margin-top: 100px;

    }
    table{
        margin-top: 10px;
    }
    h2{
      color:black;
      font-family: 'Comic Sans', cursive;
      text-align:center;
      font-weight:bold;
      margin-top: 20px;
    }
    button:hover{
        background-color:#54706e;
        color: white;
    }
    p{
        color: white;
    }
    a:link {
      color: white;
    }
    a:visited {
      color: white;
    }
    a:hover {
      color: white;
    }
</style>

<body>

<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4">Transfers Table</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date and Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction_details";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer class="text-center py-2">
      <p> &#xa9;<a href="https://www.linkedin.com/in/suman-singh-3501/" target="_blank">
           <b>Suman Singh | GRIP JULY 2021</b></a> </p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
