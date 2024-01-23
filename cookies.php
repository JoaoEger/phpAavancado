<?php
//cookies sao utilizados para armanezar informaçoes entre as requisiçoes do usuario, o servidor envia e o navegador armazena

//sintaxe de criação setcookie(nome, valor, duração, caminho)

//criando um cookie de uma hora de validade
setcookie("usuario", "Joao", time() + 3600, '/');

//ler um cookie
echo $_COOKIE['usuario'];

//removerr o cookie
setcookie('usuario', '', time() -3600, '/');