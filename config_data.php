
<?php


require_once 'api/teams.php';
require_once 'api/coach.php';
require_once 'api/player.php';


   /*$pl_teams = get_data_ids($url_pl, $auth_token);
   $pl_ids = [];
   parse_ids_into_array($pl_teams, $pl_ids);

   $bl1_teams = get_data_ids($url_bl1, $auth_token);
   $bl1_ids = [];
   parse_ids_into_array($bl1_teams, $bl1_ids);

   $fl1_teams = get_data_ids($url_fl1, $auth_token);
   $fl1_ids = [];
   parse_ids_into_array($fl1_teams, $fl1_ids);

   $sa_teams = get_data_ids($url_sa, $auth_token);
   $sa_ids = [];
   parse_ids_into_array($sa_teams, $sa_ids);

   $pd_teams = get_data_ids($url_pd, $auth_token);
   $pd_ids = [];
   parse_ids_into_array($pd_teams, $pd_ids);


*/

/*
$pl_teams = get_json_data_teams($url_pl, $auth_token);
$bl1_teams = get_json_data_teams($url_bl1, $auth_token);
$fl1_teams = get_json_data_teams($url_fl1, $auth_token);
$sa_teams = get_json_data_teams($url_sa, $auth_token);
$pd_teams = get_json_data_teams($url_pd, $auth_token);


$pl_coaches = get_json_data_coaches($url_pl, $auth_token);
$bl1_coaches = get_json_data_teams($url_bl1, $auth_token);
$fl1_coaches = get_json_data_teams($url_fl1, $auth_token);
$sa_coaches = get_json_data_teams($url_sa, $auth_token);
$pd_coaches = get_json_data_teams($url_pd, $auth_token);
*/

$pl_players = get_json_data_players($url_pl, $auth_token);
$bl1_players = get_json_data_players($url_bl1, $auth_token);
$fl1_players = get_json_data_players($url_fl1, $auth_token);
$sa_players = get_json_data_players($url_sa, $auth_token);
$pd_players = get_json_data_players($url_pd, $auth_token);
