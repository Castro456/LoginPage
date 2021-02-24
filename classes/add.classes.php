<?php

class Add extends Model{

    public function added($add, $userid, $progress){

        if(empty($add))   
        {
            echo"Enter a task to ADD";
        }
        else {
            $this->settask($add, $userid, $progress);
            echo "Task Added";
        }

    }
}