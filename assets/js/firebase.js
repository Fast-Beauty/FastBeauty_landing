// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-auth.js";

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyAoNfsnm4S7_bxsJ_8-dECx-6Xdm0Y97XA",
    authDomain: "login-firebase-35c11.firebaseapp.com",
    projectId: "login-firebase-35c11",
    storageBucket: "login-firebase-35c11.appspot.com",
    messagingSenderId: "514371118370",
    appId: "1:514371118370:web:b5f137ccdb51faa2d7317b"
};

// Initialize Firebase
export const app = initializeApp(firebaseConfig);
export const auth = getAuth(app);