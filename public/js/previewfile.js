function previewFile() {
    const preview = document.getElementById("preview");  
    preview.style.height = '100px';
    const file = document.querySelector("input[type=file]").files[0];
    // console.log(file);
    if (file) {
        const reader = new FileReader();
        //  console.log(preview)
        // console.log(reader)
        reader.onload = function () {
            preview.src = reader.result;
        };
        reader.readAsDataURL(file);
    }else {
        // Set the default image source when no file is selected
        preview.src = asset('storage/image/avatar2.png');
    }
    

}