import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-app.js";
import {getAuth} from "https://www.gstatic.com/firebasejs/9.22.0/firebase-auth.js";
import { getDatabase, ref, set,update } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-database.js"

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

var user = auth.currentUser;

window.callthis=function(){
  alert("HELLO")
}

async function writepriority(){
    const db = getDatabase();
    const username=localStorage.getItem("Name")
    const p=localStorage.getItem("priority")
    const email=localStorage.getItem("Email")
    const currentTime = new Date().getTime();
    const search = email.split('@')[0];
    const usersRef = ref(db,"/student/"+search);
    const form = ref(db,"/priority/"+username)
    
    await update(usersRef,{"flag":1})
    .then(() => {
      console.log("flag updated");
    })
    .catch((error) => {
      alert("Error updating flag: ", error);
    });

    await set(form,{'priority':p,'timestamp':currentTime})
    .then(() => {
        console.log("priorities updated");
      })
      .catch((error) => {
        alert("Error updating priorities: ", error);
    });
    
   
}

window.signout = function (e,caller){
    e.preventDefault()
    auth.signOut().then(async ()=>{
        alert("Sign out successful")

        var reg=localStorage.getItem('priority')
    
        if (reg!=null)
        {
            
            await writepriority()
            
        }
        
        if (caller==1)
        {
            localStorage.removeItem('Name');
            localStorage.removeItem('priority');
            localStorage.removeItem('flag');
            localStorage.removeItem('Email');
            localStorage.removeItem("elective")
            window.location.replace("../login.html")
        }
        else{
            window.location.assign("login.html")
        }
    })
}

