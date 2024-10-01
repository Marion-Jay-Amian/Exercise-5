<?php
// getcountries.php
$southeast_asia_countries = [
    "Brunei", 
    "Cambodia", 
    "East Timor", 
    "Indonesia", 
    "Laos", 
    "Malaysia", 
    "Myanmar", 
    "Philippines", 
    "Singapore", 
    "Thailand", 
    "Vietnam"
];

$q = isset($_REQUEST["q"]) ? $_REQUEST["q"] : "";

$hint = "";

if ($q !== "") {
    $q = strtolower($q); 
    $len = strlen($q);
    foreach ($southeast_asia_countries as $countryHint) {
        if (strtolower(substr($countryHint, 0, $len)) === $q) {
            if ($hint === "") {
                $hint = "<div onclick='selectCountry(\"" . htmlspecialchars($countryHint) . "\")'>" . htmlspecialchars($countryHint) . "</div>";
            } else {
                $hint .= "<div onclick='selectCountry(\"" . htmlspecialchars($countryHint) . "\")'>" . htmlspecialchars($countryHint) . "</div>";
            }
        }
    }
}

echo $hint === "" ? "no suggestion" : $hint;
?>
