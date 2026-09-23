<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Tumble GYM</title>
  <link href="/favicon.ico?v=2" rel="icon" />
  <link rel="stylesheet" href="css/styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>
    
<!-- ===== Header & Hero Section ===== -->
<header>
  <nav class="navbar">
      <div class="logo" data-aos="fade-down">
          <a href="/"><img src="images/logo.png" alt="The Tumble Gold" /></a>
      </div>
      <div class="burger" id="burger-menu">
          <span></span>
          <span></span>
          <span></span>
      </div>
      <div class="nav-right" id="nav-right">
          <ul class="nav-links" data-aos="fade-down">
              <li><a href="#event-details" onclick="closeMenu()">Event Details</a></li>
              <li><a href="#registration" onclick="closeMenu()">Registration</a></li>
              <li><a href="#venue-section" onclick="closeMenu()">Event Location</a></li>
              <li><a href="#faq-section" onclick="closeMenu()">FAQs</a></li>
          </ul>
          <a href="#registration" class="btn-free-trial" data-aos="fade-down" onclick="closeMenu()">Claim My Spot</a>
      </div>
  </nav>

  <section class="hero">
      <div class="hero-content">
        <div class="event-info btn-filled" data-aos="fade-right">
          <img src="images/svg/event-calender.svg" alt="Calendar">December 13, 2025 | 9 AM - 5 PM
        </div>
          <h1 data-aos="fade-left">
            <span class="blue">TUMBLE</span> <span class="white">FEST</span> <span class="magenta">2025</span>
          </h1>
          <p class="tagline" data-aos="fade-right">OBSTACLE RACE EVENT</p>
          <div class="hero-host-box" data-aos="fade-left">
            <span class="host-left ">The Tumble Gym™</span>
            <span class="host-separator">×</span>
            <span class="host-right ">SLS International School</span>
          </div>
          <div class="hero-challenge-text fade-in-left">
            A DAY OF 
            <span class="highlight-blue">FITNESS,</span> 
            <span class="highlight-pink">FUN &amp; </span>
            <span class="highlight-pink">CHALLENGE!</span>
          </div>
          <div class="hero-buttons">
            <a href="#registration" class="btn-filled fade-in-left">
              Register Now
              <img src="images/svg/right-arrow.svg" height="18" width="18" class="btn-arrow">
            </a>
            <a href="#event-details" class="btn-outline-border fade-in-right">
              Learn More
              <img src="images/svg/right-arrow.svg" height="18" width="18" class="btn-arrow">
            </a>
          </div>
      </div>
  </section>
</header>

<!-- EVENT COUNTDOWN -->
<section class="event-countdown-section">
  <div class="event-tag-row" data-aos="zoom-in">
    <!-- <div class="background-orb"></div> -->
    <span class="event-tag"><span class="tag-dot"></span>Limited Spots Available</span>
    <span class="event-tag"><span class="tag-dot"></span>Ages 3-14</span>
    <span class="event-tag"><span class="tag-dot"></span>Safe & Supervised</span>
  </div>
  <div class="event-countdown-bg">
    <h2 class="event-countdown-heading" data-aos="zoom-in">EVENT STARTS IN</h2>
    <div class="countdown-timer-row">
      <div class="timer-box-gradient"><div class="timer-box" data-aos="slide-up"><div class="timer-value">07</div></div></div>
      <div class="timer-box-gradient"><div class="timer-box" data-aos="slide-up"><div class="timer-value">21</div></div></div>
      <div class="timer-box-gradient"><div class="timer-box" data-aos="slide-up"><div class="timer-value">44</div></div></div>
      <div class="timer-box-gradient"><div class="timer-box" data-aos="slide-up"><div class="timer-value">09</div></div></div>
    </div>
    <div class="timer-label-row" data-aos="slide-up">
      <div class="timer-label">Days</div>
      <div class="timer-label">Hours</div>
      <div class="timer-label">Minutes</div>
      <div class="timer-label">Seconds</div>
    </div>
    <div class="event-date-info" data-aos="fade-up">
      Don't Miss Out - December 13, 2025 Is Approaching Fast!
    </div>
    <div class="countdown-btn-wrap" data-aos="fade-up">
      <a href="#registration" class="countdown-cta-btn">
        Secure Your Spot Now
        <img src="images/svg/right-arrow.svg" height="18" width="18" class="btn-arrow">
      </a>
    </div>
  </div>
</section>

<!-- ===== About Section ===== -->
 <section class="about-section">
  <div class="about-row">
    <div class="about-left" data-aos="fade-up-right">
      <h2 class="about-main-heading">ABOUT</h2>
      <h2 class="about-event-heading">
        <span class="blue">TUMBLE</span> <span class="white">FEST</span> <span class="magenta">2025</span>
      </h2>
      <p class="about-desc">
        Tumble Fest 2025 is a unique obstacle race carnival designed to inspire movement, confidence &amp; fun among children aged 3–14. Powered by The Tumble Gym™, this festival blends fitness with joy, teamwork and family engagement.
      </p>
    </div>
    <div class="about-right" data-aos="fade-up-left">
      <img loading="lazy" src="/images/site-logo-large.png" alt="The Tumble Gym Logo" class="about-logo">
    </div>
  </div>
  <div class="about-features-grid">
    <div class="feature-box">
      <img loading="lazy" src="/images/feature-1.png" alt="Safe Foam Obstacles" data-aos="fade-up-right">
      <h3 class="feature-title" data-aos="fade-up">SAFE FOAM OBSTACLES</h3>
      <p class="feature-desc" data-aos="fade-up">Age-Appropriate Challenges With Certified Safety Standards</p>
    </div>
    <div class="feature-box">
      <img loading="lazy" src="/images/feature-2.png" alt="Medals For All" data-aos="fade-up-right">
      <h3 class="feature-title" data-aos="fade-up">MEDALS FOR ALL</h3>
      <p class="feature-desc" data-aos="fade-up">Every Finisher Receives A Participation Medal & Certificate</p>
    </div>
    <div class="feature-box">
      <img loading="lazy" src="/images/feature-3.png" alt="Music & Photo Zone" data-aos="fade-up-left">
      <h3 class="feature-title" data-aos="fade-up">MUSIC & PHOTO ZONE</h3>
      <p class="feature-desc" data-aos="fade-up">Energetic Atmosphere With Dedicated Photography Spots</p>
    </div>
    <div class="feature-box">
      <img loading="lazy" src="/images/feature-4.png" alt="Family Fitness Day" data-aos="fade-up-left">
      <h3 class="feature-title" data-aos="fade-up">FAMILY FITNESS DAY</h3>
      <p class="feature-desc" data-aos="fade-up">Bring The Whole Family For Fun Activities & Bonding</p>
    </div>
  </div>
</section>

