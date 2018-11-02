<html>
  
<head>  
  
<link href="dropzone.css" type="text/css" rel="stylesheet" />
  
<!-- 1 -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 
<script src="dropzone.js"></script>
 
<script>
<!-- 3 -->
Dropzone.options.myDropzone = {
    init: function() {
        thisDropzone = this;
        <!-- 4 -->
        $.get('upload.php', function(data) {
 
            <!-- 5 -->
            $.each(data, function(key,value){
                 
                var mockFile = { name: value.name, size: value.size };
                 
                thisDropzone.options.addedfile.call(thisDropzone, mockFile);
 
                thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "uploads/"+value.name);
                 
            });
             
        });
    }
};
</script>
 
</head>
  
<body>
  
<!-- 2 -->
Загрузка файлов:<br>
<form action="upload.php" class="dropzone" id="my-dropzone"></form>
<br>
<?php require("galleryView.php"); ?>
</body>
  
</html>