code: 
$d = DateToLunarDate::getArrayDateInfo(date('d'), date('m'), date('Y'));
echo '<pre>';
print_r($d);
echo '</pre>';

result: 

Array
(
    [input_duong] => 2021-09-07
    [output_am] => 2021-08-01
    [thu_en] => Tuesday
    [thu_vi] => Thứ 3
    [thang_am] => Tháng Tám
    [thang_am_nhuan] => Không
    [thang_am_du_thieu] => Đủ
    [nam_duong_nhuan] => Năm dương không nhuận
    [nam_am_nhuan] => Năm âm không nhuận
    [can_chi_nam] => Năm Tân Sửu
    [can_chi_thang] => Tháng Đinh Dậu
    [can_chi_ngay] => Ngày Mậu Ngọ
    [can_chi_gio] => Giờ Nhâm Tý
    [tiet_khi] => Bạch lộ
    [day_info] => Ngày thường
    [hoang_dao] => Tý (23-1), Sửu (1-3), Mão (5-7), Ngọ (11-13), Thân (15-17), Dậu (17-19)
    [sun_info] => Array
        (
            [sunrise] => 05:41:44
            [transit] => 11:54:38
            [sunset] => 18:07:31
            [sun_length] => 12:25:47
        )

    [moon_info] => Array
        (
            [moonrise] => 05:42:00
            [moonset] => 18:35:00
            [moon_lenght] => 12:53:00
            [moon_phase] => Trăng mới
        )

    [moon_cycle] => Array
        (
            [illum_percent] => 0.14
            [age] => 29.178805773702
            [dist] => 381437.24095805
            [sundist] => 150750779.72164
            [new_moon] => 08/08/2021
            [first_quarter] => 15/08/2021
            [full_moon] => 22/08/2021
            [last_quarter] => 30/08/2021
            [next_new_moon] => 07/09/2021
            [next_first_quarter] => 14/09/2021
            [next_full_moon] => 21/09/2021
            [next_last_quarter] => 29/09/2021
        )

)