<!-- ===== Race Categories Section ===== -->
 <section class="race-categories-section">
  <h2 class="race-categories-heading" data-aos="zoom-in">RACE CATEGORIES</h2>
  <div class="race-categories-grid">
    <div class="race-card" data-aos="zoom-in-up">
      <div class="race-card-title"><img src="/images/svg/bulb.svg" class="race-card-icon"/> Mini Racers</div>
      <div class="race-card-age">Ages 3-5y.</div>
      <a href="#registration" class="race-card-btn">Book Now <img src="images/svg/right-arrow.svg" height="18" width="18" class="btn-arrow"></span></a>
    </div>
    <div class="race-card" data-aos="zoom-in-up">
      <div class="race-card-title"><img src="/images/svg/bulb.svg" class="race-card-icon"/> Junior Racers</div>
      <div class="race-card-age">Ages 6-10y.</div>
      <a href="#registration" class="race-card-btn">Book Now <img src="images/svg/right-arrow.svg" height="18" width="18" class="btn-arrow"></span></a>
    </div>
    <div class="race-card" data-aos="zoom-in-up">
      <div class="race-card-title"><img src="/images/svg/bulb.svg" class="race-card-icon"/> Senior Racers</div>
      <div class="race-card-age">Ages 12-14y.</div>
      <a href="#registration" class="race-card-btn">Book Now <img src="images/svg/right-arrow.svg" height="18" width="18" class="btn-arrow"></span></a>
    </div>
  </div>
</section>

<!-- ==== Sponser Section ===== -->
 <section class="sponsors-section">
  <h2 class="sponsors-heading" data-aos="zoom-in">OUR<br>
    <span class="blue">PROUD</span> <span class="magenta">SPONSERS</span>
  </h2>
  <p class="sponsors-desc" data-aos="zoom-in">
    Tumble Fest 2025 Is Made Possible By Our Amazing Sponsors Who Support Children's Fitness And Development.
  </p>
  <div class="sponsors-grid">
    <div class="sponsor-card" data-aos="flip-up">
      <div class="sponsor-icon"><img src="images/svg/car.svg" alt="Car" width="30"></div>
      <div class="sponsor-title">SPONSOR 1</div>
    </div>
    <div class="sponsor-card" data-aos="flip-up">
      <div class="sponsor-icon"><img src="images/svg/boat.svg" alt="Boat" width="30"></div>
      <div class="sponsor-title">SPONSOR 2</div>
    </div>
    <div class="sponsor-card" data-aos="flip-up">
      <div class="sponsor-icon"><img src="images/svg/dumbbell.svg" alt="Dumbbell" width="30"></div>
      <div class="sponsor-title">SPONSOR 3</div>
    </div>
    <div class="sponsor-card" data-aos="flip-up">
      <div class="sponsor-icon"><img src="images/svg/group.svg" alt="Group" width="30"></div>
      <div class="sponsor-title">SPONSOR 4</div>
    </div>
    <div class="sponsor-card" data-aos="flip-up">
      <div class="sponsor-icon"><img src="images/svg/cup.svg" alt="Cup" width="30"></div>
      <div class="sponsor-title">SPONSOR 5</div>
    </div>
    <div class="sponsor-card" data-aos="flip-up">
      <div class="sponsor-icon"><img src="images/svg/leaf.svg" alt="Leaf" width="30"></div>
      <div class="sponsor-title">SPONSOR 6</div>
    </div>
    <div class="sponsor-card" data-aos="flip-up">
      <div class="sponsor-icon"><img src="images/svg/graduate.svg" alt="Graduate" width="30"></div>
      <div class="sponsor-title">SPONSOR 7</div>
    </div>
    <div class="sponsor-card" data-aos="flip-up">
      <div class="sponsor-icon"><img src="images/svg/gear.svg" alt="Gear" width="30"></div>
      <div class="sponsor-title">SPONSOR 8</div>
    </div>
  </div>
</section>

<section class="sponsor-interest-section">
  <div class="sponsor-interest-row">
    <div class="sponsor-interest-left">
      <h2 class="sponsor-interest-heading" data-aos="fade-up-right">
        INTERESTED IN SPONSORING <br>
        <span class="blue">TUMBLE</span> <span class="magenta">FEST</span>
      </h2>
      <p class="sponsor-interest-desc" data-aos="fade-up-right">
        Partner With Us To Support Children's Fitness And Reach Thousands Of Families.
        Contact Us To Learn About Sponsorship Opportunities!
      </p>
      <a href="#registration" data-aos="fade-up-right" class="sponsor-interest-btn">Book Spot Now <img src="images/svg/right-arrow.svg" height="18" width="18" class="btn-arrow"></span></a>
    </div>
    <div class="sponsor-interest-right" data-aos="fade-up-left">
      <img loading="lazy" src="images/sponsor-runner.png" alt="Runner" class="sponsor-interest-image">
    </div>
  </div>
</section>

<!-- ===== Venue Section ===== -->
<section id="venue-section" class="venue-section">
  <h2 class="venue-heading" data-aos="zoom-in"><span class="magenta">EVENT</span> <span class="blue">VENUE</span></h2>
  <div class="venue-image-wrap">
    <img loading="lazy" data-aos="fade-up" src="images/venue.png" alt="Event Venue" class="venue-image">
    <div class="venue-image-overlay">
      <div class="venue-image-text" data-aos="flip-up">
        VENUE : <br>
        Hosted At SLS International School
      </div>
      <hr class="venue-image-line"/>
    </div>
  </div>
  <div class="venue-features-grid">
    <div class="venue-feature-exact" data-aos="zoom-in-right">
      <div class="venue-feature-icon-bg">
        <img src="images/svg/location-pin.svg" width="38" alt="Location">
      </div>
      <div class="venue-feature-title">LOCATION</div>
      <div class="venue-feature-desc">
            Demo Fitness Campus,
            123 Example Avenue,
            Sample District,
            Bengaluru - 000000<br>
            Sports Complex & Grounds
      </div>
    </div>
    <div class="venue-feature-exact" data-aos="zoom-in-up">
      <div class="venue-feature-icon-bg">
        <img src="images/svg/car.svg" width="38" alt="Location">
      </div>
      <div class="venue-feature-title">PARKING FACILITIES</div>
      <div class="venue-feature-desc">
        Ample Parking Space Available On Campus. Follow Signage For Designated Parking Zones.
      </div>
    </div>
    <div class="venue-feature-exact" data-aos="zoom-in-left">
      <div class="venue-feature-icon-bg">
        <img src="images/svg/check.svg" width="38" alt="Location">
      </div>
      <div class="venue-feature-title">SAFETY ARRANGEMENTS</div>
      <div class="venue-feature-desc">
        Trained Supervisors, Medical Support, And Secure Entry Gates Ensure A Safe Environment.
      </div>
    </div>
  </div>
  <div class="venue-btn-wrap" data-aos="zoom-in-up">
    <a href="#event-details" class="venue-btn">View Event Details <img src="images/svg/right-arrow.svg" height="18" width="18" class="btn-arrow"></span></a>
  </div>
