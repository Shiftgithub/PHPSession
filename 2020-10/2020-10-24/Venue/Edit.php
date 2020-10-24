<?= $this->extend('Bcsir\Views\AdminLayout') ?>

<!-- Title -->
<?= $this->section('title') ?>Venue Detail<?= $this->endSection() ?>

<!-- Custom Style -->
<?= $this->section('style') ?>
<!-- Data Table CSS -->
<link href="<?= base_url('vendors/datatables.net-dt/css/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') ?>" rel="stylesheet" type="text/css" />
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
        <i class="fa fa-table"></i>
        Venue Detail
      </h5>
      <hr>
      <!-- Venue Information -->
      <fieldset>
        <legend class="lead mb-3"><i class="fa fa-info-circle"></i> Venue Information</legend>
        <div class="row">
          <div class="col-xl-12">
            <!-- Venue Title -->
            <div class="form-group row">
              <label for="name" class="col-md-3 col-form-label font-weight-bold text-dark">
                Venue Title
                <span class="float-right">:</span>
              </label>
              <div class="col-md-9">
                <p class="font-16"><?= esc($venue->name) ?></p>
              </div>
            </div>
            <!-- Authority -->
            <div class="form-group row">
              <label for="auth" class="col-md-3 col-form-label font-weight-bold text-dark">
                Authority Name
                <span class="float-right">:</span>
              </label>
              <div class="col-md-9">
                <p class="font-16"><?= esc($venue->authority) ?></p>
              </div>
            </div>
            <!-- Office Designation -->
            <div class="form-group row">
              <label for="name" class="col-md-3 col-form-label font-weight-bold text-dark">
                Office Designation
                <span class="float-right">:</span>
              </label>
              <div class="col-md-9">
                <p class="font-16"><?= esc($venue->office_key) ?></p>
              </div>
            </div>
            <!-- Contact -->
            <div class="form-group row">
              <label for="name" class="col-md-3 col-form-label font-weight-bold text-dark">
                Contact
                <span class="float-right">:</span>
              </label>
              <div class="col-md-9">
                <p class="font-16"><?= esc($venue->contact) ?></p>
              </div>
            </div>
            <?php if (!empty($venue->description)) : ?>
              <!-- Description -->
              <div class="form-group row">
                <label for="detail" class="col-md-3 col-form-label font-weight-bold text-dark">
                  Description
                  <span class="float-right">:</span>
                </label>
                <div class="col-md-9">
                  <p class="font-16"><?= esc($venue->description) ?></p>
                </div>
              </div>
            <?php endif; ?>
            <a href="<?= route_to('venue-edit-info', $venue->id) ?>" role="button">
              <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="View!">
                Modify Venue Information
              </button>
            </a>
          </div>
        </div>
      </fieldset>

      <hr>
      <!-- HAll / Buildings Information -->
      <fieldset>
        <?php //d($halls); 
        ?>
        <?php //d($rooms); 
        ?>
        <legend class="lead mb-3"><i class="fa fa-info-circle"></i> Halls Information</legend>
        <?php foreach ($halls as $hall) : ?>
          <div class="row">
            <div class="col-xl-12">
              <!-- Hall Name -->
              <div class="form-group row">
                <label class="col-md-3 col-form-label font-weight-bold text-dark">
                  Hall Name
                  <span class="float-right">:</span>
                </label>
                <div class="col-md-9">
                  <p class="font-16"><?= esc($hall->name) ?></p>
                </div>
              </div>
              <!-- Address -->
              <div class="form-group row">
                <label class="col-md-3 col-form-label font-weight-bold text-dark">
                  Address
                  <span class="float-right">:</span>
                </label>
                <div class="col-md-9">
                  <p class="font-16"><?= esc($hall->address) ?></p>
                </div>
              </div>
              <!-- Room Information -->

              <?php foreach ($rooms as $room) : ?>
                <?php if ($room->hall_id == $hall->id) : ?>
                  <div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label font-weight-bolder text-dark">Room Id: </label>
                      <div class="col-md-3">
                        <p class="font-16"><?= esc($room->name) ?></p>
                      </div>
                      <label class="col-md-3 col-form-label font-weight-bolder text-dark">Number of Seats: </label>
                      <div class="col-md-3">
                        <p class="font-16"><?= esc($room->num_of_seats) ?></p>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>
              <a href="<?= route_to('venue-edit', $venue->id) ?>" role="button">
                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="View!">
                  Modify Hall / Building Information
                </button>
              </a>
            </div>
          </div>
          <hr>
        <?php endforeach; ?>
      </fieldset>
    </section>
  </div>
</div>


<?= $this->endSection() ?>

<!-- Custom Style -->
<?= $this->section('script') ?>
<?= $this->endSection() ?>