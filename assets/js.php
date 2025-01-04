<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  // document ready handler
  // or $(document).ready(Function(){...
  jQuery(function($) {
    var checkboxValue = JSON.parse(localStorage.getItem('checkboxValue')) || {}
    var $checkbox = $("#checkbox-container :checkbox");

    $checkbox.on("change", function() {
      $checkbox.each(function() {
        checkboxValue[this.id] = this.checked;
      });
      localStorage.setItem("checkboxValue", JSON.stringify(checkboxValue));
    });

    //on page load
    $.each(checkboxValue, function(key, value) {
      $("#" + key).prop('checked', value);
    });
  });
</script>
<div class="wrap">
  <h3>Background Swap:</h3>
  <form action="" method="POST">
    <div id="checkbox-container">
      Background Swap: <input type="checkbox" id="name" name="new_background" />
    </div>

    <input type="submit" name="submit" value="Upgrade Background" class="button" />
  </form>

</div>