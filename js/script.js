// Variable
const loadingScreen = document.getElementById("loading-screen");
const togglerSidebar = document.querySelector('.toggler-sidebar');
const sidebar = document.querySelector('#sidebar');
const blurred = document.querySelector('#blur');

// Sidebar Value
const tools = document.getElementsByClassName('tools');
const iframeTitle = document.getElementById('iframe-title');
const iframeId = document.getElementById('iframe-id');
const welcomeSection = document.getElementById('welcome-section');
const iframeSection = document.getElementById('iframe-section');

// Page Title
const pageTitle = document.querySelector('title'); 

// Function
function hideLoadingScreen() {
    loadingScreen.style.display = "none";
}

// set Timeout for loading if page title "Beranda"
setTimeout(hideLoadingScreen, 4500);


// Logic
togglerSidebar.addEventListener('click', function () {

    if (togglerSidebar.textContent === "☰") {

        // Change Toggler Icon
        togglerSidebar.textContent = "x";
        togglerSidebar.style.transition = "1s";

        // Show Sidebar
        sidebar.style.left = "0px";
        sidebar.style.transition = "1s";

        // Show Blurred
        blurred.style.backgroundColor = "rgba(0,0,0,0.5)";
        blurred.style.backdropFilter = "blur(2px)";
        blurred.style.display = "block";
        blurred.style.transition = "1s";

    } else {

        // Change Toggler Icon
        togglerSidebar.textContent = "☰";
        togglerSidebar.style.transition = "1s";

        // Hide Sidebar
        sidebar.style.left = "-300px";
        sidebar.style.transition = "1s";

        // hide Blurred
        blurred.style.backgroundColor = "rgba(0,0,0,0)";
        blurred.style.backdropFilter = "blur(0px)";
        blurred.style.display = "none";
        blurred.style.transition = "1s";

    }

});

// Getting Tools Name
for (let i = 0; i < tools.length; i++) {
    tools[i].addEventListener('click', function () {

        // Logic 
        welcomeSection.style.display = "none";
        iframeSection.style.display = "flex";

        // Change Iframe Title
        iframeTitle.textContent = tools[i].textContent;

        // Getting value from tools value custom attribute
        const toolsValue = tools[i].getAttribute('value');

        // Change Iframe Id and loading screen
        iframeId.src = toolsValue;

        // Change the toogler to "☰"
        togglerSidebar.textContent = "☰";
        togglerSidebar.style.transition = "1s";

        // Hide Sidebar
        sidebar.style.left = "-300px";
        sidebar.style.transition = "1s";

        // hide Blurred
        blurred.style.backgroundColor = "rgba(0,0,0,0)";
        blurred.style.backdropFilter = "blur(0px)";
        blurred.style.display = "none";
        blurred.style.transition = "1s";


    })
}