document.getElementById("post-status").addEventListener("change", function () {
  if (this.value === "pending") {
    document.getElementById("releasedate").style.display = "none";
  } else {
    document.getElementById("releasedate").style.display = "block";
  }
});

function hideDiv() {
  document.getElementById("releasedate").style.display = "none";
}

window.onload = hideDiv;
