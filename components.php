<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<main>
    <div class="container">
        <h1>UI Components</h1>

        <h2>Buttons</h2>
        <a class="waves-effect waves-light btn">button</a>
        <a class="waves-effect waves-light btn-large">button</a>
        <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>

        <h2>Cards</h2>
        <div class="row">
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Card Title</span>
                        <p>I am a very simple card. I am good at containing small bits of information.</p>
                    </div>
                </div>
            </div>
        </div>

        <h2>Forms</h2>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
