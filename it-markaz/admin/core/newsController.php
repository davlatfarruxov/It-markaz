<?php 
include_once 'model.php';
class Yangilik extends Model
{
    public $table="yangiliklar";
    public function insert($arr)
    {
        foreach ($arr as $key => $value){
            $$key = $this->filtr($value);
        }
        if ($sarlavha == "" || $matn == "") {
            return 409;
        }

        $sql = "INSERT INTO ".$this->table." (`sarlavha`, `matn`) VALUES ('$sarlavha','$matn')";

        if ($this->query($sql)) {
            return 200;
        }else{
            return 409;
        }
    }
    public function update($arr)
    {
        foreach($arr as $key => $value){
            $$key = $this->filtr($value);
        }
        $sql = "UPDATE ".$this->table." SET sarlavha='$sarlavha', matn='$matn' WHERE id=".$id;
        
        if ($this->query($sql)) {
            return 200;
        }else {
            return 409;
        }
    }
    



};