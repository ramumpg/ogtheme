<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<main>
    <div class="container">
        <h1>Register</h1>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" class="validate">
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Register
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
