<html>
<?php
include('fcns.php'); showHeader(); ?>

  <div id = "signature">

  </div>

  <script src = "/jSignature/jSignature.min.js">
  $(document).ready(function() {
      $("#signature").jSignature()
  })
  </script>
</body>
</html>
