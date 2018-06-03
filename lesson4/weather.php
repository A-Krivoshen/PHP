<?php
$cache_lifetime = 3600;
$filename = 'cache.txt';
if (file_exists($filename)) {
        if (( time()-filemtime($filename)) >= $cache_lifetime )  {
              $json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=524901&appid=9c24c2f989b4147c64c0ebf8d7a3f614');
              $allData = json_decode($json, true);
        }

	else {
		$cacheWeather = file_get_contents($filename);
      $allData = json_decode($cacheWeather, true);
	}
}
 else {
     $json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=524901&appid=9c24c2f989b4147c64c0ebf8d7a3f614');     
     $allData = json_decode($json, true); 	  
     $string_data = serialize($allData);
     file_put_contents($filename, $string_data); 	  
 	  }

echo 'name:' . $allData['name'] . "<br>" .
    'weather: ' . $allData['weather'][0]['main'] . "<br>" .
    'description: ' . $allData['weather'][0]['description'] . "<br>" .
    'temperature: ' . $allData['main']['temp'] . "<br>" .
    'visibility ' . $allData['visibility'] . "<br>" .
    'pressure:' . $allData['main']['pressure'];


?>

