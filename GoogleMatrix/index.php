<? 

$json = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?origins=Brest&destinations=Minsk|Vitebsk|Grodno|Gomel&language=ru-RU&key=AIzaSyDfKhIRGdjI5oTtAcOeDQXbBb0bWRvA2gY");

$data = json_decode($json,true);



// echo "<pre>";
// echo print_r($data);
// echo "</pre>";

echo 'Растояние из ' . $data['origin_addresses']['0'] . ' в ' . $data['destination_addresses']['0'] . ' - '  . $data['rows']['0']['elements']['0']['distance']['text'] . "<br>";
echo 'Растояние из ' . $data['origin_addresses']['0'] . ' в ' . $data['destination_addresses']['1'] . ' - '  . $data['rows']['0']['elements']['1']['distance']['text'] . "<br>";
echo 'Растояние из ' . $data['origin_addresses']['0'] . ' в ' . $data['destination_addresses']['2'] . ' - '  . $data['rows']['0']['elements']['2']['distance']['text'] . "<br>";
echo 'Растояние из ' . $data['origin_addresses']['0'] . ' в ' . $data['destination_addresses']['3'] . ' - '  . $data['rows']['0']['elements']['3']['distance']['text'];