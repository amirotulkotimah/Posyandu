const btnModals = document.querySelectorAll('button[data-toggle=modal]');
const btnDeleteLink = document.querySelector('a.btn-hapus');

btnModals.forEach(btn => {
    btn.addEventListener('click', function () {
        btnDeleteLink.setAttribute('href', `https://ta-mifpolije.com/E31190341/Absensi/hapus/${btn.getAttribute('data-id-data-absen')}`)
    });
});