const tooltipText = document.querySelector(".tooltiptext");
tooltipText.style.display = "none";
const addInputLight = document.getElementById("add-input-light");

function addInput() {
    if (tooltipText.style.display === "none") {
        tooltipText.style.display = "grid";
        addInputLight.setAttribute("color", "red");
        addInputLight.setAttribute("fill", "green");
    } else if (tooltipText.style.display === "grid") {
        tooltipText.style.display = "none";
        addInputLight.setAttribute("color", "");
        addInputLight.setAttribute("fill", "white");
    }
}

// JADI KAN FUNCTIONNYA SUDAH DIJALANKAN KETIKA HALAMAN PERTAMA KALI LOAD JADI GAK AKAN DIJALANIN LAGI KECUALI DIPAKEIN EVENT LISTENER
