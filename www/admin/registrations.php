<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/config.php';
checkLogin();
$success = $error = '';

$limit = 10;
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$offset = ($page - 1) * $limit;

$total_leads = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as cnt FROM registrations"))['cnt'];
$total_pages = ceil($total_leads / $limit);

$leads = [];
$sql = mysqli_query($conn, "SELECT * FROM registrations ORDER BY created_at DESC LIMIT $offset,$limit");
if(mysqli_num_rows($sql) > 0){
    while($row = mysqli_fetch_assoc($sql)){
        $leads[] = $row;
    }
}

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    if (mysqli_query($conn, "DELETE FROM registrations WHERE id=$id")) {
        $_SESSION['success'] = 'Deleted successfully!';
        header("Location: ".str_replace('.php', '', $_SERVER['PHP_SELF']));
        exit;
    } else {
        $_SESSION['error'] = 'Error deleting.';
        header("Location: ".str_replace('.php', '', $_SERVER['PHP_SELF']));
        exit;
    }
}

if (!empty($_SESSION['success'])) {
    $success = $_SESSION['success'];
    unset($_SESSION['success']);
}
if (!empty($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}
?>

<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<style>
  .action-cell {
  white-space: nowrap;
}
.action-cell .btn {
  display: inline-block;
  margin-right: 4px;
  margin-bottom: 2px;
  vertical-align: middle;
}
</style>
<div class="main-content">
    <div class="page-header">
        <h1><i class="fas fa-users"></i> Registered Users List</h1>
    </div>

    <?php if ($success): ?>
      <div class="alert alert-success alert-dismissible fade show">
        <i class="fas fa-check-circle"></i> <?php echo $success; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    <?php endif; ?>
    <?php if ($error): ?>
      <div class="alert alert-danger alert-dismissible fade show">
        <i class="fas fa-exclamation-circle"></i> <?php echo $error; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    <?php endif; ?>
    
    <div class="card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <span><i class="fas fa-clock"></i> All Registered Users</span>
          <a href="export_registrations.php" class="btn btn-success btn-sm">
            <i class="fas fa-file-excel"></i> Export to Excel
          </a>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Child Name</th>
                            <th>Child Age</th>
                            <!-- <th>Parent Name</th> -->
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Amount</th>
                            <th>Screenshot</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($leads) > 0):
                            $index = $offset + 1;
                            foreach ($leads as $row): ?>
                        <tr>
                            <td><?php echo $index; ?></td>
                            <td><?php echo htmlspecialchars($row['child_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['child_age']); ?></td>
                            <!-- <td><?php echo htmlspecialchars($row['parent_name']); ?></td> -->
                            <td><a href="mailto:<?php echo htmlspecialchars($row['email']); ?>"><?php echo htmlspecialchars($row['email']); ?></a></td>
                            <td><?php echo htmlspecialchars($row['mobile']); ?></td>
                            <td><?php echo '₹' .number_format($row['amount']); ?></td>
                            <td>
                              <?php
                                if (!empty($row['screenshot'])) {
                                  $imgSrc = '/' . ltrim($row['screenshot'], '/');
                                  echo '<img src="' . htmlspecialchars($imgSrc) . '"  alt="Screenshot">';
                                }
                              ?>
                            </td>

                            <td><?php echo date('M d, Y h:i A', strtotime($row['created_at'])); ?></td>
                            <td class="action-cell">
                                <button 
                                  class="btn btn-sm btn-info view-btn"
                                  type="button"
                                  data-bs-toggle="modal"
                                  data-bs-target="#viewLeadModal"
                                  data-child_name="<?php echo htmlspecialchars($row['child_name']); ?>"
                                  data-child_age="<?php echo htmlspecialchars($row['child_age']); ?>"
                                  data-parent_name="<?php echo htmlspecialchars($row['parent_name']); ?>"
                                  data-email="<?php echo htmlspecialchars($row['email']); ?>"
                                  data-mobile="<?php echo htmlspecialchars($row['mobile']); ?>"
                                  data-amount="<?php echo htmlspecialchars($row['amount']); ?>"
                                  data-screenshot="<?php echo '/'.ltrim(!empty($row['screenshot'])?$row['screenshot']:'','/'); ?>"
                                  data-date="<?php echo date('M d, Y h:i A', strtotime($row['created_at'])); ?>"
                              >
                                  <i class="fas fa-eye"></i>
                              </button>
                                <a href="#" class="btn btn-sm btn-danger delete-btn" data-id="<?= $row['id'] ?>"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php 
                            $index++;
                            endforeach;
                        else: ?>
                        <tr>
                            <td colspan="7" class="text-center text-muted">No leads found.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <?php if($total_pages > 1): ?>
            <nav>
              <ul class="pagination justify-content-center">
                <?php for($p=1;$p<=$total_pages;$p++): ?>
                <li class="page-item <?php echo $p==$page ? 'active' : ''; ?>"><a class="page-link" href="?page=<?php echo $p; ?>"><?php echo $p; ?></a></li>
                <?php endfor; ?>
              </ul>
            </nav>
            <?php endif; ?>
        </div>
    </div>

    <!-- View Modal -->
    <div class="modal fade" id="viewLeadModal" tabindex="-1" aria-labelledby="viewLeadDetails" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-eye"></i> Registration Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <div class="modal-body">
              <div class="modal-body">
                <div class="row align-items-stretch">
                  <div class="col-lg-7 col-12" style="padding-bottom:18px;">
                    <div class="mb-2"><strong>Child Name:</strong> <span id="modal_lead_child_name"></span></div>
                    <div class="mb-2"><strong>Child Age:</strong> <span id="modal_lead_child_age"></span></div>
                    <div class="mb-2"><strong>Parent Name:</strong> <span id="modal_lead_parent_name"></span></div>
                    <div class="mb-2"><strong>Mobile:</strong> <span id="modal_lead_mobile"></span></div>
                    <div class="mb-2"><strong>Email:</strong> <span id="modal_lead_email"></span></div>
                    <div class="mb-2"><strong>Registration Fee:</strong> <span id="modal_lead_amount"></span></div>
                    <div class="mb-2"><strong>Date:</strong> <span id="modal_lead_date"></span></div>
                  </div>
                  <div class="col-lg-5 col-12 d-flex flex-column align-items-center justify-content-center">
                    <div class="screenshot-label" style="font-weight:600; font-size:0.8em; color:#1d105e; margin-bottom:9px;">
                      <i class="fas fa-file-image" style="color:#9646fa;"></i> Payment Screenshot:
                    </div>
                    <div id="modal_lead_screenshot" style="width:100%;text-align:center"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div> -->
        </div>
      </div>
    </div>

</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger"><i class="fas fa-trash"></i> Confirm Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- NO MODAL, NO ADD/EDIT/DELETE BUTTONS -->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/admin-script.js"></script>
</body>
</html>
