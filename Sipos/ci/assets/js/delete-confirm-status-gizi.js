const btnModals = document.querySelectorAll('button[data-toggle=modal]');
const btnDeleteLink = document.querySelector('a.btn-hapus');

btnModals.forEach(btn => {
    btn.addEventListener('click', function () {
        btnDeleteLink.setAttribute('href', `http://localhost/Sipos/ci/Data_Status_Gizi/hapus_data/${btn.getAttribute('data-id-status-gizi')}`)
    });
});