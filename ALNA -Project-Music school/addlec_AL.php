<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include 'PHP_Nazarov\ALhead.php';?>
    </head>

<body>
<?php include 'PHP_Nazarov\ALheader.php' ; ?>
<h2>Adding </h2>

<form action="seelec_AL.php" method="POST">
<table>
<tr><td></td><td>Enter</td></tr>
<tr><td>Music Class</td><td><input type="text" name="instlec"></td></tr>
<tr><td>Instruments</td><td><input type="text" name="musicinst"></td></tr>
<tr><td>Tutor's name</td><td><input type="text" name="tutor"></td></tr>

<tr><td>Price</td><td><input type="number" name="musiccost"></td></tr>
<tr><td>Amount</td><td><input type="number" name="amount"></td></tr>

<tr><td>Number of hours </td><td><input type="number" name="lechours"></td></tr>


<tr><td></td><td><input type="submit" value="Save"></td></tr>
</table>
</form>



    

<?php include 'PHP_Nazarov\ALnav.php' ; ?>
<footer><?php include 'PHP_Nazarov\ALfooter.php' ; ?></footer>
</body>
</html>