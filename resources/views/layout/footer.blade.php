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
{{-- js for confirm box on delete --}}
<script src ="{{ asset('js/confirmpopup.js') }}"></script>
<!--Nepali Date Picker-->
<script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.1.min.js"
    type="text/javascript"></script>
<script src="{{ asset('js/nepalidate.js') }}"></script> 
<!--previewing image-->
<script src="{{ asset('js/previewfile.js') }}"></script>

<!--form repeater-->
<script src="{{ asset('js/formrepeater.js') }}"></script>
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
<script src ="{{ asset('js/clientvalidate.js') }}"></script>

<script src="{{ asset('vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
</html>
