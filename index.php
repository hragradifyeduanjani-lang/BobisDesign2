<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bobis — Intro</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
  <style>
    :root { --navbar-safe-offset: 110px; }

    body { background: var(--bg-base); }

    /* Fullscreen intro layer */
    .intro-page {
      position: relative;
      min-height: 100vh;
      overflow: hidden;
    }

    /* Create scroll distance (driver) */
    .intro-scroll-driver {
      height: 140vh;
      margin-top: 100vh;
    }

    /* Trophy badge */
    .intro-trophy-badge {
      position: fixed;
      right: calc(2rem + 10px);
      top: 50%;
      transform: translateY(-50%) scale(0.65);
      opacity: 0;
      pointer-events: none;
      z-index: 9999;

      width: 34px;
      height: 34px;
      border-radius: 999px;
      background: rgba(20,20,20,0.75);
      border: 1px solid rgba(255,255,255,0.06);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      display: grid;
      place-items: center;
    }

    .trophy-svg { width: 18px; height: 18px; fill: var(--accent-gold); }


    .intro-page-bg {
      position: fixed;
      inset: 0;
      z-index: 0;
      pointer-events: none;
      overflow: hidden; /* Ensures oversized iframe content is clipped */
    }

    .intro-page-bg iframe {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 110%; /* Slightly larger than container */
      height: 120%; /* Slightly larger than container */
      transform: translate(-50%, -50%);
      border: 0;
      pointer-events: none;
      filter: saturate(110%) contrast(110%);
    }

    .intro-page-scrim {
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(10,10,10,0.4) 0%, rgba(10,10,10,0.8) 70%, #0A0A0A 100%);
    }

    .intro-page-content {
      position: relative;
      z-index: 2;
      min-height: 100vh;
      padding-top: var(--navbar-safe-offset);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding-left: 1rem;
      padding-right: 1rem;
    }

    .intro-logo {
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--accent-gold);
      font-size: clamp(1.6rem, 3vw, 2.2rem);
      margin-bottom: 1.25rem;
      text-shadow: 0 18px 60px rgba(0,0,0,0.55);
    }

    .intro-headline {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2.5rem, 6vw, 4.5rem);
      font-weight: 500;
      line-height: 1.2;
      color: var(--text-primary);
      max-width: 800px;
      margin: 1rem auto 1.5rem;
      letter-spacing: 0.01em;
    }

    .intro-subheadline {
      font-size: 1.1rem;
      color: var(--text-secondary);
      max-width: 550px;
      margin: 0 auto 2.5rem;
      font-weight: 300;
      line-height: 1.7;
    }

    .intro-page-actions {
      margin-top: 1.8rem;
    }

    .intro-enter-btn {
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 1.1rem 2.8rem;
      font-size: 0.8rem;
    }

    @media (max-width: 768px) {
      .intro-page-content { padding-top: 96px; }
    }

    /* Focus */
    .intro-enter-btn:focus { outline: 2px solid rgba(200,165,90,0.65); outline-offset: 3px; }
  </style>
