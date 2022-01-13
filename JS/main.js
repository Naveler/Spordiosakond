const detailsWindow = document.getElementById("details");
const closeBtn = document.getElementById("closeBtn");
let tableBtns = document.querySelectorAll(".activities tr");
// tableBtns.item(0).remove()

console.log(tableBtns);

let show = false;
closeBtn.addEventListener("click", (e) => {
    show = !show;

    if (show) {
        detailsWindow.style.display = "block"
    } else  {
        detailsWindow.style.display = "none";
    }
})