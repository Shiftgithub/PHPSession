<?= $this->extend('Bcsir\Views\AdminLayout') ?>

  <!-- Title -->
<?= $this->section('title') ?>Create Hall / Building Rooms<?= $this->endSection() ?>

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
          Hall / Building Rooms Creation Form
        </h5>
        <hr>
        <div class="row">
          <div class="col-xl-12">
            <form action="<?= route_to('venue-room-create') ?>" method="POST" accept-charset="utf-8" autocomplete="off"
                  spellcheck="false" enctype="multipart/form-data">
                <?= csrf_field() ?>

              <!-- <legend class="lead mb-3"><i class="fa fa-info-circle"></i> Venue Information</legend> -->
              <!-- Hall name -->
              <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label font-weight-bolder text-dark">
                  Hall / Building
                  <span class="text-danger font-weight-bolder">*</span>
                </label>
                <div class="col-md-9">
                  <select name="hall_id" id="hallId"
                          class="form-control <?= session('errors.hall_id') ? 'is-invalid' : null ?>" required>
                    <option>Select a option</option>
                      <?php if (!empty($halls)) : ?>
                          <?php foreach ($halls as $hall) : ?>
                          <option value="<?= $hall->id ?>">
                              <?= ucwords($hall->name . ', ' . $hall->venue_name) ?>
                          </option>
                          <?php endforeach; ?>
                      <?php endif; ?>
                  </select>
                </div>
              </div>
              <!-- Total Roomss -->
              <div class="form-group row">
                <label for="numRoom" class="col-md-3 col-form-label font-weight-bolder text-dark">
                  Total Roomss
                  <span class="text-danger font-weight-bolder">*</span>
                </label>
                <div class="col-md-9">
                  <input type="number" class="form-control <?= session('errors.num_room') ? "is-invalid" : null ?>"
                         id="numRoom" name="num_room" value="<?= old('num_room') ?>" min="1" max="1000" required>
                  <div class="error"> <?= session('error.num_room') ?></div>
                </div>
              </div>
              <!-- Table Of HAll information -->
              <div id="tableOfRoom">

              </div>

              <hr>

              <button type="reset" class="btn btn-secondary float-left">Cancel</button>
              <button type="submit" class="btn btn-primary float-right">Create</button>
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
      $(document).ready(function () {
          $('#numRoom').on("input", function () {

              $('#tableOfRoom').html(' ');
              var countPos = 1;
              var numOfRoom = $('#numRoom').val();

              for (countPos; countPos <= numOfRoom; countPos++) {
                  $('#tableOfRoom').append(
                      '<div> \
                                      <div class="form-group row"> \
                                          <label class="col-md-3 col-form-label font-weight-bolder text-dark">' + countPos + '. Room Id: </label> \
                              <div class="col-md-3"> \
                                  <input type="text" class="form-control" name="name' + countPos + '" required> \
                  </div> \
                  <label class="col-md-3 col-form-label font-weight-bolder text-dark">Number Of Seats: </label> \
                  <div class="col-md-3"> \
                      <input type="number" class="form-control" name="seats' + countPos + '" min="1" max="500" required> \
                  </div> \
              </div> \
          </div>'
                  );
              }

          });
      });
  </script>
<?= $this->endSection() ?>