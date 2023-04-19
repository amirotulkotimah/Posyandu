const btnModals = document.querySelectorAll('button[data-toggle=modal]');
const btnDeleteLink = document.querySelector('a.btn-hapus');

btnModals.forEach(btn => {
    btn.addEventListener('click', function () {
        btnDeleteLink.setAttribute('href', `https://ta-mifpolije.com/E31190341/Data_Ortu/hapus_data/${btn.getAttribute('data-id-data-ortu')}`)
    });
});