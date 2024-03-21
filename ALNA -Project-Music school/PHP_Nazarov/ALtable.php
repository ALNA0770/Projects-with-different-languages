<?php
$i=0;
while ($i < $num) {
$rs->data_seek($i);
$row = $rs->fetch_assoc();
echo "<tr>";
echo "<td>".$row["id"]."</td>";
echo "<td>".$row["instlec"]."</td>";
echo "<td>".$row["musicinst"]."</td>";
echo "<td>".$row["tutor"]."</td>";
echo "<td id=q$i>".$row["amount"]."</td>";
echo "<td id=p$i>".$row["musiccost"]."</td>";
echo "<td>".$row["lechours"]."</td>";
echo "<td id=t$i></td>"; 
echo "</tr>";
$i++;
}
?>