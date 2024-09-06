<?php
// Funzione che generare un name e un surname ccasuale se passato un indice
function generateName($index) {
  $names = [
      "Luca Rossi", "Maria Bianchi", "Giovanni Verdi", "Anna Neri", "Paolo Russo",
      "Francesca Romano", "Stefano Gallo", "Chiara Fontana", "Marco Leone", "Elena Mancini",
      "Andrea De Luca", "Sara Grimaldi", "Roberto Ricci", "Laura Marini", "Giuseppe Esposito",
      "Martina Rizzi", "Alessandro Moretti", "Federica Vitale", "Matteo Costantini", "Silvia Fabbri",
      "Giorgio Bianchi", "Lucia Ferri", "Fabio Conti", "Ilaria Lombardi", "Vittorio Giordano",
      "Giulia Serra", "Daniele Riva", "Valentina De Angelis", "Tommaso Sartori", "Angela Marchi",
      "Davide Greco", "Simona Piras", "Pietro Bellini", "Claudia Monti", "Lorenzo Barbieri",
      "Veronica Caruso", "Michele Colombo", "Beatrice Marino", "Filippo Morelli", "Chiara Sala"
  ];
  return explode(' ', $names[$index]);
}

// Funzione Che generare un'email a partire dal nome
function generateEmail($name, $surname) {
  $domains = ["libero.it", "hotmail.com", "gmail.com", "domain.com", "resto.com"];
  $domain = $domains[array_rand($domains)];
  $email = $name . '.' . $surname . '@' . $domain;
  return $email;
}

// Password predefinita
$password = '$2y$12$oH.vtqyAz4Al3i7cUtxHa.x8r8.0VOoQn56q6DE64mgxiqNm2TiXu';

// Genera array di titolari
$users = [];
for ($i = 0; $i < 40; $i++) {
  [$name, $surname] = generateName($i);
  $email = generateEmail($name, $surname);

  $users[] = [
      "name" => $name,
      "surname" => $surname,
      "email" => $email,
      "password" => $password
  ];
}

return $users;