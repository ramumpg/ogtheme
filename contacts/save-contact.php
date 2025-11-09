<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);

    if (empty($name) || empty($phone)) {
        header('Location: /contacts/add-contact.php?error=1');
        exit;
    }

    $contact = [
        'name' => $name,
        'phone' => $phone
    ];

    $contacts = [];
    if (file_exists('contacts.json')) {
        $contacts = json_decode(file_get_contents('contacts.json'), true);
    }

    $contacts[] = $contact;

    file_put_contents('contacts.json', json_encode($contacts, JSON_PRETTY_PRINT));

    header('Location: /contacts/contacts.php?success=1');
    exit;
} else {
    header('Location: /contacts/add-contact.php');
    exit;
}
