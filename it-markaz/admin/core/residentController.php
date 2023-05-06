<?php include_once "model.php"; ?>
<?php
class Resident extends Model
{
    public $table = "rezidentlar";
    public function insert($arr)
    {
        foreach ($arr as $key => $value) {
            $$key = $this->filtr($value);
        }
        if ($nomi == "" || $email == "" || $maqsad == "" || $phone == "") {
            return 409;
        }
        $sql = "INSERT INTO " . $this->table . " (`nomi`, `email`, `maqsad`, `phone`) VALUES ('$nomi', '$email', '$maqsad', '$phone')";

        if ($this->query($sql)) {
            return 200;
        } else {
            return 409;
        }
    }
}