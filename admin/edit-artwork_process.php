<?php

require_once __DIR__ . '/../classes/Artwork.php';

require_once __DIR__ . '/../functions/db.php';

$pdo = getConnection();

$editArtwork = new Artwork($pdo, 'artwork');
$editArtwork->edit($_POST);




if (!$editStmt) {
    header('Location: new-artwork.php');
    exit;
}
header('Location: artwork_registered.php');
    exit;