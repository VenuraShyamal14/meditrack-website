<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sensor Data</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <style>
    body {
      background-color: #f8f9fa;
    }

    .card-container {
      margin-top: 50px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .card {
      background-color: #ffffff;
      color: #000000;
      width: 400px;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .card-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .data-row {
      display: flex;
      align-items: center;
      margin-bottom: 5px;
    }

    .data-row span {
      margin-right: 5px;
    }

    .checkbox-gap {
      margin: 0 5px;
    }
  </style>
</head>

<body>
  <?php include "header.html"; ?>

  <div class="card-container" id="messages-container"></div>

  <?php include "footer.html"; ?>

  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-database.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    //change login btn to logout btn
    const loginBtn = document.getElementById("loginBtn");
    loginBtn.innerHTML="Logout";
    // Initialize Firebase
    const firebaseConfig = {
      apiKey: "AIzaSyDhjQiFCvXLotnVMuNR3u5Jiqsw2aKDyKA",
      authDomain: "notyabaya-iot.firebaseapp.com",
      databaseURL: "https://notyabaya-iot-default-rtdb.asia-southeast1.firebasedatabase.app",
      projectId: "notyabaya-iot",
      storageBucket: "notyabaya-iot.appspot.com",
      messagingSenderId: "1010722218162",
      appId: "1:1010722218162:web:a3221e7237ad271761e9ab",
      measurementId: "G-R6HSBRH5FF"
    };
    firebase.initializeApp(firebaseConfig);

    // Get a reference to the database service
    var database = firebase.database();

    // Retrieve the messages from the database
    var messagesRef = database.ref('messages');
    messagesRef.on('value', function (snapshot) {
      var messages = snapshot.val();
      var messagesContainer = document.getElementById("messages-container");
      messagesContainer.innerHTML = ""; // Clear previous content

      for (var key in messages) {
        if (messages.hasOwnProperty(key)) {
          var message = messages[key];
          var messageHtml = `
            <div class="card">
              <div class="card-body">
                <h2 class="card-title">${message.text}</h2>
                <div class="data-row">
                  <span>Next time:</span>
                  <span>${message.hour}:${message.minute}</span>
                </div>
                <div class="data-row">
                  <span>Morning:</span>
                  <input type="checkbox" ${message.morning ? 'checked' : ''} disabled>
                  <span class="checkbox-gap"></span>
                  <span>Afternoon:</span>
                  <input type="checkbox" ${message.lunch ? 'checked' : ''} disabled>
                  <span class="checkbox-gap"></span>
                  <span>Dinner:</span>
                  <input type="checkbox" ${message.dinner ? 'checked' : ''} disabled>
                </div>
                <div class="data-row">
                  <span>Number of pills:</span>
                  <span>${message.selectedNumber}</span>
                </div>
              </div>
            </div>
          `;
          messagesContainer.innerHTML += messageHtml;
        }
      }
    });

    
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>


<script>
loginBtn.addEventListener("click", function() {
      if (firebase.auth().currentUser) {
        // If user is logged in, perform logout
        firebase.auth().signOut().then(function() {
          // Update button text
          loginBtn.innerHTML = "Login";
          // Perform any other tasks after logout if needed
          window.location.href = 'login.php';
        }).catch(function(error) {
          console.error('Error occurred during logout:', error);
        });

</script>