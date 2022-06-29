
    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('increment').addEventListener('click', function() {
            document.getElementById('price-input').value++;
        });
        console.log('ok');

        document.getElementById('decrement').addEventListener('click', function() {
            document.getElementById('price-input').value--;
        });
        console.log('Ok 2');
        document.getElementById('open-form').addEventListener('click', function() {
            document.getElementById("t4-delete-page").style.display = "flex";
        });
        console.log('Console.log 3');

        document.getElementById('close-form').addEventListener('click', function() {
            document.getElementById("t4-delete-page").style.display = "none";
        });
        console.log('Console.log 4');




    });


