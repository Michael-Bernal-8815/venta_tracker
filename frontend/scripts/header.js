//Manejo del menu y el search.
    function toggleMenu() {
        
        const mobileMenu = document.querySelector('.mobile-menu');
        mobileMenu.classList.toggle('active');
        
        const menuToggle = document.querySelector('.menu-toggle');
        menuToggle.classList.toggle('active'); 
    }

    function toggleSearch() {
        const searchContainer = document.querySelector('.search-container');
        const searchInput = document.querySelector('.search-input');
        const navigation = document.querySelector('.navigation'); // Declare and assign navigation
    
        searchContainer.classList.toggle('active');
        const searchExpanded = searchContainer.classList.contains('active');
    
        if (searchExpanded) {
            searchInput.focus();
    
            if (window.innerWidth > 1051 && window.innerWidth < 1192) {
                const navLinks = navigation.querySelectorAll('a');
                navLinks.forEach((link, index) => {
                    link.style.display = index < 3 ? 'inline' : 'none';
                });
            } else {
                const navLinks = navigation.querySelectorAll('a');
                navLinks.forEach(link => link.style.display = 'inline');
            }
        } else {
            searchInput.value = ''; // Clear input when closing
            clearSearch();
        }
    }

        function toggleCloseIcon() {
            const searchInput = document.querySelector('.search-input');
            const closeIcon = document.querySelector('.close-icon');
            closeIcon.style.display = searchInput.value ? 'inline' : 'none';
        }

        function clearSearch() {
            document.querySelector('.search-input').value = '';
            toggleCloseIcon();
        }

        function handleBlur() {
        setTimeout(() => {
        const searchContainer = document.querySelector('.search-container');
        if (!searchContainer.contains(document.activeElement)) {
            searchContainer.classList.remove('active');
            searchExpanded = false; 

            const navigation = document.querySelector('.navigation');
            const navLinks = navigation.querySelectorAll('a');
            navLinks.forEach(link => link.style.display = 'inline');
            }
            }, 200);
        }

        window.addEventListener('resize', function() {
            if (window.innerWidth > 1000) {
                const mobileMenu = document.querySelector('.mobile-menu');
                mobileMenu.classList.remove('active');
            }
        });
    
        function validateSearch() {
            const searchInput = document.querySelector('.search-input');
            if (searchInput.value.trim() === '') {
                return false; // Evitar el envío si el campo está vacío
            }
            return true; // Permitir el envío si hay texto
        }

        function clearSearch() {
            const searchInput = document.querySelector('.search-input');
            searchInput.value = '';
            toggleCloseIcon();
        }