<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<main>
    <div class="container">
        <h1>Inbox</h1>
        <ul class="collection">
            <li class="collection-item avatar">
                <i class="material-icons circle green">person</i>
                <span class="title">John Doe</span>
                <p>Hey, are we still on for lunch tomorrow?</p>
                <a href="/chat/conversation.php" class="secondary-content"><i class="material-icons">chat</i></a>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle red">person</i>
                <span class="title">Jane Smith</span>
                <p>Just wanted to follow up on that report.</p>
                <a href="/chat/conversation.php" class="secondary-content"><i class="material-icons">chat</i></a>
            </li>
        </ul>
    </div>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
