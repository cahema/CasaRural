"use strict"

function deshabilitaHabilita(radioSeleccionado) {
  // Disable the selected radio button
  radioSeleccionado.disabled = true;

  // Enable the other radio button
  let otroRadio = (radioSeleccionado.id === "radio1") ? document.getElementById("radio2") : document.getElementById("radio1");
  otroRadio.disabled = false;
}

function cambiaRadios() {
    document.getElementById("radio1").disabled = false;
    document.getElementById("radio2").disabled = false;
}
