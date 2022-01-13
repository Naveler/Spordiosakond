const detailsWindow = document.getElementById("details");
const closeBtn = document.getElementById("closeBtn");
const tableBtns = document.querySelectorAll(".activities tr");

let showDetails = false;

tableBtns.forEach((element, index) => {
    if (index != 0 || index != tableBtns.length -1)
    {
        element.addEventListener("click", () => {
            showDetails = true;
            detailsWindow.style.display = "flex"
        })
    }
})

closeBtn.addEventListener("click", () => {
    showDetails = !showDetails;

    if (showDetails) {
        detailsWindow.style.display = "flex"
    } else  {
        detailsWindow.style.display = "none";
    }
})