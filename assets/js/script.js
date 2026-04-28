document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const name = document.querySelector('input[name="name"]');
            const email = document.querySelector('input[name="email"]');
            const message = document.querySelector('textarea[name="message"]');
            
            if (!name.value.trim()) {
                alert('Введите имя');
                e.preventDefault();
            } else if (!email.value.trim() || !email.value.includes('@')) {
                alert('Введите корректный email');
                e.preventDefault();
            } else if (!message.value.trim()) {
                alert('Введите сообщение');
                e.preventDefault();
            }
        });
    }
});
