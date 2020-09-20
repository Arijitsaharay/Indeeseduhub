<?php 
include_once('header.php');
include('connection.php');
include('functions.php');
?>
<br>
<section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h2>ALL CLASSES</h2>
            </div>
            <div class="row">
               <?php
                  getPro_job();
                ?>
            </div>
            </div>
</section>
<!-- NORMAL JOB ADDS -->
<br>

<?php include_once('footer.php') ?>