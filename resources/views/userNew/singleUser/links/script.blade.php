 <!-- ---------JAVA--Bootsrap---- -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/regular.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
     integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/brands.min.js"
     integrity="sha512-rbApvPERCHI8cOpTOKfMLVJNlXSCs4QRu8UsJ0HieeHyNKkHtUIQTZq3hv0pT7X0SUsLrRGEUsMTTpzwpdeIuw=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://code.jquery.com/jquery-3.6.3.min.js"
     integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


 <script
     type="module"
     src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
   ></script>
 <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 <script src="{{asset('user/Assets/allNavScripts.js')}}"></script>

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

 <!-- New script starts -->
 <script>
     // --------Tabes-----------
     $(".tab-link").click(function() {
         var tabID = $(this).attr("data-tab");

         $(this).addClass("active").siblings().removeClass("active");

         $("#tab-" + tabID)
             .addClass("active")
             .siblings()
             .removeClass("active");
     });
     // -----------active----class--------
     // Add active class to the current button (highlight it)
     var header = document.getElementById("myDIV");
     var btns = header.getElementsByClassName("mylist");
     for (var i = 0; i < btns.length; i++) {
         btns[i].addEventListener("click", function() {
             var current = document.getElementsByClassName("active");
             current[0].className = current[0].className.replace(" active", "");
             this.className += " active";
         });
     }
 </script>
 <!-- New script ends -->
