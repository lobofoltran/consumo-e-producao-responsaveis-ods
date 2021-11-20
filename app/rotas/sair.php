<?php

session_start();
session_unset();
session_destroy();

echo $twig->render('inicio.html', []);