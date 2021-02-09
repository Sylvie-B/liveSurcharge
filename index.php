<?php

require './classes/utilisateur.php';
require './classes/admin.php';
 // user
$user = new utilisateur("Deterre");
echo $user->generateCode();

echo "<br><br>";

// admin
$admin = new admin('Doe');
echo $admin->generateCode();

$admin->display();
