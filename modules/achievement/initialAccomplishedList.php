<?php
$goals_db = npps_get_database('achievement');
$goals_out = [];
$list = $goals_db->query('SELECT DISTINCT achievement_category_id FROM `achievement_tag_m` ORDER BY achievement_category_id');

//var_dump($list);

foreach($list as $a)
{
	$current_achievement = [];
	
	// TODO: Select from user assignment.
	{
	}
	
	$goals_out[] = [
		'achievement_category_id' => $a["achievement_category_id"],
		'count' => count($current_achievement),
		'achievement_list' => $current_achievement
	];
}

// TODO: Filter all new achievement and put it
$new_goals = [];
$goals_out[] = [
	'achievement_category_id' => 10000,
	'count' => count($new_goals),
	'achievement_list' => $new_goals
];

return [
	$goals_out,
	200
];
?>