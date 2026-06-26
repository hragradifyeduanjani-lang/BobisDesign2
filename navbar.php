<nav class="navbar">
        <div class="nav-container container">
        <div class="nav-compact-right" aria-hidden="true"></div>
        
       <a href="home.php" class="logo">
            <video autoplay muted loop playsinline >
                <source src="logo.mp4" type="video/mp4">
                LOGO
            </video>
        </a>
        <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
        <div class="nav-links">
            <a href="index.php" class="<?php echo ($page == 'home') ? 'active' : ''; ?>">Home</a>
            <a href="about.php" class="<?php echo ($page == 'about') ? 'active' : ''; ?>">About</a>
            <a href="services.php" class="<?php echo ($page == 'services') ? 'active' : ''; ?>">Services</a>
            <a href="work.php" class="<?php echo ($page == 'work') ? 'active' : ''; ?>">Work</a>
            <a href="gallery.php" class="<?php echo ($page == 'gallery') ? 'active' : ''; ?>">Gallery</a>
            <a href="contact.php" class="<?php echo ($page == 'contact') ? 'active' : ''; ?>">Contact</a>
            <a href="contact.php" class="btn btn-primary">Let's Talk</a>
        </div>
    </div>
</nav>