</head>
<body>
  <!-- Optional: keep navbar aesthetic by reusing it (site will still render its own fixed navbar when you return to index) -->
    <div class="intro-page" role="main">
    <div class="intro-page-bg" aria-hidden="true">
      <div class="video-wrapper">
        <iframe
          id="introYoutubeIframe"
          src="https://www.youtube.com/embed/ZB2hKmK4DGk?autoplay=1&mute=1&controls=0&loop=1&playlist=ZB2hKmK4DGk&playsinline=1&modestbranding=1&enablejsapi=1&origin=null"
          title="Intro background video"
          allow="autoplay; encrypted-media"
          allowfullscreen
        ></iframe>
      </div>
      <div class="intro-page-scrim"></div>
    </div>

    <!-- Scroll driver: lets user scroll through intro instead of being stuck fullscreen -->
    <div class="intro-scroll-driver" aria-hidden="true"></div>

    <!-- Re-show intro content when user scrolls back up on returning from index -->
    <script>
      (function () {
        const params = new URLSearchParams(window.location.search);
        if (params.get('intro') === '1') {
          // Scroll to top so intro becomes visible again.
          window.scrollTo(0, 0);
        }
      })();
    </script>


    <!-- Trophy badge (reveals as user scrolls) -->
    <div id="introTrophyBadge" class="intro-trophy-badge" aria-hidden="true">
      <svg viewBox="0 0 64 64" class="trophy-svg" role="img" aria-label="Trophy">
        <path d="M26 6h12v6h8c0 8-5 14-12 16V26c0-4 4-8 4-10V12h-12v4c0 2 4 6 4 10v2c-7-2-12-8-12-16h8V6z"/>
        <path d="M20 40h24v4c0 4-3 8-8 8h-8c-5 0-8-4-8-8v-4z"/>
        <path d="M14 42c0 8 6 14 14 14h2c8 0 14-6 14-14h-6c0 5-4 8-8 8h-2c-4 0-8-3-8-8h-6z"/>
      </svg>
    </div>

    <div class="intro-page-content">
      <!-- Stagger animation container -->
      <div class="stagger">
        <div class="intro-logo" aria-label="Bobis">Bobis</div>

        <h1 class="intro-headline">Architects of Unforgettable Moments.</h1>

        <p class="intro-subheadline">Premium event production for the world's most discerning brands — immersive, precise, and unforgettable.</p>
        
        <div class="intro-page-actions">
          <a class="btn btn-gold intro-enter-btn" href="home.php" aria-label="Enter site">Enter Site</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    (function () {
      // Stagger animation for intro content
      const staggerContainer = document.querySelector('.stagger');
      if (staggerContainer) {
        // Use a short timeout to ensure the page is ready before animating
        setTimeout(() => {
          staggerContainer.classList.add('visible');
        }, 150);
      }

      const trophy = document.getElementById('introTrophyBadge');
      if (!trophy) return;

      const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      const driver = document.querySelector('.intro-scroll-driver');
      if (!driver) return;

      // Ensure trophy can be visible even if scroll logic doesn't run yet.
      trophy.style.opacity = '0';

      const clamp01 = (n) => Math.max(0, Math.min(1, n));
      let fired = false;

      const update = () => {
        const rect = driver.getBoundingClientRect();
        const vh = window.innerHeight || 1;

        // progress: 0 at top of driver, 1 when driver fully leaves viewport
        const progress = clamp01((vh - rect.top) / (vh * 1.25));

        const reveal = clamp01((progress - 0.55) / 0.25);
        trophy.style.opacity = String(reveal);
        trophy.style.transform = `translateY(-50%) scale(${0.65 + reveal * 0.45})`;

        if (reduced) {
          if (!fired && progress >= 0.65) {
            fired = true;
            window.location.href = 'home.php';

          }
          return;
        }

        if (!fired && progress >= 0.95) {
          fired = true;
            window.location.href = 'home.php';
        }
      };

      update();
      window.addEventListener('scroll', () => requestAnimationFrame(update), { passive: true });
      window.addEventListener('resize', () => requestAnimationFrame(update));

      // Force YouTube to autoplay (best-effort). Some browsers block autoplay until muted.
      const iframe = document.getElementById('introYoutubeIframe');
      if (iframe) {
        try {
          // Add autoplay/mute parameters again by reloading the iframe src.
          const url = new URL(iframe.src);
          url.searchParams.set('autoplay', '1');
          url.searchParams.set('mute', '1');
          url.searchParams.set('controls', '0');
          url.searchParams.set('loop', '1');
          url.searchParams.set('playlist', 'ZB2hKmK4DGk');
          url.searchParams.set('playsinline', '1');
          iframe.src = url.toString();
        } catch (e) {
          // ignore
        }
      }
    })();
  </script>

  <script src="script.js"></script>
</body>
</html>
