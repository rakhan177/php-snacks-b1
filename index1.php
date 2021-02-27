<?php
// Creiamo un array 'matches' contenente altri array i quali rappresentano
// delle partite di basket di un’ipotetica tappa del calendario. Ogni array della
// partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra
// di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55 - 60
$matches = [
  [
   "squadra1" => "Juve",
   "squadra2" => "Milan",
   "puntiSquadra1" => 5,
   "puntiSquadra2" => 1,
  ],
  [
   "squadra1" => "Roma",
   "squadra2" => "Palermo",
   "puntiSquadra1" => 1,
   "puntiSquadra2" => 8,
  ],
  [
   "squadra1" => "Francia",
   "squadra2" => "Italia",
   "puntiSquadra1" => 0,
   "puntiSquadra2" => 10,
  ],
];
for ($i = 0; $i < count($matches); $i++) {
  echo $matches[$i]['squadra1'] . ' - ' . $matches[$i]['squadra2'] . ' | ' . $matches[$i]['puntiSquadra1'] . ' - ' . $matches[$i]['puntiSquadra2'] . '<br><br>';
};
?>
