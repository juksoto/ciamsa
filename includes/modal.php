
<div class="reveal" id="modalProductos"  data-reveal data-animation-in="fade-in">
  <section class="modal-product">
      <section class="modal-content row">
          <article class="small-5 column" id="img_referencia">
          </article>
          <article class="small-7 column"  id="img_referencia_componentes">

          </article>
          <section class="row">
              <article class="small-12 small-centered column text-center">
                  <a href="cotizar.php<?php if( isset ( $url ) ) { echo $url; } ?>" class="button btn-grapefruit">
                      <span class="icon-information"></span> Solicitar cotización
                  </a>
              </article>
          </section>
          <button class="close-button button btn-grapefruit" data-close aria-label="Close reveal" type="button">
              <span aria-hidden="true">&times;</span> Cerrar
          </button>
      </section>
  </section>
</div>