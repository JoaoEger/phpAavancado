<?php
//semelhantes aos cookies as sessoes sao utilizadas para armazenar informaçoes, porem ficam salvas no servidor
//sempre devo aativar o gerenciador de sessoes para poder usar sessions, usando session_start();

session_start();

//definindo uma sessão
$_SESSION['usuario'] = 'Joao';

//ler uma sessão
echo $_SESSION['usuario'];

//destruindo uma sessao
unset($_SESSION['usuario']);

//destruir todas as sessoes
session_destroy();

//mudando tempo da session
session_set_cookie_params(3600);