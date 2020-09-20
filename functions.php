<?php
include('connection.php');
$db=$conn;
function getPro(){
    global $db;
    $get_product="select * from job_table order by 1 DESC LIMIT 0,15";
    $run_products=mysqli_query($db,$get_product);
    while ($row_product=mysqli_fetch_array($run_products)) {
        $job_id=$row_product['job_id'];
        $job_name=$row_product['name'];
        $job_salary=$row_product['salary'];
        $job_img1=$row_product['img1'];

        echo "<div class='col-lg-3 col-sm-6'>
                    <div class='product-item'>
                        <div class='pi-pic'>
                            <a href='details.php?job_id=$job_id'><img src='./img/form_img/$job_img1' alt='' height='250px' width='400px'></a>
                            <div class='pi-links'>
                                <a href='details.php?job_id=$job_id' class='add-card'><i class='flaticon-bag'></i><span>VISIT POST</span></a>
                                <!--<a href='#' class='wishlist-btn'><i class='flaticon-heart'></i></a>-->
                            </div>
                        </div>
                        <div class='pi-text'>
                            <h6>Rs $job_salary<br>Lakhs/annum</h6>
                            <p>$job_name</p>
                        </div>
                    </div>
                </div>";
    }
}


function getPremium(){
    global $db;
    $get_product="select * from job_table order by 1 ASC LIMIT 0,40";
    $run_products=mysqli_query($db,$get_product);
    while ($row_product=mysqli_fetch_array($run_products)) {
        $job_id=$row_product['job_id'];
        $user_id = $row_product['user_id'];
        $job_name = $row_product['name'];           
        $subject=$row_product['subject'];
        $date = $row_product['date'];
        $apply = $row_product['apply'];
        $job_img1=$row_product['img1'];
        $job_img2=$row_product['img2'];
        $job_img3=$row_product['img3'];

        echo "<div class='product-item'>
                    <div class='pi-pic'>
                        <div class='tag-new'>Live</div>
                        <a href='details.php?job_id=$job_id'>
                        <img src='./img/form_img/$job_img1' alt='' height='300px' width='100%'></a>
                        <div class='pi-links'>
                            <a href='details.php?job_id=$job_id' class='add-card'><i class='flaticon-bag'></i><span>VIEW DETAILS</span></a>
                            <!--<a href='#' class='wishlist-btn'><i class='flaticon-heart'></i></a>-->
                        </div>
                    </div>
                    <div class='pi-text'>
                        <h6>$subject</h6>
                        <p>$date</p>
                    </div>
                </div>";




    }
}

function getPro_job(){
    global $db;
    $get_product="select * from job_table order by 1 ASC LIMIT 0,150";
    $run_products=mysqli_query($db,$get_product);
    while ($row_product=mysqli_fetch_array($run_products)) {
       $job_id=$row_product['job_id'];
        $user_id = $row_product['user_id'];
        $job_name = $row_product['name'];           
        $subject=$row_product['subject'];
        $date = $row_product['date'];
        $apply = $row_product['apply'];
        $job_img1=$row_product['img1'];
        $job_img2=$row_product['img2'];
        $job_img3=$row_product['img3'];

        echo "<div class='col-lg-3 col-sm-6'>
                    <div class='product-item'>
                        <div class='pi-pic'>
                            <a href='details.php?job_id=$job_id'><img src='./img/form_img/$job_img1' alt='' height='250px' width='400px'></a>
                            <div class='pi-links'>
                                <a href='details.php?job_id=$job_id' class='add-card'><i class='flaticon-bag'></i><span>VIEW DETAILS</span></a>
                                <!--<a href='#' class='wishlist-btn'><i class='flaticon-heart'></i></a>-->
                            </div>
                        </div>
                        <div class='pi-text'>
                            <h6>$subject</h6>
                        <p>$date</p>
                        </div>
                    </div>
                </div>";
    }
}


$db=$conn;
function get_Resume(){
    global $db;
    $get_product="select * from stud_table order by 1 DESC LIMIT 0,15";
    $run_products=mysqli_query($db,$get_product);
    while ($row_product=mysqli_fetch_array($run_products)) {
    $stud_id=$row_product['stud_id'];
    $user_id = $row_product['user_id'];
    $name = $row_product['name'];
    $address = $row_product['address'];
    $email = $row_product['email'];
    $phone = $row_product['phone'];
    $profession = $row_product['profession'];
    $objective = $row_product['objective'];
    $education = $row_product['education'];
    $experience = $row_product['experience'];
    $skill = $row_product['skill'];
    $language = $row_product['language'];
    $links = $row_product['links'];
    $img1 = $row_product['img1'];

        echo "<div class='col-lg-3 col-sm-6'>
                    <div class='product-item'>
                        <div class='pi-pic'>
                            <a href='resume.php?stud_id=$stud_id'><img src='./img/form_img/$img1' alt='' height='250px' width='400px'></a>
                            <div class='pi-links'>
                                <a href='resume.php?stud_id=$stud_id' class='add-card'><i class='flaticon-bag'></i><span>OPEN RESUME</span></a>
                                <!--<a href='#' class='wishlist-btn'><i class='flaticon-heart'></i></a>-->
                            </div>
                        </div>
                        <div class='pi-text'>
                            <h6>$profession</h6>
                            <p>$name</p>
                        </div>
                    </div>
                </div>";
    }
}

?>

