const listacodigos = document.getElementById("listacodigos");
const mostrarCodigos = document.getElementById("mostrarCodigos");
const linkCodigo = document
  .getElementById("linkCodigo")
  .getAttribute("data-link");

const codigoModal = new bootstrap.Modal("#codigoModal");
//completar modal
const tituloModal = document.querySelector("#tituloModal");
const contenidoModal = document.querySelector("#contenidoModal");

const searchCode = document.getElementById("searchCode");

cargarEventListeners();
function cargarEventListeners() {
  consultarCodigo();
  document.addEventListener("DOMContentLoaded", () => {
    buscarCodigo();
  });
}

async function consultarCodigo() {
  const link = listacodigos.getAttribute("data-link");
  const response = await fetch(link);
  const data = await response.json();
  console.log(data);
  generarHTML(data);
  verCodigo();
}

function generarHTML(data) {
  //limpiar html
  mostrarCodigos.innerHTML = "";
  data.forEach(function (codigo) {
    const { id, titulo, descripcion, name } = codigo;
    const div = document.createElement("div");
    div.classList.add("col-md-3", "mb-4");
    div.innerHTML = `
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <h6 class="">${titulo}</h6>
                    <div class="">
                        <span class="badge text-bg-success">${name}</span>
                    </div>
                </div>
                <div class="card-body py-2">
                    <p class="card-text">${descripcion}</p>
                    <button data-link="${linkCodigo}?id=${id}" class="btn btn-dark btn-sm verCodigoSelect">Ver Codigo <i class="bi bi-eye"></i></button>
                </div>
            </div>
        `;
    mostrarCodigos.appendChild(div);
  });
}

function verCodigo() {
  const verCodigoSelect = document.querySelectorAll(".verCodigoSelect");
  verCodigoSelect.forEach((boton) => {
    boton.addEventListener("click", async (e) => {
      const link = boton.getAttribute("data-link");
      const response = await fetch(link);
      const data = await response.json();

      tituloModal.innerHTML = data.titulo;
      contenidoModal.innerHTML = data.codigo;

      hljs.highlightAll();

      codigoModal.show();
      copiarCodigo();
    });
  });
}

function buscarCodigo() {
  searchCode.addEventListener("input", async (e) => {
    mostrarCodigos.innerHTML = "";
    const link = listacodigos.getAttribute("data-link");
    const response = await fetch(link);
    const data = await response.json();
    const texto = e.target.value.toLowerCase();
    const filtro = data.filter((codigo) => {
      return (
        codigo.titulo.toLowerCase().includes(texto) ||
        codigo.descripcion.toLowerCase().includes(texto)
      );
    });
    generarHTML(filtro);
    verCodigo();
  });
}

function copiarCodigo() {
  const codeBlock = document.querySelectorAll("pre code");
  const copyButton = document.getElementById("copy-button");
  const copySuccess = document.getElementById("copy-success");
  const copyTextHandler = () => {
    const selection = window.getSelection();
    const range = document.createRange();
    range.selectNodeContents(codeBlock[0]);
    selection.removeAllRanges();
    selection.addRange(range);
    document.execCommand("copy");
    selection.removeAllRanges();
    copySuccess.classList.add("show-message");
    setTimeout(() => {
      copySuccess.classList.remove("show-message");
    }, 2000);
  };

  copyButton.addEventListener("click", copyTextHandler);
}
