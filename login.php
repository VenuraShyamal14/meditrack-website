<?php
  // Initialize Firebase app here
  $firebaseConfig = array(
    'apiKey' => 'AIzaSyDhjQiFCvXLotnVMuNR3u5Jiqsw2aKDyKA',
    'authDomain' => 'notyabaya-iot.firebaseapp.com',
    'databaseURL' => 'https://notyabaya-iot-default-rtdb.asia-southeast1.firebasedatabase.app',
    'projectId' => 'notyabaya-iot',
    'storageBucket' => 'notyabaya-iot.appspot.com',
    'messagingSenderId' => '1010722218162',
    'appId' => '1:1010722218162:web:a3221e7237ad271761e9ab'

   

  );

  // Convert the PHP array to a JSON string
  $firebaseConfigJson = json_encode($firebaseConfig);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-auth.js"></script>
  <script>
    // Initialize Firebase with the configuration
    var firebaseConfig = <?php echo $firebaseConfigJson; ?>;
    firebase.initializeApp(firebaseConfig);
  </script>
  <style>
     body {
      font-family: Arial, sans-serif;
      
      text-align: center;
      background-color: #3a607a;
    }
    h1 {
        margin-top: 100px;
      color: #F9AA33;
    }
    .form-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 50px;
    }
    .form-group {
      margin-bottom: 10px;
    }
    .form-group input {
      padding: 10px;
      width: 300px;
      border: none;
      border-radius: 5px;
    }
    .form-group button {
      padding: 10px 20px;
      background-color: #F9AA33;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .error-message {
      color: red;
      margin-bottom: 10px;
    }
  </style>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <?php include 'header.html' ; ?>
  <?php
    session_start();
    // Check if the user is authenticated
    if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
      header('Location: device.php'); // Redirect to the new page
      exit();
    }
  ?>
  <h1>Login</h1>

  <div class="form-container">
    <div class="form-group">
      <input type="email" id="email" placeholder="Email" required>
    </div>
    <div class="form-group">
      <input type="password" id="password" placeholder="Password" required>
    </div>
    <div class="form-group">
      <button id="loginButton">Log In</button>
    </div>
    <div class="error-message" id="errorMessage"></div>
  </div>
  <?php include 'footer.html' ; ?>

  <script>
    // Initialize Firebase
    // ... (config and other JS code unchanged) ...

    // Get a reference to the authentication service
    const auth = firebase.auth();

    // Login button click event
    const loginButton = document.getElementById('loginButton');
    loginButton.addEventListener('click', () => {
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;

      // Sign in with email and password
      auth.signInWithEmailAndPassword(email, password)
        .then((userCredential) => {
          // Login successful, redirect to a new page or perform other actions
          console.log('Login successful');
          window.location.href = 'device.php';
        })
        .catch((error) => {
          // Handle login errors
          const errorMessage = error.message;
          document.getElementById('errorMessage').innerText = errorMessage;
        });
    });
  </script>
</body>
</html>
