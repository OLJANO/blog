<?php

error_reporting(-1);
ini_set('display_errors', 'On');

require('connect.php');
if (isset($_POST['signup'])) {
 $errors = [];
 if (trim($_POST['username']) == '') {
$errors[] = 'Введите логин';
    }
if ($_POST['email']) == '') {
    $errors[] ='Введите email';
}
 if ($_POST['password1'] == '') {
     $errors[] = 'Введите пароль';
 }
if ($_POST['password2'] == '') {
    $errors[] = 'Введите пароль второй раз']
}
if ($_POST['password'] != $_POST['Введённые пароли не совпадают']) {
    $errors[] = 'ж
}
}второй раз