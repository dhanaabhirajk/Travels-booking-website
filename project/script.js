function clicks() {
  var x = document.getElementsByClassName("menus");
  if (x.style.display === "none") {
    x.style.display = "flex";
    x.style.flexDirection="row";
  } else {
    x.style.display = "none";
  }
}