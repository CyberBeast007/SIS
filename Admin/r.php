<?php

function generateRandomString($length = 12) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&*', ceil($length/strlen($x)) )),1,$length);
}

echo  generateRandomString();