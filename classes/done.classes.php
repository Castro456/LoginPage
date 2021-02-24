<?php

class Done extends Model{

    public function taskdone($done){
        if (empty($done)) {
            echo "Problem Occured";
        }
        else {
            $this->donemarked($done);
            echo "Task Marked as Done";
        }
    }
}