<?= $this->extend('Bcsir\Views\AdminLayout') ?>

<!-- Title -->
<?= $this->section('title') ?>Editable Venues List<?= $this->endSection() ?>

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
    Venues
  </h4>
</div>
<!-- /Title -->

<!-- Row -->
<div class="row">
  <div class="col-xl-12">
    <section class="hk-sec-wrapper">
      <h5 class="hk-sec-title">
        <i class="fa fa-table"></i>
        All Editable Venues Table
      </h5>
      <hr>
      <div class="row">
        <div class="col-xl-12">
          <div class="table-wrap">
            <table class="table table-hover w-100 dataTable pb-30">
              <thead>
                <tr class="text-center">
                  <th>#</th>
                  <th>Venue Name</th>
                  <th>Number of Building</th>
                  <th>Number of Room</th>
                  <th>Total Seat</th>
                  <th>Edit</th>
                  <th>Archive</th>
                </tr>
              </thead>
              <tfoot>
                <tr class="text-center">
                  <th>#</th>
                  <th>Venue Name</th>
                  <th>Number of Building</th>
                  <th>Number of Room</th>
                  <th>Total Seat</th>
                  <th>Edit</th>
                  <th>Archive</th>
                </tr>
              </tfoot>
              <tbody>
                <?php if (!empty($venues)) :
                  $i = 1;
                  // dd($venues);
                  foreach ($venues as $venue) : ?>
                    <tr>
                      <td><?= $i++ ?></td>
                      <td><?= esc($venue->name) ?></td>
                      <td class="text-right"><?= esc($venue->num_of_rooms) ?></td>
                      <td class="text-right"><?= esc($venue->num_of_halls) ?></td>
                      <td class="text-right"><?= esc($venue->num_seats) ?></td>
                      <td class="text-center">
                        <a href="<?= route_to('venue-edit', $venue->id) ?>" role="button">
                          <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Edit!">
                            <i class="fa fa-edit"></i>
                          </button>
                        </a>
                      </td>
                      <td class="text-center">
                        <a href="<?= route_to('venue-delete', $venue->id) ?>" role="button">
                          <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Archive!">
                            <i class="fa fa-archive"></i>
                          </button>
                        </a>
                      </td>
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