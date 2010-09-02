<?php

define('MANAGE_ADSENSE_PATH', dirname(dirname( __FILE__ )));

if(! file_exists(MANAGE_ADSENSE_PATH."/content")){
    @mkdir(MANAGE_ADSENSE_PATH."/content");
    @chmod(MANAGE_ADSENSE_PATH."/content", 0777);
}

if(! file_exists(MANAGE_ADSENSE_PATH."/content/adsense")){
    @mkdir(MANAGE_ADSENSE_PATH."/content/adsense");
    @chmod(MANAGE_ADSENSE_PATH."/content/adsense", 0777);
}



// Bloco 1
if(! empty($_POST["txtBlock1"])){
    if(! @file_put_contents(MANAGE_ADSENSE_PATH."/content/adsense/block1.txt", $_POST["txtBlock1"])){
        print("Erro ao gravar o bloco número 1 para o arquivo no servidor.");
        exit();
    }
}else{
    if(file_exists(MANAGE_ADSENSE_PATH."/content/adsense/block1.txt")){
        @unlink(MANAGE_ADSENSE_PATH."/content/adsense/block1.txt");
    }
}


// Bloco 2
if(! empty($_POST["txtBlock2"])){
    if(! @file_put_contents(MANAGE_ADSENSE_PATH."/content/adsense/block2.txt", "".$_POST["txtBlock2"])){
        print("Erro ao gravar o bloco número 2 para o arquivo no servidor.");
        exit();
    }
}else{
    if(file_exists(MANAGE_ADSENSE_PATH."/content/adsense/block2.txt")){
        @unlink(MANAGE_ADSENSE_PATH."/content/adsense/block2.txt");
    }
}


// Bloco 3
if(! empty($_POST["txtBlock3"])){
    if(! @file_put_contents(MANAGE_ADSENSE_PATH."/content/adsense/block3.txt", "".$_POST["txtBlock3"])){
        print("Erro ao gravar o bloco número 3 para o arquivo no servidor.");
        exit();
    }
}else{
    if(file_exists(MANAGE_ADSENSE_PATH."/content/adsense/block3.txt")){
        @unlink(MANAGE_ADSENSE_PATH."/content/adsense/block3.txt");
    }
}


// Bloco 4
if(! empty($_POST["txtBlock4"])){
    if(! @file_put_contents(MANAGE_ADSENSE_PATH."/content/adsense/block4.txt", "".$_POST["txtBlock4"])){
        print("Erro ao gravar o bloco número 4 para o arquivo no servidor.");
        exit();
    }
}else{
    if(file_exists(MANAGE_ADSENSE_PATH."/content/adsense/block4.txt")){
        @unlink(MANAGE_ADSENSE_PATH."/content/adsense/block4.txt");
    }
}


// Bloco 5
if(! empty($_POST["txtBlock5"])){
    if(! @file_put_contents(MANAGE_ADSENSE_PATH."/content/adsense/block5.txt", "".$_POST["txtBlock5"])){
        print("Erro ao gravar o bloco número 5 para o arquivo no servidor.");
        exit();
    }
}else{
    if(file_exists(MANAGE_ADSENSE_PATH."/content/adsense/block5.txt")){
        @unlink(MANAGE_ADSENSE_PATH."/content/adsense/block5.txt");
    }
}



print("Blocos de banners gravados com sucesso !!!");

?>
