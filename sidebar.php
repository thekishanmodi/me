<style>
  .global-hover-btn-container {
    z-index: 10000;
  }

  .global-hover-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    background: transparent !important;
    border: none;
    cursor: pointer;
  }

  .global-sidebar {
    background: #0f0e0c;
    border-right: 1px solid rgba(255, 255, 255, .05);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: fixed;
    left: -320px;
    top: 0;
    bottom: 0;
    width: 320px;
    z-index: 9999;
    transition: left 0.5s cubic-bezier(.22, 1, .36, 1);
    font-family: 'Mona Sans', sans-serif;
    z-index: 999999;
  }

  .global-sidebar:hover,
  .global-sidebar.open {
    left: 0;
  }

  .global-sidebar::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 3px;
    background: #f04f00;
    z-index: 2;
  }

  .global-sidebar::after {
    content: '';
    position: absolute;
    left: -80px;
    bottom: -80px;
    width: 360px;
    height: 360px;
    background: radial-gradient(circle, rgba(240, 79, 0, .14) 0%, transparent 65%);
    pointer-events: none;
  }

  .global-sidebar-inner {
    padding: 24px;
    display: flex;
    flex-direction: column;
    height: 100%;
    position: relative;
    z-index: 1;
    gap: 0;
  }

  .global-s-title {
    font-family: 'Mona Sans', sans-serif;
    font-size: 48px;
    line-height: 1;
    color: #fff;
    letter-spacing: .02em;
    font-weight: 900;
  }

  .global-s-title .global-outline {
    display: block;
    color: transparent;
    -webkit-text-stroke: 2px rgba(255, 255, 255, .18);
    transition: -webkit-text-stroke-color .4s;
  }

  .global-s-title:hover .global-outline {
    -webkit-text-stroke-color: #f04f00;
  }

  .global-s-rule {
    width: 36px;
    height: 2px;
    background: #f04f00;
    border-radius: 2px;
    margin: 20px 0 14px;
  }

  .global-s-desc {
    font-size: 14px;
    font-weight: 400;
    color: rgba(255, 255, 255, .28);
    line-height: 1.7;
  }

  .global-s-nav {
    display: flex;
    flex-direction: column;
  }

  .global-s-nav-link {
    color: rgba(255, 255, 255, .6);
    text-decoration: none;
    font-size: 15px;
    font-weight: 500;
    padding: 8px 12px;
    border-radius: 8px;
    transition: background 0.2s, color 0.2s;
    cursor: pointer;
  }

  .global-s-nav-link:hover {
    background: rgba(255, 255, 255, .08);
    color: #fff;
  }

  .global-s-spacer {
    flex: 1;
  }

  .global-s-profile {
    display: flex;
    align-items: center;
    gap: 11px;
    background: rgba(255, 255, 255, .04);
    border: 1px solid rgba(255, 255, 255, .08);
    border-radius: 14px;
    padding: 12px 14px;
    text-decoration: none;
    transition: border-color .22s, background .22s, transform .22s;
    cursor: pointer;
    margin-top: 12px;
  }

  .global-s-profile:hover {
    border-color: rgba(240, 79, 0, .4);
    background: rgba(240, 79, 0, .07);
    transform: translateY(-2px);
  }

  .global-s-profile-info {
    display: flex;
    flex-direction: column;
    flex: 1;
    min-width: 0;
  }

  .global-s-profile-name {
    font-size: 16px;
    font-weight: 700;
    color: rgba(255, 255, 255, .88);
    line-height: 1.2;
  }

  .global-s-profile-role {
    font-family: 'Mona Sans', monospace;
    font-size: 14px;
    color: rgba(255, 255, 255, .28);
    margin-top: 2px;
  }

  .global-search-wrap {
    position: relative;
    margin-bottom: 20px;
  }
  .global-search-icon {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    width: 15px;
    height: 15px;
    color: rgba(255, 255, 255, 0.4);
    pointer-events: none;
  }
  #global-nav-search {
    width: 100%;
    background: rgba(255, 255, 255, .04);
    border: 1px solid rgba(255, 255, 255, .08);
    border-radius: 12px;
    padding: 12px 14px 12px 38px;
    font-family: 'Mona Sans', sans-serif;
    font-size: 14px;
    color: #fff;
    outline: none;
    transition: border-color 0.2s, background 0.2s;
  }
  #global-nav-search::placeholder {
    color: rgba(255, 255, 255, 0.4);
  }
  #global-nav-search:focus {
    border-color: #f04f00;
    background: rgba(255, 255, 255, .08);
  }
  .global-s-nav-link.hidden {
    display: none;
  }
</style>

<aside class="global-sidebar">
  <div class="global-sidebar-inner">
    <div class="global-search-wrap">
      <svg class="global-search-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
      <input type="search" id="global-nav-search" placeholder="Search menu..." autocomplete="off" />
    </div>

    <nav class="global-s-nav">
      <a href="textcase.php" class="global-s-nav-link">Text Case</a>
      <a href="color-shades.php" class="global-s-nav-link">Color Shades</a>
      <a href="screen-sizes.php" class="global-s-nav-link">Screen Sizes</a>
      <a href="comet-blitz.php" class="global-s-nav-link">Comet Blitz</a>
      <a href="grid-calculator.php" class="global-s-nav-link">Grid Calculator</a>
      <a href="design-keyword-cloud.php" class="global-s-nav-link">Design Keyword Cloud</a>
      <a target="_blank" href="https://www.figma.com/deck/2kiGrPmXyg4PTm2EfTNBtf/UI_UX-CORE?node-id=1-1805&viewport=-148%2C-157%2C0.72&t=B2d3Cj7pEYnJv6w2-1&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1" class="global-s-nav-link">Core UI/UX</a>
      <a target="_blank" href="https://docs.google.com/presentation/d/1gAv1qN9ppPdUbCIsx54M_AEXcvTiGCLnSMm6SxrVK9o/edit?slide=id.gcb9a0b074_1_0#slide=id.gcb9a0b074_1_0" class="global-s-nav-link">Multi-Skill & Multitasking</a>
      <a href="box.php" class="global-s-nav-link">Box</a>
    </nav>

    <div class="global-s-spacer"></div>

    <a href="index.php" class="global-s-profile" aria-label="About Kishan Modi" target="_blank">
      <div class="global-s-profile-info">
        <span class="global-s-profile-name">Kishan Modi</span>
        <span class="global-s-profile-role">UI/UX & Graphics Designer</span>
      </div>
    </a>
  </div>
</aside>

<script>
  (function() {
    const searchInput = document.getElementById('global-nav-search');
    const links = document.querySelectorAll('.global-s-nav-link');
    if(searchInput) {
      searchInput.addEventListener('input', (e) => {
        const val = e.target.value.toLowerCase().trim();
        links.forEach(link => {
          const text = link.textContent.toLowerCase();
          if (text.includes(val)) {
            link.classList.remove('hidden');
          } else {
            link.classList.add('hidden');
          }
        });
      });
    }

    const sidebar = document.querySelector('.global-sidebar');
    if(sidebar) {
      document.addEventListener('mouseover', (e) => {
        if(e.target.closest('.global-hover-btn') || e.target.closest('.global-hover-btn-container') || e.target.closest('.global-sidebar')) {
          sidebar.classList.add('open');
        } else {
          sidebar.classList.remove('open');
        }
      });
    }
  })();
</script>
