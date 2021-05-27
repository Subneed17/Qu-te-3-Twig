<?php

require_once __DIR__ . '/../config/twig.php';

$email = 'Vincentcabon0107@gmail.com';
echo $twig->render('details.html.twig', ['email' => $email]);