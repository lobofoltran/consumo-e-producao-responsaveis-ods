<?php

// SAÍDA DO CLIENTE
echo $twig->render('bemVindo.html', [
    'titulo' => 'Seja muito bem vindo doador !!! ',
    'informacao' => 'Muito obrigado por contribuir com o nosso projeto, muitas pessoas agradecem !!!'
]);