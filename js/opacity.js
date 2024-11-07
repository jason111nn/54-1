/* opacity */

function OpacityUp(up) {
    document.querySelectorAll(up).forEach((element)=> {
        let currentOpacity = parseFloat(getComputedStyle(element).opacity);
        element.style.opacity = (currentOpacity + 0.2).toString();
    });
}
function OpacityDown(down) {
    document.querySelectorAll(down).forEach((element)=> {
        let currentOpacity = parseFloat(getComputedStyle(element).opacity);
        element.style.opacity = (currentOpacity + 0.2).toString();
    });
}