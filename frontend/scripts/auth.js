import { getAuth, signInWithEmailAndPassword, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/10.13.2/firebase-auth.js";
import { getFirestore, doc, getDoc } from "https://www.gstatic.com/firebasejs/10.13.2/firebase-firestore.js";
import { db } from './firebase.js';

const auth = getAuth();

document.getElementById('login-form').addEventListener('submit', async (e) => {
    e.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    try {
        const userCredential = await signInWithEmailAndPassword(auth, email, password);
        const user = userCredential.user;

        // Almacena la información en el almacenamiento local
        localStorage.setItem('user', JSON.stringify({ uid: user.uid, email: user.email }));

        const userDoc = await getDoc(doc(db, "users", user.uid));
        if (userDoc.exists()) {
            const userData = userDoc.data();
            // Redirige según el rol
            window.location.href = userData.role === "admin" ? "../pages/dashboard.php" : "../pages/index.php";
        }
    } catch (error) {
        console.error("Error al iniciar sesión:", error);
        alert("Error al iniciar sesión. Intenta de nuevo.");
    }
});

// Escucha el estado de autenticación
onAuthStateChanged(auth, (user) => {
    if (user) {
        console.log("Usuario autenticado:", user.uid);
        // Aquí puedes almacenar información en localStorage o hacer otras acciones
    } else {
        console.log("No hay usuario autenticado");
    }
});

