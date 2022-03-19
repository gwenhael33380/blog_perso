<?php
require __DIR__ . '/header.php';
require_once PATH_PROJECT . '/connect.php';

$req = $db->query("SELECT a.id, a.id_user, a.title, a.content, a.created_at,  u.first_name, u.last_name

                    FROM articles a
                    LEFT JOIN users u
                    ON u.id = a.id_user
                    ORDER BY a.created_at DESC
			");

$result = $req->fetchAll();

$i = true;
while ($i <= $result)
    echo $i++;





require PATH_PROJECT . '/views/footer.php';