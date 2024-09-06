<?php

$names = [
    "Luca", "Maria", "Giovanni", "Anna", "Paolo",
    "Francesca", "Stefano", "Chiara", "Marco", "Elena",
    "Andrea", "Sara", "Roberto", "Laura", "Giuseppe",
    "Martina", "Alessandro", "Federica", "Matteo", "Silvia"
];

$surnames = [
    "Rossi", "Bianchi", "Verdi", "Neri", "Russo",
    "Romano", "Gallo", "Fontana", "Leone", "Mancini",
    "De Luca", "Grimaldi", "Ricci", "Marini", "Esposito",
    "Rizzi", "Moretti", "Vitale", "Costantini", "Fabbri"
];

function generateEmail2($name, $surname) {
    $domains = ["libero.it", "hotmail.com", "gmail.com", "domain.com", "resto.com"];
    $domain = $domains[array_rand($domains)];
    return strtolower($name . '.' . $surname . '@' . $domain);
}

// Password predefinita
$password = '$2y$12$oH.vtqyAz4Al3i7cUtxHa.x8r8.0VOoQn56q6DE64mgxiqNm2TiXu';

$employees = [];
for ($i = 0; $i < 20; $i++) {
    $name = $names[$i];
    $surname = $surnames[$i];
    $email = generateEmail2($name, $surname);
    $profile_picture = "profile" . ($i + 1) . ".jpg"; 

    $employees[] = [
        "name" => $name,
        "surname" => $surname,
        "user_id" => 1,
        "email" => $email,
        "password" => $password,
        "profile_picture" => $profile_picture,
        "role_id" => $i + 1
    ];
}

return $employees;

?>
