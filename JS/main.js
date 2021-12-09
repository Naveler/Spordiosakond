const tableBtns = document.querySelectorAll(".clickable");
const detailsWindow = document.querySelector(".details-window");

tableBtns.forEach (btn => {
    btn.addEventListener("click", e => {
        detailsWindow.classList.remove("hidden");
        console.log("asdsad");
    })
})