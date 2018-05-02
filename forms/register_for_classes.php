<?php include('fcns.php'); showHeader(); ?>
<form method = "post" action = "../db_functions/registerStudentSql.php">
  <fieldset>
     <legend>Classes the student will take this coming semester:</legend>
     <div>
        <input type="checkbox" id="english" name="class[]" value="english">
        <label for="english">English</label>
     </div>
     <div>
        <input type="checkbox" id="math" name="class[]" value="math">
        <label for="math">Math</label>
     </div>
     <div>
        <input type="checkbox" id="writing" name="class[]" value="writing">
        <label for="writing">Writing</label>
     </div>
     <div>
        <input type="checkbox" id="shsat" name="class[]" value="shsat">
        <label for="shsat">SHSAT</label>
     </div>
     <div>
        <input type="checkbox" id="psat" name="class[]" value="psat">
        <label for="psat">PSAT</label>
     </div>
     <div>
        <input type="checkbox" id="sat" name="class[]" value="sat">
        <label for="sat">SAT</label>
     </div>
  </fieldset>
  
  <button type="submit" class="btn btn-primary form-control">Register</button>
</form>

<?php showFooter(); ?>
