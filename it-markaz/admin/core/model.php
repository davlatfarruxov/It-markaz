<?php require_once 'config.php'; ?>

<?php 

class Model 
{
    public $db;
    public $table;
    public $prod;
    public function __construct()
    {
        require_once 'config.php';
        $this->db=mysqli_connect("localhost", "root", "", "itmarkaz");
    }

    public function filtr($str)
    {
        return mysqli_real_escape_string($this->db, $str);
    }
    public function query($sql)
    {
        return mysqli_query($this->db, $sql);
    }
    public function select()
    {
        $sql = "SELECT * FROM ".$this->table." ORDER BY id DESC";
        $back = mysqli_query($this->db, $sql);
        return mysqli_fetch_all($back, MYSQLI_ASSOC);
    }
    public function selectOne ($id)
    {
        $sql = "SELECT * FROM ".$this->table." WHERE id=".$id;
        $back = mysqli_query($this->db, $sql);
        return mysqli_fetch_assoc($back);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM ".$this ->table ." WHERE id=".$id;
        return mysqli_query($this->db, $sql);
    }
    

}
?>  