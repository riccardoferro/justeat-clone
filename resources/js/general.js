
    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('increment').addEventListener('click', function() {
            document.getElementById('price-input').value++;
        });
        console.log('ok');

        document.getElementById('decrement').addEventListener('click', function () {

            if (document.getElementById('price-input').value > 0) {
            document.getElementById('price-input').value--;
            }
            else {
                document.getElementById('price-input').value = 0;
            }
        });
        console.log('Ok 2');

    });


