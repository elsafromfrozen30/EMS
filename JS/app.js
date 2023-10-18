
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-app.js";
  import {getAuth,createUserWithEmailAndPassword,sendEmailVerification} from "https://www.gstatic.com/firebasejs/9.22.0/firebase-auth.js";
  import { getDatabase, ref, set } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-database.js"
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
    appId: "1:676384447584:web:ab478e2803683405537705"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const auth = getAuth()

var name =document.getElementById("name");
var rollno=document.getElementById("rollno");
var email = document.getElementById("email");
var password = document.getElementById("password");
var usertype="Student"
//var copassword = document.getElementById("copassword")

function writeUserData(name,email,rollno) {
  const db = getDatabase();
  email=email.split('@')[0]
  const usersRef = ref(db,"/student/"+email);
  
  set(usersRef,{"Name":name,"RollNumber":rollno,"flag":0})
  .then(() => {
    console.log("Data sent successfully to Firestore!");
  })
  .catch((error) => {
    console.error("Error sending data to Firestore: ", error);
  });
  /*
  get(usersRef)
  .then((snapshot) => {
    // Handle the retrieved data
    const data = snapshot.val();
    console.log(data.Access)
    // Access the data using the 'data' variable
  })
  .catch((error) => {
    // Handle any errors that occur during data retrieval
    console.error(error);
  });
  */
}

function validateForm() {
  var x = document.getElementById("name").value;
  var y = document.getElementById("rollno").value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
    return false;
  }

  if (y == "" || y == null) {
    alert("Roll number must be filled out");
    return false;
  }

  return true;
}


window.signup = async function (e) {
  console.log("i am here")
  e.preventDefault();
  writeUserData(name.value,email.value,rollno.value)
  const result=  await createUserWithEmailAndPassword(auth, email.value, password.value)
  .then(function(success){
    
  sendEmailVerification(auth.currentUser)
    .then(() => {
      //email sent
    })
    window.location.replace('login.html')
    
    alert("signup successful.An email verification has been sent.")
    return 1
  })
  .catch(function(err){
    alert("Error in signup" + err)
    return 0
  });

}
       
        
        
