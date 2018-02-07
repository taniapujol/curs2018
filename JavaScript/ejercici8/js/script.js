function confirmarFormulario() {
    var confirmar = confirm ('seguro de enviar el formulario');
    if (confirmar) {
        document.getElementById("formulario").submit();
    } else {
        alert('Formulario cancelado, borrando datos');
        document.getElementById("formulario").reset();
    }
    
}