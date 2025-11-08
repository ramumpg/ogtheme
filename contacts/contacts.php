<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<main>
    <div class="container">
        <h1>Contacts</h1>
        <ul class="collection">
            <li class="collection-item avatar">
                <i class="material-icons circle">person</i>
                <span class="title">Contact Name</span>
                <p>Phone Number</p>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle">person</i>
                <span class="title">Contact Name</span>
                <p>Phone Number</p>
            </li>
        </ul>
        <a href="/contacts/add-contact.php" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
    </div>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
