<?php

require_once 'database_handler.php';
require_once 'database_queries/player.php';
require_once 'database_queries/team.php';
require_once 'database_queries/coach.php';
require_once 'api/player.php';
require_once 'config_data.php';

/*   COD FOLOSIT PENTRU INCARCAREA TABELEI TEAMS
process_teams_and_insert($pdo, $pl_teams);
process_teams_and_insert($pdo, $bl1_teams);
process_teams_and_insert($pdo, $fl1_teams);
process_teams_and_insert($pdo, $sa_teams);
process_teams_and_insert($pdo, $pd_teams);

COD FOLOSIT PENTRU INCARCAREA TABELEI COACHES

process_coaches_and_insert($pdo, $pl_coaches);
process_coaches_and_insert($pdo, $sa_coaches);
process_coaches_and_insert($pdo, $pd_coaches);
process_coaches_and_insert($pdo, $fl1_coaches);
process_coaches_and_insert($pdo, $bl1_coaches);
*/


//create_player($pdo, "Leo Messi", 3, "Argentina", "Left Winger", 10, "08-2024", "10-2025", "10-11-2004");


/*$url_player = "https://api.football-data.org/v4/persons/";
$id = 270449;

$url_good = $url_player . $id;

$data = get_player_details($url_good, $auth_token);
var_dump($data);
*/
/*
$info2 = get_player_shirt_number($url_good, $auth_token);
$info = get_player_contract_start($url_good, $auth_token);
$info1 = get_player_contract_until($url_good, $auth_token);
var_dump($info2);
var_dump($info);
var_dump($info1);
*/


 //procces_players_and_insert($pdo, $pl_players);
 ///procces_players_and_insert($pdo, $bl1_players);
 //procces_players_and_insert($pdo, $fl1_players);
 //procces_players_and_insert($pdo, $sa_players);
 procces_players_and_insert($pdo, $pd_players);



?>
