// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyDqxaA0LIPmULYXF4WjfIEeBw1AdojhSwU",
  authDomain: "elective-management-99336.firebaseapp.com",
  databaseURL: "https://elective-management-99336-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "elective-management-99336",
  storageBucket: "elective-management-99336.appspot.com",
  messagingSenderId: "676384447584",
  appId: "1:676384447584:web:1160d8eb3703011f537705"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const auth=firebase.auth()
const database=fireabase.database()

// Authenticate function
function authenticate(event) {
  event.preventDefault();
  var username = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  firebase.auth().signInWithEmailAndPassword(email, password)
    .then(function() {
      // Successful login
      var user = auth.currentUser();
      var database_ref= database.ref();

      var userdata= {name:username ,email:email}

      database_ref.child('users/'+user.uid).set(userdata)
    })
    .catch(function(error) {
      // Failed login
      var errorCode = error.code;
      var errorMessage = error.message;
      alert(errorMessage);
    });
}

// Sign up function
function signup() {
    alert("This")
    //event.preventDefault()
    var username = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    
    firebase.auth().createUserWithEmailAndPassword(email, password)
      .then(function(user) {
        var user = auth.currentUser();
        var database_ref= database.ref();
  
        var userdata= {name:username ,email:email}
  
        database_ref.child('users/'+user.uid).set(userdata)
      })
      .catch(function(error) {
        // Failed sign up
        var errorCode = error.code;
        var errorMessage = error.message;
        alert(errorMessage);
      });
  }
  
  // Save user data to the Realtime Database
  function saveUserData(userId, email) {
    var userData = {
      email: email
      // Add additional user data as needed
    };
  
    firebase.database().ref('users/' + userId).set(userData)
      .catch(function(error) {
        console.error("Error saving user data: ", error);
      });
  }
