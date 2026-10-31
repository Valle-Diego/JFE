/* ============================================================
   JOY FLUTE ENSEMBLE — main.js
   ============================================================ */

'use strict';

/* ──────────────────────────────────────────────
   1. HEADER: sticky shadow + scroll class
──────────────────────────────────────────────── */
function initHeader() {
  const header = document.querySelector('.header');
  if (!header) return;

  let lastY = 0;
  window.addEventListener('scroll', () => {
    const y = window.scrollY;
    header.classList.toggle('scrolled', y > 20);
    lastY = y;
  }, { passive: true });
}

/* ──────────────────────────────────────────────
   2. MOBILE NAV
──────────────────────────────────────────────── */
function initMobileNav() {
  const hamburger  = document.getElementById('hamburger');
  const navDrawer  = document.getElementById('navDrawer');
  const navPanel   = document.getElementById('navPanel');
  const navClose   = document.getElementById('navClose');

  if (!hamburger) return;

  function openNav() {
    hamburger.classList.add('open');
    hamburger.setAttribute('aria-expanded', 'true');
    navDrawer.classList.add('open');
    navPanel.classList.add('open');
    document.body.style.overflow = 'hidden';
  }
  function closeNav() {
    hamburger.classList.remove('open');
    hamburger.setAttribute('aria-expanded', 'false');
    navDrawer.classList.remove('open');
    navPanel.classList.remove('open');
    document.body.style.overflow = '';
  }

  hamburger.addEventListener('click', () => {
    hamburger.classList.contains('open') ? closeNav() : openNav();
  });
  navClose?.addEventListener('click', closeNav);
  navDrawer.addEventListener('click', e => {
    if (e.target === navDrawer) closeNav();
  });
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeNav();
  });

  // Accordion for mobile dropdowns
  document.querySelectorAll('.mob-accordion-trigger').forEach(btn => {
    btn.addEventListener('click', () => {
      const body = btn.nextElementSibling;
      const isOpen = body.classList.contains('open');
      // Close all
      document.querySelectorAll('.mob-accordion-body').forEach(b => b.classList.remove('open'));
      document.querySelectorAll('.mob-accordion-trigger').forEach(trigger => {
        trigger.setAttribute('aria-expanded', 'false');
        trigger.querySelector('.mob-chevron').style.transform = '';
      });
      if (!isOpen) {
        body.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
        btn.querySelector('.mob-chevron').style.transform = 'rotate(180deg)';
      }
    });
  });
}

/* ──────────────────────────────────────────────
   3. ACTIVE NAV LINK
──────────────────────────────────────────────── */
function initActiveNav() {
  const current = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-link, .dropdown a').forEach(link => {
    const href = link.getAttribute('href') || '';
    const linkPage = href.split('/').pop();
    if (linkPage === current) {
      link.classList.add('active');
      // Also highlight parent
      const parent = link.closest('.nav-item')?.querySelector('.nav-link');
      if (parent) parent.classList.add('active');
    }
  });
}

/* ──────────────────────────────────────────────
   4. SCROLL REVEAL
──────────────────────────────────────────────── */
function initReveal() {
  const els = document.querySelectorAll('.reveal');
  if (!els.length) return;

  const obs = new IntersectionObserver(entries => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), Math.min(i * 35, 140));
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

  els.forEach(el => obs.observe(el));
}

/* ──────────────────────────────────────────────
   5. HERO FLOATING NOTES
──────────────────────────────────────────────── */
function initHeroNotes() {
  const container = document.querySelector('.hero-bg-notes');
  if (!container) return;

  const notes = ['♩', '♪', '♫', '♬', '𝄞', '𝄢'];
  const positions = [
    { left: '5%',  top: '15%',  delay: 0    },
    { left: '12%', top: '70%',  delay: 1.5  },
    { left: '25%', top: '40%',  delay: 3    },
    { left: '40%', top: '10%',  delay: 0.8  },
    { left: '55%', top: '80%',  delay: 2.2  },
    { left: '70%', top: '30%',  delay: 4    },
    { left: '82%', top: '60%',  delay: 1.1  },
    { left: '92%', top: '20%',  delay: 2.8  },
  ];

  positions.forEach((pos, i) => {
    const el = document.createElement('span');
    el.textContent = notes[i % notes.length];
    el.style.cssText = `
      position: absolute;
      left: ${pos.left};
      top:  ${pos.top};
      font-size: ${1.5 + Math.random() * 1.5}rem;
      opacity: 0.07;
      color: var(--lilac);
      animation: floatNote ${8 + Math.random() * 6}s ease-in-out ${pos.delay}s infinite;
      user-select: none;
      pointer-events: none;
    `;
    container.appendChild(el);
  });
}

