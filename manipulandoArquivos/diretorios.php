<?php

if(is_dir(__DIR__."/../teste/")){
    echo "O diretório existe";
}else{
    echo "Não temos esse diretório";
    //criar o diretorio
    mkdir(__DIR__."/../teste/", 0775);
    
    
}
//remover um diretorio com arquivos
$caminho = __DIR__."/../arquivos/";
$arquivos = scandir($caminho);

foreach($arquivos as $arquivo){
    if($arquivo != '.' && $arquivo != '..'){
        //deleta um arquivo (unlink)
        unlink($caminho."/".$arquivo);
    }
}
rmdir(__DIR__."/../arquivos/");