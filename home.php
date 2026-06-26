<?php 
$page = 'main-home'; // Changed to avoid conflict with intro page's 'home'
$title = 'Bobis Entertainment | Premium Cinematic Experiences';
include 'header.php';
include 'navbar.php'; 
?>

<!-- ──────────────────────────────────────────────
         INTRO SHUTTER
    ────────────────────────────────────────────── -->
<div class="intro-layer" id="introShutter">
    <div class="intro-shutter-content">
        <div class="intro-shutter-logo">Bobis</div>
        <p class="text-secondary">Premium Cinematic Experiences</p>
    </div>
</div>

<!-- ──────────────────────────────────────────────
         CINEMATIC HERO (background page)
    ────────────────────────────────────────────── -->
<header class="hero hero-anim" id="hero">
    <div class="hero-bg">
        <!-- A high-quality background image or video would go here -->
        <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=1600" alt="Luxury Event" style="width:100%; height:100%; object-fit:cover; opacity:0.9;">
        <div class="hero-bg-scrim"></div>
    </div>
        <div class="container">
            <div class="hero-content reveal hero-overlay" data-hero-overlay>
                <span class="hero-subtitle">Global Entertainment Architecture</span>
                <h1 class="hero-title">Crafting Cinematic<br>Moments.</h1>
                <p class="hero-desc">Premium event production for the world's most discerning brands — immersive, precise, and unforgettable.</p>
                <div class="hero-actions">
                    <a href="#highlights" class="btn btn-primary">Watch Now</a>
                    <a href="#contact" class="btn btn-ghost">Start a Project</a>
                </div>
            </div>
        </div>
    </header>

    <!-- ──────────────────────────────────────────────
         BRAND MARQUEE
    ────────────────────────────────────────────── -->
    <div class="marquee">
        <div class="marquee-track">
            <span class="marquee-item">Mercedes-Benz</span>
            <span class="marquee-item">Vogue India</span>
            <span class="marquee-item">Louis Vuitton</span>
            <span class="marquee-item">Google Enterprise</span>
            <span class="marquee-item">Samsung</span>
            <span class="marquee-item">Ritz-Carlton</span>
            <!-- duplicate for loop -->
            <span class="marquee-item">Mercedes-Benz</span>
            <span class="marquee-item">Vogue India</span>
            <span class="marquee-item">Louis Vuitton</span>
            <span class="marquee-item">Google Enterprise</span>
            <span class="marquee-item">Samsung</span>
            <span class="marquee-item">Ritz-Carlton</span>
        </div>
    </div>

    <!-- ──────────────────────────────────────────────
         SHOWCASE / CAPABILITIES
    ────────────────────────────────────────────── -->
    <section id="services" class="section">
        <div class="container">
            <div class="section-intro reveal">
                <span class="hero-subtitle">What We Do</span>
                <h2>Architectural Spheres</h2>
                <p>End-to-end production systems engineered for impact — concept, design, execution.</p>
            </div>


            <div class="cards-grid stagger">
                <article class="card">
                    <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=600" alt="Corporate Galas">
                    </div>
                    <span class="card-tag">Corporate</span>
                    <h3>Executive Galas</h3>
                    <p>Flawless high-level summits and brand activations executed at scale with precision protocol.</p>
                </article>
                <article class="card">
                    <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1540574467063-178a50c2df87?q=80&w=600" alt="Celebrity Management">
                    </div>
                    <span class="card-tag">Talent</span>
                    <h3>Celebrity Protocol</h3>
                    <p>Elite profile handling, premium logistics, and high-security protection layers for A-list talent.</p>
                </article>
                <article class="card">
                    <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?q=80&w=600" alt="Live Concerts">
                    </div>
                    <span class="card-tag">Live</span>
                    <h3>Stadium Concerts</h3>
                    <p>Massive arena transformations with immersive spatial audio, light arrays, and spectacle engineering.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- ──────────────────────────────────────────────
         LIVE OPERATIONAL MAP
    ────────────────────────────────────────────── -->
    <section id="work" class="map-section">
        <div class="container">
            <div class="section-intro reveal">
                <span class="hero-subtitle">Live Operations</span>
                <h2>Dynamic Performance<br>Map</h2>
                <p>Explore our active enclaves across the subcontinent — click a node for live execution data.</p>
            </div>

            <div class="map-grid">
                <div id="indiaSatelliteEngine" class="reveal"></div>

                <aside class="map-sidebar reveal">
                    <div id="mapSidebarDefaultView" class="map-sidebar-default">
                        <p>Select any gold operational node on the map to view live execution registries for that hub.</p>
                    </div>

                    <div id="mapSidebarActiveView" class="hidden">
                        <h3 id="activeHubTitle">Mumbai</h3>
                        <span id="activeHubCoords" class="map-coords">19.0760° N, 72.8777° E</span>

                        <div class="map-tabs" id="mapTabNav">
                            <button class="map-tab active" data-tab="today">Live Execution</button>
                            <button class="map-tab" data-tab="upcoming">Upcoming</button>
                            <button class="map-tab" data-tab="previous">Archived</button>
                        </div>

                        <div id="mapDynamicTabContent"></div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- ──────────────────────────────────────────────
         ALTERNATING SHOWCASE STORIES
    ────────────────────────────────────────────── -->
    <section class="section">
        <div class="container">

            <div class="split-row reveal">
                <figure class="split-media">
                    <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?q=80&w=800" alt="Grand Horizon Arena Gala">
                </figure>
                <div class="split-content">
                    <span class="meta-tag">Case Study 01</span>
                    <h3>The Grand Horizon Arena Gala</h3>
                    <p>Immersive architectural space built for international tech conglomerates. Three thousand executives in a custom spatial environment.</p>
                    <a href="#contact" class="btn btn-ghost">View Specs</a>
                </div>
            </div>

            <div class="split-row reverse reveal">
                <figure class="split-media">
                    <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?q=80&w=800" alt="Metropolitan Sonic Festival">
                </figure>
                <div class="split-content">
                    <span class="meta-tag">Case Study 02</span>
                    <h3>Metropolitan Sonic Festival</h3>
                    <p>Multi-axis delay array deployments for international electronic artists in stadium environments.</p>
                    <a href="#contact" class="btn btn-ghost">View Specs</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ──────────────────────────────────────────────
         VIDEO HIGHLIGHTS MATRIX
    ────────────────────────────────────────────── -->
    <section id="highlights" class="section border-top border-bottom">
        <div class="container">
            <div class="section-intro reveal">
                <span class="hero-subtitle">Kinetic Recordings</span>
                <h2>Cinematic Highlights</h2>
            </div>

            <div class="video-grid">
                <div class="video-card video-card-main reveal" onclick="openCinematicVideo('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                    <div class="video-thumb" style="background-image: url('https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=900');">
                        <div class="play-circle">
                            <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="video-card-title">Global Flagship Showcase Reel (2026)</div>
                </div>

                <div class="video-side-list stagger">
                    <div class="video-side-item" onclick="openCinematicVideo('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                        <div class="video-side-thumb" style="background-image: url('https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?q=80&w=300');"></div>
                        <div>
                            <h5>Luxury Fashion Runway</h5>
                            <p>Mumbai Production</p>
                        </div>
                    </div>
                    <div class="video-side-item" onclick="openCinematicVideo('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                        <div class="video-side-thumb" style="background-image: url('https://images.unsplash.com/photo-1540574467063-178a50c2df87?q=80&w=300');"></div>
                        <div>
                            <h5>Elite Celebrity Enclave</h5>
                            <p>Delhi Protocols</p>
                        </div>
                    </div>
                    <div class="video-side-item" onclick="openCinematicVideo('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                        <div class="video-side-thumb" style="background-image: url('https://images.unsplash.com/photo-1514525253161-7a46d19cd819?q=80&w=300');"></div>
                        <div>
                            <h5>Stadium Experience</h5>
                            <p>Bangalore Core</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ──────────────────────────────────────────────
         EDITORIAL FOUNDER ARCHETYPE
    ────────────────────────────────────────────── -->
    <section id="about" class="section">
        <div class="container founder-section">
            <div class="founder-media reveal">
                <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=800" alt="Founder">
            </div>
            <div class="founder-content reveal">
                <span class="meta-overline">The Foundation Directive</span>
                <blockquote>"We don't just execute events. Bobis Entertainment architects rare, unrepeatable milestones in sound and space."</blockquote>
                <div class="founder-name">Harsh Bose</div>
                <div class="founder-role">Chief Visionary & Founder</div>
            </div>
        </div>
    </section>

    <!-- ──────────────────────────────────────────────
         MASONRY GALLERY PREVIEW MATRIX
    ────────────────────────────────────────────── -->
    <section id="gallery" class="section">
        <div class="container">
            <div class="section-intro reveal">
                <span class="hero-subtitle">Visual Archives</span>
                <h2>The Editorial<br>Gallery</h2>
            </div>
            <div class="masonry stagger">
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?q=80&w=600" alt="Gala">
                    <div class="masonry-overlay">View Event</div>
                </div>
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?q=80&w=600" alt="Gala">
                    <div class="masonry-overlay">View Event</div>
                </div>
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?q=80&w=600" alt="Gala">
                    <div class="masonry-overlay">View Event</div>
                </div>
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?q=80&w=600" alt="Gala">
                    <div class="masonry-overlay">View Event</div>
                </div>
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=600" alt="Gala">
                    <div class="masonry-overlay">View Event</div>
                </div>
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=600" alt="Gala">
                    <div class="masonry-overlay">View Event</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ──────────────────────────────────────────────
         CONTACT CTA
    ────────────────────────────────────────────── -->

    <section id="contact" class="cta-banner reveal">
        <div class="container">
            <h2>Let's Build<br>Something Iconic.</h2>
            <p>Ready to create your next landmark event?</p>
            <div class="cta-buttons">
                <a href="https://wa.me/919999999999" class="btn btn-gold" target="_blank">Start via WhatsApp</a>
                <a href="tel:+919999999999" class="btn btn-ghost">Direct Call</a>
                <a href="mailto:concierge@bobis.in" class="btn btn-ghost">Email Brief</a>
            </div>
        </div>
    </section>

    <!-- ──────────────────────────────────────────────
         FOOTER
    ────────────────────────────────────────────── -->
<?php include 'footer.php'; ?>
    <script>
        // Leaflet initialization
        if (document.getElementById('indiaSatelliteEngine')) {
            const map = L.map('indiaSatelliteEngine', { scrollWheelZoom: false }).setView([22.5937, 78.9629], 5);

            L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{y}/{x}.png', {
                attribution: '&copy; CartoDB'
            }).addTo(map);

            const hubs = [
                { id: 'mumbai', lat: 19.0760, lng: 72.8777 },
                { id: 'delhi', lat: 28.7041, lng: 77.1025 },
                { id: 'bangalore', lat: 12.9716, lng: 77.5946 }
            ];

            hubs.forEach(hub => {
                const icon = L.divIcon({ className: 'luxury-hub-pin', iconSize: [16, 16], iconAnchor: [8, 8] });
                L.marker([hub.lat, hub.lng], { icon }).addTo(map).on('click', () => {
                    if (typeof registerHubInteraction === 'function') registerHubInteraction(hub.id);
                });
            });

            document.getElementById('indiaSatelliteEngine')._leaflet_map = map;
        }
    </script>
