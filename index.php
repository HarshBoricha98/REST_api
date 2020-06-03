<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>
        .container {
            display: flex;
            width: 100%;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="insert-form">
            <form action="/REST/Inserted" method="POST">
                <label for="firstName">FirstName</label>
                <input type="text" name="firstName">
                <label for="lastName">LastName</label>
                <input type="text" name="lastName">
                <input type="submit" value="Insert USER">
            </form>
        </div>
    </div>
   
</body>

</html>