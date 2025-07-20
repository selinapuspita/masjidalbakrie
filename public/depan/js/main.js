/**
* Template Name: Bootslander
* Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
* Updated: Aug 07 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

  // Gallery Desktop Swiper
  const swiperDesktop = new Swiper('.gallerySwiper', {
    slidesPerView: 1,
    navigation: {
      nextEl: '.gallery-next-desktop',
      prevEl: '.gallery-prev-desktop',
    },
    pagination: {
      el: '.gallery-pagination-desktop',
      clickable: true,
    },
  });

  // Gallery Mobile Swiper
  const swiperMobile = new Swiper('.gallerySwiperMobile', {
    slidesPerView: 1,
    navigation: {
      nextEl: '.gallery-next-mobile',
      prevEl: '.gallery-prev-mobile',
    },
    pagination: {
      el: '.gallery-pagination-mobile',
      clickable: true,
    },
  });

  // JADWAL SHOLAT
  async function showJadwalSholat() {
    try {
      const response = await fetch('/jadwal-sholat');
      const data = await response.json();

      if (data.status && data.data) {
        const jadwal = data.data.jadwal;
        const lokasi = data.data.lokasi;
        const tanggal = data.data.tanggal;
        document.getElementById("lokasi-jadwal").innerText = `Lokasi: ${lokasi}`;

        const waktuKeys = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
        const labelMap = {
          Fajr: 'Subuh',
          Dhuhr: 'Dzuhur',
          Asr: 'Ashar',
          Maghrib: 'Maghrib',
          Isha: 'Isya'
        };

        const wrapper = document.getElementById("jadwal-sholat-wrapper");
        wrapper.innerHTML = "";

        waktuKeys.forEach(key => {
          const waktuLabel = labelMap[key];
          let waktuSholat = jadwal[key].replace('.', ':');
          let waktuSholatDate = new Date(`${tanggal}T${waktuSholat}`);
          const now = new Date();

          // Penyesuaian hari jika waktu sudah lewat lebih dari 5 jam
          let diff = (waktuSholatDate - now) / 60000;
          if (diff < -300) waktuSholatDate.setDate(waktuSholatDate.getDate() + 1);
          diff = (waktuSholatDate - now) / 60000;

          const countdown = diff > 0
            ? `(${Math.floor(diff / 60)} jam ${Math.floor(diff % 60)} menit lagi)`
            : "(Sudah lewat)";

          wrapper.insertAdjacentHTML("beforeend", `
            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>${waktuLabel}</h3>
                <h4>${waktuSholat}</h4>
                <p>${countdown}</p>
              </div>
            </div>
          `);
        });

        // Inisialisasi atau reset swiper
        if (window.jadwalSwiper?.destroy) window.jadwalSwiper.destroy(true, true);

        window.jadwalSwiper = new Swiper('.jadwalSholatSwiper', {
          loop: true,
          speed: 500,
          autoplay: { delay: 5000 },
          slidesPerView: 1,
          pagination: {
            el: '.swiper-pagination',
            clickable: true
          }
        });
      } else {
        console.error("Gagal mendapatkan data:", data.message);
        document.getElementById("jadwal-sholat-wrapper").innerHTML =
          `<div class="swiper-slide"><div class="testimonial-item"><p>Gagal memuat jadwal.</p></div></div>`;
      }
    } catch (error) {
      console.error("Fetch error:", error);
      document.getElementById("jadwal-sholat-wrapper").innerHTML =
        `<div class="swiper-slide"><div class="testimonial-item"><p>Silakan periksa koneksi atau izinkan lokasi.</p></div></div>`;
    }
  }

  document.addEventListener("DOMContentLoaded", showJadwalSholat);

})();