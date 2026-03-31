document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
        });
    });

    
    const form = document.getElementById('mainContactForm');
    form.onsubmit = () => {
        console.log("Form submitted locally before PHP takes over.");
    };