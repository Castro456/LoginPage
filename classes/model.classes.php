<?php

class Model extends Dbh {

    protected function getdetails($email){                                      
        $sql = "SELECT id, email, pass_word, username FROM users_table where email ='$email' "; 
        $stmt = $this->connect()->query($sql); 
        $stmt->execute([$email]);

        $results = $stmt->fetch();
        return $results ?? 'default value';
    }

    protected function checkemail($email){                                      
        $sql = "SELECT email FROM users_table where email ='$email' "; 
        $stmt = $this->connect()->query($sql); 
        $results = $stmt->fetch();
        return $results['email'] ?? 'default value';
    }

    protected function setuser($firstname, $email, $username, $password, $dateofbirth, $age){
        $sql = "INSERT into users_table(firstname, email, username, pass_word, dob, age) VALUES (?, ?, ?, ?, ?, ?)"; 
        $stmt = $this->connect()->prepare($sql);
        $results = $stmt->execute([$firstname, $email, $username, $password, $dateofbirth, $age]);
        return $results ?? 'default value';
    }

    protected function settask($add1,$userid,$progress){
        $sql = "INSERT INTO task_table(task,user,progress) VALUES (?, ?, ?)"; 
        $stmt = $this->connect()->prepare($sql);
        $results = $stmt->execute([$add1, $userid, $progress]);
        return $results ?? 'default value';
    }

    protected function view(){
        $array = array();
        $sql = "SELECT tasks.id, tasks.task, tasks.time_kept, tasks.progress, users.username
        FROM task_table as tasks 
        join users_table as users on tasks.user = users.id"; 
        $stmt = $this->connect()->query($sql); 
        $stmt->execute();

        while($results = $stmt->fetch())
        {
            $array[] = $results; 
        }
        return $array ;
    }

    protected function delete($delete){
        $sql = "DELETE  FROM task_table WHERE id=$delete "; 
        $stmt = $this->connect()->query($sql); 
        $stmt->execute([$delete]);
    }

    protected function donemarked($done){
        $sql = "UPDATE task_table SET progress = 2 WHERE id = $done "; 
        $stmt = $this->connect()->query($sql); 
        $stmt->execute([$done]);
    }

    protected function taskedit($tasks, $id){
        $sql="UPDATE task_table set task= '$tasks' WHERE id= $id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$tasks, $id]);
    }


}