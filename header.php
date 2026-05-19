<!-- enquiry -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
<!-- enquiry -->
<div class="topbar-one">
  <div class="topbar-one__contaner container-fluid">
    <div class="topbar-one__inner">
      <div class="topbar-one__left">
        <ul class="topbar-one__info">
          <li class="topbar-one__info-item"> <span class="topbar-one__info-icon icon-phone-1"></span> <a
              href="tel:+919045427043" class="topbar-one__info-text">+91-9045427043</a></span> </li>
          <li class="topbar-one__info-item"> <span class="topbar-one__info-icon icon-phone-1"></span> <a
              href="tel:+919355995594" class="topbar-one__info-text">+91-9355995594</a></span> </li>
          <li class="topbar-one__info-item"> <span class="topbar-one__info-icon icon-envelope"></span> <a
              href="mailto:india@touranzza.com" class="topbar-one__info-text">india@touranzza.com</a> </li>
        </ul>
        <ul class="topbar-one__info topbar-one__info--right">
        </ul>
      </div>
      <div class="topbar-one__right">
        <ul class="topbar-one__social">
          <li class="topbar-one__social-item"> <a href="https://www.facebook.com/share/1DU6ep6f9V/" target="_blank" rel="noopener noreferrer" class="topbar-one__social-link"><i
                class="fab fa-facebook-f"></i></a> </li>
          <li class="topbar-one__social-item"> <a href="https://www.linkedin.com/company/touranzza/" target="_blank" rel="noopener noreferrer" class="topbar-one__social-link"><i
                class="fab fa-linkedin-in"></i></a> </li>
          <li class="topbar-one__social-item"> <a href="https://share.google/Bwu2Uwfy6zNyqPp0X" target="_blank" rel="noopener noreferrer" class="topbar-one__social-link"><i
                class="fab fa-google"></i></a> </li>
          <li class="topbar-one__social-item"> <a href="https://www.tripadvisor.in/Profile/touranzza" target="_blank" rel="noopener noreferrer" class="topbar-one__social-link"><i
                class="fab fa-tripadvisor"></i></a> </li>
          <li class="topbar-one__social-item"> <a href="https://www.instagram.com/touranzza?igsh=MWVqNWhsb2NqcnlvMA==" target="_blank" rel="noopener noreferrer" class="topbar-one__social-link"><i
                class="fab fa-instagram"></i></a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<header class="main-header sticky-header sticky-header--normal">
  <div class="container-fluid">
    <div class="main-header__inner">
      <div class="main-header__left">
        <div class="main-header__logo"> <a href="./"> <img src="assets/images/blacklogo1.webp" alt="Touranzza"></a>
        </div>
      </div>
      <nav class="main-header__nav main-menu">
        <ul class="main-menu__list">
          <li> <a href="./">Home</a> </li>
          <li class="dropdown"> <a href="tour-packages">Tour Packages</a>
            <ul class="sub-menu">
              <li><a href="golden-triangle-tours">Imperial Golden Triangle Tours</a></li>
              <li><a href="same-day-tours">Private Day Experiences</a></li>
              <li><a href="rajasthan-tours">Royal Rajasthan Retreats</a></li>
            </ul>
          </li>
          <li> <a href="photo-gallery">Photo Gallery</a> </li>
          <li> <a href="contact">Contact</a> </li>
        </ul>
      </nav>
      <div class="main-header__right">
        <div class="mobile-nav__btn mobile-nav__toggler"> <span></span> <span></span> <span></span> </div>
        <a href="tour-packages"
          class="main-header__booking-btn trevlo-btn trevlo-btn--white-two"><span>Start Booking</span></a>
        <div class="main-header__right-right">
          <div class="main-header__phone">
            <div class="main-header__phone-icon"> <span class="icon-phone-1"></span> </div>
            <div class="main-header__phone-text">
              <h4 class="main-header__phone-number"><a href="tel:+919355995594">+91-9355995594</a></h4>
            </div>
          </div>
          <div class="main-header__divider"></div>
        </div>
      </div>
    </div>
  </div>
</header>
<style>
  /* ── Robust Sticky Header ── */
  .topbar-one {
    position: relative !important;
    z-index: 1010 !important;
    background-color: #130f10 !important;
    border-bottom: 2px solid rgba(255, 194, 2, 0.4) !important;
  }
  .topbar-one::after { background-color: transparent !important; }

  .main-header {
    position: -webkit-sticky !important;
    position: sticky !important;
    top: 0 !important;
    width: 100% !important;
    z-index: 1000 !important;
    background-color: #130f10 !important;
    border-bottom: 1.5px solid rgba(255, 194, 2, 0.4) !important;
    box-shadow: 0 4px 20px rgba(0,0,0,0.5) !important;
    transition: all 0.3s ease-in-out;
  }

  .page-wrapper { padding-top: 0 !important; overflow: visible !important; }
  .sticky-header--cloned, .stricky-header.stricky-fixed { display: none !important; }

  /* ── Responsive Header Layout ── */
  @media (max-width: 1199px) {
    .main-header { background: #130f10 !important; box-shadow: 0 2px 10px rgba(0,0,0,0.3) !important; }
    .main-header__nav.main-menu { display: none !important; }
    .main-header__logo img { max-height: 60px !important; }
    .main-header__right { display: flex !important; align-items: center; gap: 15px; }
    .main-header__booking-btn, .main-header__right-right { display: none !important; }
    .mobile-nav__toggler { display: flex !important; order: 1; color: #ffc202 !important; }
  }

  @media (min-width: 1200px) {
    .main-header__nav.main-menu { flex: 1 !important; display: flex !important; justify-content: flex-end !important; align-items: center !important; }
    .main-menu__list { white-space: nowrap !important; display: flex !important; align-items: center !important; gap: 10px !important; margin: 0 !important; padding: 0 !important; }
  }

</style>
