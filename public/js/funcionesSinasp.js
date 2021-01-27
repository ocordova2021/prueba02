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


/*
      $('#foto').fileinput({
        language:'es',
        allowedFileExtensions: ['jpg','jpeg','png'],
        maxFileSize: 2500,
        showUpload:true,
        showClose:false,
        overwriteInitial : false , 
        dropZoneEnabled: true,
        layoutTemplates,
        uploadUrl:'home/Uploadfiles',
        theme: 'fa',
      });*/



});





