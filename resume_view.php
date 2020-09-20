<?php 
include_once('header.php');
include('connection.php');
include('functions.php');
?>
<br>
<section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h3>Resume's Of Applicants</h3>
            </div>
            <div class="row">
               <?php
                  get_Resume();
                ?>
            </div>
            </div>
</section>
<?php 
include_once('footer.php');
?>