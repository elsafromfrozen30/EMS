import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-app.js";
import {getAuth,sendPasswordResetEmail} from "https://www.gstatic.com/firebasejs/9.22.0/firebase-auth.js";

const firebaseConfig = {
    apiKey: "AIzaSyDqxaA0LIPmULYXF4WjfIEeBw1AdojhSwU",
    authDomain: "elective-management-99336.firebaseapp.com",
    databaseURL: "https://elective-management-99336-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "elective-management-99336",
    storageBucket: "elective-management-99336.appspot.com",
    messagingSenderId: "676384447584",
    appId: "1:676384447584:web:ab478e2803683405537705"
  };
 
  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const auth = getAuth()

  var email = document.getElementById("inputEmail");


  window.resetlink = function (e) {
    e.preventDefault();


    sendPasswordResetEmail(auth, email.value)
    .then(function(success){
      window.location.replace('login.html')
      alert("Email sent")
    })
    .catch(function(err){
      alert("Error in " + err)
      window.location.reload()
    });
}

