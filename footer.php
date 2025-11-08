<?php
$allowed_footers = ['footer-centered', 'footer-left', 'footer-minimal'];
$footer_layout = isset($_GET['footer']) && in_array($_GET['footer'], $allowed_footers) ? $_GET['footer'] : 'footer-left';
$footer_file = 'layouts/footers/' . $footer_layout . '.php';
?>
        <?php
        if (file_exists($footer_file)) {
            include($footer_file);
        } else {
            include('layouts/footers/footer-left.php');
        }
        ?>
<!-- Materialize JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
