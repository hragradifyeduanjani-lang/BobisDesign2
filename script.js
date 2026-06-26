/* ==========================================================================
   BOBIS — CINEMAFLOW MOTION ENGINE
   ========================================================================== */

(function () {
    'use strict';

    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

/* ── Navbar & Mobile Menu ── */
const initNavbar = () => {
    const navbar = document.querySelector('.navbar');
    if (!navbar) return;

    const onScroll = () => {
        navbar.classList.toggle('scrolled', window.scrollY > 60);
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
};

/* ── Mobile Menu Toggle ── */
const initMobileMenu = () => {
    const toggle = document.querySelector('.nav-toggle');
    const links = document.querySelector('.nav-links');
    if (!toggle || !links) return;

    // Create backdrop element
    const backdrop = document.createElement('div');
    backdrop.className = 'mobile-backdrop';
    document.body.appendChild(backdrop);

    const openMenu = () => {
        links.classList.add('open');
        toggle.classList.add('active');
        backdrop.classList.add('active');
        toggle.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    };

    const closeMenu = () => {
        links.classList.remove('open');
        toggle.classList.remove('active');
        backdrop.classList.remove('active');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    };

    toggle.addEventListener('click', () => {
        if (links.classList.contains('open')) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    backdrop.addEventListener('click', closeMenu);

    // Close on nav link click
    links.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // Close on ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && links.classList.contains('open')) {
            closeMenu();
        }
    });
};

    /* ── Reveal / Stagger Engine ── */
    const initReveal = () => {
        const obs = new IntersectionObserver((entries, observer) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    observer.unobserve(e.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -50px 0px' });

        document.querySelectorAll('.reveal, .stagger').forEach(el => obs.observe(el));
    };

    /* ── Map invalidateSize fix ── */
    const initMapFix = () => {
        const el = document.getElementById('indiaSatelliteEngine');
        if (!el) return;

        const mapObs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting && el._leaflet_map) {
                    setTimeout(() => el._leaflet_map.invalidateSize(), 100);
                    mapObs.unobserve(el);
                }
            });
        }, { threshold: 0.1 });
        mapObs.observe(el);
    };

    /* ── Counter engine ── */
    const initCounters = () => {
        const section = document.querySelector('.stats-section');
        if (!section) return;
        let fired = false;

        const run = () => {
            document.querySelectorAll('.stat-number').forEach(el => {
                const tgt = parseInt(el.dataset.target, 10);
                const suf = el.dataset.suffix || '';
                let cur = 0;
                const dur = reducedMotion ? 0 : 2000;
                const step = tgt / (dur / 16);

                const tick = () => {
                    cur += step;
                    if (cur < tgt) { el.textContent = Math.floor(cur) + suf; requestAnimationFrame(tick); }
                    else el.textContent = tgt + suf;
                };
                if (dur === 0) el.textContent = tgt + suf; else tick();
            });
        };

        new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting && !fired) { run(); fired = true; }
            });
        }, { threshold: 0.3 }).observe(section);
    };

    /* ── Video Lightbox ── */
    const initModal = () => {
        const modal = document.getElementById('videoModalEngine');
        const iframe = document.getElementById('modalIframeNode');
        const btn = document.getElementById('modalCloseTrigger');
        if (!modal || !iframe) return;

        window.openCinematicVideo = (url) => {
            iframe.src = url;
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        };

        const close = () => {
            modal.classList.remove('active');
            iframe.src = '';
            document.body.style.overflow = '';
        };

        btn && btn.addEventListener('click', close);
        document.addEventListener('keydown', e => e.key === 'Escape' && modal.classList.contains('active') && close());
        modal.addEventListener('click', e => e.target === modal && close());
    };

    /* ── Hub DB ── */
    const hubs = {
        mumbai: {
            title: 'Mumbai Flagship Hub',
            coords: '19.0760° N, 72.8777° E',
            today: '<strong>Vogue Luxury Awards 2026</strong><br>Status: Active<br>Venue: Taj Lands End',
            upcoming: '<strong>Tech Conclave</strong><br>July 14, 2026<br>1,200 Attendees',
            previous: '<strong>Cannes India Gala</strong><br>March 2026 — Complete'
        },
        delhi: {
            title: 'Delhi NCR Enclave',
            coords: '28.7041° N, 77.1025° E',
            today: 'No live tracking active today.',
            upcoming: '<strong>Royal Heritage Polo</strong><br>Aug 02, 2026',
            previous: '<strong>Stadium Concert Arena</strong><br>Jan 2026 — Complete'
        },
        bangalore: {
            title: 'Bangalore Logistics',
            coords: '12.9716° N, 77.5946° E',
            today: '<strong>Innovation Matrix</strong><br>Post-Production Wrap',
            upcoming: '<strong>Cyber Sonic Fest</strong><br>Sep 2026 — Blueprint Signed',
            previous: '<strong>Aerospace Banquet</strong><br>Apr 2025 — High Fidelity'
        }
    };

    window._activeHub = null;

    const initMapTabs = () => {
        const tabs = document.querySelectorAll('.map-tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const key = tab.dataset.tab;
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                const box = document.getElementById('mapDynamicTabContent');
                if (!box || !window._activeHub) return;
                box.style.opacity = 0;
                setTimeout(() => {
                    box.innerHTML = '<p style="font-weight: 300; line-height: 1.7; font-size: 0.95rem;">' + hubs[window._activeHub][key] + '</p>';
                    box.style.opacity = 1;
                }, 200);
            });
        });
    };

    window.registerHubInteraction = (id) => {
        const data = hubs[id];
        if (!data) return;
        window._activeHub = id;

        document.getElementById('mapSidebarDefaultView').classList.add('hidden');
        document.getElementById('mapSidebarActiveView').classList.remove('hidden');
        document.getElementById('activeHubTitle').textContent = data.title;
        document.getElementById('activeHubCoords').textContent = data.coords;

        // reset to first tab
        const first = document.querySelector('.map-tab');
        if (first) first.click();
    };

    /* ── Intro Shutter Animation ── */
    const initIntroShutter = () => {
        const shutter = document.getElementById('introShutter');
        if (!shutter) return;

        const openShutter = () => {
            // Using simple CSS transitions for this, but GSAP would be better for complex timelines.
            shutter.style.transition = 'transform 1.2s var(--ease-out-expo), opacity 1.2s var(--ease-out-expo)';
            shutter.style.transform = 'translateY(-100%)';
            shutter.style.opacity = '0.8';
            shutter.addEventListener('transitionend', () => shutter.remove());
        };

        // Open after a delay or on click
        setTimeout(openShutter, 1500); // Auto-open after 1.5s
        shutter.addEventListener('click', openShutter);
    };

    /* ── Hero scroll trophy animation (background page) ── */
    const initHeroScroll = () => {
        const hero = document.getElementById('hero');
        if (!hero) return;

        const overlay = document.querySelector('[data-hero-overlay]');
        const owner = document.querySelector('[data-hero-owner]');
        const trophy = document.querySelector('[data-hero-trophy]');
        if (!overlay || !owner || !trophy) return;

        const clamp01 = (n) => Math.max(0, Math.min(1, n));

        const update = () => {
            const rangeEl = hero.querySelector('.hero-scroll-range');
            const rect = rangeEl ? rangeEl.getBoundingClientRect() : hero.getBoundingClientRect();
            const vh = window.innerHeight || 1;
            const progress = clamp01((vh - rect.top) / (vh * 1.2));

            hero.dataset.heroProgress = progress.toFixed(3);

            const overlayY = -progress * 80;
            overlay.style.transform = `translateY(${overlayY}px)`;
            overlay.style.opacity = String(1 - Math.max(0, (progress - 0.55)) / 0.45);

            owner.style.opacity = String(1 - Math.max(0, progress - 0.35) / 0.65);

            const trophyOpacity = progress > 0.72 ? (progress - 0.72) / 0.28 : 0;
            trophy.style.opacity = String(Math.max(0, Math.min(1, trophyOpacity)));
            trophy.style.transform = `translateY(${(1 - trophyOpacity) * 18}px) scale(${0.95 + trophyOpacity * 0.08})`;
        };

        update();
        window.addEventListener('scroll', () => requestAnimationFrame(update), { passive: true });
        window.addEventListener('resize', () => requestAnimationFrame(update));
    };


    /* ── Bootstrap ── */
    const boot = () => {
        initNavbar();
        initMobileMenu();
        initReveal();
        initMapFix();
        initCounters();
        initModal();
        initMapTabs();
        initIntroShutter();
        // initHeroScroll(); // This can be removed or adapted for the new design
    };

    document.readyState === 'loading' ? document.addEventListener('DOMContentLoaded', boot) : boot();
})();

