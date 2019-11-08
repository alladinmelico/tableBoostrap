<?php 
require('includes/config.php');
include('includes/header.php');
include('includes/nav.php');
?>


<ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active text-info" id="actor-tab" data-toggle="tab" href="#actor" role="tab" aria-controls="actor" aria-selected="true">
      <img src="..\icons\png\user-shape.png" alt="">
        Actor
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-info" id="film-tab" data-toggle="tab" href="#film" role="tab" aria-controls="film" aria-selected="false">
      <img src="..\icons\png\ticket.png" alt="">
        Film
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-info" id="producer-tab" data-toggle="tab" href="#producer" role="tab" aria-controls="producer" aria-selected="false">
      <img src="..\icons\png\film-strip-with-two-photograms.png" alt="">
        Producer
    </a>
  </li>
</ul>


<div class="tab-content bg-white text-info" id="myTabContent">
  <div class="tab-pane fade show active" id="actor" role="tabpanel" aria-labelledby="actor-tab">
        <?php include('tableSample.php') ?>
  </div>

  <div class="tab-pane fade bg-white text-info" id="film" role="tabpanel" aria-labelledby="film-tab">
        <?php include('tableSample.php') ?>
  </div>


  <div class="tab-pane fade bg-white text-info" id="producer" role="tabpanel" aria-labelledby="producer-tab">
    <?php include('tableSample.php') ?>
  </div>
</div>

<?php
  include('includes/footer.php');
?>