/* ──────────────────────────────────────────────
   6. GALLERY LIGHTBOX
──────────────────────────────────────────────── */
function initLightbox() {
  const items = document.querySelectorAll('.gallery-item[data-src], .gallery-item[data-index]');
  if (!items.length) return;

  // Create lightbox
  const lb = document.createElement('div');
  lb.id = 'lightbox';
  lb.innerHTML = `
    <div class="lb-backdrop"></div>
    <div class="lb-content">
      <button class="lb-close">✕</button>
      <button class="lb-prev">‹</button>
      <button class="lb-next">›</button>
      <div class="lb-media">
        <div class="lb-placeholder">
          <span style="font-size:5rem">📷</span>
          <p>Foto in arrivo</p>
        </div>
      </div>
      <div class="lb-caption"></div>
    </div>
  `;
  lb.style.cssText = `
    display:none; position:fixed; inset:0; z-index:9000;
    align-items:center; justify-content:center;
  `;
  document.body.appendChild(lb);

  // Inject styles
  const style = document.createElement('style');
  style.textContent = `
    #lightbox { display:none; background:rgba(10,8,30,0.92); }
    #lightbox.open { display:flex !important; animation:lbIn .2s ease; }
    @keyframes lbIn { from{opacity:0} to{opacity:1} }
    .lb-content { position:relative; max-width:92vw; max-height:92vh; }
    .lb-media { background:rgba(255,255,255,0.05); border-radius:12px; overflow:hidden;
      min-width:400px; min-height:300px; display:flex; align-items:center; justify-content:center; }
    .lb-placeholder { text-align:center; color:rgba(255,255,255,0.4); padding:60px 40px; }
    .lb-placeholder p { font-size:14px; margin-top:16px; font-family:var(--font-body); }
    .lb-close { position:absolute; top:-44px; right:0; background:none; border:none;
      color:rgba(255,255,255,0.7); font-size:22px; cursor:pointer; padding:8px;
      transition:color .2s; }
    .lb-close:hover { color:#fff; }
    .lb-prev, .lb-next { position:fixed; top:50%; transform:translateY(-50%);
      background:rgba(255,255,255,0.1); border:none; color:rgba(255,255,255,0.8);
      font-size:2rem; width:52px; height:52px; border-radius:50%;
      cursor:pointer; transition:background .2s; display:flex; align-items:center; justify-content:center;
      backdrop-filter:blur(8px); }
    .lb-prev { left:16px; }
    .lb-next { right:16px; }
    .lb-prev:hover, .lb-next:hover { background:rgba(107,99,181,0.5); }
    .lb-caption { text-align:center; color:rgba(255,255,255,0.5); font-size:13px; margin-top:14px;
      font-family:var(--font-body); }
  `;
  document.head.appendChild(style);

  let current = 0;
  const gallery = [...items];

  function show(i) {
    current = (i + gallery.length) % gallery.length;
    const el = gallery[current];
    const caption = el.getAttribute('data-caption') || '';
    lb.querySelector('.lb-caption').textContent = caption;
    lb.classList.add('open');
    document.body.style.overflow = 'hidden';
  }
  function close() {
    lb.classList.remove('open');
    document.body.style.overflow = '';
  }

  items.forEach((item, i) => item.addEventListener('click', () => show(i)));
  lb.querySelector('.lb-close').addEventListener('click', close);
  lb.querySelector('.lb-backdrop')?.addEventListener('click', close);
  lb.querySelector('.lb-prev').addEventListener('click', () => show(current - 1));
  lb.querySelector('.lb-next').addEventListener('click', () => show(current + 1));
  document.addEventListener('keydown', e => {
    if (!lb.classList.contains('open')) return;
    if (e.key === 'Escape')     close();
    if (e.key === 'ArrowLeft')  show(current - 1);
    if (e.key === 'ArrowRight') show(current + 1);
  });
}

/* ──────────────────────────────────────────────
   MASTERCLASS PHOTO OVERLAY
──────────────────────────────────────────────── */
function initMasterclassLightbox() {
  const links = [...document.querySelectorAll('.masterclass-photo-link')];
  if (!links.length) return;

  const dialog = document.createElement('dialog');
  dialog.className = 'masterclass-lightbox';
  dialog.setAttribute('aria-label', 'Foto ingrandita');
  dialog.innerHTML = `
    <div class="masterclass-lightbox-toolbar">
      <button type="button" data-zoom-out aria-label="Riduci zoom">−</button>
      <button type="button" data-zoom-reset aria-label="Ripristina zoom">100%</button>
      <button type="button" data-zoom-in aria-label="Aumenta zoom">+</button>
      <button type="button" class="masterclass-lightbox-close" data-lightbox-close aria-label="Chiudi immagine">✕</button>
    </div>
    <div class="masterclass-lightbox-stage"><img class="masterclass-lightbox-image" alt=""></div>
    <div class="masterclass-lightbox-caption" aria-live="polite"></div>
  `;
  document.body.appendChild(dialog);

  const image = dialog.querySelector('.masterclass-lightbox-image');
  const stage = dialog.querySelector('.masterclass-lightbox-stage');
  const caption = dialog.querySelector('.masterclass-lightbox-caption');
  let zoom = 1;
  const setZoom = value => {
    zoom = Math.min(4, Math.max(1, value));
    image.style.transform = `scale(${zoom})`;
    dialog.querySelector('[data-zoom-reset]').textContent = `${Math.round(zoom * 100)}%`;
  };

  links.forEach(link => link.addEventListener('click', event => {
    event.preventDefault();
    const thumbnail = link.querySelector('img');
    image.src = link.href;
    image.alt = thumbnail?.alt || '';
    caption.textContent = link.closest('figure')?.querySelector('figcaption')?.textContent.trim() || '';
    stage.scrollTo(0, 0);
    setZoom(1);
    dialog.showModal();
  }));

  dialog.querySelector('[data-lightbox-close]').addEventListener('click', () => dialog.close());
  dialog.querySelector('[data-zoom-in]').addEventListener('click', () => setZoom(zoom + .25));
  dialog.querySelector('[data-zoom-out]').addEventListener('click', () => setZoom(zoom - .25));
  dialog.querySelector('[data-zoom-reset]').addEventListener('click', () => setZoom(1));
  dialog.addEventListener('click', event => {
    if (event.target === dialog) dialog.close();
  });
  dialog.addEventListener('close', () => {
    image.removeAttribute('src');
    setZoom(1);
  });
}

