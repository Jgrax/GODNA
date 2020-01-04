
<!-- THUMBNAILS -->

<div class="flex_cont" >


<?php
  // Set the current working directory
  $directory = getcwd()."/img/1/";

  // Initialize filecount variavle
  $filecount = 0;

  $files2 = glob( $directory ."*" );

  if( $files2 ) {
      $filecount = count($files2);
  }

  //CREATE THUMBNAILS
    for ($i=0; $i < $filecount ; $i++):
?>

  <div class="col-4">
    <img src="/img/1/img_1_<?php echo $i ?>.jpg" style="width:100%" onclick="openModal();currentSlide(<?php echo $i ?>+1)" class="hover-shadow cursor">
  </div>
<?php endfor; ?>
</div>



<!-- IN SLIDER -->

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <?php


    // Set the current working directory
    $directory = getcwd()."/img/1/";

    // Initialize filecount variavle
    $filecount = 0;

    $files2 = glob( $directory ."*" );

    if( $files2 ) {
        $filecount = count($files2);
    }


      for ($a=0; $a < $filecount ; $a++):
    ?>
    <div class="mySlides">
      <div class="numbertext"><?php echo $a+1 . "/" . $filecount ?> </div>
      <img src="/img/1/img_1_<?php echo $a ?>.jpg" style="width:100%">
    </div>

<?php endfor; ?>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <div class="caption-container">
      <p id="caption"></p>
    </div>
  </div>
</div>

</div>
