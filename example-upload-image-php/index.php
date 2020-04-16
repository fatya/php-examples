<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upload image file</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="fileImage" value="">
        <button type="submit" name="buttonupload">upload image</button>
    </form>
    </body>
</html>