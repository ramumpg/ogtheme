<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $bio = $_POST['bio'];

    $profile = [
        'name' => $name,
        'bio' => $bio
    ];

    file_put_contents('profile.json', json_encode($profile, JSON_PRETTY_PRINT));

    header('Location: /social/profile.php?success=1');
    exit;
} else {
    header('Location: /social/edit-profile.php');
    exit;
}
