document.addEventListener('DOMContentLoaded', function () {
    // Get the select element
    var select = document.querySelector('.languagechange');
    var url  = select.getAttribute('data-route');;
    // Add event listener for language change
    select.addEventListener('change', function () {
        var selectedLang = this.value;
        // Update the URL with the selected language as a parameter
        window.location.href = url + '?lang=' + selectedLang;
    });
});