<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ─── PRIMARY META ─── -->
  <title>Design Keyword Cloud | SEO Keyword Explorer for Designers | #thekishanmodi</title>
  <meta name="title" content="Design Keyword Cloud | SEO Keyword Explorer for Designers | #thekishanmodi">
  <meta name="description"
    content="Explore 350+ curated SEO keywords across 24 design categories including UI/UX, Graphic Design, 2D Game Design, AI Tools, Motion Design, Branding, and more. Built for designers who want to rank higher and stay inspired.">
  <meta name="keywords"
    content="design keywords, SEO for designers, UI UX keywords, graphic design SEO, 2D game design keywords, AI design tools, motion design, branding keywords, typography, vector illustration, word cloud, design inspiration, figma, adobe, midjourney, stable diffusion, logo design, web design, app design, character design, infographic, dashboard design, social media design, print design, 3D rendering, icon design, photo editing, email design">
  <meta name="author" content="Kishan Modi">
  <meta name="robots" content="index, follow">
  <meta name="language" content="English">
  <meta name="revisit-after" content="7 days">
  <meta name="category" content="Design Tools, SEO, Creative Resources">
  <meta name="classification" content="Design, Creative, SEO">
  <meta name="rating" content="general">
  <meta name="copyright" content="© 2025 Kishan Modi. All rights reserved.">
  <meta name="theme-color" content="#fd6204">
  <meta name="msapplication-TileColor" content="#fd6204">
  <meta name="application-name" content="Design Keyword Cloud">

  <!-- ─── CANONICAL ─── -->
  <link rel="canonical" href="https://thekishanmodi.com/design-keyword-cloud">

  <!-- ─── OPEN GRAPH ─── -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://thekishanmodi.com/design-keyword-cloud">
  <meta property="og:title" content="Design Keyword Cloud | SEO Keyword Explorer for Designers">
  <meta property="og:description"
    content="Explore 350+ curated SEO keywords across 24 design categories. UI/UX, Graphic Design, AI Tools, Motion Design, Branding & more. Built for designers who want to rank higher.">
  <meta property="og:image" content="https://thekishanmodi.com/assets/images/design-keyword-cloud-og.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Design Keyword Cloud - SEO Keyword Explorer for Designers by Kishan Modi">
  <meta property="og:site_name" content="#thekishanmodi">
  <meta property="og:locale" content="en_US">

  <!-- ─── TWITTER / X ─── -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@thekishanmodi">
  <meta name="twitter:creator" content="@thekishanmodi">
  <meta name="twitter:url" content="https://thekishanmodi.com/design-keyword-cloud">
  <meta name="twitter:title" content="Design Keyword Cloud | SEO Keyword Explorer for Designers">
  <meta name="twitter:description"
    content="Explore 350+ curated SEO keywords across 24 design categories. UI/UX, Graphic Design, AI Tools, Motion Design, Branding & more.">
  <meta name="twitter:image" content="https://thekishanmodi.com/assets/images/design-keyword-cloud-og.png">
  <meta name="twitter:image:alt" content="Design Keyword Cloud by Kishan Modi">

  <!-- ─── FAVICON ─── -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
  <link rel="manifest" href="assets/site.webmanifest">

  <!-- ─── JSON-LD ─── -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebApplication",
    "name": "Design Keyword Cloud",
    "url": "https://thekishanmodi.com/design-keyword-cloud",
    "description": "SEO Keyword Explorer for Designers — 350+ curated keywords across 24 design categories.",
    "applicationCategory": "DesignApplication",
    "operatingSystem": "Web Browser",
    "offers": { "@type": "Offer", "price": "0", "priceCurrency": "USD" },
    "author": {
      "@type": "Person",
      "name": "Kishan Modi",
      "url": "https://thekishanmodi.com",
      "sameAs": [
        "https://twitter.com/thekishanmodi",
        "https://instagram.com/thekishanmodi",
        "https://linkedin.com/in/thekishanmodi"
      ]
    },
    "inLanguage": "en",
    "isAccessibleForFree": true
  }
  </script>

  <!-- ─── PRECONNECT ─── -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net">

  <!-- ─── ECHARTS ─── -->
  <script src="https://cdn.jsdelivr.net/npm/echarts@5.5.1/dist/echarts.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/echarts-wordcloud@2.1.0/dist/echarts-wordcloud.min.js"></script>

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

    :root {
      --accent: #fd6204;
      --accent-hover: #e25500;
      --accent-light: rgba(253, 98, 4, 0.08);
      --accent-mid: rgba(253, 98, 4, 0.14);
      --bg: #f4f2ee;
      --surface: #ffffff;
      --surface2: #faf9f6;
      --surface3: #f0ede8;
      --ink: #1c1a17;
      --ink-2: #706c63;
      --ink-3: #a8a49b;
      --ink-4: #d4d0c9;
      --border: rgba(28, 26, 23, 0.07);
      --border-md: rgba(28, 26, 23, 0.11);
      --border-lg: rgba(28, 26, 23, 0.18);
      --sans: 'Mona Sans', sans-serif;
      --ease: cubic-bezier(0.22, 1, 0.36, 1);
      --r: 10px;
      --r-sm: 7px;
      --topbar-h: 56px;
      --trend-h: 44px;
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html,
    body {
      height: 100%;
      overflow: hidden;
    }

    body {
      font-family: var(--sans);
      background: var(--bg);
      color: var(--ink);
      font-size: 13px;
      line-height: 1.5;
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    /* ════════════════════════════════
       TOPBAR
    ════════════════════════════════ */
    .topbar {
      height: var(--topbar-h);
      background: var(--surface);
      border-bottom: 1px solid var(--border-md);
      padding: 0 18px;
      display: flex;
      align-items: center;
      gap: 12px;
      flex-shrink: 0;
      z-index: 50;
    }

    /* Logo */
    .logo {
      display: flex;
      align-items: center;
      gap: 8px;
      text-decoration: none;
      flex-shrink: 0;
    }

    .logo-img {
      width: 28px;
      height: 28px;
      border-radius: 7px;
      object-fit: contain;
      flex-shrink: 0;
    }

    .logo-wordmark {
      display: flex;
      flex-direction: column;
      gap: 0;
    }

    .logo-name {
      font-size: 12.5px;
      font-weight: 800;
      letter-spacing: -.03em;
      color: var(--ink);
      line-height: 1.1;
    }

    .logo-tag {
      font-size: 9.5px;
      font-weight: 600;
      color: var(--ink-3);
      letter-spacing: .01em;
      line-height: 1;
    }

    /* Divider */
    .vd {
      width: 1px;
      height: 20px;
      background: var(--border-md);
      flex-shrink: 0;
    }

    /* ─ Dropdown ─ */
    .dd-wrap {
      position: relative;
      flex-shrink: 0;
    }

    .dd-btn {
      display: flex;
      align-items: center;
      gap: 7px;
      height: 32px;
      padding: 0 11px;
      background: var(--surface2);
      border: 1px solid var(--border-md);
      border-radius: var(--r-sm);
      font-family: var(--sans);
      font-size: 12px;
      font-weight: 600;
      color: var(--ink);
      cursor: pointer;
      transition: border-color .15s, background .15s, box-shadow .15s;
      white-space: nowrap;
      min-width: 196px;
    }

    .dd-btn:hover {
      border-color: var(--border-lg);
      background: var(--surface3);
    }

    .dd-btn.open {
      border-color: var(--accent);
      background: var(--surface);
      box-shadow: 0 0 0 3px rgba(253, 98, 4, 0.10);
    }

    .db-dot {
      width: 7px;
      height: 7px;
      border-radius: 2px;
      flex-shrink: 0;
      transition: background .2s;
    }

    .db-emoji {
      font-size: 13px;
      line-height: 1;
      flex-shrink: 0;
    }

    .db-label {
      flex: 1;
      text-align: left;
    }

    .db-arrow {
      font-size: 9px;
      color: var(--ink-3);
      transition: transform .22s var(--ease);
      flex-shrink: 0;
      display: flex;
      align-items: center;
    }

    .dd-btn.open .db-arrow {
      transform: rotate(180deg);
    }

    .dd-menu {
      position: absolute;
      top: calc(100% + 5px);
      left: 0;
      width: 264px;
      background: var(--surface);
      border: 1px solid var(--border-md);
      border-radius: var(--r);
      box-shadow: 0 12px 40px rgba(28, 26, 23, 0.13), 0 2px 8px rgba(28, 26, 23, 0.06);
      z-index: 999;
      overflow: hidden;
      display: none;
    }

    .dd-menu.open {
      display: block;
      animation: dropIn .16s var(--ease);
    }

    @keyframes dropIn {
      from {
        opacity: 0;
        transform: translateY(-5px) scale(.98);
      }

      to {
        opacity: 1;
        transform: none;
      }
    }

    .dm-search {
      padding: 9px 9px 6px;
      border-bottom: 1px solid var(--border);
      position: relative;
    }

    .dm-search input {
      width: 100%;
      padding: 6px 9px 6px 27px;
      border: 1px solid var(--border-md);
      border-radius: 6px;
      background: var(--surface2);
      font-family: var(--sans);
      font-size: 11.5px;
      color: var(--ink);
      outline: none;
      transition: border-color .15s;
    }

    .dm-search input:focus {
      border-color: var(--accent);
    }

    .dm-search input::placeholder {
      color: var(--ink-3);
    }

    .dm-si {
      position: absolute;
      left: 17px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--ink-3);
      pointer-events: none;
      display: flex;
    }

    .dm-si svg {
      width: 12px;
      height: 12px;
    }

    .dm-list {
      max-height: 336px;
      overflow-y: auto;
      padding: 4px 5px 6px;
    }

    .dm-list::-webkit-scrollbar {
      width: 3px;
    }

    .dm-list::-webkit-scrollbar-thumb {
      background: var(--ink-4);
      border-radius: 3px;
    }

    .dm-section {
      font-size: 9px;
      font-weight: 800;
      letter-spacing: .12em;
      text-transform: uppercase;
      color: var(--ink-4);
      padding: 8px 8px 3px;
    }

    .dm-item {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 6px 8px;
      border-radius: 6px;
      cursor: pointer;
      transition: background .1s;
    }

    .dm-item:hover {
      background: var(--surface2);
    }

    .dm-item.active {
      background: var(--accent-light);
    }

    .dm-item.active .di-name {
      color: var(--accent);
      font-weight: 700;
    }

    .di-dot {
      width: 6px;
      height: 6px;
      border-radius: 2px;
      flex-shrink: 0;
    }

    .di-emoji {
      font-size: 13px;
      line-height: 1;
      flex-shrink: 0;
      width: 17px;
      text-align: center;
    }

    .di-name {
      font-size: 11.5px;
      font-weight: 500;
      color: var(--ink);
      flex: 1;
    }

    .di-cnt {
      font-size: 9.5px;
      font-weight: 700;
      color: var(--ink-3);
      background: var(--surface3);
      padding: 1px 6px;
      border-radius: 20px;
    }

    .dm-item.active .di-cnt {
      background: var(--accent-mid);
      color: var(--accent);
    }

    /* ─ Keyword search ─ */
    .kw-search {
      position: relative;
      flex: 1;
      max-width: 260px;
    }

    .kw-search input {
      width: 100%;
      padding: 6px 9px 6px 28px;
      border: 1px solid var(--border-md);
      border-radius: var(--r-sm);
      background: var(--surface2);
      font-family: var(--sans);
      font-size: 12px;
      color: var(--ink);
      outline: none;
      transition: border-color .15s, background .15s, box-shadow .15s;
      height: 32px;
    }

    .kw-search input:focus {
      border-color: var(--accent);
      background: var(--surface);
      box-shadow: 0 0 0 3px rgba(253, 98, 4, 0.10);
    }

    .kw-search input::placeholder {
      color: var(--ink-3);
    }

    .kw-search .si {
      position: absolute;
      left: 9px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--ink-3);
      display: flex;
      pointer-events: none;
    }

    .kw-search .si svg {
      width: 13px;
      height: 13px;
    }

    /* ─ Stats ─ */
    .stats-row {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-left: auto;
    }

    .s-item {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
    }

    .s-val {
      font-size: 14px;
      font-weight: 800;
      letter-spacing: -.03em;
      color: var(--ink);
      line-height: 1;
    }

    .s-lbl {
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .09em;
      color: var(--ink-3);
      margin-top: 1px;
    }

    /* ─ Buttons ─ */
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 0 12px;
      height: 32px;
      border-radius: var(--r-sm);
      font-family: var(--sans);
      font-size: 11.5px;
      font-weight: 700;
      border: 1px solid transparent;
      cursor: pointer;
      transition: transform .14s var(--ease), background .14s, box-shadow .14s;
      white-space: nowrap;
      flex-shrink: 0;
      letter-spacing: .01em;
    }

    .btn:hover {
      transform: translateY(-1px);
    }

    .btn:active {
      transform: none;
    }

    .btn svg {
      width: 12px;
      height: 12px;
      flex-shrink: 0;
    }

    .btn-ghost {
      background: var(--surface2);
      border-color: var(--border-md);
      color: var(--ink-2);
    }

    .btn-ghost:hover {
      border-color: var(--border-lg);
      color: var(--ink);
      background: var(--surface3);
    }

    .btn-primary {
      background: var(--accent);
      color: #fff;
      border-color: var(--accent);
      box-shadow: 0 1px 3px rgba(253, 98, 4, .20);
    }

    .btn-primary:hover {
      background: var(--accent-hover);
      border-color: var(--accent-hover);
      box-shadow: 0 3px 10px rgba(253, 98, 4, .25);
    }

    /* ════════════════════════════════
       CHART AREA
    ════════════════════════════════ */
    .chart-area {
      flex: 1;
      position: relative;
      overflow: hidden;
      background: var(--bg);
      /* subtle dot grid */
      background-image: radial-gradient(circle, var(--ink-4) 1px, transparent 1px);
      background-size: 24px 24px;
    }

    /* fade edges so dots disappear at borders */
    .chart-area::before {
      content: '';
      position: absolute;
      inset: 0;
      z-index: 1;
      pointer-events: none;
      background:
        linear-gradient(to right, var(--bg) 0%, transparent 5%, transparent 95%, var(--bg) 100%),
        linear-gradient(to bottom, var(--bg) 0%, transparent 6%, transparent 94%, var(--bg) 100%);
    }

    #chart {
      width: 100%;
      height: 100%;
      position: relative;
      z-index: 2;
    }

    /* watermark */
    .watermark {
      position: absolute;
      bottom: 12px;
      right: 14px;
      z-index: 3;
      display: flex;
      align-items: center;
      gap: 6px;
      pointer-events: none;
      user-select: none;
    }

    .wm-text {
      font-size: 9.5px;
      font-weight: 700;
      letter-spacing: .1em;
      text-transform: uppercase;
      color: var(--ink-4);
    }

    .wm-badge {
      font-size: 9px;
      font-weight: 800;
      letter-spacing: .06em;
      color: var(--accent);
      background: var(--accent-light);
      border: 1px solid var(--accent-mid);
      padding: 1px 6px;
      border-radius: 20px;
    }

    /* ════════════════════════════════
       TRENDING BAR
    ════════════════════════════════ */
    .trend-bar {
      height: var(--trend-h);
      background: var(--surface);
      border-top: 1px solid var(--border-md);
      padding: 0 18px;
      display: flex;
      align-items: center;
      gap: 10px;
      flex-shrink: 0;
    }

    .trend-label {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 9px;
      font-weight: 800;
      letter-spacing: .1em;
      text-transform: uppercase;
      color: var(--ink-3);
      white-space: nowrap;
      flex-shrink: 0;
    }

    .trend-label .fire {
      font-size: 12px;
    }

    .trend-scroll {
      display: flex;
      gap: 5px;
      overflow-x: auto;
      flex: 1;
      scrollbar-width: none;
    }

    .trend-scroll::-webkit-scrollbar {
      display: none;
    }

    .tc {
      display: flex;
      align-items: center;
      gap: 5px;
      padding: 3px 9px 3px 7px;
      border-radius: 20px;
      border: 1px solid var(--border-md);
      background: var(--surface2);
      white-space: nowrap;
      flex-shrink: 0;
      cursor: default;
      transition: border-color .12s, background .12s;
    }

    .tc:hover {
      border-color: var(--border-lg);
      background: var(--surface3);
    }

    .tc-rank {
      font-size: 8.5px;
      font-weight: 800;
      color: var(--accent);
      width: 13px;
    }

    .tc-dot {
      width: 5px;
      height: 5px;
      border-radius: 1.5px;
      flex-shrink: 0;
    }

    .tc-name {
      font-size: 10.5px;
      font-weight: 600;
      color: var(--ink);
    }

    .tc-score {
      font-size: 9.5px;
      color: var(--ink-3);
      margin-left: 1px;
    }

    /* ════════════════════════════════
       MISC
    ════════════════════════════════ */
    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    .spin {
      display: inline-block;
      animation: spin .5s linear infinite;
    }

    /* focus-visible ring */
    :focus-visible {
      outline: 2px solid var(--accent);
      outline-offset: 2px;
    }

    /* tooltip override */
    .echarts-tooltip {
      font-family: var(--sans) !important;
    }
  </style>
