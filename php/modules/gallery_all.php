
<!-- THUMBNAILS -->

<div class="flex_cont" >


<?php
  // Set the current working directory
  $directory = getcwd()."/img/";

  // Initialize filecount variavle
  $filecount = 0;

  $files2 = glob( $directory ."*" );

  if( $files2 ) {
      $filecount = count($files2);
  }

  //CREATE THUMBNAILS
    for ($i=0; $i < $filecount-1 ; $i++):
?>

  <div class="col-4">
    <img src="/img/thumbs/thumb_<?php echo $i ?>.jpg" style="width:100%" onclick="openModal();currentSlide(<?php echo $i ?>+1)" class="hover-shadow cursor">
  </div>
<?php endfor; ?>
</div>
