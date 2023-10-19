<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>

{{-- pop up when deleting --}}
<script type="text/javascript">
    function deleteConfirm() {
        if (confirm("Are you sure you want to delete this user?")) {
            document.getElementById("delete-form").submit();
        }
    }
</script>
<!--Nepali Date Picker-->
<script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.1.min.js"
    type="text/javascript"></script>
<script type="text/javascript">
    window.onload = function() {

        var elm = document.getElementById("nepali-datepicker");

        elm.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            ndpYearCount: 10,
            language: "english"
        });
    };
</script>
<script type="text/javascript">
    function bsToAd() {
        var bsDate = document.getElementById("nepali-datepicker").value;
        var englishdate = document.getElementById("englishdate");

        var adDate = NepaliFunctions.BS2AD(bsDate)

        englishdate.value = adDate
    }
    setInterval(() => {
        bsToAd()
    }, 30);
</script>
<script type="text/javascript">
    function previewFile() {
        console.log("object")
        const preview = document.getElementById("preview");
        preview.style.height = '100px';
        const file = document.querySelector("input[type=file]").files[0];
        const reader = new FileReader();
        //  console.log(preview)
        console.log(reader)
        reader.onload = function() {
            preview.src = reader.result;
        };


        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
</body>

</html>
