<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create project</title>
</head>
<body>
<form action="/createProject" method="post" enctype="multipart/form-data" >
    <h2>Create New project</h2>
    <label for="project">Product name</label>
    <input type="text"  id ="project" name ="project_name">
    <label for="project">uploadimage</label>
    <input type="file"  id ="project" name ="projectImage[]" multiple="multiple" required>
    <button type ="submit"> create</button>
</form>

</body>
</html>