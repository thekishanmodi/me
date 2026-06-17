<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Konfig's Box | Test Page</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

  <style>
    @font-face {
      font-family: "Mona Sans";
      src: url("assets/fonts/MonaSans-VariableFont_wdth.ttf") format("truetype");
      font-weight: 200 900;
      font-style: normal;
    }

    @font-face {
      font-family: "Mona Sans";
      src: url("assets/fonts/MonaSans-Italic-VariableFont_wdth.ttf") format("truetype");
      font-weight: 200 900;
      font-style: italic;
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --o: #f04f00;
      --o2: #ff6a1f;
      --bg: #f4f1ec;
      --ink: #100f0d;
      --ink2: #3a3630;
      --ink3: #9a9187;
      --ink4: #c8c2b9;
      --w: #ffffff;
      --b: #e2ddd5;
      --b2: #d0c9bf;
      --side: #0f0e0c;
    }

    html,
    body {
      font-family: 'Mona Sans', sans-serif;
      background: var(--bg);
      color: var(--ink);
      height: 100vh;
      overflow: hidden;
      cursor: none;
    }

    /* ── Cursor ── */
    #cursor {
      position: fixed;
      width: 10px;
      height: 10px;
      background: var(--o);
      border-radius: 50%;
      pointer-events: none;
      z-index: 9999;
      transform: translate(-50%, -50%);
      transition: width .15s, height .15s, opacity .2s;
      mix-blend-mode: multiply;
    }

    #cursor-ring {
      position: fixed;
      width: 34px;
      height: 34px;
      border: 1.5px solid var(--o);
      border-radius: 50%;
      pointer-events: none;
      z-index: 9998;
      transform: translate(-50%, -50%);
      opacity: .4;
      transition: width .35s cubic-bezier(.22, 1, .36, 1),
        height .35s cubic-bezier(.22, 1, .36, 1), opacity .3s;
    }

    body.hov #cursor {
      width: 14px;
      height: 14px;
    }

    body.hov #cursor-ring {
      width: 50px;
      height: 50px;
      opacity: .18;
    }

    /* grain */
    body::before {
      content: '';
      position: fixed;
      inset: 0;
      z-index: 9997;
      pointer-events: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='260' height='260'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.72' numOctaves='4'/%3E%3C/filter%3E%3Crect width='260' height='260' filter='url(%23n)' opacity='0.025'/%3E%3C/svg%3E");
    }

    /* ════════════════════════════
       LAYOUT
    ════════════════════════════ */
    .layout {
      display: flex;
      height: 100vh;
      position: relative;
    }

    /* ════════════════════════════
       SIDEBAR
    ════════════════════════════ */
    .sidebar {
      background: var(--side);
      border-right: 1px solid rgba(255, 255, 255, .05);
      display: flex;
      flex-direction: column;
      overflow: hidden;
      position: fixed;
      left: -320px; /* Hidden by default */
      top: 0;
      bottom: 0;
      width: 320px;
      z-index: 100;
      transition: left 0.5s cubic-bezier(.22, 1, .36, 1);
    }
    
    .sidebar-trigger {
      position: fixed;
      left: 0;
      top: 0;
      bottom: 0;
      width: 40px;
      z-index: 90;
      /* Invisible hover target area or use button */
    }

    .sidebar::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 3px;
      background: var(--o);
      z-index: 2;
    }

    .sidebar::after {
      content: '';
      position: absolute;
      left: -80px;
      bottom: -80px;
      width: 360px;
      height: 360px;
      background: radial-gradient(circle, rgba(240, 79, 0, .14) 0%, transparent 65%);
      pointer-events: none;
    }

    .sidebar-inner {
      padding: 24px;
      display: flex;
      flex-direction: column;
      height: 100%;
      position: relative;
      z-index: 1;
      gap: 0;
    }

    .s-title {
      font-family: 'Mona Sans', sans-serif;
      font-size: 48px;
      line-height: 1;
      color: #fff;
      letter-spacing: .02em;
      font-weight: 900;
    }

    .s-title .outline {
      display: block;
      color: transparent;
      -webkit-text-stroke: 2px rgba(255, 255, 255, .18);
      transition: -webkit-text-stroke-color .4s;
    }

    .s-title:hover .outline {
      -webkit-text-stroke-color: var(--o);
    }

    .s-rule {
      width: 36px;
      height: 2px;
      background: var(--o);
      border-radius: 2px;
      margin: 20px 0 14px;
    }

    .s-desc {
      font-size: 14px;
      font-weight: 400;
      color: rgba(255, 255, 255, .28);
      line-height: 1.7;
    }

    .s-nav {
      display: flex;
      flex-direction: column;
      gap: 8px;
      margin-top: 24px;
    }

    .s-nav-link {
      color: rgba(255, 255, 255, .6);
      text-decoration: none;
      font-size: 15px;
      font-weight: 500;
      padding: 8px 12px;
      border-radius: 8px;
      transition: background 0.2s, color 0.2s;
      cursor: none;
    }

    .s-nav-link:hover {
      background: rgba(255, 255, 255, .08);
      color: #fff;
    }

    .s-spacer {
      flex: 1;
    }

    .s-profile {
      display: flex;
      align-items: center;
      gap: 11px;
      background: rgba(255, 255, 255, .04);
      border: 1px solid rgba(255, 255, 255, .08);
      border-radius: 14px;
      padding: 12px 14px;
      text-decoration: none;
      transition: border-color .22s, background .22s, transform .22s;
      cursor: none;
      margin-top: 12px;
    }

    .s-profile:hover {
      border-color: rgba(240, 79, 0, .4);
      background: rgba(240, 79, 0, .07);
      transform: translateY(-2px);
    }

    .s-profile-info {
      display: flex;
      flex-direction: column;
      flex: 1;
      min-width: 0;
    }

    .s-profile-name {
      font-size: 16px;
      font-weight: 700;
      color: rgba(255, 255, 255, .88);
      line-height: 1.2;
    }

    .s-profile-role {
      font-family: 'Mona Sans', monospace;
      font-size: 14px;
      color: rgba(255, 255, 255, .28);
      margin-top: 2px;
    }

    /* ════════════════════════════
       MAIN CONTENT
    ════════════════════════════ */
    .main {
      flex: 1;
      padding: 40px;
      position: relative;
    }
    
    .hover-btn-container {
      position: absolute;
      top: 40px;
      left: 40px;
      z-index: 110;
    }

    .hover-btn {
      padding: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--o);
      color: #fff;
      border: none;
      border-radius: 12px;
      cursor: none;
      transition: transform 0.2s, background 0.2s;
      box-shadow: 0 4px 12px rgba(240, 79, 0, 0.3);
    }
    
    .hover-btn:hover {
      background: var(--o2);
      transform: translateY(-2px);
    }
    
    /* Open the sidebar when hovering on the container or button */
    .hover-btn-container:hover + .sidebar,
    .sidebar:hover {
      left: 0;
    }

    .content-area {
      margin-top: 100px;
    }
    
    .content-area h1 {
      font-size: 40px;
      margin-bottom: 20px;
    }
    
    .content-area p {
      color: var(--ink2);
      font-size: 18px;
      max-width: 600px;
      line-height: 1.6;
    }
  </style>
