<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Website with Login &amp; Registration Form</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0'>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>
<body>

<header>
  <nav class="navbar">
    <span class="hamburger-btn material-symbols-rounded">menu</span>
    <ul class="links">
      <span class="close-btn material-symbols-rounded">close</span>
      <li><a href="#">Home</a></li>
      <li><a href="#">About us</a></li>
      <li><a href="contact.html">Contact us</a></li>
      <li><a href="#">Reservation</a></li>
    </ul>
    <button class="login-btn">LOG IN</button>
  </nav>
</header>

<div class="blur-bg-overlay"></div>

<div class="carousel-container">
  <div class="carousel-slide">
    <img src="./Images/pexels-pixabay-221457.jpg" alt="Slide 1">
  </div>
  <div class="carousel-slide">
    <img src="./Images/pexels-boonkong-boonpeng-442952-1134176.jpg" alt="Slide 2">
  </div>
  <div class="carousel-slide">
    <img src="./Images/pexels-naimbic-2290753.jpg" alt="Slide 3">
  </div>

</div>


<section class="Intro">
    <img src="./Images/Hotel/logo.svg" alt="">
    
</section>
<div class="green-line">
    
      <img src="./Images/Support/1.svg" alt="SVG 1">
        <img src="./Images/Support/2.svg" alt="SVG 2">
        <img src="./Images/Support/3.svg" alt="SVG 3">
        <img src="./Images/Support/4.svg" alt="SVG 4">
    </div>
<section class="about-us">
    <div>
     <h2 class="title1">LITTLE ABOUT US</h2>
     <span class="title2">Lorem ipsum dolor sit amet consectetur, adipisicing elit.sit amet consectetur, adipisicing elit.</span> 
    </div>
    <div class="main" >
      <section class="images" >
        <span class="im1"></span>
        <span class="im2"></span>
      </section>
      <section class="text1" >
          <h2 class="title-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nemo rerum  </h2>

          <p class="para1">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. aliquam sodales blandit
            faucibus. Nunc finibus, mi in tincidunt aliquet, ex orci venenatis arcu, inibus, mi
            in lore ipsum dolor.
        </p>
        <p class="para2">
          Quis.consequatnc neque et ex. Ut quis dictum ligula. Morbi porttitor mi id metus
          mollis. Sed dictum ligula finibus, mi in lore ipsum dolor. Morbi porttitor mi id
          metus mollis. Sed dictum ligula mi id metus msed dictum ligula nibus fbus, mi in
          lore ipsum dolor.
      </p>
      <div class="conclusion">
      <span class="concl1">Mamadou Lamine</span>
      <span class="concl2">Director Manager</span>
      <span class="concl3">Royal Hotel </span>
      </div>
      
      </section>
    </div>