</section>

<!-- ===== Registration Section ===== -->
<section id="registration" class="regfest-section">
  <h2 class="regfest-title" data-aos="zoom-in">
    REGISTER FOR <br>
    <span class="blue">TUMBLE</span> <span class="white">FEST</span> <span class="magenta">2025</span>
  </h2>
  <div class="regfest-subtitle" data-aos="zoom-in">
    Secure your child’s spot in this exciting Obstacle Race Carnival! Fill out the form below to complete registration.
  </div>

  <div class="regfest-centerblock" data-aos="zoom-in-up">
    <div id="form-status-bar"></div>
    <form class="regfest-form" id="regfestForm">
      <div class="regfest-row">
        <label>Child’s Full Name <span class="req-star">*</span></label>
        <input type="text" name="child_name" required placeholder="Enter your child's full name" />
      </div>
      <div class="custom-dropdown-row">
        <!-- Dropdown 1 -->
        <div class="custom-select-wrap" id="age-select-wrap">
          <label>Child Age <span class="req-star">*</span></label>
          <div class="custom-select" tabindex="0">
            <div class="custom-select__selected age">Select Age</div>
            <div class="custom-select__dropdown">
              <div class="custom-select__option" data-value="3-5">3 - 5 Years</div>
              <div class="custom-select__option" data-value="6-10">6 - 10 Years</div>
              <div class="custom-select__option" data-value="12-14">12 - 14 Years</div>
            </div>
          </div>
          <input type="hidden" name="child_age" required>
        </div>
        <!-- Dropdown 2 -->
        <div class="custom-select-wrap" id="fee-select-wrap">
          <label>Registration Fee</label>
          <div class="custom-select price-readonly" tabindex="0">
            <div class="custom-select__selected">₹ 599.00</div>
          </div>
          <input type="hidden" name="registration_fee" value="599">
        </div>
      </div>
      <div class="regfest-row">
        <label>Parents Full Name <span class="req-star">*</span></label>
        <input type="text" name="parent_name" required placeholder="Enter parent/guardian name" />
      </div>
      <div class="regfest-row regfest-2col">
        <div>
          <label>Email Address <span class="req-star">*</span></label>
          <input type="email" name="email" required placeholder="Enter your email address" />
        </div>
        <div>
          <label>Mobile Number <span class="req-star">*</span></label>
          <input type="tel" name="mobile" maxlength="10" required placeholder="1234567890" />
        </div>
      </div>
      <div class="regfest-row">
        <label>School/Class Name (Optional)</label>
        <input type="text" name="school	" placeholder="Enter your child school and class details" />
      </div>
      <div class="regfest-row regfest-checkbox">
        <input type="checkbox" required id="agree" />
        <label for="agree" class="fancy-chk-label">
          I agree to the terms & conditions and provide parental consent for my child to participate in Tumble Fest 2025. I understand the safety guidelines and event policies.
        </label>
      </div>
    </form>

    <!-- These are OUTSIDE the form/card -->
    <div class="regfest-process-box" data-aos="zoom-in-up">
      <div class="regfest-process-title">
        <img src="images/svg/info.svg" alt="" width="19" /> REGISTRATION PROCESS
      </div>
      <div class="regfest-process-desc">
        After submitting this form, you will be redirected to complete payment via Razorpay. Once payment is confirmed, you’ll receive an e-ticket with QR code via email within 24 hours.
      </div>
    </div>
    <div class="regfest-actions" data-aos="zoom-in-up">
      <button class="btn-filled qr-priority-btn no-border f-medium" id="openQrModal" type="button">
        Register through QR Code <img src="images/svg/right-arrow.svg" height="18" width="18" class="btn-arrow">
      </button>
      <!-- <button class="btn-filled" id="submitOutside" type="submit">Register through Razorpay <img src="images/svg/right-arrow.svg" height="18" width="18" class="btn-arrow"></button> -->
      <!-- <div class="regfest-razorpay-badge">
        <img src="images/svg/secure.svg" width="18" alt="" />
        Secure Payment Powered By Razorpay
      </div> -->
    </div>
    <div class="regfest-support-row" data-aos="zoom-in-up">
      <img src="images/svg/question.svg" width="18" alt="" />
      Need assistance? Contact us or check our FAQs.
    </div>
  </div>
</section>

<!-- <div id="qrCodeModal" style="display:none;">
  <div class="modal-overlay"></div>
  <div class="qr-popup-content">
    <h3>Pay via QR Code</h3>
    <img src="images/payment-qr.jpg" alt="Payment QR Code" style="max-width:220px;">
    <div style="margin:16px 0 10px 0; text-align: center">
      <input type="file" accept="image/*" id="qrScreenshot" style="display:none;">
      <button type="button" class="btn-filled" id="uploadBtn">Upload Payment Screenshot</button><br>
      <span id="qr-file-name" style="font-size:.97em; margin-left:10px; color:#283;">No file chosen</span>
    </div>
    <button type="button" class="btn-filled" id="qrSubmitBtn" disabled>Submit</button>
    <div id="qr-success-msg" style="display:none; color:green; margin:12px 0 0 0; text-align: center;
    font-weight: 600;">
      Thank you! Your registration is submitted for admin approval.
    </div>
    <button type="button" class="btn-link" id="closeQrModal" style="margin-top:12px;">Close</button>
  </div>
</div> -->

<div id="qrCodeModal" style="display:none;">
  <div class="modal-overlay"></div>
  <div class="qr-popup-content">
    <!-- Modern close button (styled as X) in floating corner -->
    <button type="button" class="qr-modal-close" id="closeQrModal" title="Close">&times;</button>

    <h3 class="qr-modal-title">
      <svg style="height:1.7em;margin-right:.25em;vertical-align:middle;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 38" width="38" height="38" fill="none">
        <rect x="2.25" y="2.25" width="10.5" height="10.5" rx="2" stroke="#2E21B0" stroke-width="2"/>
        <rect x="25.25" y="2.25" width="10.5" height="10.5" rx="2" stroke="#2E21B0" stroke-width="2"/>
        <rect x="2.25" y="25.25" width="10.5" height="10.5" rx="2" stroke="#2E21B0" stroke-width="2"/>
        <rect x="26.5" y="26.5" width="3" height="3" rx="0.8" fill="#F6068B"/>
        <rect x="18.5" y="6.5" width="3" height="3" rx="0.8" fill="#2E21B0"/>
        <rect x="6.5" y="18.5" width="3" height="3" rx="0.8" fill="#2E21B0"/>
        <rect x="18.5" y="18.5" width="3" height="3" rx="0.8" fill="#2E21B0"/>
        <rect x="30.5" y="18.5" width="3" height="3" rx="0.8" fill="#2E21B0"/>
        <rect x="18.5" y="30.5" width="3" height="3" rx="0.8" fill="#2E21B0"/>
      </svg>
      Pay via QR Code
    </h3>

    <img src="images/payment-qr.jpg" alt="Payment QR Code" class="qr-img-main">
    <div class="qr-upload-row">
      <input type="file" accept="image/*" id="qrScreenshot" style="display:none;">
      <button type="button" class="btn-filled no-border f-medium" id="uploadBtn">Upload Payment Screenshot</button>
      <span id="qr-file-name" class="qr-file-name">No file chosen</span>
    </div>
    <button type="button" class="btn-filled no-border f-medium" id="qrSubmitBtn" disabled>Submit</button>
    <div id="qr-success-msg" class="qr-success-msg">
      Thank you! Your registration is submitted for admin approval.
    </div>
  </div>
