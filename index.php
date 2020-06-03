<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <div class="container custom-container">
        <div class="insert-form">
            <form action="/REST/Inserted" method="POST">
                <label for="firstName">FirstName</label>
                <input type="text" name="firstName">
                <label for="lastName">LastName</label>
                <input type="text" name="lastName">
                <input type="submit" value="Insert USER">
            </form>
        </div>

        <div class="instructions">
            <hr>
            <h2>Instructions for REST api</h2>
            <ul>
                <li>To see All the members: /REST/api/all</li>
                <li>Search everyone with same lastname: /REST/api/samelastname/?lastname=INPUT_NAME</li>
                <li>Search person's First Name give the Last Name: </li>
            </ul>
            <hr>
            <h2>Instructions for using UI</h2>
            <ul>
                <li>To insert users: /REST</li>
                <li>To find One by lastName: <a href="/REST/findOneLastName">Click here</a></li>
                <li>To find All by lastName: <a href="/REST/findAllLastName">Click here</a></li>
            </ul>
        </div>
    </div>

</body>

</html>