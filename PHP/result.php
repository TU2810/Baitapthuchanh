<?php

function tinhDiemTrungBinh($diemToan, $diemLy, $diemHoa, $diemTiengAnh, $diemVan, $diemLichSu) {
    $diemTong = $diemToan + $diemLy + $diemHoa + $diemTiengAnh + $diemVan + $diemLichSu;
    $diemTrungBinh = $diemTong / 6;

    return $diemTrungBinh;
}

function xepLoai($diemTrungBinh) {
    if ($diemTrungBinh < 5) {
        return "Học sinh yếu";
    } elseif ($diemTrungBinh >= 5 && $diemTrungBinh <= 6.4) {
        return "Học sinh trung bình";
    } elseif ($diemTrungBinh >= 6.5 && $diemTrungBinh <= 7.9) {
        return "Học sinh khá";
    } else {
        return "Học sinh giỏi";
    }
}

// Nhận dữ liệu từ biểu mẫu
$diemToan = isset($_POST['toan']) ? floatval($_POST['toan']) : 0;
$diemLy = isset($_POST['ly']) ? floatval($_POST['ly']) : 0;
$diemHoa = isset($_POST['hoa']) ? floatval($_POST['hoa']) : 0;
$diemTiengAnh = isset($_POST['tienganh']) ? floatval($_POST['tienganh']) : 0;
$diemVan = isset($_POST['van']) ? floatval($_POST['van']) : 0;
$diemLichSu = isset($_POST['lichsu']) ? floatval($_POST['lichsu']) : 0;

// Kiểm tra và tính điểm trung bình
if ($diemToan >= 0 && $diemToan <= 10 &&
    $diemLy >= 0 && $diemLy <= 10 &&
    $diemHoa >= 0 && $diemHoa <= 10 &&
    $diemTiengAnh >= 0 && $diemTiengAnh <= 10 &&
    $diemVan >= 0 && $diemVan <= 10 &&
    $diemLichSu >= 0 && $diemLichSu <= 10) {

    $diemTrungBinh = tinhDiemTrungBinh($diemToan, $diemLy, $diemHoa, $diemTiengAnh, $diemVan, $diemLichSu);
    $xepLoai = xepLoai($diemTrungBinh);

    echo "Điểm trung bình: $diemTrungBinh<br>";
    echo "Xếp loại: $xepLoai";
} else {
}