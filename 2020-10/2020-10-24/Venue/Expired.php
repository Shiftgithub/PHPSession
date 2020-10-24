<?= $this->extend('Bcsir\Views\AdminLayout') ?>

  <!-- Title -->
<?= $this->section('title') ?>Venues List<?= $this->endSection() ?>

  <!-- Custom Style -->
<?= $this->section('style') ?>
  <!-- Data Table CSS -->
  <link href="<?= base_url('vendors/datatables.net-dt/css/jquery.dataTables.min.css') ?>" rel="stylesheet"
        type="text/css"/>
  <link href="<?= base_url('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') ?>"
        rel="stylesheet" type="text/css"/>
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
          All Active Venues Table
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
                  <th>Authority</th>
                  <th>Office Designation</th>
                  <th>Total Seat</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr class="text-center">
                  <th>#</th>
                  <th>Venue Name</th>
                  <th>Authority</th>
                  <th>Office Designation</th>
                  <th>Total Seat</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php if (!empty($venues)) :
                    $i = 0;
                    foreach ($venues as $venue) : ?>
                      <tr>
                        <td><?= $i ?></td>
                        <td><?= $venue->name ?></td>
                        <td><?= $venue->authority ?></td>
                        <td><?= $venue->designation ?></td>
                        <td><?= $venue->total_seat ?></td>
                        <td>
                            <?php if ($venue->status == 'Active') : ?>
                              <span class="badge badge-success">Active</span>
                            <?php else : ?>
                              <span class="badge badge-success">Deactive</span>
                            <?php endif ?>
                        </td>
                        <td>
                          <a href="<?= route_to('venue-show', $venue->id) ?>" role="button">
                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top"
                                    title="View!">
                              <i class="fa fa-eye"></i>
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