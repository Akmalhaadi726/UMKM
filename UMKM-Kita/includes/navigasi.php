<div class="nav">
    <img src="assets/images/logo.png" alt="logo">
    <h2>UMKM-Kita</h2>
    <ul>
        <li><a href="index.php?page=home">Beranda</a></li>
        <li><a href="index.php?page=info">Info UMKM</a></li>
        <li><a href="index.php?page=news">Berita</a></li>
        <li><a href="index.php?page=about">Tentang Kami</a></li>
        <li><a href="auth/login.php">Login</a></li>
        <?php if (isset($_SESSION['user_id'])): ?>
            <li><a href="index.php?page=setting">Atur Item</a></li>
            <li id="btn-logout" aria-hidden="true">
                <a href="auth/logout.php">Keluar</a>
            </li>
        <?php else: ?>
            <li id="btn-auth">
                <a href="auth/register.php">Regis</a>
            </li>
        <?php endif; ?>
    </ul>
</div>