</div>

<div id="thankYouModal" style="display:none;">
  <div class="modal-overlay"></div>
  <div class="thanks-popup-content">
    <button type="button" class="qr-modal-close" id="closeThankYouModal" title="Close">&times;</button>
    <svg style="width:55px; margin:18px auto 12px;display:block;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64" width="64" height="64">
      <g>
        <ellipse cx="32" cy="57.5" rx="24" ry="4.5" fill="#DFE1E9"/>
        <path d="M14 26L10 54l44-22-28-14-12 8z" fill="#FFE566"/>
        <path d="M14 26L10 54l44-22-6-4-38 18z" fill="#FCC419"/>
        <path d="M28 32l20 10M13 33l19 9" stroke="#F1B203" stroke-width="2" stroke-linecap="round"/>
        <circle cx="20" cy="22" r="3" fill="#FD7B37"/>
        <circle cx="25" cy="35" r="2" fill="#FD7B37"/>
        <circle cx="35" cy="39" r="2" fill="#65C466"/>
        <circle cx="42" cy="33" r="2" fill="#4EA3F1"/>
        <circle cx="51" cy="31" r="2.5" fill="#FD7B37"/>
        <path d="M35 13s0-4 6-5 11 1 13 6c2.5 8-11 10-13 21" stroke="#F9A602" stroke-width="2" fill="none"/>
        <path d="M28 12c-1-4 2.5-7 8-7s13 1 11 6c-1 2.8-7.5 4.6-8 7" stroke="#A381F7" stroke-width="2" fill="none"/>
        <path d="M25 10a4 4 0 00-6-2c-2 2 1.5 4 .5 7" stroke="#F96854" stroke-width="2" fill="none"/>
        <path d="M44 43l-2 13" stroke="#F1B203" stroke-width="2" stroke-linecap="round"/>
      </g>
    </svg>
    <div class="thank-title">Thank You for Registering!</div>
    <div class="thank-desc">
      We’ve received your registration.<br>
      Our team will review and approve it soon.
    </div>
  </div>
</div>

<!-- ===== EXPECT Section ===== -->
<section class="expect-section">
  <h2 class="expect-title" data-aos="zoom-in">
    WHAT TO EXPECT AT <br>
    <span class="blue">TUMBLE</span> <span class="magenta">FEST</span>
  </h2>
  <div class="expect-subtitle" data-aos="zoom-in">
    An action-packed day filled with challenges, fun activities, and memorable moments for your children!
  </div>
  <div class="expect-feature-imggrid">
    <!-- 1 -->
    <div class="expect-feature-img" data-aos="zoom-in-right">
      <img loading="lazy" src="images/expect1.png" alt="">
      <div class="expect-img-overlay">
        <div class="expect-img-title">Exciting Challenges</div>
        <div class="expect-img-desc">Age-appropriate obstacles designed<br>for fun and confidence building.</div>
      </div>
    </div>
    <!-- 2 -->
    <div class="expect-feature-img" data-aos="zoom-in-up">
      <img loading="lazy" src="images/expect2.png" alt="">
      <div class="expect-img-overlay">
        <div class="expect-img-title">Team Spirit</div>
        <div class="expect-img-desc">Build friendships and learn the<br>power of teamwork.</div>
      </div>
    </div>
    <!-- 3 -->
    <div class="expect-feature-img" data-aos="zoom-in-left">
      <img loading="lazy" src="images/expect3.png" alt="">
      <div class="expect-img-overlay">
        <div class="expect-img-title">Expert Guidance</div>
        <div class="expect-img-desc">Trained coaches support every child<br>throughout the course.</div>
      </div>
    </div>
  </div>

  <div class="expect-row-features">
    <div class="expect-feature-card" data-aos="flip-up">
      <img src="images/svg/certificate.svg" alt="Certificate" width="35" />
      <div class="expect-feature-main">Certificates<br>For All</div>
    </div>
    <div class="expect-feature-card" data-aos="flip-up">
      <img src="images/svg/camera2.svg" alt="Photo Ops" width="35" />
      <div class="expect-feature-main">Photo Ops<br>Memorable</div>
    </div>
    <div class="expect-feature-card" data-aos="flip-up">
      <img src="images/svg/guitar.svg" alt="Live Music" width="35" />
      <div class="expect-feature-main">Live Music<br>Energizing</div>
    </div>
    <div class="expect-feature-card" data-aos="flip-up">
      <img src="images/svg/drink.svg" alt="Beverages" width="35" />
      <div class="expect-feature-main">Refreshments<br>Available</div>
    </div>
  </div>

  <div class="expect-cta-row" data-aos="zoom-in-up">
    <a href="#registration" class="btn-outline-border">Dont Miss Out - Book Now <img src="images/svg/right-arrow.svg" height="18" width="18" class="btn-arrow"></span></a>
  </div>
  <div class="expect-smallnote" data-aos="zoom-in-up">
    <img src="images/svg/clock.svg" height="18" width="18">
    Limited Slots Available – First Come, First Served!
  </div>
</section>

<!-- ==== Slider Section ==== -->
<section class="event-memories-section">
  <h2 class="event-memories-title" data-aos="zoom-in">
    OUR <span class="blue">EVENT</span> <span class="magenta">MEMORIES</span>
  </h2>
  <div class="event-memories-subtitle" data-aos="zoom-in">
    Take a look at the amazing moments from our previous Tumble Gym events – where fitness meets fun!
  </div>
</section>

<!-- Full-width carousel outside container -->
<div class="event-memories-carousel-full">
  <button class="carousel-arrow left" id="carouselPrev">
    <img src="images/svg/left-arrow-sl.svg" alt="Prev" />
  </button>
  <div class="carousel-track" id="carouselTrack"></div>
  <button class="carousel-arrow right" id="carouselNext">
    <img src="images/svg/right-arrow-sl.svg" alt="Next" />
  </button>
</div>

