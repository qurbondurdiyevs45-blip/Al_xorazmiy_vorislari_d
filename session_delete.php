<?php
session_start();
// session_unset(); //Barcha sessionlarni o'chiradi
//session_destroy(); //Barcha sessionlarni va sessionni fayilini ham o'chiradi
 unset($_SESSION['ism']);
echo "Ma'lumot o'chirildi" ;
?>