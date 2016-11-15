$(document).ready(function() {
  getData();
});

function getData() {
  $.ajax({
    url: "db_access.php",
    type: "GET",
    dataType: "json",
    success: function(json){
      console.log(json);
    },
    error: function(xhr, status, error){
      alert("AJAX failed: " + error);
    },
    complete: function(xhr, status){
      //done
    },
    cache: false
  });
}