<section class="event-memories-below">
  <div class="carousel-dots" id="carouselDots"></div>
  <div class="memories-caption" id="memoriesCaption"></div>
  <div class="event-memories-stats">
    <div class="stat-box box1">
      <div class="stat-num">500+</div>
      <div class="stat-desc">Participants</div>
    </div>
    <div class="stat-box box2">
      <div class="stat-num">15+</div>
      <div class="stat-desc">Events Hosted</div>
    </div>
    <div class="stat-box box3">
      <div class="stat-num">100%</div>
      <div class="stat-desc">Safe Record</div>
    </div>
    <div class="stat-box box4">
      <div class="stat-num">5 <img src="images/svg/star.svg" width="25" height="25"></div>
      <div class="stat-desc">Rating</div>
    </div>
  </div>
</section>

<section class="parents-hearts-section">
  <h2 class="parents-hearts-title">
    FROM OUR <span class="blue">PARENTS</span> <span class="magenta">HEARTS</span>
  </h2>
  <div class="parents-hearts-subtitle">
    Hear from parents who’ve experienced our programs firsthand — their stories reflect the care, fun, and growth their children enjoyed.
  </div>
  <div class="parents-hearts-grid">
    <div class="parent-testimonial-card" style="background-image: url('images/testimonial1.png')">
      <div class="testimonial-overlay"></div>
      <div class="testimonial-content">
        <div class="testimonial-stars">
          <img src="images/svg/star.svg" alt="★" />
          <img src="images/svg/star.svg" alt="★" />
          <img src="images/svg/star.svg" alt="★" />
          <img src="images/svg/star.svg" alt="★" />
          <img src="images/svg/star.svg" alt="★" />
        </div>
        <div class="testimonial-text">
          “Excellent organization and such an air atmosphere! My daughter gained so much confidence. The Tumble Gym team knows how to make fitness enjoyable.”
        </div>
        <div class="testimonial-author">
          – Rajesh Kumar
        </div>
      </div>
    </div>

    <div class="parent-testimonial-card" style="background-image: url('images/testimonial2.png')">
      <div class="testimonial-overlay"></div>
      <div class="testimonial-content">
        <div class="testimonial-stars">
          <img src="images/svg/star.svg" alt="★" />
          <img src="images/svg/star.svg" alt="★" />
          <img src="images/svg/star.svg" alt="★" />
          <img src="images/svg/star.svg" alt="★" />
          <img src="images/svg/star.svg" alt="★" />
        </div>
        <div class="testimonial-text">
          “Best children’s fitness event in the city! Professional setup, great energy, and my kids are always asking when the next one is. Highly recommended!”
        </div>
        <div class="testimonial-author">
          – Anita Desai
        </div>
      </div>
    </div>

    <div class="parent-testimonial-card" style="background-image: url('images/testimonial3.png')">
      <div class="testimonial-overlay"></div>
      <div class="testimonial-content">
        <div class="testimonial-stars">
          <img src="images/svg/star.svg" alt="★" />
          <img src="images/svg/star.svg" alt="★" />
          <img src="images/svg/star.svg" alt="★" />
          <img src="images/svg/star.svg" alt="★" />
          <img src="images/svg/star.svg" alt="★" />
        </div>
        <div class="testimonial-text">
          “My son absolutely loved the obstacle course! The coaches were amazing and safety was their top priority. Can’t wait for the next event!”
        </div>
        <div class="testimonial-author">
          – Pruthvi Raj Gowd
        </div>
      </div>
    </div>
  </div>
</section>

<!-- === FAQ Section ==== -->
<section id="faq-section" class="faq-section">
    <h2 class="faq-title">FREQUENTLY<br>
      <span class="blue">ASKED</span> <span class="magenta">QUESTIONS</span></h2>
    <div class="faq-subtitle">
      Got questions? We've got answers! Here are the most common questions about Tumble Fest 2025.
    </div>
  <div class="faq-outerbox">
    <div class="faq-block">
      <div class="faq-item faq-item-open">
        <div class="faq-row">
          <span class="faq-bar"></span>
          <span class="faq-q">What age groups can participate in Tumble Fest 2025?</span>
          <img class="faq-icon faq-plus" src="/images/svg/plus.svg" alt="Expand" />
          <img class="faq-icon faq-close" src="/images/svg/close.svg" alt="Close" />
        </div>
        <div class="faq-a">
          Tumble Fest 2025 is designed for children aged 3–14 years. We have three categories: Mini Racers (3–6 years), Junior (7–10 years), and Senior (11–14 years). Each category has age-appropriate obstacles and challenges.
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-row">
          <span class="faq-bar"></span>
          <span class="faq-q">How much does registration cost?</span>
          <img class="faq-icon faq-plus" src="/images/svg/plus.svg" alt="Expand" />
          <img class="faq-icon faq-close" src="/images/svg/close.svg" alt="Close" />
        </div>
        <div class="faq-a">
          Registration details and costs will be shared on the official event page and through our communication channels.
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-row">
          <span class="faq-bar"></span>
          <span class="faq-q">Is the event safe for young children?</span>
          <img class="faq-icon faq-plus" src="/images/svg/plus.svg" alt="Expand" />
          <img class="faq-icon faq-close" src="/images/svg/close.svg" alt="Close" />
        </div>
        <div class="faq-a">
          Yes. Child safety is our top priority. All activities are supervised by trained adults and designed for each age group’s safety and comfort.
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-row">
          <span class="faq-bar"></span>
          <span class="faq-q">What should my child wear and bring?</span>
          <img class="faq-icon faq-plus" src="/images/svg/plus.svg" alt="Expand" />
          <img class="faq-icon faq-close" src="/images/svg/close.svg" alt="Close" />
        </div>
        <div class="faq-a">
          Comfortable sportswear, sneakers, a water bottle, and a cap are recommended. Avoid jewelry and loose items.
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-row">
          <span class="faq-bar"></span>
          <span class="faq-q">Can parents watch the event?</span>
          <img class="faq-icon faq-plus" src="/images/svg/plus.svg" alt="Expand" />
          <img class="faq-icon faq-close" src="/images/svg/close.svg" alt="Close" />
        </div>
        <div class="faq-a">
          Absolutely! Families are encouraged to watch, support, and celebrate the participants.
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-row">
          <span class="faq-bar"></span>
          <span class="faq-q">How will I receive my ticket after payment?</span>
          <img class="faq-icon faq-plus" src="/images/svg/plus.svg" alt="Expand" />
          <img class="faq-icon faq-close" src="/images/svg/close.svg" alt="Close" />
        </div>
        <div class="faq-a">
          Entry passes and confirmation will be sent via email and WhatsApp to the details you provide at registration.
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-row">
          <span class="faq-bar"></span>
          <span class="faq-q">What is the refund policy?</span>
          <img class="faq-icon faq-plus" src="/images/svg/plus.svg" alt="Expand" />
          <img class="faq-icon faq-close" src="/images/svg/close.svg" alt="Close" />
        </div>
        <div class="faq-a">
          Kindly refer to the event’s terms and official policy for refund eligibility.
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-row">
          <span class="faq-bar"></span>
          <span class="faq-q">Is parking available at the venue?</span>
          <img class="faq-icon faq-plus" src="/images/svg/plus.svg" alt="Expand" />
          <img class="faq-icon faq-close" src="/images/svg/close.svg" alt="Close" />
        </div>
        <div class="faq-a">
          Yes, ample parking is available on campus for event participants and families.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====== FAQ Section ===== -->
