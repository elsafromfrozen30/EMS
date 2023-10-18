 // Import the functions you need from the SDKs you need
 import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-app.js";
 import {getAuth,signInWithEmailAndPassword} from "https://www.gstatic.com/firebasejs/9.22.0/firebase-auth.js";
 import { getDatabase, ref, get } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-database.js"
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
 const db = getDatabase();

var email = document.getElementById("email");
var password = document.getElementById("password");
document.getElementById('something').innerHTML=getuserdata()

async function getuserdata(){
  const user = auth.currentUser;
  email = user.email.split('@')[0];
  const userRef = ref(db,"/student/"+email);
  const snapshot = await get(userRef);
  const data = snapshot.val();
  return data.Name;
}


async function admincheck(obj) 
{
  email=obj.email.split('@')[0]
  const usersRef = ref(db,"/admin/"+email);
  try {
    const snapshot = await get(usersRef);
    const data = snapshot.val();
    console.log(data.Name);
    return true;
  } catch (error) {
    console.error(error);
    return false;
  }
}
function gd(){
  console.log("jhhj");
}


async function studentcheck(obj) 
{
  email=obj.email.split('@')[0]
  const usersRef = ref(db,"/student/"+email);
  try {
    const snapshot = await get(usersRef);
    const data = snapshot.val();
    console.log(data.Name);
    return true;
  } catch (error) {
    console.error(error);
    return false;
  }
}



window.studentlogin = async function (e) {
    e.preventDefault();
    var obj = {
      email: email.value,
      password: password.value,
    };
    const result = await studentcheck(obj);
    if (!(result))
    {
      alert("Access deneied:Not a Student")
      window.location.reload()
      return
    }
  
    signInWithEmailAndPassword(auth, obj.email, obj.password)
    .then(function(success){

      if (!auth.currentUser.emailVerified)
      {
        alert("email not verified")
        window.location.reload()
        return
      }
      window.location.assign('../HTML/student_dashboard/electivepro.php')
      alert("login successful")
    })
    .catch(function(err){
      alert("Error in " + err.message)
      window.location.reload()
    });
}

window.adminlogin = async function (e) {
  e.preventDefault();
  var obj = {
    email: email.value,
    password: password.value,
  };
  const result = await admincheck(obj);
  if (!(result))
  {
    alert("Access deneied:Not a admin")
    window.location.reload()
    return
  }
  
  signInWithEmailAndPassword(auth, obj.email, obj.password)
  .then(function(success){
    window.location.assign('../HTML/index.php')
    alert("login successful")
  })
  .catch(function(err){
    alert("Error in " + err.message)
    window.location.reload()
  });
}