/* ──────────────────────────────────────────────
   7. DONATION AMOUNTS
──────────────────────────────────────────────── */
function initDonation() {
  const amounts = document.querySelectorAll('.donation-amount');
  const customInput = document.getElementById('donationCustom');

  amounts.forEach(btn => {
    btn.addEventListener('click', () => {
      amounts.forEach(b => b.classList.remove('selected'));
      btn.classList.add('selected');
      if (customInput) customInput.value = btn.dataset.amount || '';
    });
  });
}

/* ──────────────────────────────────────────────
   8. CONTACT FORM
──────────────────────────────────────────────── */
function initContactForm() {
  const form = document.getElementById('contactForm');
  if (!form) return;

  form.addEventListener('submit', e => {
    e.preventDefault();
    const data = new FormData(form);
    const subject = encodeURIComponent('Contatto dal sito Joy Flute Ensemble');
    const body    = encodeURIComponent(
      [...data.entries()].map(([k,v]) => `${k}: ${v}`).join('\n')
    );
    window.location.href = `mailto:joy.flute.ensemble@gmail.com?subject=${subject}&body=${body}`;
  });
}

/* ──────────────────────────────────────────────
   9. GALLERY FILTER
──────────────────────────────────────────────── */
function initGalleryFilter() {
  const btns  = document.querySelectorAll('.filter-btn');
  const items = document.querySelectorAll('.gallery-item[data-cat]');
  if (!btns.length) return;

  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      btns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const cat = btn.dataset.filter;
      items.forEach(item => {
        const show = cat === 'all' || item.dataset.cat === cat;
        item.style.display = show ? '' : 'none';
        if (show) item.style.animation = 'fadeUp 0.3s ease forwards';
      });
    });
  });
}

/* ──────────────────────────────────────────────
   10. SMOOTH SCROLL
──────────────────────────────────────────────── */
function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      const offset = (document.querySelector('.header')?.offsetHeight ?? 72) + 16;
      window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - offset, behavior: 'smooth' });
    });
  });
}

/* ──────────────────────────────────────────────
   YOUTUBE CHANNEL DETAILS
──────────────────────────────────────────────── */
function initYouTubeChannel() {
  const panel = document.querySelector('[data-youtube-channel]');
  if (!panel) return;

  const status = panel.querySelector('[data-channel-status]');
  fetch(panel.dataset.endpoint, { headers: { Accept: 'application/json' } })
    .then(response => {
      if (!response.ok) throw new Error('Channel data unavailable');
      return response.json();
    })
    .then(data => {
      const numberFormat = new Intl.NumberFormat('it-IT');
      panel.querySelector('[data-channel-subscribers]').textContent = data.subscriberCount === null
        ? 'Non pubblico'
        : numberFormat.format(data.subscriberCount);
      panel.querySelector('[data-channel-videos]').textContent = numberFormat.format(data.videoCount);
      panel.querySelector('[data-channel-description]').textContent = data.description || 'Nessuna descrizione disponibile.';
      status.textContent = `Dati aggiornati al ${new Date(data.updatedAt).toLocaleString('it-IT')}.`;
    })
    .catch(() => {
      status.textContent = 'Dati del canale non disponibili al momento.';
    });
}

/* ──────────────────────────────────────────────
   INIT
──────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  initHeader();
  initMobileNav();
  initActiveNav();
  initReveal();
  initHeroNotes();
  initLightbox();
  initMasterclassLightbox();
  initDonation();
  initContactForm();
  initGalleryFilter();
  initSmoothScroll();
  initYouTubeChannel();

  // Update year
  document.querySelectorAll('[data-year]').forEach(el => {
    el.textContent = new Date().getFullYear();
  });
});
