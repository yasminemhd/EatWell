<footer class="text-dark py-5">
  <div class="container">
    <!-- Première rangée -->
    <div class="row">
      <!-- Colonne 1 -->
      <div class="col-md-2">
        <a href="<?php echo home_url('/'); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoeatwell.png" alt="" style="width: 60%; height: auto; margin-left: 18%;">
        </a>
      </div>
      <!-- Colonne 2 -->
      <div class="col-md-3">
        <h5>A propos</h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('la-cantine-2-0'))); ?>">La cantine 2.0</a></li>
          <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('nos-valeurs'))); ?>">Nos valeurs</a></li>
        </ul>
      </div>
      <!-- Colonne 3 -->
      <div class="col-md-3">
        <h5>Nous rejoindre</h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('formulaire'))); ?>">Contact</a></li>
          <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('devis'))); ?>">Devis</a></li>
        </ul>
      </div>
      <!-- Colonne 4 -->
      <div class="col-md-3">
        <h5>Ressources</h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('mentions-legales'))); ?>">Mentions légales</a></li>
          <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('conditions-generales'))); ?>">Conditions générales</a></li>
          <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('politique-de-confidentialite'))); ?>">Politique de confidentialité</a></li>
        </ul>
      </div>
    </div>

    <!-- Deuxième rangée -->
    <div class="row mt-4 d-flex align-items-center">
      <!-- Colonne unique -->
      <div class="col-md-12 text-center">
        <h4>Abonne-toi à la newsletter</h4>
        <h5>Et obtiens une remise de 5€ sur ta carte EatWell !</h5>
        <form>
          <div class="mb-3 col-md-6 mx-auto">
            <input type="email" class="form-control" id="email" placeholder="Votre email">
          </div>
          <button type="submit" class="btn btn-success">S'abonner</button>
        </form>
      </div>
    </div>

    <!-- Troisième rangée -->
    <div class="row mt-4 d-flex align-items-center">
      <!-- Colonne unique -->
      <div class="col-md-12 text-center">
        <h4>Rejoins-nous</h4>
        <!-- Ajoutez ici vos pictogrammes -->
        <!-- Exemple avec Font Awesome -->
        <a href="#" class="rs"><ion-icon name="logo-youtube"></ion-icon></a>
        <a href="#" class="rs"><ion-icon name="logo-instagram"></ion-icon></a>
        <a href="#" class="rs"><ion-icon name="logo-tiktok"></ion-icon></a>
      </div>
    </div>
  </div>
</footer>

<!-- Scripts -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<?php wp_footer(); ?>
</body>
</html>
