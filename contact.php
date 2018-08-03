<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        if (!$_POST["content"]) {
            
            $error .= "The content field is required.<br>";
            
        }
        
        if (!$_POST["subject"]) {
            
            $error .= "The subject is required.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        } else {
            
            $emailTo = "andjelafilipovski@gmail.com";
            
            $subject = $_POST['subject'];
            
            $content = $_POST['content'];

            $headers = 'From:' .$_POST['email'] . "\r\n" .
    'Reply-To: '.$_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
      
            // $headers = $_POST['email'];
            
            if (mail($emailTo, $subject, $content,$headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
            
        } 
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
  <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/contact.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <div id="head" style="height:100%;">

        <div id="header">
                
            <img class="logo" src="images/logo.png"/>
        </div>
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="index.html">Home</a>
              <a href="biography.html">Biography</a>
              <a href="index.html">Projects</a>
          <ul>
            <div class="w3-dropdown-content w3-bar-block">
              <a href="interior.html" class="w3-bar-item w3-button">Interior</a>
              <a href="competitions.html" class="w3-bar-item w3-button">Competitions</a>
            </div>
          </ul>
          <a href="contact.html">Contact</a>
        </div>

        <div id="portfolio">
          <span style="font-size:30px;cursor:pointer;font-family: 'Orbitron', sans-serif !important;" onclick="openNav()">&#9776; menu</span>
        </div>
        <div class="clear" style="clear:both;"></div>

        <div class="container" style="width:700px; margin-top:-90px;">
      
          <h1 style="text-align:center;font-family: 'Orbitron', sans-serif !important;">Get in touch!</h1>
            
            <div id="error"><?php echo $error.$successMessage;?></div>

            
              <form method="post">
              <fieldset class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                <small class="text-muted">We'll never share your email with anyone else.</small>
              </fieldset>
              <fieldset class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" >
              </fieldset>
              <fieldset class="form-group">
                <label for="exampleTextarea">What would you like to ask?</label>
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
              </fieldset>
              <button type="submit" id="submit" class="btn btn-primary" style="background-color: #000;">Submit</button>
             </form>
          
           </div>
      </div>
    <footer>
        <div class="col-md-12">
            <ul class="social-network social-circle">
                <li><a href="https://www.instagram.com/duskofilipovski/" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/dusko.filipovski.9" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="contact.html" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://www.linkedin.com/in/dusko-filipovski-620a2a41/?ppe=1" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul> 
            <a class="copyright" href="https://www.linkedin.com/in/andjelaf/" style="font-family: 'Orbitron';text-shadow: 1px 1px 1px #000000;"><strong>&copy; Anđela Filipovski</strong></a>  
        </div>
    </footer>

<script src="functionality.js"></script>

</body>
</html>
