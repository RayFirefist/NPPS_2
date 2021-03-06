<?php
if(!isset($REQUEST_DATA['tutorial_state']) || !is_int($REQUEST_DATA['tutorial_state']))
{
	echo 'Invalid tutoial_state';
	return false;
}

$ts = npps_query('SELECT tutorial_state FROM `users` WHERE user_id = ?', 'i', $USER_ID)[0]["tutorial_state"];

if(($ts + 1) != $REQUEST_DATA['tutorial_state'] && $REQUEST_DATA['tutorial_state'] != (-1))
{
	echo 'Invalid tutorial_state';
	return false;
}

if(npps_query('UPDATE `users` SET tutorial_state = ? WHERE user_id = ?', 'ii', $REQUEST_DATA['tutorial_state'], $USER_ID) === false)
{
	echo 'Internal server error';
	http_response_code(500);
	return false;
}

user_set_last_active($USER_ID, $TOKEN);

if($ts == 3)
{
	/* tutorial_state 4: rank up */
	user_add_exp($USER_ID, 11);
	npps_query("UPDATE `users` SET gold = gold + 600 WHERE user_id = $USER_ID");
}

if($ts == 4)
{
	/* tutorial_state 5: add 2 cards */
	if(card_add_direct($USER_ID, 13) && card_add_direct($USER_ID, 9))
	{
		/* Alter bond with this pattern (set it): 3,3,3,3,10,3,3,3,3 */
		$deck_table = npps_query('SELECT deck_table, unit_table, main_deck, album_table FROM `users` WHERE user_id = ?', 'i', $USER_ID)[0];
		$deck_members = explode(':', npps_query("SELECT deck_members FROM `{$deck_table[0]}` WHERE deck_num = {$deck_table[2]}")[0][0]);
		$unit_list = [];
		
		foreach($deck_members as $a)
			$unit_list[] = npps_query("SELECT card_id FROM `{$deck_table[1]}` WHERE unit_id = $a")[0][0];
		
		if(
			!(npps_query('BEGIN') &&
			npps_query("UPDATE `{$deck_table[1]}` SET bond = 3 WHERE unit_id IN(?, ?, ?, ?, ?, ?, ?, ?)", 'iiiiiiii', $deck_members[0], $deck_members[1], $deck_members[2], $deck_members[3], $deck_members[5], $deck_members[6], $deck_members[7], $deck_members[8]) &&
			npps_query("UPDATE `{$deck_table[1]}` SET bond = 10 WHERE unit_id = ?", 'i', $deck_members[4]) &&
			npps_query("UPDATE `{$deck_table[3]}` SET total_bond = 3 WHERE card_id IN(?, ?, ?, ?, ?, ?, ?, ?)", 'iiiiiiii', $unit_list[0], $unit_list[1], $unit_list[2], $unit_list[3], $unit_list[5], $unit_list[6], $unit_list[7], $unit_list[8]) &&
			npps_query("UPDATE `{$deck_table[3]}` SET total_bond = 10 WHERE card_id = ?", 'i', $unit_list[4]) &&
			npps_query('COMMIT'))
		)
		{
			echo 'Failed to alter bond!';
			http_response_code(500);
			return false;
		}
	}
	else
	{
		echo 'Failed to add card';
		http_response_code(500);
		return false;
	}
}

return [
	[],
	200
];
?>