<section class="faq-support-section">
  <div class="faq-support-bg left"></div>
  <div class="faq-support-bg right"></div>
  <div class="faq-support-container">
    <h2 class="faq-support-title">STILL HAVE QUESTIONS?</h2>
    <div class="faq-support-desc">
      Our Support Team Is Here To Help! Reach Out To Us Via Phone, Email, Or WhatsApp.
    </div>
    <div class="faq-support-btns">
      <a href="tel:+910000000000" class="faq-btn contact">
        Contact Support
        <img src="images/svg/white-call.svg" alt="" width="20">
      </a>
      <a href="#" class="faq-btn whatsapp" onclick="openWhatsApp();">
        Whatsapp Now
        <img src="images/svg/white-wp.svg" alt="" width="20">
      </a>
    </div>
  </div>
</section>

<!-- Section 1: Banner/Heading -->
<section class="volunteer-join-hero">
  <div class="volunteer-hero-bg"></div>
  <div class="volunteer-hero-content">
    <h2 class="volunteer-join-heading">
      JOIN <br><span class="blue">AS A</span> <span class="magenta">VOLUNTEER</span>
    </h2>
    <p class="volunteer-join-desc">
      Join our incredible team of volunteers and play a vital role in bringing the magic of Tumble Fest to life! Your energy, creativity, and dedication will help make every moment unforgettable.
    </p>
  </div>
  <img src="images/hand-left.png" class="volunteer-hero-hand left" alt="" />
  <img loading="lazy" loading="lazy" src="images/hand-right.png" class="volunteer-hero-hand right" alt="" />
</section>

<!-- Section 2: Form Section -->
<section class="volunteer-join-form-wrap">
  <form id="volunteer-join-form" class="volunteer-join-form">
    <div id="v_msg"></div>
    <div class="form-row">
      <label>Full Name *</label>
      <input type="text" name="name" required placeholder="Enter Your Full Name" />
    </div>
    <div class="form-row">
      <label>Email Address *</label>
      <input type="email" name="email" required placeholder="Enter Your Email Address" />
    </div>
    <div class="form-row-wrap">
      <div class="form-row">
        <label>Mobile Number *</label>
        <input type="tel" name="phone" required placeholder="1234567890" />
      </div>
      <div class="form-row">
        <label>Age *</label>
        <input type="number" name="age" min="16" required placeholder="Must Be 16 Or Above" />
      </div>
    </div>
    <div class="form-row-wrap">
      <div class="form-row">
        <label>Preferred Volunteer Role *</label>
        <select name="volunteer_role" required>
          <option>Select Your Role</option>
          <option>Registration Desk</option>
          <option>Obstacle Course Support</option>
          <option>Photography Team</option>
          <option>Refreshments</option>
          <option>Crowd Management</option>
          <option>Medical Assistance</option>
        </select>
      </div>
      <div class="form-row">
        <label>Availability *</label>
        <select name="availability" required>
          <option>Select Your Availability</option>
          <option>Full Day</option>
          <option>Morning Only</option>
          <option>Afternoon Only</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <label>Previous Experience (Optional)</label>
      <textarea name="pre_exp" placeholder="Tell Us About Relevant Your Experience"></textarea>
    </div>
    <div class="form-submit-wrap">
      <button type="submit" class="form-btn-submit">Submit Application <span class="btn-arrow">→</span></button>
    </div>
  </form>
</section>

<!-- ==== volunteer Section ===== -->
 <section class="volunteer-section">
  <h2 class="volunteer-heading">WHY</h2>
  <h2 class="volunteer-subheading">
    <span class="blue">VOLUNTEER</span> <span class="magenta">WITH US</span>
  </h2>
  <div class="volunteer-reasongrid">
    <!-- 1 -->
    <div class="volunteer-reason">
      <span class="volunteer-icon-circle">
        <img src="images/svg/heart.svg" alt="Heart" width="35">
      </span>
      <div class="volunteer-reason-title">Make a Difference</div>
      <div class="volunteer-reason-desc">
        Help create amazing memories for hundreds of children and inspire them to stay active and healthy.
      </div>
    </div>
    <!-- 2 -->
    <div class="volunteer-reason">
      <span class="volunteer-icon-circle">
        <img src="images/svg/experience.svg" alt="Experience" width="35">
      </span>
      <div class="volunteer-reason-title">Gain Experience</div>
      <div class="volunteer-reason-desc">
        Get hands-on experience in event management, child engagement, and teamwork. Certificate provided!
      </div>
    </div>
    <!-- 3 -->
    <div class="volunteer-reason">
      <span class="volunteer-icon-circle">
        <img src="images/svg/people.svg" alt="People" width="35">
      </span>
      <div class="volunteer-reason-title">Meet New People</div>
      <div class="volunteer-reason-desc">
        Connect with like-minded individuals who are passionate about fitness and children's development.
      </div>
    </div>
    <!-- 4 -->
    <div class="volunteer-reason">
      <span class="volunteer-icon-circle">
        <img src="images/svg/gift.svg" alt="Gift" width="35">
      </span>
      <div class="volunteer-reason-title">Perks & Benefits</div>
      <div class="volunteer-reason-desc">
        Receive a volunteer t-shirt, meals, certificate of appreciation, and free access to future events!
      </div>
    </div>
  </div>
  <div class="volunteer-roles-bar">
    <span class="roles-bold">Volunteer Roles Available:</span>
    Registration Desk, Obstacle Course Support, Photography Team, Refreshments, Crowd Management, and Medical Assistance Support.
  </div>
</section>

<!-- ==== Contact Section ===== -->
 <section class="contact-support-section">
  <h2 class="contact-support-title">
    <span class="white">OUR</span><br>
    <span class="blue">CONTACT</span>
    <span class="magenta">&amp; SUPPORT</span>
  </h2>
  <p class="contact-support-subtitle">
    Have Questions About Tumble Fest 2025? We're Here To Help! Reach Out To Us<br>
    Through Any Of These Channels
  </p>
  <div class="contact-support-cards">
    <!-- Email -->
    <div class="contact-card">
      <div class="contact-card-icon icon-blue">
        <img src="images/svg/white-email.svg" alt="Email" width="36">
      </div>
      <div class="contact-card-title">Email Us</div>
      <div class="contact-card-desc">demo@example.com</div>
      <div class="contact-card-note">Response Time: Within 24 Hours</div>
      <a href="mailto:demo@example.com" class="contact-card-btn btn-blue">Send Email</a>
    </div>
    <!-- WhatsApp -->
    <div class="contact-card">
      <div class="contact-card-icon icon-green">
        <img src="images/svg/white-wp.svg" alt="WhatsApp" width="36">
      </div>
      <div class="contact-card-title">WhatsApp Chat</div>
      <div class="contact-card-desc">Start Chat Now</div>
      <div class="contact-card-note">Quick Responses During Business Hours</div>
      <a href="" onclick="openWhatsApp();" class="contact-card-btn btn-green">Chat Now</a>
    </div>
    <!-- Call -->
    <div class="contact-card">
      <div class="contact-card-icon icon-pink">
        <img src="images/svg/white-call.svg" alt="Call" width="36">
      </div>
      <div class="contact-card-title">Call Us</div>
      <div class="contact-card-desc">+91 00000 00000</div>
      <div class="contact-card-note">Available: Mon-Sat, 9 AM - 6 PM</div>
      <a href="tel:+910000000000" class="contact-card-btn btn-pink">Call Now</a>
    </div>
  </div>
