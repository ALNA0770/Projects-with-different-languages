<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include 'PHP_Nazarov\ALhead.php'; ?>
    <?php include 'PHP_Nazarov\ALdatabase.php';?>
    <script src="JS_Nazarov\javascript_AL.js"></script>
    <?php include 'PHP_Nazarov\Alnew.php';?>
    <?php include 'PHP_Nazarov\ALdelete.php';?>
    <?php include 'PHP_Nazarov\ALresult.php';?>
    </head>

<body>
<?php include 'PHP_Nazarov\ALheader.php' ; ?>
<h2>Table</h2>
<table>
<tr> <th>ID</th>    <th>Class</th>     <th>Instruments</th> <th>Tutor</th>  <th>Amount</th>  <th>Price</th>    <th>Hours</th>  <th>Total price</th></tr>
<?php include 'PHP_Nazarov\ALtable.php' ; ?>
<tr> <td></td> <td></td> <td></td> <td></td> <td><button onclick="totalCost(<?php echo $num?>)">Total cost</button></td><td id="totalCost"></td></tr>
</table>



    

<?php include 'PHP_Nazarov\ALnav.php' ; ?>
<footer><?php include 'PHP_Nazarov\ALfooter.php' ; ?></footer>
</body>
</html>