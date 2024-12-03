const onVs = document.querySelector(".contentVS");
const onHt = document.querySelector(".contentHT");
const onCs = document.querySelector(".contentCS");
const onSq = document.querySelector(".contentSQ");
const onPh = document.querySelector(".contentPH");

const classSlide = "onSlidePagePC";

function onSvs() {
  onVs.classList.toggle(classSlide);
  onHt.classList.remove(classSlide);
  onCs.classList.remove(classSlide);
  onSq.classList.remove(classSlide);
  onPh.classList.remove(classSlide);
}
const btnVS = document.getElementById("onVS");
btnVS.onclick = onSvs;

function onSht() {
  onVs.classList.remove(classSlide);
  onHt.classList.toggle(classSlide);
  onCs.classList.remove(classSlide);
  onSq.classList.remove(classSlide);
  onPh.classList.remove(classSlide);
}
const btnHT = document.getElementById("onHT");
btnHT.onclick = onSht;

function onScs() {
  onVs.classList.remove(classSlide);
  onHt.classList.remove(classSlide);
  onCs.classList.toggle(classSlide);
  onSq.classList.remove(classSlide);
  onPh.classList.remove(classSlide);
}
const btnCS = document.getElementById("onCS");
btnCS.onclick = onScs;

function onSsq() {
  onVs.classList.remove(classSlide);
  onHt.classList.remove(classSlide);
  onCs.classList.remove(classSlide);
  onSq.classList.toggle(classSlide);
  onPh.classList.remove(classSlide);
}
const btnSQ = document.getElementById("onSQ");
btnSQ.onclick = onSsq;

function onSph() {
  onVs.classList.remove(classSlide);
  onHt.classList.remove(classSlide);
  onCs.classList.remove(classSlide);
  onSq.classList.remove(classSlide);
  onPh.classList.toggle(classSlide);
}
const btnPH = document.getElementById("onPH");
btnPH.onclick = onSph;
