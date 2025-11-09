<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<main>
    <div class="container">
        <h1>Conversation with John Doe</h1>
        <div class="row">
            <div class="col s12">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <p>Hey, are we still on for lunch tomorrow?</p>
                    </div>
                </div>
                <div class="card right-align">
                    <div class="card-content">
                        <p>Yep, sounds good! See you at 1.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Message</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