</head>

<body>

  <div id="cursor"></div>
  <div id="cursor-ring"></div>

  <div class="layout">
    
    <div class="main">
      <div class="hover-btn-container">
        <button class="hover-btn" aria-label="Open Sidebar">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" width="24" height="24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

      <!-- ════ SIDEBAR ════ -->
      <aside class="sidebar">
        <div class="sidebar-inner">

          <nav class="s-nav">
            <a href="box.php" class="s-nav-link">Box</a>
            <a href="color-shades.php" class="s-nav-link">Color Shades</a>
            <a href="comet-blitz.php" class="s-nav-link">Comet Blitz</a>
            <a href="grid-calculator.php" class="s-nav-link">Grid Calculator</a>
            <a href="screen-sizes.php" class="s-nav-link">Screen Sizes</a>
            <a href="textcase.php" class="s-nav-link">Text Case</a>
          </nav>

          <div class="s-spacer"></div>

          <a href="index.php" class="s-profile" aria-label="About Kishan Modi" target="_blank">
            <div class="s-profile-info">
              <span class="s-profile-name">Kishan Modi</span>
              <span class="s-profile-role">UI/UX & Graphics Designer</span>
            </div>
          </a>
        </div>
      </aside>
      
      <div class="content-area">
        <h1>Test Page</h1>
        <p>This is a test page implementing a hover-to-open sidebar with the exact same design theme as the rest of the application.</p>
      </div>
    </div>

  </div>

  <script>
    /* ── Custom cursor ── */
    const cur = document.getElementById('cursor');
    const ring = document.getElementById('cursor-ring');
    let mx = 0, my = 0, rx = 0, ry = 0;
    document.addEventListener('mousemove', e => {
      mx = e.clientX; my = e.clientY;
      cur.style.left = mx + 'px'; cur.style.top = my + 'px';
    });
    (function loop() {
      rx += (mx - rx) * .12; ry += (my - ry) * .12;
      ring.style.left = rx + 'px'; ring.style.top = ry + 'px';
      requestAnimationFrame(loop);
    })();
    document.querySelectorAll('a,button,input,.s-profile,.hover-btn').forEach(el => {
      el.addEventListener('mouseenter', () => document.body.classList.add('hov'));
      el.addEventListener('mouseleave', () => document.body.classList.remove('hov'));
    });
  </script>
</body>

</html>
