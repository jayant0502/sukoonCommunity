<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 555">
    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <!-- <img src="" class="rounded me-2" alt=""> -->
        <strong class="me-auto">Notification</strong>
        <small style="color: #fa0463;">Sukoon</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; else echo $error;
       unset( $_SESSION['message'] ); ?>
      </div>
    </div>
  </div>

  <script>
  
    var toastele = document.getElementById("liveToast");
    var toastbootstrap = new bootstrap.Toast(toastele);
    toastbootstrap.show();
  </script>