<?php $__env->startSection('content'); ?>

<div class="container-contact100">
<div class="wrap-contact100">

  <form class="contact100-form validate-form" method="POST" action="#">
      <?php echo csrf_field(); ?>
				
      <label class="label-input100" for="message">Choisir le docs souhaité *</label>
      <div class="wrap-input100 validate-input" data-validate = "Message is required">
        <select class="form-control form-control-lg" name="selection">
            <option selected>Choisir le type certificat</option>
            <option value="Certificat">Certificat</option>
            <option value="Attestation">Attestation</option>
          </select>
    </div>
          
      
  </form>

  


  <div class="contact100-more flex-col-c-m" style="background-image: url('images/Ensa.jpeg');">
    <div class="flex-w size1 p-b-47">
        <div class="txt1 p-r-25">
            <span class="lnr lnr-map-marker"></span>
        </div>

        <div class="flex-col size2">
            <span class="txt1 p-b-20">
                Address
            </span>

            <span class="txt2">
                ENSA de Avenue de la Palestine Mhanech I، Tetouan
            </span>
        </div>
    </div>

    <div class="dis-flex size1 p-b-47">
        <div class="txt1 p-r-25">
            <span class="lnr lnr-phone-handset"></span>
        </div>

        <div class="flex-col size2">
            <span class="txt1 p-b-20">
                Contacter nous
            </span>

            <span class="txt3">
                +212 5396-88027
            </span>
        </div>
    </div>

    <div class="dis-flex size1 p-b-47">
        <div class="txt1 p-r-25">
            <span class="lnr lnr-envelope"></span>
        </div>

        <div class="flex-col size2">
            <span class="txt1 p-b-20">
                LAISSEZ NOUS UN MESSAGE
            </span>

            <span class="txt3">
                ensatetouan@uae.ac.ma
            </span>
        </div>
    </div>
</div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Genilogiciel/resources/views/choixcertif.blade.php ENDPATH**/ ?>