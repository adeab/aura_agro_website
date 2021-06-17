{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
<link rel="stylesheet" href="{{ asset('admin/css/custom_style.css')}}">

<div class="form-group">
    <label for="gallery_image">Select Photos for Gallery</label>
    <input type="file" id="gallery_image" name="gallery_image[]" class="form-control-file" multiple>
    <div class="container">
        <div class="row" id="preview_img">

        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('#gallery_image').on('change', function () { //on file input change
            if (window.File && window.FileReader && window.FileList && window
                .Blob) //check File API supported browser
            {

                var data = $(this)[0].files; //this file data
                $('#preview_img').empty();
                $.each(data, function (index, file) { //loop though each file
                    if (/(\.|\/)(gif|jpe?g|png)$/i.test(file
                        .type)) { //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function (file) { //trigger function on successful read
                            return function (e) {
                                var img = $('<img/>').addClass(
                                        'thumbnail-prev img-fluid img-thumbnail')
                                    .attr('src', e.target
                                    .result); //create image element 

                                $('#preview_img').append(
                                img); //append image to output element
                            };
                        })(file);
                        fRead.readAsDataURL(file); //URL representing the file's data.
                    }
                });

            } else {
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
    });

</script>
