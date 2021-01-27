$(document).ready(function() {
    
      $('#summernote').summernote({
      placeholder: 'Hello stand alone ui',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
      });



      $('#foto').fileinput({
        language:'es',
        allowedFileExtensions: ['jpg','jpeg','png'],
        maxFileSize: 1000,
        showUpload:false,
        showClose:false,
        overwriteInitial : false , 
        initialPreviewAsData: true,
        dropZoneEnabled:false,
        //uploadUrl:'Admin_noticia@store',
        autoOrientImage:false,
        theme: 'fa',
      });


});
