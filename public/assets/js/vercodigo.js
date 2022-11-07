//cargar documento
const mirarCodigo = document.querySelectorAll(".mirarCodigo");
const codigoModal = new bootstrap.Modal("#codigoModal");
//completar modal
let codigoModalLabel = document.querySelector("#codigoModalLabel");
let codigoLenguaje = document.querySelector("#codigoLenguaje");

cargarEventListeners();
function cargarEventListeners() {
  document.addEventListener("DOMContentLoaded", () => {
    // hljs.highlightAll();
    verCodigo();
  });
}

function verCodigo() {
  mirarCodigo.forEach((boton) => {
    boton.addEventListener("click", async (e) => {
      const link = boton.getAttribute("data-link");
      const response = await fetch(link);
      const data = await response.json();

      codigoModalLabel.innerHTML = data.titulo;
      codigoLenguaje.innerHTML = data.codigo;
      hljs.highlightAll();

      codigoModal.show();
    });
  });
}
