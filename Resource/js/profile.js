let option = "default";

function optionPst() {
  globalThis = option;
  option = localStorage.setItem("option", "opPst");
  location.href = "";
  return true;
}
const yrPst = document.getElementById("yrPst");
yrPst.onclick = optionPst;

function optionPrf() {
  globalThis = option;
  option = localStorage.setItem("option", "opPrf");
  location.href = "";
  return true;
}
const inPrf = document.getElementById("inPrf");
inPrf.onclick = optionPrf;

function optionstng() {
  globalThis = option;
  option = localStorage.setItem("option", "opStng");
  location.href = "";
  return true;
}
const stng = document.getElementById("stng");
stng.onclick = optionstng;

const finalOption = localStorage.getItem("option");
console.log(finalOption);

switch (finalOption) {
  case "opPst":
    onPst();
    break;
  case "opPrf":
    onPrf();
    break;
  case "opStng":
    onSet();
    break;
  default:
    console.log("tidak membuka apapun");
    break;
}

function onPst() {
  const onPst = document.querySelector(".containerPost");
  onPst.classList.add("onPost");
}

function onPrf() {
  const onPrf = document.querySelector(".containerProfile");
  onPrf.classList.add("onProfile");
}

function onSet() {
  const onStng = document.querySelector(".containerSet");
  onStng.classList.add("onSet");
}

function onUP() {
  const onUP = document.querySelector(".slideUP");
  onUP.classList.toggle("onSlideUP");
}
const btnUP = document.getElementById("btnUP");
btnUP.onclick = onUP;
