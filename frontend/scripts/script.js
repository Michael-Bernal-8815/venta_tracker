// script.js
import { db } from './firebase.js'; // Importa la instancia de Firestore
import { doc, setDoc, getDoc } from "https://www.gstatic.com/firebasejs/10.13.2/firebase-firestore.js";

document.getElementById('add-data').addEventListener('click', async () => {
    try {
        await setDoc(doc(db, "usuarios", "usuario1"), {
            nombre: "Juan",
            edad: 25
        });
        document.getElementById('output').textContent = "Datos añadidos!";
    } catch (error) {
        console.error("Error añadiendo datos: ", error);
        document.getElementById('output').textContent = "Error añadiendo datos.";
    }
});

document.getElementById('get-data').addEventListener('click', async () => {
    try {
        const docRef = doc(db, "usuarios", "usuario1");
        const docSnap = await getDoc(docRef);

        if (docSnap.exists()) {
            document.getElementById('output').textContent = JSON.stringify(docSnap.data(), null, 2);
        } else {
            document.getElementById('output').textContent = "No existe el documento!";
        }
    } catch (error) {
        console.error("Error obteniendo datos: ", error);
        document.getElementById('output').textContent = "Error obteniendo datos.";
    }
});
