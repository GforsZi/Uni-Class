function detectMobile() {
  return /mobi | Android | iphone | ipad | ipod | BlackBarry | IEMobile | Opera mini/i.test(
    navigator.userAgent
  );
}

window.onload = function () {
  if (detectMobile()) {
    document.getElementById("detect").style.display = "flex";
    document.getElementById("detectImg").style.display = "none";
    document.getElementsById("contaElement").style.filter = "blur(20px)";
  }
};
