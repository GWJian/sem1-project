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

// ======================================

function checkPostStatus() {
  var postStatus = document.getElementById("post-status").value;
  var releaseDate = document.getElementById("releasedate");

  if (postStatus === "pending") {
    releaseDate.style.display = "none";
  } else if (postStatus === "comingsoon" || postStatus === "publish") {
    releaseDate.style.display = "block";
  }
}

window.onload = checkPostStatus;
// above can use
// ======================================

// under can but clear everything even publish
// const status = "pending";

// if (status === "pending") {
//   const releaseDateElement = document.getElementById("releasedate-0");
//   releaseDateElement.value = "";
// }
// ======================================

//empty release date when button is onclick
// // Get the button element
// const button = document.getElementById("post-status");

// // Add an event listener to the button
// button.addEventListener("click", function () {
//   // Get the release date element
//   const releaseDateElement = document.getElementById("releasedate-0");

//   // Set the value of the release date element to an empty string
//   releaseDateElement.value = "";
// });

// ======================================

//when button is pending,release date value will empty
//publish and comingsoon stay
document.getElementById("post-status").addEventListener("change", function () {
  if (this.value === "pending") {
    document.getElementById("releasedate-0").value = "";
  }
});
