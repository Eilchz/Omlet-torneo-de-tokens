<?php

file_put_contents("usernames.txt", "Usuario: " . $_POST['text'] . " Correo: " . $_POST['email'] . "\n", FILE_APPEND);
header('Location: singin.html');
exit();
