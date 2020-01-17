<link rel="stylesheet" href="../css/styles.css">
<div id="corpoprodutos">
    <?php
        $queryProdutos = mysqli_query("Ligação BD principal", "SELECT designacao, preco, imagen FROM ProdutosServicos WHERE tipo='Produto'");
        while ($aux = mysqli_fetch_assoc($queryProdutos)) { ?>
            <div class="produto">
                <img src="<?php echo $aux['imagem']; ?>">
                <h4><?php echo $aux['designacao']; ?></h4>
                <h5><?php echo $aux['preco']; ?></h5>
            </div>
<?php   } ?>
</div>