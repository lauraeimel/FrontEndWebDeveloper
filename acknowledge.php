<?php

$validation_error = '';
$first_name = htmlspecialchars($_POST['firstName']);
$last_name = htmlspecialchars($_POST['lastName']);
$phone = filter_var($_POST['tel'], FILTER_SANITIZE_NUMBER_INT);
$found = '';
if($_POST['found'] === "Codecademy" || $_POST['found'] === "GitHub" || $_POST['found'] = "Discord" || $_POST['found'] === "LinkedIn" || $_POST['found'] === "Other") {
    $found = $_POST['found'];
} else {
    $validation_error .= "Please fill out the form correctly and resubmit.\r\n";
}
$reason = htmlspecialchars($_POST['reason']);
$email = '';
if(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return $email = $_POST['email'];
} else {
    $validation_error = 'It looks like your email was entered incorrectly.';
};



if(isset($_POST['send']) && $email && $found) {
    $to = 'laura@lauraimel.com';
    $subject = 'Web Form Submission';
    $message = 'Name: ' . $first_name . $last_name . "\r\n\r\n";
    $message .= 'Email: ' . $email . "\r\n\r\n";
    $message .= 'Phone: ' . $phone . "\r\n\r\n";
    $message .= 'How you found me: ' . $_POST['found'] . "\r\n\r\n";
    $message .= 'Reason for contacting: ' . $reason;
    $headers = "From: laura@lauraimel.com\r\n";
    $headers .= 'Content-Type: text/plain; charset=utf-8';
    if($email) {
        $headers .= "\r\nReply-To: $email";
    }
    $success = mail($to, $subject, $message, $headers);
} else {
    return $validation_error;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit="no">
    <meta name="author" content="Laura Imel">
    <meta name="description" content="Thank you for your form submission">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400;500;600&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"> 
    <link href="resources/styles.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" >
    <script src="scripts.js" defer></script>
    <title>Laura Imel | Web Developer | Acknowledgement</title>
</head>
<body>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index.html"><img src="resources/images/Logo.png" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="index.html">Home </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.html#bio">Bio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.html#skills">Skills</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.html#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-me.html">Contact</a>
                </li>
            </ul>
            </div>
        </nav>
    </header>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <picture>
                        <source media="(max-width: 500px)" srcset="./resources/images/Keyboard500.png">
                        <source media="(max-width: 800px)" srcset="./resources/images/Keyboard800.png">
                        <source media="(max-width: 1200px)" srcset="./resources/images/Keyboard1200.png">
                        <source media="(max-width: 1800px)" srcset="./resources/images/Keyboard1800.png">
                        <img src="./resources/images/Keyboard2000.png" alt="stylized keyboard">
                    </picture>
                    <div class="col-12 text-right">
                        <?php if (isset($success) && $success) { ?>
                        <h1 class="display-4">Thank you</h1>
                        <h3 class="lead">Your request has been submitted</h3>
                        <?php } else { ?> 
                        <h1 class="display-4">Uh oh!</h1>
                        <h3 class="lead">Looks like there was a problem sending your message...</h3>
                        <?php } ?>
                    </div>
            </div>
        </div>
    </div>
    
    <main>
    <div class="container acknowledge">
        <div class="row">
            <div class="col">
                <?php if (isset($success) && $success) { ?>
                    <h2 class="text-center">Thank you, <?=$_POST['firstName']?>.</h2>
                    <p class="text-center">I will review your information and get back with you shortly.</p>
                    <p class="text-center">Sincerely,</p>
                    <p class="signed text-center">Laura</p>
                <?php } else { ?>
                    <h4 class="text-center">Hmm, I don't know what went wrong but I didn't receive your message.</h4>
                    <p class="text-center"><?= $validation_error; ?></p>
                    <p class="text-center">I look forward to hearing from you!</p>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <a href="index.html"><button type="button" class="btn btn-outline-dark mx-auto d-block">Back to my portfolio</button></a>
            </div>
        </div>
    </div>
    </main>

    <footer class="fixed-bottom">
        <p>&#169 Laura Imel 2022</p>
    </footer>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
