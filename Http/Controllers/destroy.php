<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

if (isset($_POST['delete'])) {
    $ids = $_POST['delete'];
    foreach ($ids as $id) {
        $db->query('DELETE FROM products WHERE id = :id', [
            'id' => $id
        ]);
    }
}

header('Location: /');
exit();