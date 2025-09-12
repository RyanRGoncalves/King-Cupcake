<?php
include __DIR__.'/includes/header.php';
?>
<div class="container">
    
 <h1 style="color: white; font-size: 40px">Contate-nos</h1>
 <?php
 $telefone = "(11) 98765-4321";
 $email = "KingCake@gmail.com";
 $endereco = "Rua Marajoara, 123 - Bairro Centro, São Paulo - SP, CEP 01234-567";
 ?>  
    <form method="post">
    <input type="text" name="nome" placeholder="Nome" style="width: 800px; height: 20px"><br>
    <input type="email" name="email" placeholder="Email" style="width: 800px; height: 20px"><br>
    <input type="text" name="descricao" placeholder="Descrição" style="width: 800px; height: 300px"><br>
    <input type="submit" style="width: 100px">
    </form><br>
    
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