</section>
<h1 class="title-reserve">Reservation</h1>
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form" id="booking-form">
						<form>
							<div class="row no-margin">
								<div class="col-md-3">
									<div class="form-header">
										<h2>Reserver</h2>
									</div>
								</div>
								<div class="col-md-7">
									<div class="row no-margin">
										<div class="col-md-4">
											<div class="form-group">
												<span class="form-label">Arrivée</span>
												<input class="form-control" type="date">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<span class="form-label">Depart</span>
												<input class="form-control" type="date">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<span class="form-label">Invité(s)</span>
												<select class="form-control">
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<span class="form-label">Enfant(s)</span>
												<select class="form-control">
													<option>0</option>
													<option>1</option>
													<option>2</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-btn">
										<button class="submit-btn" id="submit-btn">Verifier la disponibilité</button>
									</div>
								</div>
							</div>
						</form>
					</div>
          <div id="Hotel-Data">
            <div class="Data">
              <div id="image-hotel"></div>
              <div class="info-hotel">
                  <h4>Hotel Professionnel</h4>
                  <h2>Radisson Blue Hotel</h2>
                  <span>Dakar</span> <br>
                  <span class="prix">200000 Cfa/Nuit</span>
                  <br>
                  <a href="#">Payer</a> 
              </div>
          </div>
          <div class="Data">
            <div id="image-hotel"></div>
            <div class="info-hotel">
                <h4>Hotel Professionnel</h4>
                <h2>Radisson Blue Hotel</h2>
                <span>Dakar</span> <br>
                <span class="prix">200000 Cfa/Nuit</span>
                <br>
                <a href="#">Payer</a>
            </div>
          </div>
          <div class="Data">
            <div id="image-hotel"></div>
            <div class="info-hotel">
                <h4>Hotel Professionnel</h4>
                <h2>Radisson Blue Hotel</h2>
                <span>Dakar</span> <br>
                <span class="prix" >200000 Cfa/Nuit</span>
                <br>
                <a href="#">Payer</a>
            </div>
        </div>
            
          </div>
				</div>
			</div>
		</div>
	</div>
  <section class="contact">
    <section id="contact">
  
      <h1 class="section-header">Contact</h1>
      
      <div class="contact-wrapper">
      
      
        
        <form id="contact-form" class="form-horizontal" action="sendMail.php" method="POST">
           
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="name" placeholder="NAME" name="nom"  required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="sujet" placeholder="SUBJECT" name="sujet"  required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="email" class="form-control" id="email" placeholder="EMAIL" name="mail"  required>
            </div>
          </div>
    
          <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
          
          <button class="message-contact" id="submit" type="submit" >Envoyer </button>
 
        </form>

          <div class="direct-contact-container">
    
            <ul class="contact-list">
              <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Dakar, Sénégal</span></i></li>
              
              <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone">+221-77-***-23-54</span></i></li>
              
              <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail">HotelsSenegal@gmail.com</span></i></li>
              
            </ul>
    
            <hr>
            <ul class="social-media-list">
              <li><a href="#" target="_blank"><i class="fab fa-github"></i></a></li>
              <li><a href="#" target="_blank"><i class="fab fa-codepen"></i></a></li>
              <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
          </ul>
          
            <hr>
    
            <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>
    
          </div>
        
      </div>
      
    </section>  
      
      
  </section>

  <footer class="footer">
    
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-github"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">About</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

    </ul>
    <p>&copy;2024 Projet | All Rights Reserved</p>
  </footer>
  
<div class="form-popup">
  <span class="close-btn material-symbols-rounded">close</span>
  <div class="form-box login">
    <div class="form-details">
      <h2 style="color: black;">Welcome Back</h2>
      <p style="color: black;">Please log in using your personal information to stay connected with us.</p>
    </div>
    <div class="form-content">
      <h2>LOGIN</h2>
      <form action="#">
        <div class="input-field">
          <input type="text" required>
          <label>Email</label>
        </div>
        <div class="input-field">
          <input type="password" required>
          <label>Password</label>
        </div>
        <a href="#" class="forgot-pass-link">Forgot password?</a>
        <button type="submit">Log In</button>
      </form>
      <div class="bottom-link">
        Don't have an account?
        <a href="#" id="signup-link">Signup</a>
      </div>
    </div>
  </div>
  <div class="form-box signup">
    <div class="form-details">
      <h2>Create Account</h2>
      <p>To become a part of our community, please sign up using your personal information.</p>
    </div>
    <div class="form-content">
      <h2>SIGNUP</h2>
      <form action="#">
        <div class="input-field">
          <input type="text" required>
          <label>Username</label>
        </div>
        <div class="input-field">
          <input type="tel" required>
          <label>Numero de téléphone</label>
        </div>
        <div class="input-field">
          <input type="email" required>
          <label>Enter your email</label>
        </div>
        <div class="input-field">
          <input type="password" required>
          <label>Create password</label>
        </div>
        <div class="policy-text">
          <input type="checkbox" id="policy">
          <label for="policy">
            I agree the
            <a href="#" class="option">Terms & Conditions</a>
          </label>
        </div>
        <button type="submit">Sign Up</button>
      </form>
      <div class="bottom-link">
        Already have an account?
        <a href="#" id="login-link">Login</a>
      </div>
    </div>
  </div>
</div>

  <script  src="./script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
