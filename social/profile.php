<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');

$name = 'User Name';
$bio = 'User Bio';

if (file_exists('profile.json')) {
    $profile = json_decode(file_get_contents('profile.json'), true);
    $name = $profile['name'];
    $bio = $profile['bio'];
}
?>

<main>
    <div class="container">
        <h1>User Profile</h1>
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
            <div class="card-panel green">
                <span class="white-text">Profile updated successfully!</span>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-content">
                <span class="card-title"><?php echo htmlspecialchars($name); ?></span>
                <p><?php echo htmlspecialchars($bio); ?></p>
            </div>
            <div class="card-action">
                <a href="/social/edit-profile.php">Edit Profile</a>
            </div>
        </div>
    </div>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
