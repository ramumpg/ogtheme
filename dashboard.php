<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<main>
    <div class="container">
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Mailbox</span>
                        <p>Check your messages.</p>
                    </div>
                    <div class="card-action">
                        <a href="/mailbox/inbox.php">Go to Mailbox</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Contacts</span>
                        <p>Manage your contacts.</p>
                    </div>
                    <div class="card-action">
                        <a href="/contacts/contacts.php">Go to Contacts</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Social</span>
                        <p>View your social feed.</p>
                    </div>
                    <div class="card-action">
                        <a href="/social/dashboard.php">Go to Social</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Ecommerce</span>
                        <p>Browse products.</p>
                    </div>
                    <div class="card-action">
                        <a href="/ecommerce/products.php">Go to Ecommerce</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
