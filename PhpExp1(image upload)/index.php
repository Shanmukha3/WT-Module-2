<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Image Upload and Display</title>
</head>
<body>
    <center>
        <h1>Upload your image</h1>
        <form id="uploadForm" enctype="multipart/form-data" action="upload.php" method="post">
            <input type="file" id="image" name="image" accept="image/*" required><br><br>
            <button type="button" onclick="displayImage()">View Image</button>
        </form>
    </center>
    
    <div id="imageContainer" style="display: none;">
        <h2>Uploaded Image</h2>
        <img id="uploadedImage" alt="Uploaded Image">
    </div>
    
    <script>
        function displayImage() {
            const imageInput = document.getElementById('image');
            const uploadedImage = document.getElementById('uploadedImage');
            const imageContainer = document.getElementById('imageContainer');

            if (imageInput.files.length > 0) {
                const file = imageInput.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    uploadedImage.src = e.target.result;
                    imageContainer.style.display = 'block';
                };

                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>
