"use strict"

function editarEmail (id, email) {
    $('#idEmailModificar').val(id);
    $('#emailModificar').val(email);
}

function borrarEmail (id) {
    $('#idEmailBorrar').val(id);
}

function filtrarEmails() {
    // Declare variables
    let input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("emailBuscar");
    filter = input.value.toUpperCase();
    table = document.getElementById("tablaEmails");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
