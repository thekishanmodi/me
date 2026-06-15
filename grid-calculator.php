<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Free online grid calculator by Kishan Modi. Design pixel-perfect grids with columns, gutters & margins for your UI/UX and web design projects.">
  <meta name="keywords"
    content="Grid Calculator, UI/UX Grid Tool, Column Calculator, Web Design Grid, Pixel Perfect Grids, Kishan Modi, #thekishanmodi">
  <meta name="author" content="Kishan Modi">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Grid Calculator | Kishan Modi">
  <meta property="og:description"
    content="Design pixel-perfect grids with columns, gutters & margins. Free UI/UX grid calculator.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://thekishanmodi.com/grid-calculator.php">
  <meta property="og:image" content="https://thekishanmodi.com/assets/images/favicon.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Grid Calculator | Kishan Modi">
  <meta name="twitter:description" content="Design pixel-perfect grids with columns, gutters & margins.">
  <title>Grid Calculator | #thekishanmodi</title>
  <link rel='shortcut icon' type='image/x-icon' href='assets/images/favicon.png' />

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
      --ink: #1a1612;
      --ink2: #4a4540;
      --ink3: #9a9490;
      --ink4: #cac7c2;
      --paper: #faf9f6;
      --paper2: #f2f0eb;
      --paper3: #e8e4dc;
      --white: #ffffff;
      --accent: #fd6204;
      --accent-l: #fef0ea;
      --col-bg: #ddeeff;
      --col-fg: #1a5fa8;
      --col-bdr: #b8d8f8;
      --gut-bg: #faf9f6;
      --gut-bdr: #ddd9d0;
      --mar-bg: #f2f0eb;
      --mar-fg: #9a9490;
      --mar-bdr: #e0dbd0;
      --radius: 10px;
      --shadow: 0 1px 3px rgba(26, 22, 18, 0.08), 0 4px 16px rgba(26, 22, 18, 0.06);
    }

    html {
      font-size: 14px;
    }

    body {
      background: var(--paper);
      background-image:
        radial-gradient(circle at 20% 0%, rgba(232, 69, 10, 0.04) 0%, transparent 50%),
        radial-gradient(circle at 80% 100%, rgba(26, 95, 168, 0.04) 0%, transparent 50%);
      color: var(--ink);
      font-family: 'Mona Sans', monospace;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 48px 24px 80px;
    }

    /* ─── Page Header ─── */
    .page-header {
      width: 100%;
      max-width: 960px;
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      margin-bottom: 28px;
      padding-bottom: 20px;
      border-bottom: 1.5px solid var(--ink);
    }

    .page-header-left {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .page-title {
      font-family: 'Mona Sans', serif;
      font-size: 32px;
      font-weight: 800;
      color: var(--ink);
      line-height: 1;
      font-style: italic;
      letter-spacing: -0.5px;
      display: flex;
      align-items: center;
      gap: 0.25rem;
    }

    .page-title em {
      color: var(--accent);
    }

    .page-sub {
      font-size: 10px;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--ink3);
      margin-top: 5px;
    }

    .badge {
      font-size: 14px;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--ink3);
      border: 1px solid var(--ink4);
      border-radius: 4px;
      padding: 4px 8px;
      text-decoration: none;
    }

    /* ─── Main Card ─── */
    .card {
      width: 100%;
      max-width: 960px;
      background: var(--white);
      border: 1.5px solid var(--ink);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      overflow: hidden;
    }

    /* ─── Toolbar ─── */
    .toolbar {
      display: flex;
      align-items: stretch;
      border-bottom: 1.5px solid var(--ink);
      background: var(--paper2);
    }

    .mode-tabs {
      display: flex;
      flex-direction: column;
      border-right: 1.5px solid var(--ink);
      background: var(--paper);
      min-width: 72px;
    }

    .mode-btn {
      font-family: 'Mona Sans', monospace;
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      padding: 0 16px;
      flex: 1;
      display: flex;
      align-items: center;
      gap: 8px;
      background: transparent;
      border: none;
      color: var(--ink3);
      cursor: pointer;
      white-space: nowrap;
      transition: all 0.15s ease;
      position: relative;
      min-height: 46px;
    }

    .mode-btn:first-child {
      border-bottom: 1px solid var(--paper3);
    }

    .mode-btn .mode-icon {
      width: 14px;
      height: 14px;
      display: flex;
      gap: 2px;
      align-items: center;
      flex-shrink: 0;
    }

    .mode-btn[data-mode="columns"] .mode-icon {
      flex-direction: row;
      align-items: stretch;
    }

    .mode-btn[data-mode="columns"] .mode-icon span {
      display: block;
      width: 3px;
      flex: 1;
      background: currentColor;
      border-radius: 1px;
    }

    .mode-btn[data-mode="rows"] .mode-icon {
      flex-direction: column;
      justify-content: center;
    }

    .mode-btn[data-mode="rows"] .mode-icon span {
      display: block;
      height: 3px;
      width: 100%;
      background: currentColor;
      border-radius: 1px;
    }

    .mode-btn:hover {
      color: var(--ink);
      background: var(--paper2);
    }

    .mode-btn.active {
      color: var(--accent);
      background: var(--accent-l);
    }

    .mode-btn.active::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 3px;
      background: var(--accent);
      border-radius: 0 2px 2px 0;
    }

    .inputs-section {
      flex: 1;
      display: flex;
      flex-direction: column;
      min-width: 0;
    }

    .inputs-row {
      display: flex;
      flex-wrap: wrap;
      align-items: stretch;
      flex: 1;
    }

    .field {
      display: flex;
      flex-direction: column;
      padding: 12px 16px 10px;
      border-right: 1px solid var(--paper3);
      gap: 4px;
      position: relative;
      transition: background 0.12s;
      flex: 1;
      min-width: 90px;
    }

    .field:last-child {
      border-right: none;
    }

    .field:hover {
      background: rgba(255, 255, 255, 0.7);
    }

    .field:focus-within {
      background: var(--white);
    }

    .field:focus-within::after {
      content: '';
      position: absolute;
      bottom: -1.5px;
      left: 0;
      right: 0;
      height: 2px;
      background: var(--accent);
      z-index: 1;
    }

    .field label {
      font-size: 9px;
      font-weight: 500;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--ink3);
      user-select: none;
    }

    .field-input-wrap {
      display: flex;
      align-items: center;
      gap: 4px;
    }

    .field input {
      font-family: 'Mona Sans', monospace;
      font-size: 20px;
      font-weight: 400;
      color: var(--ink);
      background: transparent;
      border: none;
      outline: none;
      width: 62px;
      flex-shrink: 1;
      min-width: 40px;
      -moz-appearance: textfield;
      appearance: textfield;
      line-height: 1;
    }

    .field input::-webkit-outer-spin-button,
    .field input::-webkit-inner-spin-button {
      -webkit-appearance: none;
    }

    .px-label {
      font-size: 10px;
      color: var(--ink4);
      flex-shrink: 0;
    }

    .stepper {
      display: flex;
      flex-direction: column;
      gap: 2px;
      margin-left: auto;
      flex-shrink: 0;
    }

    .step-btn {
      width: 20px;
      height: 15px;
      background: var(--paper2);
      border: 1px solid var(--paper3);
      border-radius: 3px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--ink3);
      transition: all 0.1s;
      padding: 0;
    }

    .step-btn:hover {
      background: var(--ink);
      border-color: var(--ink);
      color: var(--white);
    }

    .step-btn:active {
      transform: scale(0.88);
    }

    .step-btn svg {
      width: 8px;
      height: 8px;
      display: block;
    }

    /* ─── Stats Bar ─── */
    .stats-bar {
      display: flex;
      align-items: stretch;
      border-top: 1px solid var(--paper3);
      background: var(--paper);
      flex-wrap: wrap;
    }

    .stat {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 8px 14px;
      border-right: 1px solid var(--paper3);
      flex: 1;
      min-width: 80px;
    }

    .stat:last-child {
      border-right: none;
    }

    .stat-label {
      font-size: 9px;
      font-weight: 500;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--ink3);
      white-space: nowrap;
    }

    .stat-value {
      font-size: 13px;
      font-weight: 500;
      color: var(--ink);
      display: flex;
      align-items: baseline;
      gap: 2px;
      margin-left: auto;
    }

    .stat-value .unit {
      font-size: 9px;
      color: var(--ink3);
      font-weight: 400;
    }

    .stat.accent-stat .stat-value {
      color: var(--accent);
    }

    .stat-diff {
      font-size: 9px;
      color: var(--ink3);
      margin-left: 4px;
      white-space: nowrap;
    }

    .stat-diff.negative {
      color: #cc2200;
    }

    .stat-diff.ok {
      color: #1a8a2e;
    }

    /* ─── Preview Area ─── */
    .preview-area {
      padding: 24px 28px 28px;
      background: var(--white);
    }

    .preview-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 14px;
    }

    .preview-title {
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--ink3);
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .preview-title::before {
      content: '';
      display: block;
      width: 16px;
      height: 1.5px;
      background: var(--ink3);
    }

    /* ─── Export Bar ─── */
    .export-bar {
      display: flex;
      align-items: center;
      gap: 6px;
      flex-wrap: wrap;
    }

    .export-label {
      font-size: 9px;
      font-weight: 500;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--ink4);
      margin-right: 2px;
    }

    .export-btn {
      font-family: 'Mona Sans', monospace;
      font-size: 9px;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      padding: 5px 10px;
      border-radius: 5px;
      border: 1.5px solid var(--paper3);
      background: var(--paper2);
      color: var(--ink2);
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 5px;
      transition: all 0.14s ease;
      position: relative;
      overflow: hidden;
      white-space: nowrap;
    }

    .export-btn svg {
      width: 11px;
      height: 11px;
      flex-shrink: 0;
    }

    .export-btn:hover {
      border-color: var(--ink);
      background: var(--ink);
      color: var(--white);
    }

    .export-btn:active {
      transform: scale(0.95);
    }

    .export-btn.copied {
      border-color: #1a8a2e;
      background: #e8f7ec;
      color: #1a8a2e;
    }

    .export-btn.btn-png {
      border-color: var(--col-bdr);
      color: var(--col-fg);
      background: #eef6ff;
    }

    .export-btn.btn-png:hover {
      border-color: var(--col-fg);
      background: var(--col-fg);
      color: var(--white);
    }

    .export-btn.btn-svg {
      border-color: #d8c8f8;
      color: #6b35c9;
      background: #f5f0ff;
    }

    .export-btn.btn-svg:hover {
      border-color: #6b35c9;
      background: #6b35c9;
      color: var(--white);
    }

    .export-btn.btn-css {
      border-color: #ffd8b0;
      color: #b05a00;
      background: #fff8f0;
    }

    .export-btn.btn-css:hover {
      border-color: var(--accent);
      background: var(--accent);
      color: var(--white);
    }

    .export-btn.btn-figma {
      border-color: #c8f0d8;
      color: #1a8a4a;
      background: #f0fff5;
    }

    .export-btn.btn-figma:hover {
      border-color: #1a8a4a;
      background: #1a8a4a;
      color: var(--white);
    }

    .export-btn.btn-json {
      border-color: #f0d8b0;
      color: #8a5a00;
      background: #fffbf0;
    }

    .export-btn.btn-json:hover {
      border-color: #8a5a00;
      background: #8a5a00;
      color: var(--white);
    }

    /* ─── Ruler ─── */
    .ruler {
      height: 22px;
      width: 100%;
      display: flex;
      overflow: hidden;
      border-radius: 5px 5px 0 0;
      border: 1px solid var(--paper3);
      border-bottom: none;
      background: var(--paper2);
    }

    .ruler-seg {
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 8px;
      color: var(--ink3);
      border-right: 1px solid var(--paper3);
      letter-spacing: 0.04em;
      flex-shrink: 0;
      overflow: hidden;
    }

    .ruler-seg.r-col {
      background: rgba(26, 95, 168, 0.07);
      color: var(--col-fg);
      font-weight: 500;
    }

    .ruler-seg.r-gut {
      background: transparent;
    }

    .ruler-seg.r-mar {
      background: rgba(154, 148, 144, 0.05);
    }

    /* Preview containers */
    #horizontalPreview {
      width: 100%;
      height: 90px;
      display: flex;
      overflow: hidden;
      border-radius: 0 0 8px 8px;
      border: 1px solid var(--ink4);
    }

    #verticalPreview {
      width: 100%;
      height: 270px;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      border-radius: 8px;
      border: 1px solid var(--ink4);
    }

    /* Segments */
    .seg {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      position: relative;
      overflow: visible;
      cursor: default;
      transition: filter 0.15s;
    }

    .seg:hover {
      filter: brightness(0.94);
    }

    .seg-label {
      font-family: 'Mona Sans', monospace;
      font-size: 9px;
      font-weight: 500;
      position: relative;
      z-index: 1;
      letter-spacing: 0.04em;
      pointer-events: none;
      user-select: none;
    }

    .seg.s-col {
      background: var(--col-bg);
      border-right: 1px solid var(--col-bdr);
      border-left: 1px solid var(--col-bdr);
    }

    .seg.s-col .seg-label {
      color: var(--col-fg);
    }

    .seg.s-col::after {
      content: '';
      position: absolute;
      inset: 0;
      background: repeating-linear-gradient(135deg, transparent, transparent 10px, rgba(26, 95, 168, 0.05) 10px, rgba(26, 95, 168, 0.05) 11px);
      pointer-events: none;
    }

    .seg.s-gut {
      background: var(--gut-bg);
      border-right: 1px dashed var(--gut-bdr);
      border-left: 1px dashed var(--gut-bdr);
    }

    .seg.s-gut .seg-label {
      color: var(--ink4);
    }

    .seg.s-mar {
      background: var(--mar-bg);
    }

    .seg.s-mar .seg-label {
      color: var(--mar-fg);
    }

    .seg.s-row {
      background: var(--col-bg);
      border-bottom: 1px solid var(--col-bdr);
      border-top: 1px solid var(--col-bdr);
    }

    .seg.s-row .seg-label {
      color: var(--col-fg);
    }

    .seg.s-row::after {
      content: '';
      position: absolute;
      inset: 0;
      background: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(26, 95, 168, 0.05) 10px, rgba(26, 95, 168, 0.05) 11px);
      pointer-events: none;
    }

    .seg.s-vgut {
      background: var(--gut-bg);
      border-top: 1px dashed var(--gut-bdr);
      border-bottom: 1px dashed var(--gut-bdr);
    }

    .seg.s-vgut .seg-label {
      color: var(--ink4);
    }

    .seg.s-vmar {
      background: var(--mar-bg);
    }

    .seg.s-vmar .seg-label {
      color: var(--mar-fg);
    }

    /* Tooltip */
    .seg-tip {
      position: absolute;
      bottom: calc(100% + 7px);
      left: 50%;
      transform: translateX(-50%);
      background: var(--ink);
      color: var(--white);
      font-family: 'Mona Sans', monospace;
      font-size: 10px;
      padding: 4px 9px;
      border-radius: 5px;
      white-space: nowrap;
      pointer-events: none;
      opacity: 0;
      transition: opacity 0.12s;
      z-index: 100;
    }

    .seg-tip::after {
      content: '';
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%);
      border: 4px solid transparent;
      border-top-color: var(--ink);
    }

    .seg:hover .seg-tip {
      opacity: 1;
    }

    #verticalPreview .seg-tip {
      bottom: auto;
      top: 50%;
      left: calc(100% + 7px);
      transform: translateY(-50%);
    }

    #verticalPreview .seg-tip::after {
      top: 50%;
      left: -8px;
      transform: translateY(-50%);
      border: 4px solid transparent;
      border-right-color: var(--ink);
      border-top-color: transparent;
    }

    /* ─── Legend ─── */
    .legend {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-top: 18px;
      padding-top: 18px;
      border-top: 1px solid var(--paper3);
      flex-wrap: wrap;
    }

    .legend-item {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 10px;
      letter-spacing: 0.08em;
      color: var(--ink2);
    }

    .legend-swatch {
      width: 26px;
      height: 13px;
      border-radius: 3px;
      flex-shrink: 0;
    }

    .legend-hint {
      margin-left: auto;
      font-size: 9px;
      letter-spacing: 0.1em;
      color: var(--ink4);
    }

    /* ─── Toast ─── */
    .toast {
      position: fixed;
      bottom: 32px;
      left: 50%;
      transform: translateX(-50%) translateY(20px);
      background: var(--ink);
      color: var(--white);
      font-family: 'Mona Sans', monospace;
      font-size: 11px;
      font-weight: 500;
      letter-spacing: 0.08em;
      padding: 10px 20px;
      border-radius: 8px;
      opacity: 0;
      pointer-events: none;
      transition: all 0.22s ease;
      z-index: 9999;
      display: flex;
      align-items: center;
      gap: 8px;
      box-shadow: 0 4px 24px rgba(26, 22, 18, 0.22);
    }

    .toast.show {
      opacity: 1;
      transform: translateX(-50%) translateY(0);
    }

    /* ─── Animations ─── */
    .seg {
      animation: segIn 0.18s ease both;
    }

    @keyframes segIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .hidden {
      display: none !important;
    }

    .error-state {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
      width: 100%;
      color: var(--accent);
      font-size: 11px;
      letter-spacing: 0.06em;
      gap: 8px;
      background: var(--accent-l);
    }

    ::-webkit-scrollbar {
      width: 4px;
    }

    ::-webkit-scrollbar-thumb {
      background: var(--ink4);
      border-radius: 2px;
    }
  </style>
