<?php
session_start();
$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Facture</title>
</head>
<body>

<h2>Facture</h2>

<table border="1">

<tr>
<th>Produit</th>
<th>Quantité</th>
<th>Prix</th>
<th>Total</th>
</tr>

<?php
foreach($_SESSION["panier"] as $p)
{
$t = $p["prix"] * $p["qte"];
$total += $t;

echo "<tr>";
echo "<td>".$p["nom"]."</td>";
echo "<td>".$p["qte"]."</td>";
echo "<td>".$p["prix"]."</td>";
echo "<td>".$t."</td>";
echo "</tr>";
}
?>

<tr>
<td colspan="3">Total à payer</td>
<td><?php echo $total; ?></td>
</tr>

</table>

</body>
</html>