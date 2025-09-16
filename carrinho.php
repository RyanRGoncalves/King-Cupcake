<?php
include __DIR__.'/includes/header.php';
?>

<link rel="stylesheet" href="css/carrinho.css">
<main>
<?php
$Cupcakes = [];
foreach ($_POST as $cupcake => $qnt) {
    if ($qnt != NULL) {
        $Cupcakes += [$cupcake => $qnt];
    }
}
if (!empty($Cupcakes)) {
    Echo "<p>Você estará comprando:</p>";
} else {
    Echo "<p>Você não colocou nenhum cupcake para comprar.</p>";
}
foreach ($Cupcakes as $cupcake => $qnt) {
    echo "<p>$qnt $cupcake</p>";
}
?>
</main>
<?php
include __DIR__.'/includes/footer.php';
?>