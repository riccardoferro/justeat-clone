const { isNull } = require("lodash");

// Funzione Incremento e Decremento Prezzo
document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById('price-input')) {
        var price = document.getElementById('price-input');
    }
    if (price) {
        console.log('price not null')
        document.getElementById('increment').addEventListener('click', function () {
            price.value++;
        });
        document.getElementById('decrement').addEventListener('click', function () {
            // decrementa solamente il prezzo superiore a 0
            if (price.value > 0) {
                price.value--;
            } else {
                price.value = 0;
            };
        });
    }
});

// Funzione per la conferma cancellazione
document.addEventListener("DOMContentLoaded", function () {
    // Prende Elemento Div conferma Eliminazione
    if (document.getElementById('t4-delete-form')); {
        var deleteForm = document.getElementById('t4-delete-form');
    }
    // mostra la div controllo
    if (deleteForm) {
        document.getElementById('t4-delete-span').addEventListener('click', function () {
            deleteForm.style.display = 'flex';
        });
        // nasconde la div di controllo
        document.getElementById('t4-cancel-delete').addEventListener('click', function () {
            deleteForm.style.display = 'none';
        });
    }

});

document.addEventListener("DOMContentLoaded", function () {
    // Prende Elemento Div conferma Eliminazione
    if (document.getElementById('password-confirm')); {
        var password = document.getElementById("password");
        var confirm_password = document.getElementById("password-confirm");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Le due Password non coincidono");
            }

            else {
                confirm_password.setCustomValidity('');
            }


        };
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;


    };
});














