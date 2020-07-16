<?php 
  get_header();
  global $post, $project_options;

  if( is_home() || is_front_page() ) { ?>
    <div class="container">
      <div class="grid-middle">
        <article class="text-container col-6_xs-12">
          <h1>CONOCE TODO SOBRE TU</h1>
          <h2>PROGRAMA DE INTERÉS</h2>

          <div class="box-container">
            <p>Solicita una cita virtual con un <strong>asesor especializado</strong></p>
          </div>
        </article>

        <div class="form-container">
          <h3>Agenda tu cita</h3>
          <form>
            <div class="field-element">
              <input type="text" name="name" placeholder="Nombres">
            </div>

            <div class="field-element">
              <input type="text" name="lastname" placeholder="Apellidos">
            </div>

            <div class="inline-box grid">
              <div class="field-element col-shrink">
                <div class="custom-button">
                  C.C
                </div>
              </div>

              <div class="field-element col-shrink">
                <div class="custom-button">
                  T.I
                </div>
              </div>

              <div class="field-element col-expand">
                <input type="text" name="type_id" placeholder="Tipo de documento">
              </div>
            </div>

            <div class="field-element">
              <input type="text" name="phone" placeholder="Teléfono">
            </div>

            <div class="field-element">
              <input type="text" name="email" placeholder="Correo electrónico">
            </div>

            <div class="field-element">
              <input type="text" name="sede" placeholder="Sede">
            </div>

            <div class="field-element">
              <label for="">
                <input type="checkbox" name="terms_and_conditions" placeholder="Acepto los terminos de uso">
              </label>
            </div>

            <div class="actions">
              <input type="submit" value="Solicitar">
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php
  }

  get_footer();
?>
