<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals: Part 2</title>
</head>
<body>
<h1>Welcome to the Canteen! Here are the prices:</h1>
    <ul>
        <li>Halo-Halo - ₱100</li>
        <li>Thick Milo - ₱80</li>
        <li>Crema de Letche - ₱50</li>
    </ul>
    <form action="index2.php" method="post">
        <label for="food">Choose your order:</label>
        <select name="food" id="food">
            <option value="Halo-Halo">Halo-Halo</option>
            <option value="Thick Milo">Thick Milo</option>
            <option value="Crema de Letche">Crema de Letche</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1"><br><br>
        <label for="cash">Cash payment:</label>
        <input type="number" name="cash" id="cash" min="0"><br><br>
        <input type="submit" value="Place Order">
    </form>
</body>
</html>