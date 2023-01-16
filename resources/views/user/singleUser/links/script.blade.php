 <!-- ---------JAVA--Bootsrap---- -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

 <script src="https://code.jquery.com/jquery-3.6.3.min.js"
     integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

 {{-- <script>
     $("#btn-edit").click(function() {

         Copy Code
         var formData = new FormData($("#frmEditProduct")[0]);
         formData.append('_method', 'put');

         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
         $.ajax({
             type: 'POST',
             url: '/product/' + $("#frmEditProduct input[name=product_id]").val(),
             data: formData,
             dataType: 'json',
             success: function(data) {
                 $('#frmEditProduct').trigger("reset");
                 $("#frmEditProduct .close").click();
                 window.location.reload();
             },
             error: function(data) {
                 var errors = $.parseJSON(data.responseText);
                 $('#edit-product-errors').html('');
                 $.each(errors.messages, function(key, value) {
                     $('#edit-product-errors').append('<li>' + value + '</li>');
                 });
                 $("#edit-error-bag").show();
             }
         });
     });
 </script> --}}

 <script>
     function readURL(input) {
         if (input.files && input.files[0]) {
             var reader = new FileReader();
             reader.onload = function(e) {
                 $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                 $('#imagePreview').hide();
                 $('#imagePreview').fadeIn(650);
             }
             reader.readAsDataURL(input.files[0]);
         }
     }
     $("#imageUpload").change(function() {
         readURL(this);
         var formData = new FormData($("#edit_image_form")[0]);
         formData.append('image', $(this).val());
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
         $.ajax({
             type: "POST",
             url: "/individual/update/profileImage",
             data: formData,
             contentType: false,
             processData: false,
             dataType: 'json',
             success: function(response) {
                 if (response.status === 404) {
                     console.log(response.message);
                 } else {
                     console.log(response.message);
                 }
             },
             error: function(data) {
                 console.log(data);
             }
         });
     });
 </script>
