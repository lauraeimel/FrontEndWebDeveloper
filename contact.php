<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit="no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400;500;600&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> 
    <link href="styles.css" type="text/css" rel="stylesheet">
    <script src="scripts.js" defer></script>
    <title>Laura Imel | Contact</title>
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
                <a class="nav-link" href="index.html#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html#skills">Skills</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            </div>
        </nav>
    </header>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-sm-right">
                    <h1 class="display-4">Laura Imel</h1>
                    <h3 class="lead">Contact</h3>
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-10">
                    <section id="contact">
                        <h2>Contact</h2>
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <form action= method="get">
                                    <div class="form-group">
                                        <label for="firstName">First Name: </label>
                                            <input type="text" class="form-control" name="firstName" id="firstName" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName">Last Name: </label>
                                            <input type="text" class="form-control" name="lastName" id="lastName" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email: </label>
                                            <input  type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel">Phone Number (optional): </label><br>
                                            <input type="tel" id="tel" name="tel">
                                    </div>
                                    <div class="form-group">
                                        <label for="found">How did you find me?</label>
                                            <select class="form-control" name="found" id="found">
                                                <option value="codecademy">Codecademy</option>
                                                <option value="github">GitHub</option>
                                                <option value="discord">Discord</option>
                                                <option value="linkedin" selected>LinkedIn</option>
                                                <option value="other">Other</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="reason">Reason for contacting?</label>
                                        <br>
                                        <textarea id="reason" class="form-control" name="reason" rows="10" cols="34" maxlength="750" spellcheck="true" required></textarea>                                    
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-lg-5 align-self-center">
                                <img src="resources/images/selfOption1.jpg" alt="Laura Imel" class="img-fluid mx-auto d-block">
                            </div>
                    </section>
                </div>
                <div class="col-12 col-md-3 col-lg-2 my-3 my-md-0">
                    <section id="social">
                        <h2 class="text-center">Find Me</h2>
                        <div class="container">
                            <div class="row">
                                <div class="col col-md-12 py-3">
                                    <a href="https://www.linkedin.com/in/laura-i-09262022b?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BZr0t4nuPSkmpkhHND3rC1A%3D%3D" target="_blank"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linkedin/linkedin-original.svg" /></a>
                                </div>
                                <div class="col col-md-12 py-3">
                                    <a href="https://twitter.com/ImmelEliza" target="_blank"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/twitter/twitter-original.svg" /></a>
                                </div>
                                <div class="col col-md-12 py-3">
                                    <a href="https://github.com/L-E-Imel" target="_blank"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" /></a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>    
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>