<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');

$contacts = [];
if (file_exists('contacts.json')) {
    $contacts = json_decode(file_get_contents('contacts.json'), true);
}
?>

<main>
    <div class="container">
        <h1>Contacts</h1>
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
            <div class="card-panel green">
                <span class="white-text">Contact added successfully!</span>
            </div>
        <?php endif; ?>
        <ul class="collection">
            <?php foreach ($contacts as $contact): ?>
                <li class="collection-item avatar">
                    <i class="material-icons circle">person</i>
                    <span class="title"><?php echo htmlspecialchars($contact['name']); ?></span>
                    <p><?php echo htmlspecialchars($contact['phone']); ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="/contacts/add-contact.php" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
    </div>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
