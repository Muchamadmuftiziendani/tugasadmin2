<?php

require_once __DIR__ . "/koneksi.php";
require_once __DIR__ . "/Model/member.php";

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$data = [
    $username,
    $password
];

$member = new Member();
$cek = $member->ceklogin($data);

if ($cek){
    $_SESSION["MEMBER"] = $cek;
    header("Location:http://localhost/MBKM/Projek_utuh_php_nativ/admin/index.php?url=produk");
    exit;
}else{
    echo "<script>alert('Username/Password anda salah!'); history.back();</script>";

}

?>


