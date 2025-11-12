<?php
$nama_hari = date("l");

if ($nama_hari == "Sunday") {
    echo "Minggu";
} elseif ($nama_hari == "Monday") {
    echo "Senin";
} elseif ($nama_hari == "Tuesday") {
    echo "Selasa";
} elseif ($nama_hari == "Wednesday") {
    echo "Rabu";
} elseif ($nama_hari == "Thursday") {
    echo "Kamis";
} elseif ($nama_hari == "Friday") {
    echo "Jumat";
} elseif ($nama_hari == "Saturday") {
    echo "Sabtu";
} else {
    echo "Hari tidak diketahui";
}
?>
