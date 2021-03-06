<!-- Alerts -->
<?php
/**
 * Membuat pengkondisian alerts
 * 
 * @author almarup21 <https://github.com/almarup21>
 * @package ${NAMESPACE}
 */


$success = $this->session->flashdata('success');
$warning = $this->session->flashdata('warning');
$error = $this->session->flashdata('error');

if ($success) {
  $alert_status = 'alert-success';
  $status = 'Success';
  $message = $success;
}

if ($warning) {
  $alert_status = 'alert-warning';
  $status = 'Warning';
  $message = $warning;
}


if ($error) {
  $alert_status = 'alert-danger';
  $status = 'Error!';
  $message = $error;
}
?>


<?php if ($success || $warning || $error) : ?>
  <div class="row">
    <div class="col-md-12">
      <div class="alert <?= $alert_status; ?> alert-dismissible fade-show" role="alert">
        <strong><?= $status; ?></strong><?= $message; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>

<?php endif; ?>