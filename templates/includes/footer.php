</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!--<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>-->
<script src=<?php echo JS."bootstrap.bundle.js"; ?>></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src=<?php echo JS."dashboard.js"; ?>></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src=<?php echo JS."toastr.min.js"; ?>></script>
<?php
   foreach ($includeFiles as $file) {
      echo '<script src='.JS.$file.'></script>';
   }
?>
<?php echo Alert::catch_msg(); ?>
</body>

</html>