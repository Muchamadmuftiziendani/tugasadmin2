<?php


class Member
{



    public function ceklogin($data)
    {
        $koneksi = getConection();
        $sql = "SELECT * FROM member WHERE username = ? AND password = SHA1(MD5(SHA1(?)))";
        $rs = $koneksi->prepare($sql);
        $rs->execute($data);
        $st = $rs->fetch();
        return $st;
    }
}
