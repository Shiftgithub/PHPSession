<?= $this->extend('Bcsir\Views\AdminLayout') ?>

<!-- Title -->
<?= $this->section('title') ?>Modify Venue<?= $this->endSection() ?>

<!-- Custom Style -->
<?= $this->section('style') ?>
<?= $this->endSection() ?>

<!-- Main Content -->
<?= $this->section('content') ?>
<!-- Title -->
<div class="hk-pg-header">
  <h4 class="hk-pg-title">
    <span class="pg-title-icon"><i class="fa fa-building"></i></span>
    Venue
  </h4>
</div>
<!-- /Title -->

<!-- Row -->
<div class="row">
  <div class="col-xl-12">
    <section class="hk-sec-wrapper">
      <h5 class="hk-sec-title">
        <i class="fa fa-plus-square"></i>
        Venue Modification Form
      </h5>
      <hr>
      <div class="row">
        <div class="col-xl-12">
          <form action="<?= route_to('venue-edit-info', $venue->id) ?>" method="POST" accept-charset="utf-8" autocomplete="off" spellcheck="false" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <!-- Venue name -->
            <div class="form-group row">
              <label for="name" class="col-md-3 col-form-label font-weight-bolder text-dark">
                Venue Name
                <span class="text-danger font-weight-bolder">*</span>
              </label>
              <div class="col-md-9">
                <input type="text" class="form-control <?= session('errors.name') ? "is-invalid" : null ?>" 
                  id="name" value="<?= old('name', $venue->name) ?>" name="name" 
                  minlength="3" maxlength="255" pattern="<?= NAME_EXP ?>" required
                >
                <div class="error"> <?= session('errors.name') ?></div>
              </div>
            </div>
            <!-- Authority name -->
            <div class="form-group row">
              <label for="authority" class="col-md-3 col-form-label font-weight-bolder text-dark">
                Authority Name
                <span class="text-danger font-weight-bolder">*</span>
              </label>
              <div class="col-md-9">
                <input type="text" class="form-control <?= session('errors.authority') ? "is-invalid" : null ?>" 
                  id="authority" value="<?= old('authority', $venue->authority) ?>" name="authority" 
                  required minlength="3" maxlength="255" pattern="<?= NAME_EXP ?>"
                >
                <div class="error"> <?= session('errors.authority') ?></div>
              </div>
            </div>
            <!-- Office Designation -->
            <div class="form-group row">
              <label for="officeKey" class="col-md-3 col-form-label font-weight-bolder text-dark">
                Office Designation
                <span class="text-danger font-weight-bolder">*</span>
              </label>
              <div class="col-md-9">
                <input type="text" class="form-control <?= session('errors.office_key') ? "is-invalid" : null ?>" 
                  id="office_key" value="<?= old('office_key', $venue->office_key) ?>" name="office_key" 
                  required minlength="3" maxlength="255" pattern="<?= NAME_EXP ?>"
                >
                <div class="error"> <?= session('errors.office_key') ?></div>
              </div>
            </div>
            <!-- Contact -->
            <div class="form-group row">
              <label for="contact" class="col-md-3 col-form-label font-weight-bolder text-dark">
                Contact
                <span class="text-danger font-weight-bolder">*</span>
              </label>
              <div class="col-md-9">
                <input type="text" class="form-control <?= session('errors.contact') ? "is-invalid" : null ?>" 
                  id="contact" value="<?= old('contact', $venue->contact) ?>" name="contact" 
                  required min="11" max="11" pattern="<?= MOBILE_EXP ?>"
                >
                <div class="error"> <?= session('errors.contact') ?></div>
              </div>
            </div>
            <!-- description -->
            <div class="form-group row">
              <label for="body" class="col-md-3 col-form-label font-weight-bolder text-dark">
                Description
              </label>
              <div class="col-md-9">
                <textarea class="form-control <?= session('errors.body') ? "is-invalid" : null ?>" 
                  id="body" name="body" rows="3"
                  minlength="3" maxlength="300"
                ><?= old('body', $venue->description) ?></textarea>
                <div class="error"> <?= session('error.body') ?></div>
              </div>
            </div>
            <!-- Number of Halls / Buildings -->
            <!-- <div class="form-group row">
              <label for="numHB" class="col-md-3 col-form-label font-weight-bolder text-dark">
                Number Of Halls / Buildings
                <span class="text-danger font-weight-bolder">*</span>
              </label>
              <div class="col-md-9">
                <input type="number" class="form-control <?= session('errors.number_of_halls') ? "is-invalid" : null ?>" id="numHB" value="<?= old('number_of_halls') ?>" name="number_of_halls" min="1" max="99" required>
                <div class="error"> <?= session('error.number_of_halls') ?></div>
              </div>
            </div> -->
            <!-- Table Of HAll information -->
            <!-- <div id="tableOfHalls">

            </div> -->

            <hr>

            <button type="reset" class="btn btn-secondary float-left">Cancel</button>
            <button type="submit" class="btn btn-primary float-right">Update</button>
          </form>
        </div>
      </div>
    </section>
  </div>
</div>
<?= $this->endSection() ?>

<!-- Custom Script -->
<?= $this->section('script') ?>
<script>
  $(document).ready(function() {
    $('#numHB').on("input", function() {

      $('#tableOfHalls').html(' ');
      var countPos = 1;
      var numOfHall = $('#numHB').val();

      for (countPos; countPos <= numOfHall; countPos++) {
        $('#tableOfHalls').append(
          '<div> \
            <div class="form-group row"> \
                <label class="col-md-3 col-form-label font-weight-bolder text-dark">Hall / Building Name</label> \
                <div class="col-md-9"> \
                    <input type="text" class="form-control" name="hall_name' + countPos + '" required minLength="3" maxLength="255"> \
                  </div> \
              </div> \
              <div class="form-group row"> \
                  <label class="col-md-3 col-form-label font-weight-bolder text-dark">Hall / Building Address</label> \
                  <div class="col-md-9"> \
                      <input type="text" class="form-control" name="hall_address' + countPos + '" required minLength="3" maxLength="300"> \
                  </div> \
              </div> \
          </div>'
        );
      }

    });
  });
</script>
<?= $this->endSection() ?>