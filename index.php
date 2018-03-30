<?php include 'database.php' ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOUT IT!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div id="container">
         <header>
            <h1>SHOUT IT! Shout Box</h1>
         </header>
         <div id="shouts">
           <ul>
               <li class="shout"> <span>10:15PM - </span> Brad: Hey what's going on ?</li>
               <li class="shout"> <span>10:15PM - </span> Brad: Hey what's going on ?</li>
               <li class="shout"> <span>10:15PM - </span> Brad: Hey what's going on ?</li>
               <li class="shout"> <span>10:15PM - </span> Brad: Hey what's going on ?</li>
               <li class="shout"> <span>10:15PM - </span> Brad: Hey what's going on ?</li>
               <li class="shout"> <span>10:15PM - </span> Brad: Hey what's going on ?</li>
           </ul>
         </div>
         <div id="input">
          <form action="process.php" method="post">
              <input type="text" name="user" placeholder="Enter Your Name" />
              <input type="text" name="message" placeholder="Enter A Message" />
              <br>
              <input class="shout-btn" type="submit" name="submit" value="Shout It Out" />
          </form>
         </div>
    </div>
</body>
</html>