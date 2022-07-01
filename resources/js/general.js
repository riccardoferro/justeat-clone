// Funzione Incremento e Decremento Prezzo
    document.addEventListener("DOMContentLoaded", function() {
        var price = document.getElementById('price-input');
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
    });

// Funzione per la conferma cancellazione
document.addEventListener("DOMContentLoaded", function () {
    // Prende Elemento Div conferma Eliminazione
    var deleteForm = document.getElementById('t4-delete-form');
    deleteForm.style.transition = 'all 2s';
    // mostra la div controllo
    document.getElementById('t4-delete-span').addEventListener('click', function () {
        deleteForm.style.display = 'flex';
    });
    // nasconde la div di controllo
    document.getElementById('t4-cancel-delete').addEventListener('click', function () {
                deleteForm.style.display = 'none';
        });
    });





