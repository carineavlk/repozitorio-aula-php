<?php 
//Criar uma array de produto
$produtos=[
    "Maçã" => 1.99,
    "Banana" => 2.99,
    "Laranja" => 1.99,
    "Tomate" => 2.99,
];
//Exibir Produtos
echo "Lista de Produtos:";
foreach ($produtos as $produto => $preço){
    echo "$produto . custa R$ . $preço . "; 

    //coloca no c:xampp/htdocs
}
?>