<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<main>
    <div class="container">
        <h1>Forms</h1>
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
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Textarea</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select>
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Materialize Select</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>Red</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" checked="checked" />
                                <span>Yellow</span>
                            </label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="switch">
                            <label>
                                Off
                                <input type="checkbox">
                                <span class="lever"></span>
                                On
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <p class="range-field">
                            <input type="range" id="test5" min="0" max="100" />
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, {});
    });
</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