</head>

<body>

  <!-- Toast -->
  <div class="toast" id="toast"></div>

  <!-- Page Header -->
  <div class="page-header">
    <div class="page-header-left">
      <h1 class="page-title"><img src="assets/images/favicon.png" alt=""> Grid <em>Calculator</em></h1>
      <p class="page-sub">Layout System Utility</p>
    </div>
    <div>
      <a href="index.php" class="badge" target="_blank">#thekishanmodi</a>
    </div>
  </div>

  <!-- Card -->
  <div class="card">
    <div class="toolbar">

      <!-- Mode Tabs -->
      <div class="mode-tabs">
        <button class="mode-btn active" data-mode="columns">
          <span class="mode-icon"><span></span><span></span><span></span></span>
          Cols
        </button>
        <button class="mode-btn" data-mode="rows">
          <span class="mode-icon"><span></span><span></span><span></span></span>
          Rows
        </button>
      </div>

      <!-- Inputs + Stats -->
      <div class="inputs-section">

        <!-- Column inputs -->
        <div id="columnInputs" class="inputs-row">
          <div class="field">
            <label>Target Width</label>
            <div class="field-input-wrap">
              <input id="targetWidth" type="number" value="1400" min="1">
              <span class="px-label">px</span>
              <div class="stepper">
                <button class="step-btn" data-target="targetWidth" data-dir="1" data-step="10"><svg viewBox="0 0 8 8">
                    <path d="M4 2L7 6H1Z" fill="currentColor" />
                  </svg></button>
                <button class="step-btn" data-target="targetWidth" data-dir="-1" data-step="10"><svg viewBox="0 0 8 8">
                    <path d="M4 6L1 2H7Z" fill="currentColor" />
                  </svg></button>
              </div>
            </div>
          </div>
          <div class="field">
            <label>Columns</label>
            <div class="field-input-wrap">
              <input id="cols" type="number" value="12" min="1">
              <div class="stepper">
                <button class="step-btn" data-target="cols" data-dir="1" data-step="1"><svg viewBox="0 0 8 8">
                    <path d="M4 2L7 6H1Z" fill="currentColor" />
                  </svg></button>
                <button class="step-btn" data-target="cols" data-dir="-1" data-step="1"><svg viewBox="0 0 8 8">
                    <path d="M4 6L1 2H7Z" fill="currentColor" />
                  </svg></button>
              </div>
            </div>
          </div>
          <div class="field">
            <label>Gutter</label>
            <div class="field-input-wrap">
              <input id="gutterH" type="number" value="24" min="0">
              <span class="px-label">px</span>
              <div class="stepper">
                <button class="step-btn" data-target="gutterH" data-dir="1" data-step="1"><svg viewBox="0 0 8 8">
                    <path d="M4 2L7 6H1Z" fill="currentColor" />
                  </svg></button>
                <button class="step-btn" data-target="gutterH" data-dir="-1" data-step="1"><svg viewBox="0 0 8 8">
                    <path d="M4 6L1 2H7Z" fill="currentColor" />
                  </svg></button>
              </div>
            </div>
          </div>
          <div class="field">
            <label>Margin</label>
            <div class="field-input-wrap">
              <input id="marginH" type="number" value="24" min="0">
              <span class="px-label">px</span>
              <div class="stepper">
                <button class="step-btn" data-target="marginH" data-dir="1" data-step="1"><svg viewBox="0 0 8 8">
                    <path d="M4 2L7 6H1Z" fill="currentColor" />
                  </svg></button>
                <button class="step-btn" data-target="marginH" data-dir="-1" data-step="1"><svg viewBox="0 0 8 8">
                    <path d="M4 6L1 2H7Z" fill="currentColor" />
                  </svg></button>
              </div>
            </div>
          </div>
        </div>

        <!-- Row inputs -->
        <div id="rowInputs" class="inputs-row hidden">
          <div class="field">
            <label>Target Height</label>
            <div class="field-input-wrap">
              <input id="targetHeight" type="number" value="900" min="1">
              <span class="px-label">px</span>
              <div class="stepper">
                <button class="step-btn" data-target="targetHeight" data-dir="1" data-step="10"><svg viewBox="0 0 8 8">
                    <path d="M4 2L7 6H1Z" fill="currentColor" />
                  </svg></button>
                <button class="step-btn" data-target="targetHeight" data-dir="-1" data-step="10"><svg viewBox="0 0 8 8">
                    <path d="M4 6L1 2H7Z" fill="currentColor" />
                  </svg></button>
              </div>
            </div>
          </div>
          <div class="field">
            <label>Rows</label>
            <div class="field-input-wrap">
              <input id="rows" type="number" value="8" min="1">
              <div class="stepper">
                <button class="step-btn" data-target="rows" data-dir="1" data-step="1"><svg viewBox="0 0 8 8">
                    <path d="M4 2L7 6H1Z" fill="currentColor" />
                  </svg></button>
                <button class="step-btn" data-target="rows" data-dir="-1" data-step="1"><svg viewBox="0 0 8 8">
                    <path d="M4 6L1 2H7Z" fill="currentColor" />
                  </svg></button>
              </div>
            </div>
          </div>
          <div class="field">
            <label>Gutter</label>
            <div class="field-input-wrap">
              <input id="gutterV" type="number" value="24" min="0">
              <span class="px-label">px</span>
              <div class="stepper">
                <button class="step-btn" data-target="gutterV" data-dir="1" data-step="1"><svg viewBox="0 0 8 8">
                    <path d="M4 2L7 6H1Z" fill="currentColor" />
                  </svg></button>
                <button class="step-btn" data-target="gutterV" data-dir="-1" data-step="1"><svg viewBox="0 0 8 8">
                    <path d="M4 6L1 2H7Z" fill="currentColor" />
                  </svg></button>
              </div>
            </div>
          </div>
          <div class="field">
            <label>Margin</label>
            <div class="field-input-wrap">
              <input id="marginV" type="number" value="24" min="0">
              <span class="px-label">px</span>
              <div class="stepper">
                <button class="step-btn" data-target="marginV" data-dir="1" data-step="1"><svg viewBox="0 0 8 8">
                    <path d="M4 2L7 6H1Z" fill="currentColor" />
                  </svg></button>
                <button class="step-btn" data-target="marginV" data-dir="-1" data-step="1"><svg viewBox="0 0 8 8">
                    <path d="M4 6L1 2H7Z" fill="currentColor" />
                  </svg></button>
              </div>
            </div>
          </div>
        </div>

        <!-- Stats bar -->
        <div class="stats-bar">
          <div class="stat">
            <span class="stat-label">Target</span>
            <span class="stat-value"><span id="targetOut">0</span><span class="unit">px</span></span>
          </div>
          <div class="stat">
            <span class="stat-label">Page</span>
            <span class="stat-value"><span id="pageOut">0</span><span class="unit">px</span><span class="stat-diff"
                id="diffOut"></span></span>
          </div>
          <div class="stat accent-stat">
            <span class="stat-label" id="unitLabel">Column</span>
            <span class="stat-value"><span id="unitOut">0</span><span class="unit">px</span></span>
          </div>
          <div class="stat">
            <span class="stat-label" id="countLabel">Columns</span>
            <span class="stat-value"><span id="countOut">0</span></span>
          </div>
          <div class="stat">
            <span class="stat-label">2-span</span>
            <span class="stat-value"><span id="span2Out">0</span><span class="unit">px</span></span>
          </div>
        </div>
      </div>
    </div>

    <!-- Preview -->
    <div class="preview-area">
      <div class="preview-header">
        <span class="preview-title" id="previewTitle">Horizontal Preview</span>

        <!-- Export Bar -->
        <div class="export-bar">
          <span class="export-label">Export</span>

          <button class="export-btn btn-png" id="btnPNG" title="Download as PNG image">
            <svg viewBox="0 0 12 12" fill="none">
              <rect x="1" y="1" width="10" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2" />
              <path d="M1 8l2.5-2.5 2 2 2-2.5 3 3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
            PNG
          </button>

          <button class="export-btn btn-svg" id="btnSVG" title="Download as SVG vector">
            <svg viewBox="0 0 12 12" fill="none">
              <path d="M2 10V2h5l3 3v5H2z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round" />
              <path d="M7 2v3h3" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round" />
            </svg>
            SVG
          </button>

          <button class="export-btn btn-css" id="btnCSS" title="Copy CSS Grid variables">
            <svg viewBox="0 0 12 12" fill="none">
              <rect x="1" y="2" width="10" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2" />
              <path d="M4 5l-2 1 2 1M8 5l2 1-2 1M6 4.5l-1 3" stroke="currentColor" stroke-width="1.1"
                stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Copy CSS
          </button>

          <button class="export-btn btn-figma" id="btnFigma" title="Copy Figma grid plugin values">
            <svg viewBox="0 0 12 12" fill="none">
              <path d="M4 2h4a2 2 0 1 1 0 4H4a2 2 0 1 1 0-4z" stroke="currentColor" stroke-width="1.1" />
              <path d="M4 6h4a2 2 0 1 1 0 4H4" stroke="currentColor" stroke-width="1.1" />
              <circle cx="4" cy="6" r="2" stroke="currentColor" stroke-width="1.1" />
            </svg>
            Figma
          </button>

          <button class="export-btn btn-json" id="btnJSON" title="Copy JSON token values">
            <svg viewBox="0 0 12 12" fill="none">
              <path
                d="M3 2c-1 0-1.5.5-1.5 1.5v1C1.5 5.5 1 6 1 6s.5.5.5 1.5v1C1.5 9.5 2 10 3 10M9 2c1 0 1.5.5 1.5 1.5v1c0 1 .5 1.5.5 1.5s-.5.5-.5 1.5v1C10.5 9.5 10 10 9 10"
                stroke="currentColor" stroke-width="1.1" stroke-linecap="round" />
              <circle cx="4.5" cy="6" r=".6" fill="currentColor" />
              <circle cx="6" cy="6" r=".6" fill="currentColor" />
              <circle cx="7.5" cy="6" r=".6" fill="currentColor" />
            </svg>
            JSON
          </button>
        </div>
      </div>

      <!-- Columns section -->
      <div id="columnSection">
        <div class="ruler" id="rulerH"></div>
        <div id="horizontalPreview"></div>
      </div>

      <!-- Rows section -->
      <div id="rowSection" class="hidden">
        <div id="verticalPreview"></div>
      </div>

      <!-- Legend -->
      <div class="legend">
        <div class="legend-item">
          <div class="legend-swatch" style="background:var(--col-bg);border:1px solid var(--col-bdr)"></div>
          <span id="unitLegend">Column</span>
        </div>
        <div class="legend-item">
          <div class="legend-swatch" style="background:var(--gut-bg);border:1px dashed var(--gut-bdr)"></div>
          <span>Gutter</span>
        </div>
        <div class="legend-item">
          <div class="legend-swatch" style="background:var(--mar-bg);border:1px solid var(--mar-bdr)"></div>
          <span>Margin</span>
        </div>
        <span class="legend-hint">Hover segments for details · ↑↓ arrows adjust values</span>
      </div>
    </div>

  </div>

  <script>
    let viewMode = 'columns';
    let _gridState = {};

    // ─── Toast ───
    function showToast(msg, icon = '✓') {
      const t = document.getElementById('toast');
      t.innerHTML = `<span>${icon}</span> ${msg}`;
      t.classList.add('show');
      setTimeout(() => t.classList.remove('show'), 2600);
    }

    // ─── Mode tabs ───
    document.querySelectorAll('.mode-btn').forEach(btn => {
      btn.onclick = () => {
        document.querySelectorAll('.mode-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        viewMode = btn.dataset.mode;
        updatePreview();
      };
    });

    // ─── Stepper buttons ───
    document.querySelectorAll('.step-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const input = document.getElementById(btn.dataset.target);
        const step = parseInt(btn.dataset.step) || 1;
        const dir = parseInt(btn.dataset.dir);
        input.value = Math.max(parseInt(input.min) || 0, parseInt(input.value || 0) + dir * step);
        updatePreview();
      });
    });

    // ─── Arrow key support ───
    document.querySelectorAll('input[type=number]').forEach(input => {
      input.addEventListener('keydown', e => {
        if (e.key === 'ArrowUp' || e.key === 'ArrowDown') {
          e.preventDefault();
          const dir = e.key === 'ArrowUp' ? 1 : -1;
          const isTarget = input.id.startsWith('target');
          const step = isTarget ? (e.shiftKey ? 100 : 10) : (e.shiftKey ? 8 : 1);
          input.value = Math.max(parseInt(input.min) || 0, parseInt(input.value || 0) + dir * step);
          updatePreview();
        }
      });
    });

    // ─── Segment factory ───
    function makeSeg(cls, sizeKey, sizeVal, label, tipText) {
      const div = document.createElement('div');
      div.className = `seg ${cls}`;
      div.style[sizeKey] = sizeVal + 'px';
      div.style[sizeKey === 'width' ? 'height' : 'width'] = '100%';
      if (label !== null && label !== undefined) {
        const lbl = document.createElement('span');
        lbl.className = 'seg-label';
        lbl.textContent = label;
        div.appendChild(lbl);
      }
      if (tipText) {
        const tip = document.createElement('div');
        tip.className = 'seg-tip';
        tip.textContent = tipText;
        div.appendChild(tip);
      }
      return div;
    }

    // ─── Main update ───
    function updatePreview() {
      const isCol = viewMode === 'columns';

      document.getElementById('columnInputs').classList.toggle('hidden', !isCol);
      document.getElementById('rowInputs').classList.toggle('hidden', isCol);
      document.getElementById('columnSection').classList.toggle('hidden', !isCol);
      document.getElementById('rowSection').classList.toggle('hidden', isCol);
      document.getElementById('unitLabel').textContent = isCol ? 'Column' : 'Row';
      document.getElementById('unitLegend').textContent = isCol ? 'Column' : 'Row';
      document.getElementById('countLabel').textContent = isCol ? 'Columns' : 'Rows';
      document.getElementById('previewTitle').textContent = isCol ? 'Horizontal Preview' : 'Vertical Preview';

      if (isCol) {
        const t = +document.getElementById('targetWidth').value || 1;
        const c = Math.max(1, +document.getElementById('cols').value || 1);
        const g = +document.getElementById('gutterH').value || 0;
        const m = +document.getElementById('marginH').value || 0;
        const colW = Math.floor((t - 2 * m - (c - 1) * g) / c);
        const pageW = c * colW + (c - 1) * g + 2 * m;
        const diff = pageW - t;

        _gridState = { mode: 'columns', target: t, count: c, gutter: g, margin: m, unit: Math.max(0, colW), page: pageW, span2: Math.max(0, colW * 2 + g) };

        document.getElementById('targetOut').textContent = t;
        document.getElementById('unitOut').textContent = Math.max(0, colW);
        document.getElementById('pageOut').textContent = pageW;
        document.getElementById('countOut').textContent = c;
        document.getElementById('span2Out').textContent = Math.max(0, colW * 2 + g);

        const diffEl = document.getElementById('diffOut');
        if (diff < 0) { diffEl.textContent = ' (' + diff + ')'; diffEl.className = 'stat-diff negative'; }
        else if (diff > 0) { diffEl.textContent = ' (+' + diff + ')'; diffEl.className = 'stat-diff'; }
        else { diffEl.textContent = ' ✓'; diffEl.className = 'stat-diff ok'; }

        const preview = document.getElementById('horizontalPreview');
        const rulerEl = document.getElementById('rulerH');
        const avail = preview.clientWidth || 800;
        const scale = avail / pageW;
        window._scale = scale;

        rulerEl.innerHTML = '';
        const addRulerSeg = (cls, w, txt) => {
          const d = document.createElement('div');
          d.className = `ruler-seg ${cls}`;
          d.style.cssText = `width:${w}px;flex-shrink:0;height:100%`;
          d.textContent = txt || '';
          rulerEl.appendChild(d);
        };
        addRulerSeg('r-mar', m * scale, '');
        for (let i = 0; i < c; i++) {
          addRulerSeg('r-col', colW * scale, colW * scale > 14 ? (i + 1) : '');
          if (i < c - 1) addRulerSeg('r-gut', g * scale, '');
        }
        addRulerSeg('r-mar', m * scale, '');

        preview.innerHTML = '';
        if (colW <= 0) { preview.innerHTML = '<div class="error-state">⚠ Column width too small</div>'; return; }
        preview.appendChild(makeSeg('s-mar', 'width', m * scale, m * scale > 26 ? m : null, `Margin: ${m}px`));
        for (let i = 0; i < c; i++) {
          preview.appendChild(makeSeg('s-col', 'width', colW * scale, colW * scale > 30 ? colW : null, `Column ${i + 1}: ${colW}px`));
          if (i < c - 1) preview.appendChild(makeSeg('s-gut', 'width', g * scale, g * scale > 22 ? g : null, `Gutter: ${g}px`));
        }
        preview.appendChild(makeSeg('s-mar', 'width', m * scale, m * scale > 26 ? m : null, `Margin: ${m}px`));

      } else {
        const t = +document.getElementById('targetHeight').value || 1;
        const r = Math.max(1, +document.getElementById('rows').value || 1);
        const g = +document.getElementById('gutterV').value || 0;
        const m = +document.getElementById('marginV').value || 0;
        const rowH = Math.floor((t - 2 * m - (r - 1) * g) / r);
        const pageH = r * rowH + (r - 1) * g + 2 * m;
        const diff = pageH - t;

        _gridState = { mode: 'rows', target: t, count: r, gutter: g, margin: m, unit: Math.max(0, rowH), page: pageH, span2: Math.max(0, rowH * 2 + g) };

        document.getElementById('targetOut').textContent = t;
        document.getElementById('unitOut').textContent = Math.max(0, rowH);
        document.getElementById('pageOut').textContent = pageH;
        document.getElementById('countOut').textContent = r;
        document.getElementById('span2Out').textContent = Math.max(0, rowH * 2 + g);

        const diffEl = document.getElementById('diffOut');
        if (diff < 0) { diffEl.textContent = ' (' + diff + ')'; diffEl.className = 'stat-diff negative'; }
        else if (diff > 0) { diffEl.textContent = ' (+' + diff + ')'; diffEl.className = 'stat-diff'; }
        else { diffEl.textContent = ' ✓'; diffEl.className = 'stat-diff ok'; }

        const preview = document.getElementById('verticalPreview');
        const avail = preview.clientHeight || 270;
        const scale = avail / pageH;

        preview.innerHTML = '';
        if (rowH <= 0) { preview.innerHTML = '<div class="error-state">⚠ Row height too small</div>'; return; }
        preview.appendChild(makeSeg('s-vmar', 'height', m * scale, m * scale > 18 ? m : null, `Margin: ${m}px`));
        for (let i = 0; i < r; i++) {
          preview.appendChild(makeSeg('s-row', 'height', rowH * scale, rowH * scale > 22 ? rowH : null, `Row ${i + 1}: ${rowH}px`));
          if (i < r - 1) preview.appendChild(makeSeg('s-vgut', 'height', g * scale, g * scale > 16 ? g : null, `Gutter: ${g}px`));
        }
        preview.appendChild(makeSeg('s-vmar', 'height', m * scale, m * scale > 18 ? m : null, `Margin: ${m}px`));
      }
    }

    // ─── Build SVG grid representation ───
    function buildGridSVG(state, w = 800, h = 200) {
      const { mode, count, gutter, margin, unit, target, page } = state;
      const isCol = mode === 'columns';

      const COL_BG = '#ddeeff', COL_FG = '#1a5fa8', COL_BDR = '#b8d8f8';
      const GUT_BG = '#faf9f6', GUT_BDR = '#ddd9d0';
      const MAR_BG = '#f2f0eb', MAR_FG = '#9a9490';

      let rects = '';
      let labels = '';

      if (isCol) {
        const scale = w / page;
        let x = 0;

        // Left margin
        if (margin > 0) {
          rects += `<rect x="${x}" y="0" width="${margin * scale}" height="${h}" fill="${MAR_BG}" stroke="#e0dbd0" stroke-width="0.5"/>`;
          x += margin * scale;
        }

        for (let i = 0; i < count; i++) {
          const cw = unit * scale;
          rects += `<rect x="${x}" y="0" width="${cw}" height="${h}" fill="${COL_BG}" stroke="${COL_BDR}" stroke-width="0.5"/>`;
          // Hatching
          rects += `<rect x="${x}" y="0" width="${cw}" height="${h}" fill="url(#hatch)" opacity="0.4"/>`;
          if (cw > 20) {
            labels += `<text x="${x + cw / 2}" y="${h / 2 + 4}" text-anchor="middle" fill="${COL_FG}" font-size="10" font-family="monospace" font-weight="600">${unit}</text>`;
          }
          x += cw;

          if (i < count - 1) {
            const gw = gutter * scale;
            if (gw > 0) {
              rects += `<rect x="${x}" y="0" width="${gw}" height="${h}" fill="${GUT_BG}" stroke="${GUT_BDR}" stroke-width="0.5" stroke-dasharray="3,3"/>`;
              x += gw;
            }
          }
        }

        // Right margin
        if (margin > 0) {
          rects += `<rect x="${x}" y="0" width="${margin * scale}" height="${h}" fill="${MAR_BG}" stroke="#e0dbd0" stroke-width="0.5"/>`;
        }

      } else {
        // rows mode
        const scale = h / page;
        let y = 0;

        if (margin > 0) {
          rects += `<rect x="0" y="${y}" width="${w}" height="${margin * scale}" fill="${MAR_BG}" stroke="#e0dbd0" stroke-width="0.5"/>`;
          y += margin * scale;
        }

        for (let i = 0; i < count; i++) {
          const rh = unit * scale;
          rects += `<rect x="0" y="${y}" width="${w}" height="${rh}" fill="${COL_BG}" stroke="${COL_BDR}" stroke-width="0.5"/>`;
          rects += `<rect x="0" y="${y}" width="${w}" height="${rh}" fill="url(#hatchV)" opacity="0.4"/>`;
          if (rh > 14) {
            labels += `<text x="${w / 2}" y="${y + rh / 2 + 4}" text-anchor="middle" fill="${COL_FG}" font-size="10" font-family="monospace" font-weight="600">${unit}</text>`;
          }
          y += rh;

          if (i < count - 1) {
            const gh = gutter * scale;
            if (gh > 0) {
              rects += `<rect x="0" y="${y}" width="${w}" height="${gh}" fill="${GUT_BG}" stroke="${GUT_BDR}" stroke-width="0.5" stroke-dasharray="3,3"/>`;
              y += gh;
            }
          }
        }

        if (margin > 0) {
          rects += `<rect x="0" y="${y}" width="${w}" height="${margin * scale}" fill="${MAR_BG}" stroke="#e0dbd0" stroke-width="0.5"/>`;
        }
      }

      const title = `${isCol ? count + ' Columns' : count + ' Rows'} · ${isCol ? target : target}px · Gutter ${gutter}px · Margin ${margin}px`;

      return `<svg xmlns="http://www.w3.org/2000/svg" width="${w}" height="${h + 32}" viewBox="0 0 ${w} ${h + 32}" style="background:#faf9f6">
  <defs>
    <pattern id="hatch" patternUnits="userSpaceOnUse" width="14" height="14" patternTransform="rotate(135)">
      <line x1="0" y1="0" x2="0" y2="14" stroke="${COL_FG}" stroke-width="0.7" stroke-opacity="0.15"/>
    </pattern>
    <pattern id="hatchV" patternUnits="userSpaceOnUse" width="14" height="14" patternTransform="rotate(45)">
      <line x1="0" y1="0" x2="0" y2="14" stroke="${COL_FG}" stroke-width="0.7" stroke-opacity="0.15"/>
    </pattern>
  </defs>
  <rect width="${w}" height="${h + 32}" fill="#faf9f6"/>
  ${rects}
  ${labels}
  <text x="${w / 2}" y="${h + 20}" text-anchor="middle" fill="#9a9490" font-size="9" font-family="monospace" letter-spacing="0.08em">${title.toUpperCase()}</text>
</svg>`;
    }

    // ─── PNG export ───
    document.getElementById('btnPNG').onclick = function () {
      const s = _gridState;
      if (!s.count) return;
      const W = 900, H = 200;
      const svgStr = buildGridSVG(s, W, H);
      const blob = new Blob([svgStr], { type: 'image/svg+xml' });
      const url = URL.createObjectURL(blob);
      const img = new Image();
      img.onload = () => {
        const canvas = document.createElement('canvas');
        canvas.width = W * 2; canvas.height = (H + 32) * 2;
        const ctx = canvas.getContext('2d');
        ctx.scale(2, 2);
        ctx.drawImage(img, 0, 0);
        URL.revokeObjectURL(url);
        canvas.toBlob(pngBlob => {
          const a = document.createElement('a');
          a.download = `grid-${s.mode}-${s.count}-col-${s.gutter}g-${s.margin}m.png`;
          a.href = URL.createObjectURL(pngBlob);
          a.click();
          setTimeout(() => URL.revokeObjectURL(a.href), 2000);
          showToast('PNG downloaded at 2×', '🖼');
        });
      };
      img.src = url;
    };

    // ─── SVG export ───
    document.getElementById('btnSVG').onclick = function () {
      const s = _gridState;
      if (!s.count) return;
      const svgStr = buildGridSVG(s, 900, 200);
      const blob = new Blob([svgStr], { type: 'image/svg+xml' });
      const a = document.createElement('a');
      a.download = `grid-${s.mode}-${s.count}-${s.gutter}g-${s.margin}m.svg`;
      a.href = URL.createObjectURL(blob);
      a.click();
      setTimeout(() => URL.revokeObjectURL(a.href), 2000);
      showToast('SVG downloaded', '📐');
    };

    // ─── CSS copy ───
    document.getElementById('btnCSS').onclick = function () {
      const s = _gridState;
      if (!s.count) return;
      let css = '';
      if (s.mode === 'columns') {
        css = `/* Grid System — ${s.count} Columns */
:root {
  --grid-columns: ${s.count};
  --grid-column-width: ${s.unit}px;
  --grid-gutter: ${s.gutter}px;
  --grid-margin: ${s.margin}px;
  --grid-page-width: ${s.page}px;
  --grid-span-2: ${s.span2}px;
}

.container {
  max-width: ${s.page}px;
  padding-inline: ${s.margin}px;
  margin-inline: auto;
}

.grid {
  display: grid;
  grid-template-columns: repeat(${s.count}, ${s.unit}px);
  gap: ${s.gutter}px;
}`;
      } else {
        css = `/* Grid System — ${s.count} Rows */
:root {
  --grid-rows: ${s.count};
  --grid-row-height: ${s.unit}px;
  --grid-gutter: ${s.gutter}px;
  --grid-margin: ${s.margin}px;
  --grid-page-height: ${s.page}px;
  --grid-span-2: ${s.span2}px;
}

.grid {
  display: grid;
  grid-template-rows: repeat(${s.count}, ${s.unit}px);
  gap: ${s.gutter}px;
  padding-block: ${s.margin}px;
}`;
      }
      copyText(css, 'CSS copied to clipboard', '🎨');
      flashBtn('btnCSS');
    };

    // ─── Figma copy ───
    document.getElementById('btnFigma').onclick = function () {
      const s = _gridState;
      if (!s.count) return;
      let txt = '';
      if (s.mode === 'columns') {
        txt = `Figma Grid Settings — Column Grid
─────────────────────────────
Type:       Column
Count:      ${s.count}
Width:      ${s.unit}px
Gutter:     ${s.gutter}px
Margin:     ${s.margin}px
Offset:     ${s.margin}px
Frame width: ${s.page}px

→ In Figma: Select frame → Design panel → Layout Grid → + → Column
  Set Count: ${s.count} | Width: ${s.unit} | Gutter: ${s.gutter} | Margin: ${s.margin}`;
      } else {
        txt = `Figma Grid Settings — Row Grid
─────────────────────────────
Type:       Row
Count:      ${s.count}
Height:     ${s.unit}px
Gutter:     ${s.gutter}px
Margin:     ${s.margin}px
Frame height: ${s.page}px

→ In Figma: Select frame → Design panel → Layout Grid → + → Row
  Set Count: ${s.count} | Height: ${s.unit} | Gutter: ${s.gutter} | Margin: ${s.margin}`;
      }
      copyText(txt, 'Figma settings copied', '🟣');
      flashBtn('btnFigma');
    };

    // ─── JSON copy ───
    document.getElementById('btnJSON').onclick = function () {
      const s = _gridState;
      if (!s.count) return;
      const isCol = s.mode === 'columns';
      const json = JSON.stringify({
        grid: {
          mode: s.mode,
          [isCol ? 'columns' : 'rows']: s.count,
          [isCol ? 'columnWidth' : 'rowHeight']: s.unit,
          gutter: s.gutter,
          margin: s.margin,
          [isCol ? 'pageWidth' : 'pageHeight']: s.page,
          span2: s.span2
        },
        tokens: {
          [`grid-${isCol ? 'columns' : 'rows'}`]: String(s.count),
          [`grid-${isCol ? 'column' : 'row'}-size`]: `${s.unit}px`,
          'grid-gutter': `${s.gutter}px`,
          'grid-margin': `${s.margin}px`,
          'grid-page-size': `${s.page}px`
        }
      }, null, 2);
      copyText(json, 'JSON tokens copied', '📦');
      flashBtn('btnJSON');
    };

    // ─── Helpers ───
    function copyText(text, successMsg, icon) {
      navigator.clipboard.writeText(text).then(() => {
        showToast(successMsg, icon);
      }).catch(() => {
        // fallback
        const ta = document.createElement('textarea');
        ta.value = text;
        ta.style.cssText = 'position:fixed;opacity:0';
        document.body.appendChild(ta);
        ta.select();
        document.execCommand('copy');
        document.body.removeChild(ta);
        showToast(successMsg, icon);
      });
    }

    function flashBtn(id) {
      const btn = document.getElementById(id);
      btn.classList.add('copied');
      setTimeout(() => btn.classList.remove('copied'), 1800);
    }

    document.addEventListener('input', updatePreview);
    window.addEventListener('resize', updatePreview);
    updatePreview();
  </script>
</body>

</html>