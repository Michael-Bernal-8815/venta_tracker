// register.js
import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.13.2/firebase-auth.js";
import { getFirestore, doc, setDoc } from "https://www.gstatic.com/firebasejs/10.13.2/firebase-firestore.js";
import { db } from './firebase.js'; // Asegúrate de importar db desde firebase.js

const auth = getAuth();

document.getElementById('register-form').addEventListener('submit', async (e) => {
    e.preventDefault(); // Evita el envío del formulario

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    console.log("Intentando registrar usuario con:", email);

    try {
        const userCredential = await createUserWithEmailAndPassword(auth, email, password);
        const user = userCredential.user; // Usuario creado

        console.log("Usuario registrado:", user.uid);

        // Guarda la información del usuario en Firestore
        await setDoc(doc(db, "users", user.uid), {
            email: user.email,
        });

        console.log("Datos del usuario guardados en Firestore");
        // Redirige o muestra un mensaje de éxito
        window.location.href = "../pages/index.php"; // O donde desees redirigir
    } catch (error) {
        console.error("Error al registrar usuario:", error);
        alert("Error al registrar usuario. Intenta de nuevo.");
    }
});
