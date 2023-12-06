// Thống kê số lượng sản phẩm bán chạy theo khoảng thời gian
SELECT
    sanpham.id_pr,
    sanpham.name,
    COUNT(*) as soluong
FROM
    `donhang`
    JOIN carts ON donhang.id_dh = carts.id_dh
    JOIN sanpham ON sanpham.id_pr = carts.id_pr
WHERE
    ngaymua BETWEEN "2023-03-01" AND "2023-12-05"
GROUP BY sanpham.id_pr, sanpham.name
ORDER BY soluong DESC;


// Thống kê doanh thu tháng
SELECT
    MONTH(ngaymua) as thang,
    SUM(tongdonhang) as total
FROM
    `donhang`
WHERE
    YEAR(ngaymua) = 2023
GROUP BY thang
ORDER BY thang;

