<?php
$currentTimestamp = time();

$dateFormats = array(
    'Y-m-d' => 'YYYY-MM-DD',
    'd/m/Y' => 'DD/MM/YYYY',
    'm/d/Y' => 'MM/DD/YYYY',
    'l, F j, Y' => 'Day, Month Date, Year',
);

$timeFormats = array(
    'H:i:s' => 'HH:MM:SS (24-hour format)',
    'h:i:s A' => 'HH:MM:SS AM/PM (12-hour format)',
);

echo "<h2>Current Date</h2>";
echo "<ul>";
foreach ($dateFormats as $format => $description) {
    echo "<li>$description: " . date($format, $currentTimestamp) . "</li>";
}
echo "</ul>";

echo "<h2>Current Time</h2>";
echo "<ul>";
foreach ($timeFormats as $format => $description) {
    echo "<li>$description: " . date($format, $currentTimestamp) . "</li>";
}
echo "</ul>";
?>