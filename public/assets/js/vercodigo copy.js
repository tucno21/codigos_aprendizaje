//cargar documento
// const mirarCodigo = document.querySelectorAll(".mirarCodigo");
// console.log(mirarCodigo);
const codigoModal = new bootstrap.Modal("#codigoModal");
//completar modal
let codigoModalLabel = document.querySelector("#codigoModalLabel");
let codigoLenguaje = document.querySelector("#codigoLenguaje");

//generar tabla
const listaUrl = document.querySelector("#listaUrl").getAttribute("data-link");
const editCodigo = document
  .querySelector("#editCodigo")
  .getAttribute("data-link");

const deleteCodigo = document
  .querySelector("#deleteCodigo")
  .getAttribute("data-link");

const showCodigo = document
  .querySelector("#showCodigo")
  .getAttribute("data-link");

cargarEventListeners();
function cargarEventListeners() {
  document.addEventListener("DOMContentLoaded", () => {
    // hljs.highlightAll();
    generarTabla();
    verCodigo();
    // generarTabla();
  });
}

function generarTabla() {
  new gridjs.Grid({
    columns: ["ID", "Titulo", "Descripcion", "Lenguaje", "Acciones"],
    search: true,
    pagination: true,
    sort: true,
    //listaUrl y agregar botones
    server: {
      url: listaUrl,
      then: (data) => {
        return data.map((item) => {
          // console.log(item);
          //crear botones
          const botonHtml = `<div>
          <a href="${editCodigo}?id=${item.id}" class="btn btn-outline-warning btn-sm"><i class="bi bi-pencil"></i></a>
          <button data-link="${showCodigo}?id=${item.id}" class="btn btn-outline-success btn-sm mirarCodigo"><i class="bi bi-eye"></i></button>
          <a href="${deleteCodigo}?id=${item.id}" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></a>
          </div>`;

          // botonHtml de text a html
          const parser = new DOMParser();
          const doc = parser.parseFromString(botonHtml, "text/html");
          const boton = doc.body.firstChild;

          return [item.id, item.titulo, item.descripcion, item.name, boton];
        });
      },
    },
    // resizable: true,
    // width: 1000,
  }).render(document.getElementById("tabladridjs"));

  verCodigo();
}

function verCodigo() {
  const mirarCodigo = document.querySelectorAll(".mirarCodigo");
  mirarCodigo.forEach((boton) => {
    console.log(boton);
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
