<!doctype <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Brian's Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
  </head>
<body>
    <div class="container">
  <header>
      
        <nav class="main-nav">
            <ul>
              <li class="nav-item"><a href="#home" >Home</a></li>
              <li class="nav-item"><a href="#about" >About</a></li>
              <li class="nav-item"><a href="#portfolio" >Portfolio</a></li>
              <li class="nav-item"><a href="#contact" >Contact</a></li>
             </ul>
          </nav>
    </header>
  
 
  <section class="splash">
    
  <div class="splash__heading">
  <h3 class="heading-primary">Hi, My name is<span class="heading-primary__name"> Brian</span> </h3>
  <h2 class="heading-secondary">I love to create beautiful websites</h2>
</div>
</section>
  <section class="about" id="about">
    <h2 class="section-headings-about">About Me</h2>
<div class="intro">
  <div class="intro__img">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1743827/about_pic.jpg" alt="Self-pic">
  </div>
  <div class="intro__text">
      <p>Personal Trainer turned Web Developer with a passion for building beautifully designed apps. I am a self taught Web Developer and a graduate of <a class="ga-link" href="https://generalassemb.ly/education/software-engineering-immersive/chicago" target="_blank"> General Assembly's </a> Software Engineering Immersive</p>
      <ul class="about-social-icons-list" id="social-icons-list">
        <li><a href="https://www.instagram.com/royallatcat/?hl=en"><i class="fab fa-instagram instagram" ></i></a></li>
        <li><a href="https://github.com/Latcat21"><i class="fab fa-github-square github"></i></a></li>
        <li><a href="https://www.linkedin.com/in/brian-lattner-722484177/"> <i class="fab fa-linkedin"></i></a></li>
    </ul>
  </div>
</div>
</div>
</section>


<section class="portfolio" id="portfolio">
  <div class="portfolio-container">
<h2 class="section-headings-portfolio">Portfolio</h2>
<div class="portfolio__card" data-aos="fade-left">
  <img src="images/the-recruiter.png" >
    <div class="portfolio__card--info">
      <h3>The Recruiter</h3>
    <p>A Sinatra based application that helps college baseball teams and high school baseball players connect with each other.The Players and Colleges are matched with eachother according to positions played and positions needed </p>
    <p>Built Using...</p>
  <ul class="web-tech">
      <h4>HTML5</h4>
      <h4>SCSS</i></h4>
      <h4>RUBY</i></h4>
      <h4>SINATRA</i></h4>
    </ul>
    <div class="btns">
    <a href="https://the-recruiter-capstone.herokuapp.com/" class="card-btn" target="_blank" >Check it out</a>
            <a href="https://github.com/Latcat21/project-5" target="_blank"><i class="fab fa-github-square web-tech-github"></i></a>
            </div>
  </div>
</div>
<div class="portfolio__card"data-aos="fade-right">
  <a href="https://latcat21.github.io/royal-travels/" target="_blank"><img src="images/royal-travels.png" ></a>
<div class="portfolio__card--info">
    <h3>Royal Travels</h3>
  <p>Royal Travels Shows information of countries by searching for a specific country.Using the <a href="https://restcountries.eu/" target="_blank">Restcountries API </a>When a country is searched the information dispalyed is that Country's flag, capital, language, region, population, currency and gini coefficient.</p>
  <p>Built Using...</p>
<ul class="web-tech">
    <h4>HTML5</h4>
    <h4>CSS</i></h4>
    <h4>JAVASCRIPT</i></h4>
  </ul>
  <div class="btns">
  <a href="https://latcat21.github.io/royal-travels/" class="card-btn" target="_blank" >Check it out</a>
          <a href="https://github.com/Latcat21/royal-travels" target="_blank"><i class="fab fa-github-square web-tech-github"></i></a>
          </div>
</div>
</div>
  <div class="portfolio__card" data-aos="fade-left">
    <img src="images/mem-game.png">
  <div class="portfolio__card--info">
    <h3>The Memory Game</h3>
    <p>Try matching two cards that are the same. If they don't match you move on to flip other cards and have to remember their positions. The game ends when the whole board is uncovered. </p>
    <p>Built Using...</p>
    <ul class="web-tech">
        <h4>HTML5</h4>
        <h4>CSS</i></h4>
        <h4>jQuery</i></h4>
      </ul>
      <div class="btns">
      <a href="https://latcat21.github.io/Memory-Card-Game/" class="card-btn" target="_blank" >Check it out</a>
              <a href="https://github.com/Latcat21/Memory-Card-Game" target="_blank"><i class="fab fa-github-square web-tech-github"></i></a>
              </div>
  </div>
</div>


</section>


<section class="contact" id="form">

    <div class="section-contact" id="contact">
      <h1 class="contact-section-heading">Lets get in touch</h1>
      <?php

      <div class="form-messages success">
          Thank you! Your message has been sent.
        </div>
        <div class="form-messages error">
            Oops something went wrong. Please try again.
          </div>
          ?>
      <div class="contact-form">
      <form method="post" action="mailer.php" class="contact-form">
        <label>Name</label>
        <input type="text" name="name" id="name" placeholder="Your name" required />
        <label>Email</label>
        <input type="email" name="email" id="name" placeholder="Your Email" />
        <label>Message</label>
        <textarea name="message" placeholder="Your message" rows=4></textarea>
        <button>Submit</button>
      </form>
           </div>
          </div>
  </section>
  
  
  <footer class="footer">
      
      <p class="footer-paragraphy">
        &copy Brian Lattner made in Chicago Illinois
      </p>
      </div>
    </footer>
    
  </div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 200,
      duration: 1000
    });
  </script>
<script src="javascript/main.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
</body>
</html>
