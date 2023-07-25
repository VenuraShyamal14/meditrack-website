<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sensor Data</title>
  <link rel="stylesheet" href="styles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .card-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .card {
      width: 400px;
      padding: 10px;
      margin-bottom: 20px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #e21313;
    }

    h2 {
      text-align: center;
    }

    p {
      text-align: center;
      margin-bottom: 50px;
    }

    .data-row {
      display: flex;
      margin: 10px;
      padding: 10px;
    }

    .data-row span {
      font-weight: bold;
    }

    .qa{
        margin-right:0;
    }
  </style>
</head>

<body>
<?php include "header.html"; ?>
      <main>
    <section class="hero">
      <div class="container">
        <h1>Discover the Future of Healthcare</h1>
        <p>Experience our state-of-the-art medical device designed to improve lives.</p>
        <a class="cta-button" href="#">Learn More</a>
      </div>
    </section>

    <section class="features">
      <div class="container">
        <h2>Key Features</h2>
        <div class="feature-card">
          <img src="img/1.jpeg" alt="Feature 1">
          <h3>Advanced Technology</h3>
          <p>Our device utilizes cutting-edge technology for accurate diagnosis and treatment.</p>
        </div>
        <div class="feature-card">
          <img src="img/2.jpg" alt="Feature 2">
          <h3>User-Friendly Interface</h3>
          <p>Intuitive interface makes it easy for healthcare professionals to operate and analyze data.</p>
        </div>
        <div class="feature-card">
          <img src="img/3.avif" alt="Feature 3">
          <h3>Wireless Connectivity</h3>
          <p>Seamlessly connect and sync data with other medical devices and systems.</p>
        </div>
      </div>
    </section>

    
    
    <section>
         <div class="row container text-center">
            <div class="col">
               <img src="img/product.jpeg" alt="Feature 1" style="height:300px;">
            </div>
            <div class="col">
               <h2><b>An award-winning smart dispenser</b></h2>
Hero’s smart dispenser alerts you when it's pill time with a sound and blinking light. One-button press sorts and dispenses your dose.

Holds up to 90-day supply of 10 meds
Supports any pill size or shape
Fits all standard kitchen counters
<br>
DIMENSIONS
<br>
9 in x 9 in x 15 in
<br>
(22.9 cm x 22.9 cm x 38.1 cm)
<br>
WEIGHT
10 lbs
            </div>
            </div>
    </section>


    <section>
         <div class="row container text-center">
            <div class="col">
               <h2><B> A medication management app</B></h2>
Add your medication list into the app to receive pill-time reminders, missed-dose alerts, and track what you took and when.
<br>
<br>
Remote caregiver monitoring for safety and medication schedule management
<br>
HIPAA-compliant security
            </div>
            <div class="col">
                <img src="img/app.avif" alt="Feature 1" style="height:300px;">
            </div>
            </div>
    </section>

    <section>
         <h1 style="color:black;"><B>Setup is simple</B></h1>
         <div class="row container text-center">
            <div class="col">
               <div><img src="img/img 5.svg" alt="Feature 1" style="height:150px;"> </div>
               <h3>1. Pick a countertop</h3>
               <p>No more messy pill bottles! The smart dispenser is about the size of a coffee maker and fits on any kitchen counter.</p>
            </div>
            <div class="col">
               <div><img src="img/img 6.svg" alt="Feature 1" style="height:150px;"> </div>
               <h3>2. Connect to Wi-Fi</h3>
               <p>Setting up Wi-Fi on the smart dispenser connects it with the app so we can dispense your meds according to your schedule.</P>
            </div>
        </div>

        <div class="row container text-center">
            <div class="col">
               <div><img src="img/img 7.svg" alt="Feature 1" style="height:150px;"> </div>
               <h3>3. Download the app</h3>
               <p>Simply add your medication schedule into the app and pour your meds into the easy-to-load containers.</p>
            </div>
            <div class="col">
               <div><img src="img/img 8.svg" alt="Feature 1" style="height:150px;"> </div>
               <h3>4. Press one button to dispense</h3>
               <p>Once set up, the dispenser lights up and makes a sound when it’s pill time. One-button press sorts and dispenses your dose.</P>
            </div>
        </div>
    </section>
  </main>
<?php include "footer.html"; ?>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-database.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
