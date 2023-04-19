const btnModals = document.querySelectorAll('button[data-toggle=modal]');
const btnDeleteLink = document.querySelector('a.btn-hapus');

btnModals.forEach(btn => {
    btn.addEventListener('click', function () {
        btnDeleteLink.setAttribute('href', `http://localhost/Sipos/ci/Data_Menu_PMT/hapus_data/${btn.getAttribute('data-id-menu-pmt')}`)
    });
});