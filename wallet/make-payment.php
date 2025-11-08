<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<main>
    <div class="container">
        <h1>Make Payment</h1>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="recipient" type="text" class="validate">
                        <label for="recipient">Recipient</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="amount" type="number" class="validate">
                        <label for="amount">Amount</label>
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
