// Variables
const htmlArea = document.getElementById("html-area");
const cssArea = document.getElementById("css-area");
const jsArea = document.getElementById("js-area");
const displayer = document.getElementById("displayer");
const styleContainer = document.getElementById("style-container");
const scriptContainer = document.getElementById("script-container");
const codesContainer = document.getElementById("codes-container");
const currentLength = document.getElementById("current-length");
const progressBar = document.getElementById("progress-bar");

// Modify the value of the displayer
function modifyHtml() {
    displayer.innerHTML = htmlArea.value
    currentLength.innerText = displayer.innerText.length
    updateMaxLengthArea()
    updateProgressBar()
}

// Modify the maxlength of the HTML area, with taking into account the HTML tags
function updateMaxLengthArea() {
    const maxLength = parseInt(document.getElementById("max-length").value)
    const newMaxLength = maxLength + (htmlArea.value.length - displayer.innerText.length)
    htmlArea.setAttribute("maxlength", newMaxLength);
}

// Update the width and the color of the progress bar
function updateProgressBar() {
    const maxLength = parseInt(document.getElementById("max-length").value)
    const percent = parseInt(currentLength.innerText)/maxLength * 100
    progressBar.style.width = `${percent}%`
    if(percent >= 80) {
        progressBar.style.background = 'red'
    } else if(percent >= 50) {
        progressBar.style.background = 'orange'
    } else {
        progressBar.style.background = 'green'
    }
}

// Add CSS to the index
function modifyCss() {
    styleContainer.innerHTML = cssArea.value
}

// Send the form with all data when focus out, to insert the js into the index
jsArea.addEventListener('focusout', () => {
    codesContainer.submit()
});


/**
 * CODEMIRROR INITIALIZATION
 */
