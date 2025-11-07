<!-- 変数$date_timeには、実行時の正確な日時情報を持った$text{DateTime}$オブジェクトが格納され、このオブジェクトに対して、日時のフォーマット変更、日時の加算・減算、タイムゾーンの変更など、様々な日時操作を行うためのメソッドが利用できるようになる -->
<!-- 今回はDateTimeZoneでタイムゾーンの指定をしている -->

<?php
function searchCityTime($city_name)
{
    require('config/cities.php');

    foreach ($cities as $city) {
        if ($city['name'] === $city_name)
        {
            $date_time = new DateTime('', new DateTimeZone($city['time_zone']));
            $time = $date_time->format('H:i');
            $city['time'] = $time;
            return $city;
        }
    }
}




