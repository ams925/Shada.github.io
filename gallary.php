
<?php 
include("include/header.php") 
?>

  <div class="room-head-container ">
    <div class="room-info-heading gallary-head">
        <h1>SOCIAL CAPTURES</h1>
        <span></span>
        <p>From our guest adventures…</p>
    </div>
  </div>
  <div id="gallery" class="container-fluid">  
    
      <img src="img/gallary/1.jpg" class="img-responsive">
      <img src="img/gallary/2.jpg" class="img-responsive">
      <img src="img/gallary/3.jpg" class="img-responsive">
      <img src="img/gallary/4.jpg" class="img-responsive">
      <img src="img/gallary/5.jpg" class="img-responsive">
      <img src="img/gallary/6.jpg" class="img-responsive">
      <img src="img/gallary/5.jpg" class="img-responsive">
      <img src="img/gallary/2.jpg" class="img-responsive">
      <img src="img/gallary/3.jpg" class="img-responsive">
      <img src="img/gallary/1.jpg" class="img-responsive">
      <img src="img/gallary/5.jpg" class="img-responsive">
      <img src="img/gallary/4.jpg" class="img-responsive">

  
  </div>
  
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
        </div>
      </div>
  
    </div>
  </div>

<script>
    $(document).ready(function(){
  $("img").click(function(){
  var t = $(this).attr("src");
  $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
  $("#myModal").modal();
});

$("video").click(function(){
  var v = $("video > source");
  var t = v.attr("src");
  $(".modal-body").html("<video class='model-vid' controls><source src='"+t+"' type='video/mp4'></source></video>");
  $("#myModal").modal();  
});
});
</script>

<?php 
include("include/footer.php") 
?>

  
  