</section>

<!-- ==== Hero Section ===== -->
<section class="hero-section">
  <div class="hero-bg"></div>
  <div class="hero-content-container">
    <div class="hero-content-box">
      <div class="hero-meta-row">
        <span class="hero-meta-icon">
          <img src="images/svg/event-calender.svg" alt="" width="18" />
        </span>
        <span class="hero-meta-text">December 13,2025 | 9 AM – 5 PM | Medals For All Finishers | Family & Friends</span>
      </div>
      <h1 class="hero-title">
        <span class="blue">TUMBLE</span> <span class="white">FEST</span> <span class="magenta">2025</span>
      </h1>
      <h2 class="hero-subtitle">OBSTACLE RACE EVENT</h2>
      <p class="hero-desc">
        Where fitness meets fun! Join us for an unforgettable adventure designed for children aged 3-14 at SLS International School.
      </p>
      <div class="hero-btn-row">
        <a href="#registration" class="btn-filled">Register Now <img src="images/svg/right-arrow.svg" height="18" width="18" class="btn-arrow"></span></a>
        <a href="#event-details" class="btn-outline-border">Learn More <img src="images/svg/right-arrow.svg" height="18" width="18" class="btn-arrow"></span></a>
      </div>
    </div>
    <img loading="lazy" src="images/hero-runners.png" alt="Runners" class="hero-bg-runners">
  </div>
</section>

<!-- ==== Event schedule Section ===== -->
<section id="event-details" class="event-schedule-section">
  <h2 class="event-schedule-heading">
    <span class="blue">EVENT</span> <span class="magenta">SCHEDULE</span>
  </h2>
  <div class="event-schedule-subtitle">
    Two Days Of Non-Stop Action & Adventure
  </div>
  <div class="schedule-cards-row">
    <!-- DAY 1 -->
    <div class="schedule-card">
      <div class="schedule-card-header">
        <img loading="lazy" src="images/logo.png" alt="logo" class="schedule-logo">
        <span class="schedule-day-title">DAY 1</span>
      </div>
      <div class="schedule-date">December 13, 2025</div>
      
      <div class="schedule-main-rows">
        <!-- Row 1: two columns -->
        <div class="schedule-main-row">
          <div class="schedule-main-col">
            <div>
              <div class="schedule-time">9:00 AM</div>
              <div class="schedule-event-title">Registration & Welcome</div>
              <div class="schedule-event-desc">Check-In And Warm-Up Activities</div>
            </div>
          </div>
          <div class="schedule-main-col">
            <div>
              <div class="schedule-time">1:00 PM</div>
              <div class="schedule-event-title">Lunch Break</div>
              <div class="schedule-event-desc">Refreshments & Energy Boost</div>
            </div>
          </div>
        </div>
        <!-- Row 2: two columns -->
        <div class="schedule-main-row">
          <div class="schedule-main-col">
            <div>
              <div class="schedule-time">10:00 AM</div>
              <div class="schedule-event-title">Obstacle Course Races</div>
              <div class="schedule-event-desc">Age Group Challenges Begin</div>
            </div>
          </div>
          <div class="schedule-main-col">
            <div>
              <div class="schedule-time">2:00 PM</div>
              <div class="schedule-event-title">Afternoon Sessions</div>
              <div class="schedule-event-desc">More Races & Activities</div>
            </div>
          </div>
        </div>
        <!-- Row 3: center align single event -->
        <div class="schedule-main-row">
          <div class="schedule-main-col prize-pool">
            <div>
              <div class="schedule-time">PRIZE POOL: ₹ 25,000/-</div>
              <div class="schedule-event-title">ENTRY FEE: 599/- PER PARTICIPANT</div>
              <div class="schedule-event-desc">SPECIAL DISCOUNT VOUCHERS FOR SLS STUDENTS!</div>
            </div>
          </div>
          <div class="schedule-main-col">
            <div>
              <div class="schedule-time">5:00 PM</div>
              <div class="schedule-event-title">Medal Ceremony</div>
              <div class="schedule-event-desc">Celebrate All Participants</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- DAY 2 (Repeat structure) -->
    <div class="schedule-card">
      <div class="schedule-card-header">
        <img loading="lazy" src="images/logo.png" alt="logo" class="schedule-logo">
        <span class="schedule-day-title">DAY 2</span>
      </div>
      <div class="schedule-date">December 14, 2025</div>
      <div class="schedule-main-rows">
        <div class="schedule-main-row">
          <div class="schedule-main-col">
            <div>
              <div class="schedule-time">9:00 AM</div>
              <div class="schedule-event-title">Registration & Welcome</div>
              <div class="schedule-event-desc">Check-In And Warm-Up Activities</div>
            </div>
          </div>
          <div class="schedule-main-col">
            <div>
              <div class="schedule-time">1:00 PM</div>
              <div class="schedule-event-title">Lunch Break</div>
              <div class="schedule-event-desc">Refreshments & Energy Boost</div>
            </div>
          </div>
        </div>
        <div class="schedule-main-row">
          <div class="schedule-main-col">
            <div>
              <div class="schedule-time">10:00 AM</div>
              <div class="schedule-event-title">Obstacle Course Races</div>
              <div class="schedule-event-desc">Age Group Challenges Begin</div>
            </div>
          </div>
          <div class="schedule-main-col">
            <div>
              <div class="schedule-time">2:00 PM</div>
              <div class="schedule-event-title">Afternoon Sessions</div>
              <div class="schedule-event-desc">More Races & Activities</div>
            </div>
          </div>
        </div>
        <div class="schedule-main-row center">
          <div class="schedule-main-col center">
            <div>
              <div class="schedule-time">5:00 PM</div>
              <div class="schedule-event-title">Medal Ceremony</div>
              <div class="schedule-event-desc">Celebrate All Participants</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==== Presented By Section ===== -->
<section class="presented-by-section">
  <h2 class="presented-by-title">PROUDLY PRESENTED BY</h2>
  <div class="presented-by-row">
    <img loading="lazy" src="images/logo.png" alt="The Tumble Gym" class="presented-by-logo">
    <span class="presented-by-x"><img src="images/svg/x.svg"></span>
    <div class="presented-by-partner">
      <div class="partner-name">SLS INTERNATIONAL SCHOOL</div>
      <div class="partner-role">Venue Partner</div>
    </div>
  </div>
