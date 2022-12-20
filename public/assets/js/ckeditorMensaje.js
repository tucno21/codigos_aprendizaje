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
    codeBlock: {
      languages: [
        { language: "html", label: "HTML" },
        { language: "css", label: "CSS" },
        { language: "scss", label: "SCSS" },
        { language: "javascript", label: "JavaScript" },
        { language: "php", label: "PHP" },
        //PHP Template
        { language: "php-template", label: "PHP Template" },
        { language: "typescript", label: "TypeScript" },
        { language: "sql", label: "SQL" },
        { language: "bash", label: "Bash" },
        { language: "json", label: "JSON" },
        { language: "xml", label: "XML" },
        // { language: "java", label: "Java" },
        // { language: "python", label: "Python" },
        // { language: "csharp", label: "C#" },
        // { language: "c", label: "C" },
        // { language: "cpp", label: "C++" },
        // { language: "ruby", label: "Ruby" },
        // { language: "go", label: "Go" },
        // { language: "swift", label: "Swift" },
        // { language: "kotlin", label: "Kotlin" },
        // { language: "yaml", label: "YAML" },
        // { language: "diff", label: "Diff" },
        // { language: "powershell", label: "PowerShell" },
        // { language: "dockerfile", label: "Dockerfile" },
        //GraphQL
        // { language: "graphql", label: "GraphQL" },
      ],
    },
  }).catch((error) => {
    console.error(error);
  });
}
