<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alijon NAzarov_60299_</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS_Nazarov/script.Nazarov.js"></script>
    <link rel="stylesheet" href="..\AN_style.css">
    <title>ThirdNazarov</title>
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
            <tr><td>Type:</td><td><?php echo isset($_POST["AN_type"])?$_POST["AN_type"]:"unknown" ?></td></tr>
            <tr><td>Color:</td><td><?php echo isset($_POST["AN_color"])?$_POST["AN_color"]:"unknown" ?></td></tr>
            <tr><td>Item from:</td><td><?php echo isset($_POST["county"])?$_POST["county"]:"unknown" ?></td></tr>
        </table><br><br>


      <form action="order.Nazarov.php" method="post">
        <table>
            <tr><td>With Sugar</td><td> <select name="Sugar" >
             <option value="Copucino">99</option>   
            <option value="Coffee">02</option>
            <option value="Espresso">29</option></select> </td></tr>
            
            <tr><td>Without Sugar</td><td> <select name="Out" >
             <option value="Tea">60</option>   
            <option value="Coffee">02</option></tr>

            <tr><td>With milk</td><td> <select name="Milk" >
             <option value="Copucino">99</option>   
            <option value="Coffee">02</option></td></tr>

            <br>
            <td> <button type="submit" value="Submit">Submit </button> </td>
            </form>
        </table>
<br><br>
    <table><tr><td>60</td><td>Tea</td><td>UK</td></tr>
    <tr><td>02</td> <td>Coffee</td> <td>Poland</td></tr>
    <tr><td>29</td><td>Espresso</td><td>USA</td></tr>
    <tr><td>99</td><td>Copucino</td><td>Poland</td></tr>
    </table>
    <br>
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