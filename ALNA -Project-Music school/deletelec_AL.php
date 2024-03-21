<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include 'PHP_Nazarov\ALhead.php'; ?>

    <?php include 'PHP_Nazarov\ALdatabase.php';?>

    <?php include 'PHP_Nazarov\ALresult.php';?>
    </head>

<body>
<?php include 'PHP_Nazarov\ALheader.php' ; ?>

<h2>Delete Page </h2>

<form action="seelec_AL.php" method="POST">
        <select name="delete">
            <?php
            $i=0;
            while ($i< $num) {
            $rs->data_seek($i);
            $row = $rs->fetch_assoc();
                $option = "<option value=".$row["id"].">";
                $option .= $row["instlec"].' - ';
                $option .= $row["musicinst"].' - ';
                $option .= $row["tutor"].' - ';
                $option .= $row["musiccost"].' - ';
                $option .= $row["lechours"].' - ';
                $option .= "</option>";
            echo $option;
            $i++;
            }
            ?>
        </select>
<input type="submit" value="Delete">
</form>



    

<?php include 'PHP_Nazarov\ALnav.php' ; ?>
<footer><?php include 'PHP_Nazarov\ALfooter.php' ; ?></footer>
</body>
</html>