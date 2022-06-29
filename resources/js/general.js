
    document.addEventListener("DOMContentLoaded", function() {
        console.log('ok');
        document.getElementById('increment').addEventListener('click', function() {
            document.getElementById('price-input').value++;
        });
        document.getElementById('decrement').addEventListener('click', function() {
            document.getElementById('price-input').value--;
        });
    });
