  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
      <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="https://bbwscitarum.com/profil/profil-organisasi" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Tentang Kami
          </a>
      </div>
        @if (!auth()->user() || \Request::is('static-sign-up')) 
          <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
              <a href="https://www.youtube.com/channel/UCxSpNzOYWiVBqObom3n9XWQ" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-youtube" aria-hidden="true"></span>
              </a>
              <a href="https://x.com/bbwscitarum" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
              </a>
              <a href="https://www.instagram.com/pupr_sda_citarum/" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
              </a>
              <a href="https://www.facebook.com/pupr.sda.citarum/" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-facebook" aria-hidden="true"></span>
              </a>
              <a href="https://www.tiktok.com/@pupr_sda_citarum" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-tiktok" aria-hidden="true"></span>
              </a>
          </div>
        @endif
      </div>
      @if (!auth()->user() || \Request::is('static-sign-up')) 
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Copyright © <script>
                document.write(new Date().getFullYear())
              </script> [Prototype] Siap-Citarum by 
              <a style="color: #252f40;" href="https://www.instagram.com/febrytp" class="font-weight-bold ml-1" target="_blank">Febrytp</a>.
            </p>
          </div>
        </div>
      @endif
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
