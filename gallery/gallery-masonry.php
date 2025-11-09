<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<main>
    <div class="container">
        <h1>Gallery - Masonry</h1>
        <div class="row">
            <div class="col s12 m6 l4">
                <img class="materialboxed" width="100%" src="https://via.placeholder.com/300x200">
            </div>
            <div class="col s12 m6 l4">
                <img class="materialboxed" width="100%" src="https://via.placeholder.com/300x400">
            </div>
            <div class="col s12 m6 l4">
                <img class="materialboxed" width="100%" src="https://via.placeholder.com/300x300">
            </div>
            <div class="col s12 m6 l4">
                <img class="materialboxed" width="100%" src="https://via.placeholder.com/300x400">
            </div>
            <div class="col s12 m6 l4">
                <img class="materialboxed" width="100%" src="https://via.placeholder.com/300x200">
            </div>
            <div class="col s12 m6 l4">
                <img class="materialboxed" width="100%" src="https://via.placeholder.com/300x300">
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.materialboxed');
        var instances = M.Materialbox.init(elems, {});
    });
</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
