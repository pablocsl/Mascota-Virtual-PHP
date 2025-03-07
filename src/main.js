// Inicializar la página
window.onload = function () {

    // Agregar eventos para simular interacciones
    document.querySelectorAll(".action-btn").forEach((btn) => {
        btn.addEventListener("click", function () {
            // Simular cambio en la barra de energía
            const energyBar = document.querySelector(".energy-bar");
            const currentWidth = parseFloat(energyBar.style.width) || 50;

            if (this.textContent === "COMER" || this.textContent === "BAÑAR") {
                let newWidth = currentWidth + 5;
                if (newWidth > 100) newWidth = 100;
                energyBar.style.width = newWidth + "%";
            } else if (this.textContent === "DESCANSAR") {
                let newWidth = currentWidth + 10;
                if (newWidth < 0) newWidth = 0;
                energyBar.style.width = newWidth + "%";
            } else if (this.textContent === "LADRAR" || this.textContent === "MAULLAR") {
                let newWidth = currentWidth - 1;
                if (newWidth > 100) newWidth = 100;
                energyBar.style.width = newWidth + "%";
            } else if (this.textContent === "JUGAR") {
                let newWidth = currentWidth - 10;
                if (newWidth > 100) newWidth = 100;
                energyBar.style.width = newWidth + "%";
            }
        });
    });
};
