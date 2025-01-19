<?php


declare(strict_types=1);

function insert_player(object $pdo, string $name, int $team_id, string $nationality, string $position,
int $shirt_number, string $contract_start, string $contract_untill, string $birth_date)

{

   $query = "INSERT INTO players (name, team_id, nationality, position, shirt_number, contract_start, contract_untill, birth_date) VALUES
  (:name, :team_id, :nationality, :position, :shirt_number, :contract_start, :contract_untill, :birth_date);";

  $stmt = $pdo->prepare($query);

  $stmt->bindParam(":name", $name);
  $stmt->bindParam(":team_id", $team_id);
  $stmt->bindParam(":nationality", $nationality);
  $stmt->bindParam(":position", $position);
  $stmt->bindParam(":shirt_number", $shirt_number);
  $stmt->bindParam(":contract_start", $contract_start);
  $stmt->bindParam(":contract_untill", $contract_untill);
  $stmt->bindParam(":birth_date", $birth_date);


  $stmt->execute();


}

function create_player(object $pdo, string $name, int $team_id, string $nationality, string $position,
int $shirt_number, string $contract_start, string $contract_untill, string $birth_date)
{


  insert_player( $pdo, $name, $team_id, $nationality, $position, $shirt_number, $contract_start, $contract_untill, $birth_date);
}



 ?>
