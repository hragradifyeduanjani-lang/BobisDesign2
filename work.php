<?php 
$page = 'work';
$title = 'The Registry | Bobis Entertainment';
include 'header.php';
include 'navbar.php'; 
?>

    <header class="cinema-hero container">
        <div class="reveal">
            <span class="hero-subtitle">Comprehensive Productions Catalog</span>
            <h1 class="text-gold">The Registry.</h1>
        </div>
    </header>

    <section class="section" style="background: var(--bg-base);">
        <div class="container">
            <div class="cards-grid" style="grid-template-columns: repeat(2, 1fr);">
                <article class="card reveal">
                    <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=800" alt="Global Summit">
                    </div>
                    <span class="card-tag">Mumbai Enclave</span>
                    <h3 style="color: var(--accent-gold);">The Next-Gen Luxury Forum</h3>
                </article>
                <article class="card reveal">
                    <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?q=80&w=800" alt="Sonic Arena">
                    </div>
                    <span class="card-tag">Delhi Metro</span>
                    <h3 style="color: var(--accent-gold);">Symphony of Lights</h3>
                </article>
                <article class="card reveal">
                    <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?q=80&w=800" alt="Horizon">
                    </div>
                    <span class="card-tag">Bangalore Core</span>
                    <h3 style="color: var(--accent-gold);">Architectural Bloom</h3>
                </article>
                <article class="card reveal">
                    <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=800" alt="Prive">
                    </div>
                    <span class="card-tag">Global Reach</span>
                    <h3 style="color: var(--accent-gold);">Privé After Hours</h3>
                </article>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
