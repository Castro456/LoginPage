<?php

class Delete extends Model{

    public function del($delete){
        if (empty($delete)) {
            echo "Problem Occured";
        }
        else {
            $this->delete($delete);
            echo "Deleted";
        }
    }
}