</head>

<body>

  <!-- ════════════ TOPBAR ════════════ -->
  <header class="topbar" role="banner">

    <!-- Logo -->
    <a class="logo" href="index.php" target="_blank" rel="noopener" aria-label="Kishan Modi homepage">
      <img class="logo-img" src="assets/images/favicon.png" alt="Design Keyword Cloud logo" width="28" height="28">
      <div class="logo-wordmark">
        <div class="logo-name">Design Keyword Cloud</div>
        <div class="logo-tag">by #thekishanmodi</div>
      </div>
    </a>

    <div class="vd"></div>

    <!-- Category dropdown -->
    <div class="dd-wrap" id="ddWrap">
      <button class="dd-btn" id="ddBtn" onclick="toggleDropdown()" aria-haspopup="listbox" aria-expanded="false"
        aria-label="Select design category">
        <span class="db-dot" id="dbDot"></span>
        <span class="db-emoji" id="dbEmoji">🎨</span>
        <span class="db-label" id="dbLabel">All Categories</span>
        <span class="db-arrow">
          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" stroke="currentColor" stroke-width="1.8"
            stroke-linecap="round">
            <path d="M2 3.5l3 3 3-3" />
          </svg>
        </span>
      </button>

      <div class="dd-menu" id="ddMenu" role="listbox" aria-label="Design categories">
        <div class="dm-search">
          <span class="dm-si">
            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="11" cy="11" r="8" />
              <path d="m21 21-4.35-4.35" />
            </svg>
          </span>
          <input type="text" id="ddSearch" placeholder="Search categories…" oninput="filterDD(this.value)"
            aria-label="Search categories">
        </div>
        <div class="dm-list" id="ddList"></div>
      </div>
    </div>

    <!-- Keyword search -->
    <div class="kw-search">
      <span class="si">
        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <circle cx="11" cy="11" r="8" />
          <path d="m21 21-4.35-4.35" />
        </svg>
      </span>
      <input type="text" placeholder="Search keywords…" oninput="handleSearch(this.value)" aria-label="Search keywords">
    </div>

    <!-- Stats -->
    <div class="stats-row" aria-label="Statistics">
      <div class="s-item" title="Number of visible keywords">
        <div class="s-val" id="st-kw">0</div>
        <div class="s-lbl">Keywords</div>
      </div>
      <div class="vd"></div>
      <div class="s-item" title="Average SEO score">
        <div class="s-val" id="st-avg">0</div>
        <div class="s-lbl">Avg Score</div>
      </div>
      <div class="vd"></div>
      <div class="s-item" title="Highest ranked keyword">
        <div class="s-val" id="st-top"
          style="font-size:11px;max-width:90px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">—</div>
        <div class="s-lbl">Top Keyword</div>
      </div>
      <div class="vd"></div>
      <div class="s-item" title="Current date and time">
        <div class="s-val" id="dateStr" style="font-size:11px;">—</div>
        <div class="s-lbl" id="clockStr" style="color:var(--accent)">—</div>
      </div>
    </div>

    <div class="vd"></div>

    <!-- Actions -->
    <button class="btn btn-ghost" onclick="copyKw()" aria-label="Copy keywords to clipboard">
      <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <rect x="9" y="9" width="13" height="13" rx="2" />
        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1" />
      </svg>
      <span id="copyLabel">Copy</span>
    </button>

    <button class="btn btn-primary" onclick="refresh()" aria-label="Refresh word cloud layout">
      <span id="rIco">↺</span> Refresh
    </button>

  </header>

  <!-- ════════════ CHART ════════════ -->
  <main class="chart-area" role="main" aria-label="Design SEO Keyword Word Cloud">
    <div id="chart"></div>

    <div class="watermark" aria-hidden="true">
      <span class="wm-text" id="wmText">All Categories · Design SEO</span>
      <span class="wm-badge">#thekishanmodi</span>
    </div>
  </main>

  <!-- ════════════ TRENDING ════════════ -->
  <section class="trend-bar" aria-label="Top trending keywords">
    <div class="trend-label">
      <span class="fire">🔥</span> Trending
    </div>
    <div class="trend-scroll" id="trendScroll"></div>
  </section>

  <!-- ════════════ SCRIPT ════════════ -->
  <script>
    // ──────────────────────────────────────────────
    // CATEGORIES
    // ──────────────────────────────────────────────
    const cats = {
      "2d": { label: "2D Game Design", color: "#e8590c", icon: "🎮" },
      "char": { label: "Character Design", color: "#c0392b", icon: "🧑‍🎨" },
      "graphic": { label: "Graphic Design", color: "#fd6204", icon: "🖼️" },
      "ui": { label: "UI/UX Design", color: "#2471a3", icon: "📱" },
      "product": { label: "Product Design", color: "#1e8449", icon: "📦" },
      "web": { label: "Web & App Design", color: "#7d3c98", icon: "🌐" },
      "wire": { label: "Wireframe & Prototype", color: "#148f77", icon: "📐" },
      "hero": { label: "Hero & Banner Design", color: "#b9770e", icon: "🏆" },
      "info": { label: "Infographics", color: "#1a5276", icon: "📊" },
      "ai": { label: "AI Design Tools", color: "#6c3483", icon: "🤖" },
      "video": { label: "Video Editing", color: "#922b21", icon: "🎬" },
      "motion": { label: "Motion & Animation", color: "#0e6655", icon: "✨" },
      "post": { label: "Social Media Design", color: "#b7770d", icon: "📣" },
      "brand": { label: "Branding & Identity", color: "#1a5276", icon: "💼" },
      "print": { label: "Print Design", color: "#6e2f1a", icon: "🖨️" },
      "3d": { label: "3D & Rendering", color: "#154360", icon: "🧊" },
      "icon": { label: "Icon Design", color: "#117a65", icon: "⚡" },
      "vector": { label: "Vector & Illustration", color: "#943126", icon: "✏️" },
      "photo": { label: "Photo Editing", color: "#4a235a", icon: "📷" },
      "type": { label: "Typography & Fonts", color: "#1b2631", icon: "🔤" },
      "color": { label: "Color Theory & Palette", color: "#7e5109", icon: "🎨" },
      "ux": { label: "UX Writing & Content", color: "#1f618d", icon: "📝" },
      "dash": { label: "Dashboard Design", color: "#145a32", icon: "📈" },
      "email": { label: "Email & Newsletter", color: "#6e2f1a", icon: "📧" },
    };

    // ──────────────────────────────────────────────
    // DATA
    // ──────────────────────────────────────────────
    const allData = [
      { n: "Pixel Art", v: 490, c: "2d" }, { n: "Sprite Sheet", v: 470, c: "2d" }, { n: "Tile Map Design", v: 440, c: "2d" },
      { n: "Game Level Design", v: 450, c: "2d" }, { n: "2D Platformer Art", v: 420, c: "2d" }, { n: "Top Down Game", v: 400, c: "2d" },
      { n: "Game UI Overlay", v: 380, c: "2d" }, { n: "Isometric Game Art", v: 390, c: "2d" }, { n: "Game Asset Pack", v: 410, c: "2d" },
      { n: "Game Color Palette", v: 360, c: "2d" }, { n: "HUD Design", v: 370, c: "2d" }, { n: "Background Art", v: 350, c: "2d" },
      { n: "Game Icon Design", v: 330, c: "2d" }, { n: "Retro Game Style", v: 340, c: "2d" }, { n: "Pixel Font", v: 310, c: "2d" },
      { n: "Game Tileset", v: 320, c: "2d" }, { n: "2D Environment Art", v: 360, c: "2d" }, { n: "Mobile Game UI", v: 380, c: "2d" },
      { n: "Game Menu Screen", v: 345, c: "2d" }, { n: "Loading Screen Design", v: 335, c: "2d" }, { n: "Parallax Background", v: 360, c: "2d" },
      { n: "Character Concept Art", v: 490, c: "char" }, { n: "Character Sheet", v: 470, c: "char" },
      { n: "Chibi Design", v: 420, c: "char" }, { n: "Anime Character Art", v: 460, c: "char" },
      { n: "Fantasy Character", v: 450, c: "char" }, { n: "Villain Design", v: 400, c: "char" },
      { n: "Hero Character Art", v: 440, c: "char" }, { n: "NPC Design", v: 380, c: "char" },
      { n: "Character Silhouette", v: 390, c: "char" }, { n: "Costume Design", v: 360, c: "char" },
      { n: "Idle Animation Pose", v: 340, c: "char" }, { n: "Walk Cycle", v: 350, c: "char" },
      { n: "Facial Expression Sheet", v: 370, c: "char" }, { n: "Sci-Fi Character", v: 410, c: "char" },
      { n: "Realistic Character", v: 430, c: "char" }, { n: "Stylized Design", v: 420, c: "char" },
      { n: "Character Turnaround", v: 390, c: "char" }, { n: "Monster Design", v: 405, c: "char" },
      { n: "Mascot Design", v: 430, c: "char" }, { n: "Character Lineup", v: 360, c: "char" },
      { n: "Logo Design", v: 500, c: "graphic" }, { n: "Brand Identity", v: 490, c: "graphic" },
      { n: "Typography Layout", v: 470, c: "graphic" }, { n: "Color Theory", v: 460, c: "graphic" },
      { n: "Poster Design", v: 480, c: "graphic" }, { n: "Brochure Design", v: 430, c: "graphic" },
      { n: "Visual Hierarchy", v: 450, c: "graphic" }, { n: "Negative Space", v: 390, c: "graphic" },
      { n: "Flat Design", v: 400, c: "graphic" }, { n: "Minimalist Design", v: 410, c: "graphic" },
      { n: "Gradient Mesh", v: 380, c: "graphic" }, { n: "Pen Tool Mastery", v: 370, c: "graphic" },
      { n: "Photoshop Compositing", v: 390, c: "graphic" }, { n: "Illustrator Skills", v: 400, c: "graphic" },
      { n: "Retro Design", v: 360, c: "graphic" }, { n: "Texture Design", v: 350, c: "graphic" },
      { n: "Swiss Design", v: 340, c: "graphic" }, { n: "Editorial Layout", v: 420, c: "graphic" },
      { n: "Zine Design", v: 300, c: "graphic" }, { n: "Abstract Design", v: 380, c: "graphic" },
      { n: "UX Research", v: 490, c: "ui" }, { n: "Design System", v: 480, c: "ui" },
      { n: "Component Library", v: 470, c: "ui" }, { n: "Figma Design", v: 495, c: "ui" },
      { n: "User Flow Diagram", v: 460, c: "ui" }, { n: "A/B Testing Design", v: 420, c: "ui" },
      { n: "Usability Testing", v: 430, c: "ui" }, { n: "Information Architecture", v: 440, c: "ui" },
      { n: "Micro Interactions", v: 450, c: "ui" }, { n: "Dark Mode UI", v: 460, c: "ui" },
      { n: "Accessibility Design", v: 440, c: "ui" }, { n: "Mobile First Design", v: 480, c: "ui" },
      { n: "Card UI Design", v: 400, c: "ui" }, { n: "Onboarding Flow", v: 410, c: "ui" },
      { n: "CTA Button Design", v: 390, c: "ui" }, { n: "Navigation Design", v: 420, c: "ui" },
      { n: "Form UX Design", v: 380, c: "ui" }, { n: "Empty State Design", v: 360, c: "ui" },
      { n: "Toast Notification", v: 350, c: "ui" }, { n: "Modal Design", v: 370, c: "ui" },
      { n: "Tab Bar UI", v: 345, c: "ui" }, { n: "Skeleton Loader", v: 355, c: "ui" },
      { n: "Product Mockup", v: 490, c: "product" }, { n: "Industrial Design", v: 460, c: "product" },
      { n: "3D Product Render", v: 480, c: "product" }, { n: "Design Thinking", v: 470, c: "product" },
      { n: "Prototype Design", v: 450, c: "product" }, { n: "Ergonomic Design", v: 420, c: "product" },
      { n: "Material Design", v: 430, c: "product" }, { n: "Sustainable Design", v: 400, c: "product" },
      { n: "CAD Design", v: 380, c: "product" }, { n: "Product Photography", v: 440, c: "product" },
      { n: "Packaging Mockup", v: 460, c: "product" }, { n: "User-Centered Design", v: 450, c: "product" },
      { n: "Service Design", v: 390, c: "product" }, { n: "Sketch Modeling", v: 370, c: "product" },
      { n: "Design Sprint", v: 435, c: "product" }, { n: "Usability Audit", v: 405, c: "product" },
      { n: "Landing Page Design", v: 500, c: "web" }, { n: "App UI Design", v: 490, c: "web" },
      { n: "Responsive Design", v: 480, c: "web" }, { n: "SaaS Design", v: 460, c: "web" },
      { n: "E-commerce UI", v: 475, c: "web" }, { n: "Mobile App Screen", v: 465, c: "web" },
      { n: "Web Animation", v: 440, c: "web" }, { n: "Portfolio Design", v: 430, c: "web" },
      { n: "404 Page Design", v: 370, c: "web" }, { n: "Navbar Design", v: 390, c: "web" },
      { n: "Footer Design", v: 360, c: "web" }, { n: "Login Page UI", v: 400, c: "web" },
      { n: "Pricing Page", v: 410, c: "web" }, { n: "Blog Layout", v: 380, c: "web" },
      { n: "PWA Design", v: 420, c: "web" }, { n: "Web Accessibility", v: 445, c: "web" },
      { n: "Micro Frontend", v: 350, c: "web" }, { n: "App Onboarding", v: 430, c: "web" },
      { n: "Low-Fi Wireframe", v: 470, c: "wire" }, { n: "High-Fi Mockup", v: 490, c: "wire" },
      { n: "Interactive Prototype", v: 500, c: "wire" }, { n: "Clickable Prototype", v: 480, c: "wire" },
      { n: "User Story Map", v: 440, c: "wire" }, { n: "Paper Prototype", v: 400, c: "wire" },
      { n: "Rapid Prototyping", v: 450, c: "wire" }, { n: "Customer Journey Map", v: 460, c: "wire" },
      { n: "Storyboard Design", v: 420, c: "wire" }, { n: "Affinity Diagram", v: 390, c: "wire" },
      { n: "Empathy Mapping", v: 410, c: "wire" }, { n: "Card Sorting", v: 380, c: "wire" },
      { n: "Figma Prototyping", v: 490, c: "wire" }, { n: "Prototype Testing", v: 455, c: "wire" },
      { n: "Hero Banner Design", v: 500, c: "hero" }, { n: "Full Width Hero", v: 480, c: "hero" },
      { n: "Split Screen Hero", v: 460, c: "hero" }, { n: "Video Background Hero", v: 450, c: "hero" },
      { n: "Animated Hero Section", v: 470, c: "hero" }, { n: "CTA Banner", v: 440, c: "hero" },
      { n: "Email Banner", v: 420, c: "hero" }, { n: "Ad Banner Design", v: 430, c: "hero" },
      { n: "Event Banner", v: 400, c: "hero" }, { n: "Billboard Banner", v: 390, c: "hero" },
      { n: "Web Banner Design", v: 460, c: "hero" }, { n: "Promotional Banner", v: 410, c: "hero" },
      { n: "App Store Banner", v: 445, c: "hero" }, { n: "Digital Signage", v: 380, c: "hero" },
      { n: "Data Visualization", v: 490, c: "info" }, { n: "Infographic Template", v: 480, c: "info" },
      { n: "Timeline Infographic", v: 460, c: "info" }, { n: "Process Infographic", v: 450, c: "info" },
      { n: "Statistical Chart", v: 440, c: "info" }, { n: "Flowchart Design", v: 430, c: "info" },
      { n: "Comparison Chart", v: 420, c: "info" }, { n: "Icon Infographic", v: 410, c: "info" },
      { n: "Map Infographic", v: 400, c: "info" }, { n: "Pie Chart Design", v: 390, c: "info" },
      { n: "Gantt Chart", v: 370, c: "info" }, { n: "Report Design", v: 380, c: "info" },
      { n: "Dashboard Metrics", v: 445, c: "info" }, { n: "Data Storytelling", v: 465, c: "info" },
      { n: "Midjourney Prompts", v: 500, c: "ai" }, { n: "Stable Diffusion", v: 490, c: "ai" },
      { n: "AI Image Generation", v: 480, c: "ai" }, { n: "Adobe Firefly", v: 470, c: "ai" },
      { n: "DALL-E Design", v: 460, c: "ai" }, { n: "Generative AI Art", v: 475, c: "ai" },
      { n: "Prompt Engineering", v: 450, c: "ai" }, { n: "AI Logo Generator", v: 440, c: "ai" },
      { n: "Text to Image AI", v: 465, c: "ai" }, { n: "AI Upscaling", v: 420, c: "ai" },
      { n: "ControlNet", v: 400, c: "ai" }, { n: "AI Color Palette", v: 410, c: "ai" },
      { n: "Neural Style Transfer", v: 430, c: "ai" }, { n: "AI Illustration", v: 445, c: "ai" },
      { n: "Runway ML", v: 390, c: "ai" }, { n: "Canva AI", v: 380, c: "ai" },
      { n: "Kling AI Video", v: 370, c: "ai" }, { n: "AI Video Generation", v: 460, c: "ai" },
      { n: "Leonardo AI", v: 455, c: "ai" }, { n: "Ideogram AI", v: 440, c: "ai" },
      { n: "Video Editing", v: 500, c: "video" }, { n: "After Effects", v: 490, c: "video" },
      { n: "Premiere Pro", v: 480, c: "video" }, { n: "Color Grading", v: 470, c: "video" },
      { n: "Thumbnail Design", v: 460, c: "video" }, { n: "YouTube Banner", v: 450, c: "video" },
      { n: "Lower Thirds", v: 420, c: "video" }, { n: "Title Animation", v: 430, c: "video" },
      { n: "Green Screen Edit", v: 400, c: "video" }, { n: "Video Transition", v: 410, c: "video" },
      { n: "Subtitles Design", v: 390, c: "video" }, { n: "Intro Outro", v: 380, c: "video" },
      { n: "DaVinci Resolve", v: 440, c: "video" }, { n: "LUT Design", v: 370, c: "video" },
      { n: "Screen Recording", v: 360, c: "video" }, { n: "Video Template", v: 420, c: "video" },
      { n: "Reels Editing", v: 465, c: "video" }, { n: "Short Form Video", v: 455, c: "video" },
      { n: "Lottie Animation", v: 470, c: "motion" }, { n: "CSS Animation", v: 460, c: "motion" },
      { n: "Micro Animation", v: 450, c: "motion" }, { n: "Loading Animation", v: 440, c: "motion" },
      { n: "Parallax Effect", v: 460, c: "motion" }, { n: "Scroll Animation", v: 450, c: "motion" },
      { n: "Rive Animation", v: 430, c: "motion" }, { n: "Kinetic Typography", v: 470, c: "motion" },
      { n: "SVG Animation", v: 460, c: "motion" }, { n: "3D Animation", v: 480, c: "motion" },
      { n: "Transition Design", v: 420, c: "motion" }, { n: "Easing Curves", v: 400, c: "motion" },
      { n: "Frame by Frame", v: 390, c: "motion" }, { n: "Spline 3D", v: 440, c: "motion" },
      { n: "GSAP Animation", v: 460, c: "motion" }, { n: "UI Motion Design", v: 455, c: "motion" },
      { n: "Instagram Post", v: 490, c: "post" }, { n: "Reel Cover Design", v: 480, c: "post" },
      { n: "Story Design", v: 470, c: "post" }, { n: "Carousel Design", v: 460, c: "post" },
      { n: "LinkedIn Banner", v: 440, c: "post" }, { n: "Twitter Header", v: 430, c: "post" },
      { n: "Facebook Cover", v: 420, c: "post" }, { n: "Pinterest Pin Design", v: 410, c: "post" },
      { n: "Social Media Kit", v: 450, c: "post" }, { n: "Post Template", v: 400, c: "post" },
      { n: "Highlight Cover", v: 390, c: "post" }, { n: "Quote Design", v: 380, c: "post" },
      { n: "Meme Design", v: 360, c: "post" }, { n: "Event Poster Social", v: 370, c: "post" },
      { n: "Content Grid", v: 445, c: "post" }, { n: "Brand Post Design", v: 435, c: "post" },
      { n: "Brand Guidelines", v: 490, c: "brand" }, { n: "Style Guide", v: 480, c: "brand" },
      { n: "Color Palette Branding", v: 470, c: "brand" }, { n: "Font Pairing", v: 460, c: "brand" },
      { n: "Logo Variations", v: 450, c: "brand" }, { n: "Brand Voice", v: 420, c: "brand" },
      { n: "Visual Identity", v: 440, c: "brand" }, { n: "Stationery Design", v: 400, c: "brand" },
      { n: "Brand Mockup", v: 430, c: "brand" }, { n: "Logomark Design", v: 410, c: "brand" },
      { n: "Brand Story", v: 390, c: "brand" }, { n: "Brand Architecture", v: 405, c: "brand" },
      { n: "Magazine Layout", v: 460, c: "print" }, { n: "Book Cover Design", v: 450, c: "print" },
      { n: "Flyer Design", v: 440, c: "print" }, { n: "Business Card", v: 430, c: "print" },
      { n: "Brochure Layout", v: 420, c: "print" }, { n: "Packaging Design", v: 470, c: "print" },
      { n: "Label Design", v: 400, c: "print" }, { n: "Annual Report", v: 390, c: "print" },
      { n: "Newspaper Layout", v: 380, c: "print" }, { n: "Menu Design", v: 370, c: "print" },
      { n: "Letterhead Design", v: 360, c: "print" }, { n: "Catalog Design", v: 350, c: "print" },
      { n: "Tote Bag Design", v: 330, c: "print" }, { n: "Zine Layout", v: 310, c: "print" },
      { n: "Blender 3D Design", v: 490, c: "3d" }, { n: "Cinema 4D", v: 480, c: "3d" },
      { n: "3D Typography", v: 470, c: "3d" }, { n: "3D Product Render", v: 460, c: "3d" },
      { n: "Photorealistic Render", v: 450, c: "3d" }, { n: "3D Character Design", v: 440, c: "3d" },
      { n: "Octane Render", v: 430, c: "3d" }, { n: "Low Poly Design", v: 420, c: "3d" },
      { n: "3D Logo Design", v: 410, c: "3d" }, { n: "Spline Design", v: 400, c: "3d" },
      { n: "Glass Morphism 3D", v: 390, c: "3d" }, { n: "Metaverse Design", v: 380, c: "3d" },
      { n: "Substance Painter", v: 430, c: "3d" }, { n: "ZBrush Sculpting", v: 420, c: "3d" },
      { n: "Icon Set Design", v: 490, c: "icon" }, { n: "App Icon Design", v: 480, c: "icon" },
      { n: "Outline Icon", v: 460, c: "icon" }, { n: "Filled Icon Style", v: 450, c: "icon" },
      { n: "Icon Grid System", v: 440, c: "icon" }, { n: "Material Icons", v: 430, c: "icon" },
      { n: "Favicon Design", v: 420, c: "icon" }, { n: "Duotone Icons", v: 410, c: "icon" },
      { n: "Line Icon Design", v: 400, c: "icon" }, { n: "3D Icon Design", v: 390, c: "icon" },
      { n: "Icon Animation", v: 380, c: "icon" }, { n: "Pictogram Design", v: 370, c: "icon" },
      { n: "Icon Library", v: 445, c: "icon" }, { n: "Custom Icon Set", v: 455, c: "icon" },
      { n: "Icon Consistency", v: 430, c: "icon" }, { n: "Icon Sizing System", v: 395, c: "icon" },
      { n: "Vector Illustration", v: 490, c: "vector" }, { n: "Flat Illustration", v: 480, c: "vector" },
      { n: "Line Art Style", v: 470, c: "vector" }, { n: "Editorial Illustration", v: 460, c: "vector" },
      { n: "Character Illustration", v: 450, c: "vector" }, { n: "Scene Illustration", v: 440, c: "vector" },
      { n: "Geometric Illustration", v: 430, c: "vector" }, { n: "Pen Tool Art", v: 420, c: "vector" },
      { n: "SVG Art", v: 410, c: "vector" }, { n: "Bezier Curves", v: 400, c: "vector" },
      { n: "Adobe Illustrator", v: 480, c: "vector" }, { n: "Affinity Designer", v: 445, c: "vector" },
      { n: "Inkscape Design", v: 380, c: "vector" }, { n: "Pattern Design", v: 460, c: "vector" },
      { n: "Surface Pattern", v: 440, c: "vector" }, { n: "Folk Art Illustration", v: 360, c: "vector" },
      { n: "Abstract Vector Art", v: 390, c: "vector" }, { n: "Hand-Drawn Style", v: 420, c: "vector" },
      { n: "Photo Retouching", v: 490, c: "photo" }, { n: "Photoshop Editing", v: 480, c: "photo" },
      { n: "Lightroom Preset", v: 470, c: "photo" }, { n: "Background Removal", v: 460, c: "photo" },
      { n: "Photo Manipulation", v: 450, c: "photo" }, { n: "Color Correction", v: 440, c: "photo" },
      { n: "Skin Retouching", v: 430, c: "photo" }, { n: "Product Photo Edit", v: 420, c: "photo" },
      { n: "Photo Compositing", v: 410, c: "photo" }, { n: "HDR Photography", v: 390, c: "photo" },
      { n: "Black & White Edit", v: 380, c: "photo" }, { n: "Frequency Separation", v: 370, c: "photo" },
      { n: "Dodge and Burn", v: 360, c: "photo" }, { n: "AI Photo Enhancement", v: 440, c: "photo" },
      { n: "Font Pairing", v: 490, c: "type" }, { n: "Display Typography", v: 480, c: "type" },
      { n: "Serif Font Design", v: 470, c: "type" }, { n: "Sans Serif Design", v: 460, c: "type" },
      { n: "Lettering Design", v: 450, c: "type" }, { n: "Custom Typeface", v: 440, c: "type" },
      { n: "Variable Font", v: 430, c: "type" }, { n: "Type Hierarchy", v: 420, c: "type" },
      { n: "Typographic Poster", v: 410, c: "type" }, { n: "Hand Lettering", v: 400, c: "type" },
      { n: "Calligraphy Design", v: 390, c: "type" }, { n: "Type Anatomy", v: 370, c: "type" },
      { n: "Kerning & Tracking", v: 380, c: "type" }, { n: "Headline Font", v: 440, c: "type" },
      { n: "Web Typography", v: 450, c: "type" }, { n: "Type Scale", v: 430, c: "type" },
      { n: "Color Palette Design", v: 490, c: "color" }, { n: "Complementary Colors", v: 480, c: "color" },
      { n: "Analogous Color", v: 470, c: "color" }, { n: "Triadic Color Scheme", v: 460, c: "color" },
      { n: "Monochromatic Design", v: 450, c: "color" }, { n: "Color Psychology", v: 440, c: "color" },
      { n: "Brand Color System", v: 430, c: "color" }, { n: "Color Contrast", v: 420, c: "color" },
      { n: "Color Grading Design", v: 410, c: "color" }, { n: "Pantone Colors", v: 400, c: "color" },
      { n: "CMYK vs RGB", v: 380, c: "color" }, { n: "Dark Color Palette", v: 390, c: "color" },
      { n: "Pastel Palette", v: 370, c: "color" }, { n: "Neon Color Scheme", v: 360, c: "color" },
      { n: "UX Copy Writing", v: 490, c: "ux" }, { n: "Error Message Design", v: 470, c: "ux" },
      { n: "Microcopy Design", v: 480, c: "ux" }, { n: "CTA Copy", v: 460, c: "ux" },
      { n: "Onboarding Copy", v: 450, c: "ux" }, { n: "Placeholder Text", v: 420, c: "ux" },
      { n: "Tooltip Content", v: 410, c: "ux" }, { n: "Help Center Design", v: 400, c: "ux" },
      { n: "Conversational UI", v: 440, c: "ux" }, { n: "Accessibility Copy", v: 430, c: "ux" },
      { n: "Content Hierarchy", v: 445, c: "ux" }, { n: "Reading Flow UX", v: 415, c: "ux" },
      { n: "Dashboard UI Design", v: 490, c: "dash" }, { n: "Analytics Dashboard", v: 480, c: "dash" },
      { n: "Admin Panel Design", v: 470, c: "dash" }, { n: "KPI Widget", v: 460, c: "dash" },
      { n: "Data Table Design", v: 450, c: "dash" }, { n: "Chart Widget", v: 440, c: "dash" },
      { n: "Dark Dashboard", v: 430, c: "dash" }, { n: "SaaS Dashboard", v: 475, c: "dash" },
      { n: "Real-time Dashboard", v: 460, c: "dash" }, { n: "CRM Dashboard", v: 450, c: "dash" },
      { n: "Finance Dashboard", v: 440, c: "dash" }, { n: "Sidebar Navigation", v: 420, c: "dash" },
      { n: "Filter UI Design", v: 400, c: "dash" }, { n: "Responsive Dashboard", v: 465, c: "dash" },
      { n: "Email Template Design", v: 490, c: "email" }, { n: "Newsletter Layout", v: 480, c: "email" },
      { n: "HTML Email Design", v: 470, c: "email" }, { n: "Email Header Design", v: 460, c: "email" },
      { n: "Transactional Email", v: 440, c: "email" }, { n: "Welcome Email Design", v: 430, c: "email" },
      { n: "Email CTA Design", v: 420, c: "email" }, { n: "Email Accessibility", v: 410, c: "email" },
      { n: "Dark Mode Email", v: 400, c: "email" }, { n: "Promotional Email", v: 450, c: "email" },
      { n: "Email Footer Design", v: 390, c: "email" }, { n: "Responsive Email", v: 460, c: "email" },
    ];

    // ──────────────────────────────────────────────
    // STATE
    // ──────────────────────────────────────────────
    let activeCat = 'all';
    let searchQ = '';
    const chart = echarts.init(document.getElementById('chart'));

    // ──────────────────────────────────────────────
    // DROPDOWN
    // ──────────────────────────────────────────────
    function buildDD(filter = '') {
      const list = document.getElementById('ddList');
      const f = filter.toLowerCase();
      let html = '';

      html += `<div class="dm-section">Overview</div>`;
      if (!f || 'all categories'.includes(f)) {
        html += ddItem('all', 'var(--accent)', '🎨', 'All Categories', allData.length);
      }

      html += `<div class="dm-section">Design Categories</div>`;
      Object.entries(cats).forEach(([k, v]) => {
        if (f && !v.label.toLowerCase().includes(f)) return;
        const cnt = allData.filter(d => d.c === k).length;
        html += ddItem(k, v.color, v.icon, v.label, cnt);
      });

      list.innerHTML = html || `<div style="padding:14px 10px;font-size:11px;color:var(--ink-3);text-align:center">No results for "${filter}"</div>`;
    }

    function ddItem(k, color, icon, label, cnt) {
      const active = activeCat === k;
      return `<div class="dm-item${active ? ' active' : ''}"
      onclick="pickCat('${k}')"
      role="option"
      aria-selected="${active}"
      tabindex="0"
      onkeydown="if(event.key==='Enter')pickCat('${k}')">
      <span class="di-dot" style="background:${color}"></span>
      <span class="di-emoji">${icon}</span>
      <span class="di-name">${label}</span>
      <span class="di-cnt">${cnt}</span>
    </div>`;
    }

    function filterDD(v) { buildDD(v); }

    function toggleDropdown() {
      const btn = document.getElementById('ddBtn');
      const menu = document.getElementById('ddMenu');
      const open = menu.classList.toggle('open');
      btn.classList.toggle('open', open);
      btn.setAttribute('aria-expanded', String(open));
      if (open) {
        document.getElementById('ddSearch').value = '';
        buildDD('');
        setTimeout(() => document.getElementById('ddSearch').focus(), 60);
      }
    }

    function closeDropdown() {
      document.getElementById('ddMenu').classList.remove('open');
      document.getElementById('ddBtn').classList.remove('open');
      document.getElementById('ddBtn').setAttribute('aria-expanded', 'false');
    }

    document.addEventListener('click', e => {
      if (!document.getElementById('ddWrap').contains(e.target)) closeDropdown();
    });
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape') closeDropdown();
    });

    function pickCat(k) {
      activeCat = k;
      closeDropdown();
      buildDD('');
      const meta = k === 'all'
        ? { label: 'All Categories', color: 'var(--accent)', icon: '🎨' }
        : cats[k];
      document.getElementById('dbDot').style.background = meta.color;
      document.getElementById('dbEmoji').textContent = meta.icon;
      document.getElementById('dbLabel').textContent = meta.label;
      document.getElementById('wmText').textContent = meta.label + ' · Design SEO';
      renderCloud();
    }

    // ──────────────────────────────────────────────
    // DATA FILTER
    // ──────────────────────────────────────────────
    function getFiltered() {
      let d = activeCat === 'all' ? allData : allData.filter(x => x.c === activeCat);
      if (searchQ) d = d.filter(x => x.n.toLowerCase().includes(searchQ.toLowerCase()));
      return d;
    }

    // ──────────────────────────────────────────────
    // RENDER CLOUD
    // ──────────────────────────────────────────────
    function renderCloud() {
      const data = getFiltered();

      const chartData = data.map(d => {
        const color = cats[d.c]?.color || '#fd6204';
        const alpha = d.v > 470 ? 'ff' : d.v > 420 ? 'dd' : d.v > 370 ? 'bb' : '99';
        return {
          name: d.n,
          value: d.v,
          textStyle: {
            color: color + alpha,
            fontFamily: "'Mona Sans', sans-serif",
            fontWeight: d.v > 470 ? '900' : d.v > 420 ? '700' : '600',
          }
        };
      });

      chart.setOption({
        backgroundColor: 'transparent',
        tooltip: {
          show: true,
          formatter: p => {
            const item = allData.find(x => x.n === p.name);
            const meta = cats[item?.c];
            const color = meta?.color || '#fd6204';
            return `<div style="font-family:'Mona Sans',sans-serif;min-width:150px;line-height:1.4">
            <div style="display:flex;align-items:center;gap:6px;margin-bottom:6px">
              <span style="font-size:15px">${meta?.icon || ''}</span>
              <span style="font-size:13px;font-weight:800;color:#1c1a17">${p.name}</span>
            </div>
            <div style="font-size:10px;color:#a8a49b;font-weight:700;text-transform:uppercase;letter-spacing:.08em;margin-bottom:6px">${meta?.label || ''}</div>
            <div style="display:flex;align-items:center;justify-content:space-between;padding-top:6px;border-top:1px solid rgba(28,26,23,0.07)">
              <span style="font-size:10px;font-weight:600;color:#706c63">SEO Score</span>
              <span style="font-size:15px;font-weight:900;color:${color}">${p.value}</span>
            </div>
          </div>`;
          },
          backgroundColor: '#ffffff',
          borderColor: 'rgba(28,26,23,0.11)',
          borderWidth: 1,
          padding: [10, 14],
          extraCssText: 'border-radius:10px;box-shadow:0 8px 28px rgba(0,0,0,0.10);'
        },
        series: [{
          type: 'wordCloud',
          shape: 'rect',
          width: '98%', height: '96%',
          left: 'center', top: 'center',
          gridSize: 8,
          sizeRange: [11, 58],
          rotationRange: [-60, 60],
          rotationStep: 30,
          rotate: () => {
            if (Math.random() > 0.7) {
              const a = [-45, -30, 30, 45];
              return a[Math.floor(Math.random() * a.length)];
            }
            return 0;
          },
          textStyle: { fontFamily: "'Mona Sans', sans-serif", fontWeight: '700' },
          emphasis: { textStyle: { textShadowBlur: 10, textShadowColor: 'rgba(253,98,4,0.22)' } },
          data: chartData
        }]
      }, true);

      updateStats(data);
      updateTrending(data);
    }

    // ──────────────────────────────────────────────
    // STATS
    // ──────────────────────────────────────────────
    function updateStats(data) {
      const total = data.length;
      const top = total ? data.reduce((a, b) => b.v > a.v ? b : a) : { n: '—', v: 0 };
      const avg = total ? Math.round(data.reduce((s, d) => s + d.v, 0) / total) : 0;
      cntAnim('st-kw', total);
      cntAnim('st-avg', avg);
      document.getElementById('st-top').textContent =
        top.n.split(' ').slice(0, 2).join(' ');
    }

    function cntAnim(id, target) {
      const el = document.getElementById(id);
      if (!el) return;
      let v = 0;
      const step = Math.max(1, Math.ceil(target / 16));
      const t = setInterval(() => {
        v = Math.min(v + step, target);
        el.textContent = v;
        if (v >= target) clearInterval(t);
      }, 28);
    }

    // ──────────────────────────────────────────────
    // TRENDING
    // ──────────────────────────────────────────────
    function updateTrending(data) {
      const sorted = [...data].sort((a, b) => b.v - a.v).slice(0, 18);
      document.getElementById('trendScroll').innerHTML = sorted.map((d, i) => {
        const color = cats[d.c]?.color || '#fd6204';
        return `<div class="tc" title="${d.n} · ${cats[d.c]?.label || ''} · Score ${d.v}">
        <span class="tc-rank">${String(i + 1).padStart(2, '0')}</span>
        <span class="tc-dot" style="background:${color}"></span>
        <span class="tc-name">${d.n}</span>
        <span class="tc-score">${d.v}</span>
      </div>`;
      }).join('');
    }

    // ──────────────────────────────────────────────
    // ACTIONS
    // ──────────────────────────────────────────────
    function handleSearch(q) { searchQ = q; renderCloud(); }

    function refresh() {
      const ico = document.getElementById('rIco');
      ico.classList.add('spin');
      setTimeout(() => { renderCloud(); ico.classList.remove('spin'); }, 450);
    }

    function copyKw() {
      const data = getFiltered();
      const text = [...data].sort((a, b) => b.v - a.v).map(d => d.n).join(', ');
      navigator.clipboard.writeText(text).then(() => {
        const lbl = document.getElementById('copyLabel');
        lbl.textContent = '✓ Copied!';
        setTimeout(() => { lbl.textContent = 'Copy'; }, 2200);
      });
    }

    // ──────────────────────────────────────────────
    // CLOCK
    // ──────────────────────────────────────────────
    const MONTHS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    function tick() {
      const n = new Date();
      document.getElementById('dateStr').textContent =
        `${MONTHS[n.getMonth()]} ${n.getDate()}, ${n.getFullYear()}`;
      document.getElementById('clockStr').textContent =
        n.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
    }
    setInterval(tick, 1000);
    tick();

    // ──────────────────────────────────────────────
    // INIT
    // ──────────────────────────────────────────────
    window.addEventListener('resize', () => chart.resize());
    // init dot colour
    document.getElementById('dbDot').style.background = 'var(--accent)';
    buildDD('');
    renderCloud();
  </script>
</body>

</html>