window.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('entertainmentCanvas');
    if (!canvas) return;
    
    const ctx = canvas.getContext('2d');
    let animationFrameId;

    const mouse = {
        x: undefined,
        y: undefined,
        radius: 100 // Area of interaction
    };

    // Resize canvas dynamically
    function resize() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', resize);
    resize();

    canvas.addEventListener('mousemove', (event) => {
        mouse.x = event.x;
        mouse.y = event.y;
    });

    // Particle Configuration
    const particles = [];
    const particleCount = 60;
    
    for (let i = 0; i < particleCount; i++) {
        particles.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            radius: Math.random() * 1.5 + 0.5,
            speedX: Math.random() * 0.4 - 0.2,
            speedY: Math.random() * -0.5 - 0.1, // Floats upward gently
            alpha: Math.random() * 0.5 + 0.2
        });
    }

    let wavePhase = 0;

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // 1. Draw Entertainment Audio Wave Spectrums
        ctx.beginPath();
        ctx.strokeStyle = 'rgba(200, 165, 90, 0.08)'; // Subtle Gold Line
        ctx.lineWidth = 2;
        
        for (let x = 0; x < canvas.width; x++) {
            // Generates complex overlapping entertainment studio frequencies
            const y = canvas.height * 0.65 + 
                      Math.sin(x * 0.003 + wavePhase) * 45 + 
                      Math.sin(x * 0.01 + wavePhase * 2) * 15;
            if (x === 0) ctx.moveTo(x, y);
            else ctx.lineTo(x, y);
        }
        ctx.stroke();

        ctx.beginPath();
        ctx.strokeStyle = 'rgba(106, 49, 181, 0.05)'; // Deep Purple Contrast Wave
        ctx.lineWidth = 1.5;
        for (let x = 0; x < canvas.width; x++) {
            const y = canvas.height * 0.68 + 
                      Math.cos(x * 0.0025 - wavePhase) * 60 + 
                      Math.sin(x * 0.008 + wavePhase) * 10;
            if (x === 0) ctx.moveTo(x, y);
            else ctx.lineTo(x, y);
        }
        ctx.stroke();

        wavePhase += 0.006; // Control flow/speed of wave motion

        // 2. Animate Ambient Dust Particles (Floating Stars Effect)
        particles.forEach(p => {
            p.x += p.speedX;
            p.y += p.speedY;

            // Loop reset when screen edge boundary hit
            if (p.y < 0) {
                p.y = canvas.height;
                p.x = Math.random() * canvas.width;
            }
            if (p.x < 0 || p.x > canvas.width) p.speedX *= -1;

            // Cursor interaction
            let dx = mouse.x - p.x;
            let dy = mouse.y - p.y;
            let distance = Math.sqrt(dx * dx + dy * dy);
            if (distance < mouse.radius) {
                const forceDirectionX = dx / distance;
                const forceDirectionY = dy / distance;
                const force = (mouse.radius - distance) / mouse.radius;
                p.x -= forceDirectionX * force * 0.5;
                p.y -= forceDirectionY * force * 0.5;
            }

            ctx.beginPath();
            ctx.fillStyle = `rgba(200, 165, 90, ${p.alpha})`;
            ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
            ctx.fill();
        });

        animationFrameId = requestAnimationFrame(animate);
    }

    animate();
});