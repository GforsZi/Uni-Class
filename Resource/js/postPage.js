const infile = document.getElementById("img");
const preview = document.getElementById("preview");
infile.onchange = () => {
  let reader = new FileReader();
  reader.readAsDataURL(infile.files[0]);
  reader.onload = () => {
    preview.setAttribute("src", reader.result);
  };
};
