<script>
document.addEventListener("DOMContentLoaded", function() {
    // Selecciona todos los divs con clase "campo"
    let campos = document.querySelectorAll(".campo");

    campos.forEach((campo, index) => {
        campo.addEventListener("keydown", function(e) {
            if (e.key === "Enter") {
                e.preventDefault(); // evita comportamientos por defecto

                // Si no es el último div, pasamos al siguiente
                if (index < campos.length - 1) {
                    campos[index + 1].focus();
                }
            }
        });
    });
});
</script>