</section>

<!-- ===== Footer Section ===== -->
<footer class="footer">
    <div class="footer-top">
        <img loading="lazy" src="images/logo.png" alt="Tumble Gold Logo" class="footer-logo">
        <p class="footer-tagline">Inspiring movement, confidence & fun through obstacle racing and fitness activities for children.</p>
        <p class="social-label">Follow Us On Social Media</p>
        <div class="social-icons">
          <a target="_blank" href="https://example.com/instagram" aria-label="Instagram" class="social-icon">
            <img src="/images/svg/insta.svg">
          </a>
          <a target="_blank" href="https://example.com/facebook" aria-label="Facebook" class="social-icon">
            <img src="/images/svg/fb.svg">
          </a>
          <a target="_blank" href="https://example.com/youtube" aria-label="YouTube" class="social-icon">
            <img src="/images/svg/youtube.svg">
          </a>
        </div>
        <div class="footer-grid">
            <div class="footer-column">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#event-details">Event Details</a></li>
                    <li><a href="#registration">Registration</a></li>
                    <li><a href="#venue-section">Event Location</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Support</h4>
                <ul>
                    <li>
                      <a href="mailto:demo@example.com" class="svg-link">
                          <img src="images/svg/email.svg" height="20" width="20" alt="Email icon" class="svg-icon">
                          demo@example.com
                      </a></li>
                    <li><a href="#faq-section">FAQ's</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Timing Hours</h4>
                <ul>
                    <li class="svg-link"><img src="images/svg/time.svg" height="20" width="20" alt="Time icon" class="svg-icon">December 13 & 14, 2025</li>
                    <li><b>9 AM - 5 PM</b></li>
                    <li><img src="images/svg/location.svg" height="20" width="20" alt="location icon" class="svg-icon">
                    SLS International Gurukul<br>
                    123 Example Avenue,
                    Sample District,
                    Bengaluru - 000000.
                    <br> Sports Complex</li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Contact Us</h4>
                <ul>
                    <li><img src="images/svg/call.svg" height="20" width="20" alt="Call icon" class="svg-icon"> +91 00000 00000</li>
                    <li><img src="images/svg/whatsapp.svg" height="20" width="20" alt="whatsapp icon" class="svg-icon"> +91 00000 00001</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-bottom-inner">
        <p class="footer-copyright">
          &copy; <?php echo date('Y'); ?> The Tumble Gym™ - All Rights Reserved. | Tumble Fest 2025
        </p>
        <div class="footer-links">
          <a href="#" target="_blank">Terms &amp; Conditions</a> |
          <a href="#" target="_blank">Privacy Policy</a> |
          <a href="#" target="_blank">Refund Policy</a>
        </div>
      </div>
    </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!--<script src="https://checkout.razorpay.com/v1/checkout.js"></script>-->
<script src="js/common.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ 
    duration: 700,  // animation duration in ms
    once: true      // animation only once per element
  });
</script>
<script>
document.querySelectorAll('.custom-select').forEach(function(selectWrap) {
  const selected = selectWrap.querySelector('.custom-select__selected');
  const dropdown = selectWrap.querySelector('.custom-select__dropdown');
  const options = selectWrap.querySelectorAll('.custom-select__option');
  const hiddenInput = selectWrap.parentNode.querySelector('input[type="hidden"]');

  let open = false, selectedIdx = -1;

  function closeDropdown() {
    selectWrap.classList.remove('custom-select--open');
    open = false;
  }
  function openDropdown() {
    selectWrap.classList.add('custom-select--open');
    open = true;
  }
  selected.onclick = () => { open ? closeDropdown() : openDropdown(); };

  options.forEach((opt, idx) => {
    opt.onclick = () => {
      options.forEach(o => o.classList.remove('selected'));
      opt.classList.add('selected');
      selected.textContent = opt.textContent;
      selected.classList.add('has-value');
      hiddenInput.value = opt.getAttribute('data-value');
      closeDropdown();
    };
    opt.onmouseover = () => {
      options.forEach(o => o.classList.remove('active'));
      opt.classList.add('active');
    };
  });

  document.addEventListener('click', function(e) {
    if (!selectWrap.contains(e.target)) closeDropdown();
  });
  selectWrap.addEventListener('keydown', function(e){
    if (e.key === "Enter" || e.key === " "){
      if(!open) openDropdown();
      else closeDropdown();
      e.preventDefault();
    }
    if (e.key === "ArrowDown") {
      if(!open){ openDropdown(); return; }
      selectedIdx = Math.min(options.length - 1, selectedIdx + 1);
      options.forEach((o,i)=> o.classList.toggle('active', i === selectedIdx));
      e.preventDefault();
    }
    if (e.key === "ArrowUp") {
      if(!open){ openDropdown(); return; }
      selectedIdx = Math.max(0, selectedIdx - 1);
      options.forEach((o,i)=> o.classList.toggle('active', i === selectedIdx));
      e.preventDefault();
    }
    if (e.key === "Escape") closeDropdown();
    if ((e.key === "Enter" || e.key === " ") && open && selectedIdx !== -1) {
      options[selectedIdx].click();
      e.preventDefault();
    }
  });
});

function setupCountdownTimer(rowSelector, targetDate) {
  function pad(n) { return n < 10 ? '0' + n : n; }
  function update() {
    const now = new Date();
    let diff = Math.max(0, targetDate.getTime() - now.getTime()); // ms
    let totalSeconds = Math.floor(diff / 1000);

    let days    = Math.floor(totalSeconds / 86400);
    let hours   = Math.floor((totalSeconds % 86400) / 3600);
    let minutes = Math.floor((totalSeconds % 3600) / 60);
    let seconds = totalSeconds % 60;

    // Set the values
    const boxes = document.querySelectorAll(rowSelector + ' .timer-value');
    if (boxes.length >= 4) {
      boxes[0].textContent = pad(days);
      boxes[1].textContent = pad(hours);
      boxes[2].textContent = pad(minutes);
      boxes[3].textContent = pad(seconds);
    }
    // Optionally, handle expiry
    if (diff <= 0) clearInterval(timerInterval);
  }
  update();
  const timerInterval = setInterval(update, 1000);
}

document.addEventListener('DOMContentLoaded', function() {
  setupCountdownTimer('.countdown-timer-row', new Date('2025-12-13T00:00:00'));

  const ageSelectWrap = document.getElementById('age-select-wrap');
  const ageOptions = ageSelectWrap.querySelectorAll('.custom-select__option');
  const ageInput    = ageSelectWrap.querySelector('input[name="child_age"]');

  ageOptions.forEach(opt => {
    opt.addEventListener('click', function() {
      ageInput.value = opt.dataset.value;
    });
  });
});
</script>
</html>