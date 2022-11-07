let codigoEmpresa = document.getElementById("codigoEmpresa");

if (codigoEmpresa) {
  ClassicEditor.create(codigoEmpresa, {
    toolbar: {
      items: [
        "heading",
        "|",
        "bold",
        "italic",
        "strikethrough",
        "underline",
        "code",
        "|",
        "outdent",
        "indent",
        "|",
        "alignment",
        "|",
        "link",
        "codeBlock",
      ],
      shouldNotGroupWhenFull: true,
    },
  }).catch((error) => {
    console.error(error);
  });
}
