<?php
include __DIR__.'/includes/header.php';
?>
    <div class="container">
        <h2>Fale Conosco</h2>

        <?php
        // Dados de contato (você pode puxar isso de um banco de dados futuramente)
        $telefone = "(11) 98765-4321";
        $email = "KingCake@gmail.com";
        $endereco = "Rua Marajoara, 123 - Bairro Centro, São Paulo - SP, CEP 01234-567";
        ?>

        <div class="contato-item">
            <strong>📞 Telefone:</strong>
            <?php echo $telefone; ?>
        </div>

        <div class="contato-item">
            <strong>📧 E-mail:</strong>
            <?php echo $email; ?>
        </div>

        <div class="contato-item">
            <strong>📍 Endereço:</strong>
            <?php echo $endereco; ?>
        </div>
    </div>

<?php
include __DIR__.'/includes/footer.php';
?>