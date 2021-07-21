<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Basic Banking System</title>
  </head>
  <style>
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: Arial;
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
    p{
        color: white;
    }
    button{
      border:none;
      border-radius: 8px;
      padding: 10px;
      background:#16304a; 
      color:white;
      letter-spacing: 1.5px;
      font-size: 15px;
      transition: 0.5s;
    }
    button:hover,h1:hover{
      transform: scale(1.1);
    }
    button:hover{
      background-color:#1ec8ce;
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
  require_once 'config.php';
  include 'navbar.php';
  ?>
      <div id="ab" class="container-fluid">
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading">
                  <h1>WELCOME TO OFFICIAL WEBSITE OF NATIONAL BANK</h1>
                <br>
            <div class="column activity text-center">
            <br>
                  <div class="col-md act">
                  <a href="transfermoney.php"><button><h3>View all Customers<h3></button></a>
                    
                  </div>
                  <br>
                  <div class="col-md act">
                   
                  
                  <a href="transactionhistory.php"><button><h3>Transaction History<h3></button></a>
                  </div>
                  
            </div>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img class="im" src="img/ban.png">
              </div>
            </div>

      
          <br>
         
          
           
      </div>
      
      <footer class="text-center py-2">
      <p> &#xa9;<a href="https://www.linkedin.com/in/suman-singh-3501/" target="_blank">
           <b>Suman Singh | GRIP JULY 2021</b></a> </p>
      </footer>
    

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
