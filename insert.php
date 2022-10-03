<?php
include ("connect.php");

class   Todolist{
    public $id;
    public $task;
    public $status;
    


    function __construct($id,$task,$status){
        $this->task=$task;
        $this->status=$status;
    }

    function set_task($task){
        $this->task=$task;
    }

    function get_task(){
        return $this->task;
    }
    function set_status($status){
        $this->status=$status;
    }
    function get_status(){
        return $this->status=$status;
    }
    


    function insertData(){
        
        $todo = $GLOBALS["conn"]->query("INSERT INTO tasklist(task,statu) VALUES ('$this->task',$this->status)");

    }
    function selectFromData(){
        $todo = $GLOBALS["conn"]->query("SELECT task FROM tasklist");
        $rows=array();
        if($todo ->num_rows > 0){
            while($row =$todo->fetch_assoc()){
                $rows[]=$row;
            }
            return $rows;
        }
    }

    function delete(){
        $delete = $GLOBALS["conn"]->query("DELETE FROM tasklist WHERE id = $this->id");
    }
}




if(isset($_POST['delete'])){
    $todo = new Todolist($_POST["id"] ,$_POST["task"], $_POST["statu"]);
    $todo->delete();
}

if(isset($_POST["submit"])){
    $todo = new Todolist(0,$_POST["task"], 0);
    $todo->insertData(); 
}


if(isset($_GET("getData"))){
    $todo = new Todolist(NULL,NULL,NULL);
   echo json_encode ($todo->selectFromData());
}


?>