let blankSpace = document.querySelector('.blank-space');

window.addEventListener("scroll", blankSpaceScroll);

function blankSpaceScroll() {
    blankSpace.style.height = header.offsetHeight + "px";
}