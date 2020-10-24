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
          <?php if (!is_null($venue->deleted_at)) : ?>
            <!-- Deleted At -->
            <div class="form-group row">
              <label for="detail" class="col-md-3 col-form-label font-weight-bold text-dark">
                Deleted
                <span class="font-weight-bold float-right">:</span>
              </label>
              <div class="col-md-9">
                <?= date('d F, Y h:i:s A', strtotime($venue->deleted_at)) ?>
              </div>
            </div>
          <?php endif ?>
        </div>
      </div>
      <hr>
      <!-- HAll / Buildings Information -->
      <div class="row">
        <div class="col-xl-12">
          <div class="table-wrap">
            <table class="table table-hover w-100 dataTable pb-30">
              <thead>
                <tr class="text-center">
                  <th>#</th>
                  <th>Halls / Buildings Name</th>
                  <th>Address</th>
                  <th>Number of Room</th>
                  <th>Total Seat</th>
                </tr>
              </thead>
              <tfoot>
                <tr class="text-center">
                  <th>#</th>
                  <th>Halls / Buildings Name</th>
                  <th>Address</th>
                  <th>Number of Room</th>
                  <th>Total Seat</th>
                </tr>
              </tfoot>
              <tbody>
                <?php if (!empty($halls)) :
                  $i = 1;
                  // dd($halls);
                  foreach ($halls as $hall) : ?>
                    <tr>
                      <td><?= $i++ ?></td>
                      <td><?= esc($hall->name) ?></td>
                      <td><?= esc($hall->address) ?></td>
                      <td class="text-right"><?= esc($hall->room_no) ?></td>
                      <td class="text-right"><?= esc($hall->total_seats) ?></td>
                    </tr>
                  <?php endforeach ?>
                <?php endif ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>


<?= $this->endSection() ?>

<!-- Custom Style -->
<?= $this->section('script') ?>
<script src="<?= base_url('vendors/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('js/dataTables-data.js') ?>"></script>
<?= $this->endSection() ?>