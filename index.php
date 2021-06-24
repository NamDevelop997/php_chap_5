<?php

/**Bài tập: tạo biến số nguyên a, nếu a là số nguyên dương chắn thì cộng thêm một đơn vị xuất kết quả ra cho người dùng
 * thuật toán:
 *              b1: tạo biến a và gán giá trị số nguyên bất kì cho nó.
 *              b2: kiểm tra nếu a > 0 và a %2===0  thì tăng giá trị a lên 1.
 *              b3: xuất kết quả ra màn hình
 */

$a = 10;
if ($a > 0 and $a % 2 === 0) {
    $a++;
}
echo $a;
