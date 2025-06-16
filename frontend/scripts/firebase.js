// firebase.js
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.13.2/firebase-app.js"; // Importar desde firebase-app
import { getFirestore } from "https://www.gstatic.com/firebasejs/10.13.2/firebase-firestore.js";

const firebaseConfig = {
    apiKey: "AIzaSyBKj4bsrIyzniYYP1LFkEoUvcnsehJvAZk",
    authDomain: "bdalaina-8ed75.firebaseapp.com",
    databaseURL: "https://bdalaina-8ed75-default-rtdb.firebaseio.com/", // Agregar la URL de la base de datos
    projectId: "bdalaina-8ed75",
    storageBucket: "bdalaina-8ed75.appspot.com",
    messagingSenderId: "668812546216",
    appId: "1:668812546216:web:a19165b33a62304767329d",
    measurementId: "G-JQQF103GMZ"
};

// Inicializa Firebase
const app = initializeApp(firebaseConfig);
const db = getFirestore(app);

export { db }; // Exporta la instancia de Firestore
