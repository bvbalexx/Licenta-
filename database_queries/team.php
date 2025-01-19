<?php


declare(strict_types=1);

function insert_team(object $pdo, string $name, int $founded_year, string $tla,
string $club_colors, string $venue, string $coach)

{

   $query = "INSERT INTO teams (name, founded_year, tla, club_colors, venue, coach) VALUES
  (:name, :founded_year, :tla, :club_colors, :venue, :coach);";

  $stmt = $pdo->prepare($query);

  $stmt->bindParam(":name", $name);
  $stmt->bindParam(":founded_year", $founded_year);
  $stmt->bindParam(":tla", $tla);
  $stmt->bindParam(":club_colors", $club_colors);
  $stmt->bindParam(":venue", $venue);
  $stmt->bindParam(":coach", $coach);


  $stmt->execute();


}

function create_team(object $pdo, string $name, int $founded_year, string $tla,
string $club_colors, string $venue, string $coach)
{


  insert_team( $pdo, $name, $founded_year, $tla, $club_colors, $venue, $coach);
}

function get_team_id_by_name(object $pdo, string $team_name): ?int {
    $stmt = $pdo->prepare("SELECT id FROM teams WHERE name = :name");
    $stmt->execute(['name' => $team_name]);
    $team = $stmt->fetch(PDO::FETCH_ASSOC);

    return $team ? $team['id'] : null;
}

 ?>
