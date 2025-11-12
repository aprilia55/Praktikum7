<?php
$nama_hari = date("l");

switch ($nama_hari) {
    case "Sunday":
        echo "Minggu";
        break;
    case "Monday":
        echo "Senin";
        break;
    case "Tuesday":
        echo "Selasa";
        break;
    case "Wednesday":
        echo "Rabu";
        break;
    case "Thursday":
        echo "Kamis";
        break;
    case "Friday":
        echo "Jumat";
        break;
    case "Saturday":
        echo "Sabtu";
        break;
    default:
        echo "Hari tidak diketahui";
}
?>
