<?php
include_once "model.php";
session_start();
class User extends Model
{
    public $table = 'admin';

    public function insert($arr)
    {
        foreach ($arr as $key => $value) {
            $$key = $this->filtr($value);
        }
        $parol = md5($parol);

        $sql = "INSERT INTO " . $this->table . " (`name`,`login`,`parol`) VALUES ('$fio','$login','$parol')";

        if ($fio == "" || $login == ""||  $parol == "") {
            return 409;
        }
        if ($this->query($sql)) {
            return 200;
        } else {
            return 409;
        }
    }
    public function update($arr)
    {
        foreach ($arr as $key => $value) {
            $$key = $this->filtr($value);
        }
        if ($parol != "") {
            $parol = md5($parol);
            $sql = "UPDATE " . $this->table . " SET name='$fio', login='$login', parol='$parol' WHERE id=" . $id;

        } else {
            $parol = md5($parol);
            $sql = "UPDATE " . $this->table . " SET name='$fio', login='$login' WHERE id=" . $id;
        }

        if ($this->query($sql)) {
            return 200;
        } else {
            return 409;
        }
    }



    public function checking($arr)
    {
        // foreach ($arr as $key => $value) {
        //     $key = $this->filtr($value);
        // }
        $login = $this->filtr($arr['login']);
        $parol = $this->filtr($arr['parol']);
        $parol = md5($parol);

        $sql = "SELECT * FROM " . $this->table . " WHERE login='$login' AND parol='$parol'";
        $back = $this->query($sql);

        $user = mysqli_fetch_assoc($back);

        if ($arr['login'] == $user['login'] and $parol == $user['parol'] and $arr['_crf'] == $_SESSION['_crf']) {
            $response['data'] = $arr;
            $response['text'] = 200;
        } else {
            $response['text'] = $sql;
            $response['data'] = $_SESSION['_crf'];
            $_SESSION['_crf'] = md5(time());
            $response['data2'] = $arr['_crf'];
        }

        return $response;
    }

}


?>