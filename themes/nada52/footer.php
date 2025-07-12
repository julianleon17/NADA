<footer>
  <!-- footer top section -->
  <?php //include_once 'footer_top.php';?>
  <!-- End footer top section -->

  <!-- footer bottom section -->
  <div class="full-row-footer-black-components bg-primary py-3 sticky-bottom">
    <div class="container">
      <div class="footer">
        <div class="d-flex justify-content-between flex-wrap">

          <!-- / footer logo -->
          <div class="footer-element py-2">
            <div class="text-center text-lg-left mt-2">
            <?php /* logo ?>
            <a href="<?php echo site_url();?>" class="g01v1-logo nada-logo">
              <img style="width:50px;" title="<?php echo $this->config->item("website_title");?>" src="<?php echo base_url().$bootstrap_theme; ?>/images/logo-placeholder.png" class="img-responsive">
            </a>
            <?php */?>

            <?php /* text only ?>
            <a href="<?php echo site_url();?>" style="color:white;padding-top:20px;" >
              <?php echo $this->config->item("website_title");?>
            </a>
            <?php */ ?>

              <p class="h4 text-white d-none">
                <?php echo $this->config->item("site_name");?>
              </p>

              <div class="footer-bottom-right d-flex align-items-center justify-content-end">
                <a href="<?php echo site_url();?>" class="g01v1-logo nada-logo border-right border-white pr-3">
                  <img style="width:70px;" title="Marca Colombia" src="https://www.minenergia.gov.co/documents/10995/logo_marca_colombia_MME.png" class="img-responsive" />
                </a>
                <a href="<?php echo site_url();?>" class="g01v1-logo nada-logo pl-3">
                  <img style="width:130px;" title="GOV.CO" src="https://www.minenergia.gov.co/documents/10994/logo_gov_co_MME.png" class="img-responsive" />
                </a>
              </div>

              <!-- <p class="text-white">
                Calle 43 No. 57 - 31 – Centro Administrativo Nacional Bogotá D.C - Colombia.
                Lunes a viernes de 7:00 a.m. – 4:00 p.m. Jornada Continua
                Teléfono Conmutador: (60+1) 2200 300 - Línea Gratuita: 01-8000-910-180
                Línea Anticorrupción: lineaetica@minenergia.gov.co
                Correo Institucional: menergia@minenergia.gov.co
                Denuncias por actos de corrupción: lineaetica@minenergia.gov.co
                Notificaciones judiciales: notijudiciales@minenergia.gov.co
              </p> -->
            </div>
          </div>

          <!-- <div class="d-flex flex-wrap text-white">
            <a class="px-2" link="#">ministeriominasyenergiaLogo Instagram</a>
            <a class="px-2" link="#">@MinEnergiaCoLogo X</a>
            <a class="px-2" link="#">@MinEnergiaCoLogo Facebook</a>
            <a class="px-2" link="#">@MinisteriodeMinasLogo Youtube</a>
            <a class="px-2" link="#">Ministerio de Minas y EnergiaLogo Linkedin</a>
            <a class="px-2" link="#">@minenergia</a>
          </div> -->

          <!-- <p class="h5 pt-5 text-white">Sede Archivo Central</p>
          <div class="row">
            <div class="col-12 col-md-6 text-left text-white">
              Sede Archivo Central
              Carrera 50 No. 26 - 20 - Bogotá D.C - Colombia.

              Lunes a viernes de 7:00 a.m. – 4:00 p.m. Jornada Continua
            </div>

            <div class="col-12 col-md-6 text-left text-white">
              Teléfono Conmutador: (60+1) 2200 300 - Línea Gratuita: 01-8000-910-180
            </div>
          </div> -->

          <!-- Copyrights-->
          <div class="footer-element py-2 d-flex align-items-center justify-content-end">
            <div class="footer-copy-right">

              <div class="text-center text-lg-right m-0 text-white">

                <small>
                  ©
                  <script language="JavaScript">
                    var time = new Date();
                    var year = time.getYear();
                    if (year < 2000)
                      year = year + 1900 + ", ";
                    document.write(year); // End -->
                  </script> <?php echo $this->config->item("site_name");?>, Todos los derechos reservados.
                </small>
              </div>
            </div>
          </div>
          <!-- / Copyrights  -->
        </div>
      </div>
    </div>
  </div>
</footer>