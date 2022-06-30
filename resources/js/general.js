
    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('increment').addEventListener('click', function() {
            document.getElementById('price-input').value++;
        });
        console.log('ok');

        document.getElementById('decrement').addEventListener('click', function() {
            document.getElementById('price-input').value--;
        });
        console.log('Ok 2');

    });


