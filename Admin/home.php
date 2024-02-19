<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
         body {
        background-color: rgb(233, 241, 241);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
         }
       p.btn1 a {
         float: right;
         background: rgb(122, 126, 124);
         padding: 10px 15px;
         color:  black;
         border-radius: 5px;
         margin-right: 10px;
         border: none;
         font-family: sans-serif;
         text-decoration: none;
         }

       p.btn1 a:hover{
         opacity: .7;
        }
       h1 {
          text-align: center;
          color: black;
          margin-top: 1px;
          font-size: x-large;
        }

       h4 {
        text-align: center;
        margin-bottom: 1px;
        color: red;
        }

       h5{
         text-align: center;
         margin-top: 1px;
         color: black;
         font-size: xx-large; 
        }
        p.btn2 a {
         float: right;
         background: rgb(122, 126, 124);
         padding: 10px 15px;
         color:  black;
         border-radius: 5px;
         margin-right: 10px;
         border: none;
         font-family: sans-serif;
         text-decoration: none;
         }

       p.btn2 a:hover{
         opacity: .7;
         }

         p.btn3 a {
         float: right;
         background: rgb(122, 126, 124);
         padding: 10px 15px;
         color:  black;
         border-radius: 5px;
         margin-right: 10px;
         border: none;
         font-family: sans-serif;
         text-decoration: none;
         }

       p.btn3 a:hover{
         opacity: .7;
         }

         p.btn4 a {
         float: right;
         background: rgb(122, 126, 124);
         padding: 10px 15px;
         color:  black;
         border-radius: 5px;
         margin-right: 10px;
         border: none;
         font-family: sans-serif;
         text-decoration: none;
         }

       p.btn4 a:hover{
         opacity: .7;
         }
         p.btn5 a {
         float: right;
         background: rgb(122, 126, 124);
         padding: 10px 15px;
         color:  black;
         border-radius: 5px;
         margin-right: 10px;
         border: none;
         font-family: sans-serif;
         text-decoration: none;
         }

       p.btn5 a:hover{
         opacity: .7;
         }
      
         footer {
        position: relative;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1rem;
        text-align: center;
        }
    </style>
</head>
<body>
  <h5>STUDENT REGISTRATION SYSTEM</h5>
   <h1>Welcome,<h1>
   <p class="btn2">
   <a href="login.php">Login</a>
   <p class="btn1">
   <a href="logout.php">Logout</a>
   </p>
   <footer id="footer">
        <p>29001779@myboston.co.za @ <script>document.write(new Date().getFullYear())</script></p>
    </footer>
 </body>
</html>
<?php
}else{
    header("location: home.php");
    exit();
}
?>

</body>

</html>