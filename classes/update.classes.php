<?php

class Update extends Model{

   public function changes($tasks,$id){

    if ( empty($tasks) || empty($id) ) {
        echo "Problem Occured";
    }
    else {
        $this->taskedit($tasks,$id);
        echo "Edited";
    }
   }
}