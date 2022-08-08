<?php 
    $infos = array(
        0 => array('id'=> '1', 'nome'=> 'Frango Xadrez','tamanho'=>'Tamanho medio','preco' => 'R$20', 'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSs-Gp1i19fcmfmvdgEzS8IXBMo97V8l3ArA&usqp=CAU', 'ingredientes' => 'frango, óleo de gergelim, pimentão, salsão e amendoim'),
        1 => array('id'=> '2', 'nome'=> 'Bife á Parmegiana','tamanho'=>'Tamanho medio','preco' => 'R$20', 'imagem' => 'https://www.bellaparmegiana.com.br/public/chamadas/promocao_quarta.png', 'ingredientes' => 'bife de patinho, molho de tomate e queijo mussarela'),
        2 => array('id'=> '3', 'nome'=> 'Lasanha','tamanho'=>'Tamanho medio','preco' => 'R$20', 'imagem' => 'https://alimentardistribuidora.com.br/wp-content/uploads/2021/08/Design-sem-nome.png', 'ingredientes' => 'Receita clássica de lasanha, com molho branco e bolonhesa'),
        3 => array('id'=> '4', 'nome'=> 'Salada','tamanho'=>'Tamanho medio','preco' => 'R$20', 'imagem' => 'https://i.pinimg.com/736x/6b/d2/88/6bd2888f62e3f42f3c078163f5224cc8.jpg', 'ingredientes' => 'Salada de alface, acelga, pepino, cenoura e tomate cereja'),
        4 => array('id'=> '5', 'nome'=> 'Espaguete à bolonhesa','tamanho'=>'Tamanho medio','preco' => 'R$20', 'imagem' => 'https://img.freepik.com/fotos-gratis/comida-estilo-de-vida-spaghetti-foodie-gastronomia_1350-47.jpg?w=2000', 'ingredientes' => 'Espaguete Italiano com tomate e manjericão'),
        5 => array('id'=> '6', 'nome'=> 'Filé de peixe assado','tamanho'=>'Tamanho medio','preco' => 'R$20', 'imagem' => 'https://static.vecteezy.com/ti/fotos-gratis/p1/4850904-file-de-peixe-frito-fatiado-para-bife-ou-salada-cozinha-comida-com-ervas-especiarias-alecrim-e-limao-file-tilapia-peixe-crocante-crocante-servido-no-prato-branco-gr%C3%A1tis-foto.JPG', 'ingredientes' => 'Peixe Assado com Molho de Limão')
    );


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Tangerine&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logodiv">
            <img class="logo" src="img.png" alt="logo image">
                <div>
                    <p>MARMITAS </p>
                    <P>DONA DIRCE</P>
                </div>
                
        </div>
    
    
        <nav class="buttons">
            <a href="#"><button>Pagina</button></a>
            <a href="#"></a><button>Sujestões</button></a>
            <a href="#"></a><button>Contato</button></a>
        </nav>
        
    </header>
    
    <main>
        <section class="section1">
            <h1>Venha experimentar as melhores Marmitas por um preço acessivel. </h1>
        </section>
        <section class="section2">
            <div class="itens">
            <?php
                
                foreach($infos as $key => $value){
            ?>
            
                
                <a href="pagina2.php?id=<?=$value['id'];?>">
                    <div class="item">
                            <img src="<?=$value['imagem'];?>" alt="">
                            <p ><?=$value['nome'];?></p>
                    </div>        
                </a>
            
            <?php 
                    }
            ?>
            </div>
        </section>
    </main>
    <footer>
        <div class="socialMedia">
            <a href="#"><p>Facebook</p></a>
            <a href="#"><p>Instagram</p></a>
            <a href="#"><p>WhatsApp</p></a>
            <a href="#"><p>Twitter</p></a>
        </div>
    </footer>
    <footer>
        <p>Desenvolvido por Thiago Carvalho dos Santos</p>
        <p>Ra: 21146885-5</p>
    </footer>
</body>
</html>