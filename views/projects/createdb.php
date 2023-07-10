<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create project</title>
</head>
<body>
<form action="/createtable" method="post" enctype="multipart/form-data" >
    <div class="Createdb">
    <h2>Create New database</h2>
    <label for="project"> db name</label>
    <input type="text"  id ="project" name ="db_name">
    <button type ="submit"> create</button>
    </div>
</form>

<form action="/listingdb" method="post" >
    <button type ="submit"> listing</button>
</form>





</body>
</html>