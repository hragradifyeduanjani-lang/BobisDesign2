<?php 
$page = 'contact';
$title = 'Contact | Bobis Entertainment';
include 'header.php';
include 'navbar.php'; 
?>

    <header class="cinema-hero container">
        <div class="reveal">
            <span class="hero-subtitle">Initiate Operations Brief</span>
            <h1 class="text-gold">Let's Talk.</h1>
        </div>
    </header>

    <section class="section bg-surface border-bottom" style="background: var(--bg-surface);">
        <div class="container contact-grid">
            <div class="reveal">
                <span style="font-size: 0.7rem; font-weight: 600; letter-spacing: 0.25em; text-transform: uppercase; color: var(--accent-gold); display: block; margin-bottom: 2rem;">Direct Pipeline</span>
                <p style="margin-bottom: 1.5rem; color: var(--text-secondary); font-weight: 300;">Level 4, Maker Maxity,<br>Bandra Kurla Complex,<br>Mumbai, India</p>
                <p style="color: var(--text-primary); font-weight: 500;">concierge@bobis.in</p>
            </div>

            <div class="reveal">
                <form action="#" method="POST">
                    <div class="form-field">
                        <label for="name">Your Identity</label>
                        <input type="text" id="name" class="cinema-input" required>
                    </div>
                    <div class="form-field">
                        <label for="email">Coordinates (Email)</label>
                        <input type="email" id="email" class="cinema-input" required>
                    </div>
                    <div class="form-field">
                        <label for="message">Production Parameters</label>
                        <textarea id="message" rows="4" class="cinema-input" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Brief</button>
                </form>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>