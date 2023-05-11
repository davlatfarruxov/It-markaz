<?php 
include_once 'model.php';
class Kurs extends Model
{
    public $table="kurs";
    public function insert($arr)
    {
        foreach ($arr as $key => $value){
            $$key = $this->filtr($value);
        }
        if ($nomi == "" || $malumot == "") {
            return 409;
        }

        $sql = "INSERT INTO ".$this->table." (`nomi`, `malumot`) VALUES ('$nomi','$malumot')";

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
        $sql = "UPDATE ".$this->table." SET nomi='$nomi', malumot='$malumot' WHERE id=".$id;
        
        if ($this->query($sql)) {
            return 200;
        }else {
            return 409;
        }
    }
};