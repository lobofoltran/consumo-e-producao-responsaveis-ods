<?php

// buscar o template com o twig e renderizar
// $twig esta sendo injetado e o metodo render espera o arquivo e array de valores.
$template = $twig->render('login.html', []);
echo $template;
