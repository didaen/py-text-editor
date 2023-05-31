const tooltipText = document.querySelector(".tooltiptext");
tooltipText.style.visibility = "hidden";
const addInputLight = document.getElementById("add-input-light");

function addInput() {
    if (tooltipText.style.visibility == "hidden") {
        tooltipText.style.visibility = "visible";
        addInputLight.setAttribute("color", "red");
        addInputLight.setAttribute("fill", "green");
    } else {
        tooltipText.style.visibility = "hidden";
        addInputLight.setAttribute("color", "");
        addInputLight.setAttribute("fill", "white");
    }
}

// JADI KAN FUNCTIONNYA SUDAH DIJALANKAN KETIKA HALAMAN PERTAMA KALI LOAD JADI GAK AKAN DIJALANIN LAGI KECUALI DIPAKEIN EVENT LISTENER
