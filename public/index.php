<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'John Doe', 'email' => 'john@example.com']);
print_r($user);

// $sql = 'select * from users';
// $result = Database::getResultFromQuery($sql);

// while ($row = $result->fetch_assoc()) { 
//   print_r($row);
//   echo '<br>';
// }