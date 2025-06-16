function showSection(section) {
    const contentArea = document.getElementById('content-area');
    switch (section) {
        case 'performance':
            contentArea.innerHTML = `
                <h2>Desempeño de Modelos</h2>
                <p>Aquí puedes ver el desempeño de los modelos.</p>
                <!-- Añadir gráficos o tablas aquí -->
            `;
            break;
        case 'actions':
            contentArea.innerHTML = `
                <h2>Registro de Acciones</h2>
                <p>Aquí se registran las acciones de los usuarios.</p>
                <!-- Añadir tabla de registro aquí -->
            `;
            break;
        case 'users':
            contentArea.innerHTML = `
                <h2>Gestión de Usuarios</h2>
                <p>Aquí puedes gestionar los usuarios.</p>
                <!-- Añadir lista de usuarios aquí -->
            `;
            break;
        case 'reports':
            contentArea.innerHTML = `
                <h2>Análisis y Reportes</h2>
                <p>Aquí puedes generar reportes.</p>
                <!-- Añadir opción de generación de reportes aquí -->
            `;
            break;
        default:
            contentArea.innerHTML = `
                <h2>Bienvenido al Dashboard</h2>
                <p>Selecciona una opción del menú para ver más información.</p>
            `;
    }
}
