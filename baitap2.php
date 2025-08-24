<?php
echo " vu minh hieu - bai tap ve nha buoi 2  <br>";
// 1. Đếm ký tự
echo "Số ký tự: " . strlen("vu minh hieu") . "<br>";
// 2. Đếm từ
echo "Số từ: " . str_word_count("vu minh hieu") . "<br>";
// 3. Đảo ngược chuỗi
echo "Đảo ngược: " . strrev("toi khong bi gay") . "<br>";
// 4. Tìm chuỗi con
echo "Vị trí 'ban': " . strpos("1235678 toi yeu ban", "ban") . "<br>";
// 5. Thay thế chuỗi
echo "Thay thế: " . str_replace("Toi la Hieu", "My name is Hieu", "Hello, Toi la Hieu, toi 20 tuoi") . "<br>";
// 6. Kiểm tra bắt đầu bằng chuỗi con
$chuoi1 = "Toi ten vu minh hieu"; $chuoi2 = "khong";
echo (strncmp($chuoi1, $chuoi2, 3) == 0) ? "Bắt đầu bằng '$chuoi2'" : "Không bắt đầu bằng '$chuoi2'";
echo "<br>";
// 7. Chuyển thành chữ hoa
echo "Chữ hoa: " . strtoupper("hieu dep trai!") . "<br>";
// 8. Chuyển thành chữ thường
echo "Chữ thường: " . strtolower("vu hieu 281") . "<br>";
// 9. Viết hoa chữ cái đầu
echo "Viết hoa đầu: " . ucwords("vu minh hieu") . "<br>";
// 10. Loại bỏ khoảng trắng
echo "Trim: '" . trim("  Helllo ae thai nguyen  ") . "'<br>";
// 11. Loại bỏ ký tự đầu
echo "Ltrim: '" . ltrim("Google CocCoc", "G") . "'<br>";
// 12. Loại bỏ ký tự cuối
echo "Rtrim: '" . rtrim("Football club", "b") . "'<br>";
// 13. Tách chuỗi thành mảng
print_r(explode(", ", "Cam, Chuoi, Buoi, Tao")); echo "<br>";
// 14. Nối mảng thành chuỗi
echo "Implode: " . implode(" ", ["Toi", "và", "ban", "la", "bạn"]) . "<br>";
// 15. Thêm chuỗi vào đầu/cuối
$e = "Hieu dep trai";
echo "Thêm đầu: " . str_pad($e, strlen($e) + 5, "Hieu ", STR_PAD_LEFT) . "<br>";
echo "Thêm cuối: " . str_pad($e, strlen($e) + 15, " dep trai", STR_PAD_RIGHT) . "<br>";
// 16. Kiểm tra kết thúc bằng chuỗi con
$f = "Toi la fan cua MU"; $ketthuc = "MU";
echo (strrchr($f, $ketthuc) === false) ? "Không kết thúc bằng '$ketthuc'" : "Kết thúc bằng '$ketthuc'";
echo "<br>";
// 17. Kiểm tra chứa chuỗi con
$g = "Toi yeu ban"; $h = "yeu";
echo (strstr($g, $h) !== false) ? "Chứa '$h'" : "Không chứa '$h'";
echo "<br>";
// 18. Thay thế ký tự không phải chữ/số
echo "Thay thế ký tự: " . preg_replace('/[^a-zA-Z0-9]/', ' ', "Toi@#dep* trai!") . "<br>";
// 19. Kiểm tra số nguyên
$k = 16.5;
echo is_int($k) ? "$k là số nguyên" : "$k không phải số nguyên";
echo "<br>";
// 20. Kiểm tra email hợp lệ
$email = "hieuvu2820@gmail.com";
echo filter_var($email, FILTER_VALIDATE_EMAIL) ? "Email hợp lệ" : "Email không hợp lệ";
echo "<br>";
?>
