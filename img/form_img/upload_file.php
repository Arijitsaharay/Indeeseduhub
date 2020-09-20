<?php

      if(isset($_FILES['file'])){
  
    $file = $_FILES['file'] ;
  
    $error = $file['error'];
    $name= $file['name'] ;
    $tmp_name = $file['tmp_name'] ;
    $size = $file['size'] ;
  
    if($error == 0){
     //type restriction
     $ext =  explode(".", $name) ;
     $ext = end($ext) ;
     $ext = strtolower($ext ) ;
     $allow = array("jpg", "png") ;
   
     if(in_array($ext,  $allow)){
     
        // check file size
        if($size <= 2000000){
      
      //check wether file uploaded or not
      if(move_uploaded_file( $tmp_name, $name)){
       
       echo $name ;
       //echo 'file uploaded' ;
      }else{
       echo 'file not uploaded' ;
      }
      
     }else{
      echo 'File is too big' ;
     }
    
    
     }else{
      echo 'Type not allowed';
     }
   
   
   
   
   
    }else{
   
     echo 'error in file';
    }
  
  
  
  
   }

 ?>