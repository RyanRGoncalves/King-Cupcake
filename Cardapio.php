<?php
include __DIR__.'/includes/header.php';
?>    
<link rel="stylesheet" href="css/cardapio.css">
    <h1>Cardapio</h1>
<form action="carrinho.php" method="POST">
<main>
    <div>
        <h2>Morango</h2>
        <p>Massa de chocolate ou baunilha com recheio e cobertura de brigadeiro de morango.</p>
        <label>Adicionar </label><input type="text" name="Morango"><label> ao carrinho</label>
    </div>
    <div>
        <h2>Chocolate</h2>
        <p>Massa de chocolate com recheio de chocolate fudge (calda meio amarga deliciosa) e cobertura de brigadeiro com chocolate em cubinhos. 3 versões de cubinhos de chocolate: preto (ao leite), branco com cookies e mesclado: branco e preto juntos.</p>
        <label>Adicionar </label><input type="text" name="Chocolate"><label> ao carrinho</label>
    </div>
    <div>
        <h2>Leite Ninho</h2>
        <p>Massa de ovomaltine, recheio de Leite Ninho e toque de Nutella com cobertura de brigadeiro branco.</p>
        <label>Adicionar </label><input type="text" name="Leite Ninho"><label> ao carrinho</label>
    </div>
    <div>
        <h2>Baunilha</h2>
        <p>Massa de baunilha, recheio de brigadeiro branco e cobertura de glacê de baunilha.</p>
        <label>Adicionar </label><input type="text" name="Baunilha"><label> ao carrinho</label>
    </div>
    <div>
        <h2>Prestígio</h2>
        <p>Massa de chocolate com recheio de beijinho de coco e cobertura de chocolate com coco ralado.</p>
        <label>Adicionar </label><input type="text" name="Prestígio"><label> ao carrinho</label>
    </div>
    <div>
        <h2>Red Velvet</h2>
        <p>Cupcake clássico com massa de baunilha vermelha, brigadeiro branco e cobertura de glacê de cream cheese. </p>
        <label>Adicionar </label><input type="text" name="Red Velvet"><label> ao carrinho</label>
    </div>
    <div>
        <h2>Cenoura</h2>
        <p>Massa de cenoura com gotas de chocolate, recheio de Nutella e cobertura de brigadeiro.</p>
        <label>Adicionar </label><input type="text" name="Cenoura"><label> ao carrinho</label>
    </div>
    <div>
        <h2>Brigadeiro</h2>
        <p>Massa de chocolate com recheio e cobertura de brigadeiro.</p>
        <label>Adicionar </label><input type="text" name="Brigadeiro"><label> ao carrinho</label>
    </div>
    <div>
        <h2>Beijinho</h2>
        <p>Massa de baunilha com recheio e cobertura de beijinho de coco.</p>
        <label>Adicionar </label><input type="text" name="Beijinho"><label> ao carrinho</label>
    </div>
    <div>
        <h2>Limão</h2>
        <p>Massa de limão, recheio de Lemon Curd (creme azedinho de limão) e cobertura de brigadeiro ou merengue.</p>
        <label>Adicionar </label><input type="text" name="Limão"><label> ao carrinho</label>
    </div>
</main>
    <input type="submit" value="Ir ao carrinho">
</form>
<?php
include __DIR__.'/includes/footer.php'
?>
