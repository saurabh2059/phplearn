<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: grey;">
    

<form action="/formhandler.php" method="post">
    <label for="name">Your name:</label>
    <input name="name" id="name" type="text">

    <label for="age">Your age:</label>
    <input name="age" id="age" type="number">

    <label for="favouritepet">favouritepet</label>
    <select name="favouritepet" id="favouritepet">
        <option value="none">NONE</option>
        <option value="dog">DOG</option>
        <option value="cat">CAT</option>
        <option value="parrot">PARROT</option>
    </select>

    <button type="submit">Submit</button>
</form>


</body>
</html>