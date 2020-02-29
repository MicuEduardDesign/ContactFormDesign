<?php

    if ($_POST) {

        $errors = "";
        $success = "";

        if (!$_POST["email"] && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors .= "Please add an email <br>";
        }

        if (!$_POST["subject"]) {
            $errors .= "Please add a subject <br>";
        }

        if (!$_POST["textarea"]) {
            $errors .= "Please add a message <br>";
        }

        if ($errors != "") {
            $errors = "<div class=\"alert alert-danger\" role=\"alert\">" . $errors . "</div>";
        } else {
        
            $emailTo = "edy.kazzy@yahoo.com";
            $subject = $_POST["subject"];
            $content = $_POST["textarea"];
            $header = "From: ".$_POST["email"];

            if(mail($emailTo, $subject, $content, $header)) {
                $success = "Message sent!";
                $errors = "<div class=\"alert alert-success\" role=\"alert\">" . $success . "</div>";
            } else {
                $success = "Message could not be send!";
                $errors = "<div class=\"alert alert-success\" role=\"alert\">" . $success . "</div>";
            }

        }

    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form | Micu Ioan Eduard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
    
<div class="container-fluid">
<div class="all">




<div class="formular">
<div class="error"><?php echo $errors; ?></div>

<h1>Contact Us</h1>

<form method="POST">
  <fieldset class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
  </fieldset>
  <fieldset class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
  </fieldset>
  <fieldset class="form-group">
    <label for="textarea">Message</label>
    <textarea class="form-control" name="textarea" id="textarea" rows="3"></textarea>
  </fieldset>
  <button type="submit" id="submit" class="btn btn-primary">Send <i class="fas fa-paper-plane"></i></button>
</form>
</div>
</div>
</div>

    <script src="script.js"></script>

</body>
</html>