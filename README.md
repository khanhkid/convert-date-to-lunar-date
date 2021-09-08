## Convert English Date to Lunar Date

I forked from https://github.com/isee15/Lunar-Solar-Calendar-Converter/tree/master/php
After that Make it easier for use. Add some Class for more detail Zodiac (Vietnamese).

    composer require khanhkid/convert-date-to-lunar

How to use:

    $englishDate = new EnglishDate();
	$englishDate->EYear = date('Y');
	$englishDate->EMonth = date('m');
	$englishDate->EDay = date('d');
	$lunarDate = LunarConverter::EnglishDateToLunarDate($englishDate);
	var_dump($englishDate);
	var_dump($lunarDate->getDate());
	$englishDate = LunarConverter::LunarDateToEnglishDate($lunarDate);
	var_dump($englishDate);
	var_dump($lunarDate->getDate());

Result:

    object(Khanhkid\EnglishDate)#1 (3) {
	  ["EDay"]=>
	  string(2) "08"
	  ["EMonth"]=>
	  string(2) "09"
	  ["EYear"]=>
	  string(4) "2021"
	}
	string(10) "2021-08-02"
	object(Khanhkid\EnglishDate)#3 (3) {
	  ["EDay"]=>
	  int(8)
	  ["EMonth"]=>
	  int(9)
	  ["EYear"]=>
	  int(2021)
	}
	string(10) "2021-08-02"

## Vietnamese more detail for English Date


How to use: 

    $result = DateToLunarDate::getArrayDateInfo(date('d'), date('m'), date('Y'));
    echo '<pre>'.print_r($d).'</pre>';
    
Result on Vietnamese: 

	Array
	(
	    [input_date] => 2021-09-07
	    [output_lunar] => 2021-08-01
	    [weekday] => Tuesday
	    [weekday_vi] => Thứ 3
	    [month_lunar] => Tháng Tám
	    [month_lunar_leap] => Không
	    [month_lunar_full] => Đủ
	    [year_leap] => Năm dương không nhuận
	    [year_lunar_leap] => Năm âm không nhuận
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
