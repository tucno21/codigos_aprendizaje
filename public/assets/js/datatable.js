const dom =
  "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
  "<'row'<'col-sm-12'tr>>" +
  "<'row'<'col-sm-5'i><'col-sm-7'p>>";
const buttonsX = [
  {
    extend: "copy", //copyHtml5
    footer: true,
    text: "<span class='badge bg-primary fs-4'><i class='bi bi-clipboard-check'></i></span>",
    // title: "Copiado al portapapeles",
  },
  {
    extend: "excel", //excelHtml5
    footer: true,
    text: "<span class='badge bg-success fs-4'><i class='bi bi-file-earmark-excel'></i></span>",
  },
  {
    extend: "csvHtml5",
    footer: true,
    text: "<span class='badge bg-warning fs-4'><i class='bi bi-filetype-csv'></i></span>",
  },
  {
    extend: "pdfHtml5", //pdfHtml5 //pdf
    footer: true,
    text: "<span class='badge bg-danger fs-4'><i class='bi bi-file-earmark-pdf'></i></span>",
  },
  {
    extend: "print", //
    // footer: true,
    text: "<span class='badge bg-dark fs-4'><i class='bi bi-printer'></i></span>",
  },
  {
    extend: "colvis",
    // footer: true,
    text: "<span class='badge bg-warning fs-4'><i class='bi bi-layout-three-columns'></i></span>",
    postfixButtons: ["colvisRestore"],
    // columns: "th:nth-child(n+2)",
  },
];

$(document).ready(function () {
  var miTabla = $("#datatableAll").DataTable({
    // dom,
    // buttons: buttonsX,
    // pageLength: 5,
    // lengthMenu: [
    //   [5, 10, 15, -1], //lista real
    //   [5, 10, 15, "All"], //lista que se ve
    // ],
    language: {
      decimal: "",
      emptyTable: "No hay información",
      info: "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
      infoEmpty: "Mostrando 0 to 0 of 0 Entradas",
      infoFiltered: "(Filtrado de _MAX_ total entradas)",
      infoPostFix: "",
      thousands: ",",
      lengthMenu: "Mostrar _MENU_ Entradas",
      loadingRecords: "Cargando...",
      processing: "Procesando...",
      search: "Buscar:",
      zeroRecords: "Sin resultados encontrados",
      paginate: {
        first: "Primero",
        last: "Ultimo",
        next: "Siguiente",
        previous: "Anterior",
      },
    },
  });
});
