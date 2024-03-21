<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alijon NAzarov_60299_</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS_Nazarov/script.Nazarov.js"></script>
    <link rel="stylesheet" href="..\AN_style.css">
    <title>Order PAge</title>
</head>
<body>
        <h1>Hello Dear costumers. Welcome to our COFFEE&TEA_SHOP webspage.</h1>    
    <header>  

        <h1>Alijon Nazarov; Id:60299</h1>
        <h1>COOFEE&TEA-SHOP site </h1>
        <h3>Dear <span id="AN_visitor">visitor</span> welcome to my website</h3>
        <h5>Website with four HTML pages</h5>
      </header>

<br>
<section>
      <table>
            <tr><td>Type:</td><td><?php echo isset($_POST["Sugar"])?$_POST["Sugar"]:"unknown" ?></td></tr>
            <tr><td>Color:</td><td><?php echo isset($_POST["Out"])?$_POST["Out"]:"unknown" ?></td></tr>
            <tr><td>Item from:</td><td><?php echo isset($_POST["Milk"])?$_POST["Milk"]:"unknown" ?></td></tr>
        </table><br><br>
</section>

<nav>
    <a href="index.Nazarov.php">Checkpoint</a>
    <a href="/PHP_Nazarov/thirdNazarov.php">Info</a>
    <a href="PHP_Nazarov/order.Nazarov.php">Order</a>
    <a href="PHP_Nazarov/Game.Nazarov.php">Game</a>
</nav>

    
<footer>Alijon Nazarov @Vistula2022</footer>

</body>
</html>