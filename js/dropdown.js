/* Osint */
const btnOsint = document.querySelector("#btn-osint");
const listOsint = document.querySelector("#osint-list");

listOsint.style.maxHeight = 0 + "px";
listOsint.style.overflow = "hidden";

/* Geoint */
const btnGeoint = document.querySelector("#btn-geoint");
const listGeoint = document.querySelector("#geoint-list");

listGeoint.style.maxHeight = 0 + "px";
listGeoint.style.overflow = "hidden";

/* Socmint */
const btnSocmint = document.querySelector("#btn-socmint");
const listSocmint = document.querySelector("#socmint-list");

listSocmint.style.maxHeight = 0 + "px";
listSocmint.style.overflow = "hidden";

/* Humint */
const btnHumint = document.querySelector("#btn-humint");
const listHumint = document.querySelector("#humint-list");

listHumint.style.maxHeight = 0 + "px";
listHumint.style.overflow = "hidden";

/* Cybint */
const btnCybint = document.querySelector("#btn-cybint");
const listCybint = document.querySelector("#cybint-list");

listCybint.style.maxHeight = 0 + "px";
listCybint.style.overflow = "hidden";

// DOM Manipulation
/* Osint */
btnOsint.addEventListener("click", function () {
  if (listOsint.style.maxHeight === 0 + "px") {
    // Hide the other except osint
    listGeoint.style.maxHeight = "0px";
    listGeoint.style.transition = 0.5 + "s";

    listSocmint.style.maxHeight = "0px";
    listSocmint.style.transition = 0.5 + "s";

    listHumint.style.maxHeight = "0px";
    listHumint.style.transition = 0.5 + "s";

    listCybint.style.maxHeight = "0px";
    listCybint.style.transition = 0.5 + "s";

    // Show the osint List
    listOsint.style.maxHeight = "1000px";
    listOsint.style.transition = 2 + "s";
  } else {
    // Hide
    listOsint.style.maxHeight = "0px";
    listOsint.style.transition = 0.5 + "s";
  }
});

/* Geoint */
btnGeoint.addEventListener("click", function () {
  if (listGeoint.style.maxHeight === 0 + "px") {
    // Hide the other except Geoint
    listOsint.style.maxHeight = "0px";
    listOsint.style.transition = 0.5 + "s";

    listSocmint.style.maxHeight = "0px";
    listSocmint.style.transition = 0.5 + "s";

    listHumint.style.maxHeight = "0px";
    listHumint.style.transition = 0.5 + "s";

    listCybint.style.maxHeight = "0px";
    listCybint.style.transition = 0.5 + "s";

    // Show the Geoint List
    listGeoint.style.maxHeight = "1000px";
    listGeoint.style.transition = 2 + "s";
  } else {
    // Hide
    listGeoint.style.maxHeight = "0px";
    listGeoint.style.transition = 0.5 + "s";
  }
});

/* Socmint */
btnSocmint.addEventListener("click", function () {
  if (listSocmint.style.maxHeight === 0 + "px") {
    // Hide the other except Geoint
    listOsint.style.maxHeight = "0px";
    listOsint.style.transition = 0.5 + "s";

    listGeoint.style.maxHeight = "0px";
    listGeoint.style.transition = 0.5 + "s";

    listHumint.style.maxHeight = "0px";
    listHumint.style.transition = 0.5 + "s";

    listCybint.style.maxHeight = "0px";
    listCybint.style.transition = 0.5 + "s";

    // Show the Geoint List
    listSocmint.style.maxHeight = "1000px";
    listSocmint.style.transition = 2 + "s";
  } else {
    // Hide
    listSocmint.style.maxHeight = "0px";
    listSocmint.style.transition = 0.5 + "s";
  }
});

/* Humint */
btnHumint.addEventListener("click", function () {
  if (listHumint.style.maxHeight === 0 + "px") {
    // Hide the other except Geoint
    listOsint.style.maxHeight = "0px";
    listOsint.style.transition = 0.5 + "s";

    listGeoint.style.maxHeight = "0px";
    listGeoint.style.transition = 0.5 + "s";

    listSocmint.style.maxHeight = "0px";
    listSocmint.style.transition = 0.5 + "s";

    listCybint.style.maxHeight = "0px";
    listCybint.style.transition = 0.5 + "s";

    // Show the Geoint List
    listHumint.style.maxHeight = "1000px";
    listHumint.style.transition = 2 + "s";
  } else {
    // Hide
    listHumint.style.maxHeight = "0px";
    listHumint.style.transition = 0.5 + "s";
  }
});

/* Cybint */
btnCybint.addEventListener("click", function () {
  if (listCybint.style.maxHeight === 0 + "px") {
    // Hide the other except Geoint
    listOsint.style.maxHeight = "0px";
    listOsint.style.transition = 0.5 + "s";

    listGeoint.style.maxHeight = "0px";
    listGeoint.style.transition = 0.5 + "s";

    listSocmint.style.maxHeight = "0px";
    listSocmint.style.transition = 0.5 + "s";

    listHumint.style.maxHeight = "0px";
    listHumint.style.transition = 0.5 + "s";

    // Show the Cybint List
    listCybint.style.maxHeight = "1000px";
    listCybint.style.transition = 2 + "s";
  } else {
    // Hide
    listCybint.style.maxHeight = "0px";
    listCybint.style.transition = 0.5 + "s";
  }
});
