<?php
require_once './HumanTrait.php';
require_once './SinhVien.php';
require_once './GiangVien.php';

echo '<pre>';

$sinhVien = new SinhVien();
echo SinhVien::$name;
