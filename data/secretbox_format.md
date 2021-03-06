Secretbox
=========

Secretbox.json has these structure (example)

	{
		// Contains honor student scouting and regular scouting
		"normal_secretbox":
		{
			// Path of the image banner
			"banner_image": "assets/image/secretbox/icon/s_ba_3_1.png",
			// Path of the image banner (selected)
			"banner_image_selected": "assets/image/secretbox/icon/s_ba_3_1se.png",
			// Path of the image banner (displayed in Scouting menu)
			"banner_big": "assets/image/secretbox/top/s_con_n_3_1.png",
			
			// Regular (N cards) scouting
			"regular":
			{
				"friend_points_cost": 100
			},
			"honor":
			{
				// The secretbox cost
				"cost":
				[
					{
						"type": 2,			// Indicates that the cost type is an "item"
						"item_id": 1,		// Scouting Ticket
						"amount": 1			// Needed scouting ticket to scout one member
					},
					{
						"type": 1,			// Indicates that the cost type is love gems
						"item_id": null,	// Unnecessary. Keep it null
						"amount": 5,		// Needed love gems to scout one member
						"star_added": 2		// How much stars added for this scouting. This overrides "star_added" value below
					}
				],
				// How much stars (which can grant blue ticket) added for this honor scouting (multiplied by amount of scouted members)
				// Can be overridden by "star_added" field in "cost".
				"star_added": 1,
				// Does multiple scouting at once guarantees specific rarity? Value of 0 means no guarantee
				"guarantee_rarity": 3,	// SR guaranteed
				// Unit rates by rarity
				"unit_rate":
				[
					null,	// Rarity ID 1 (N cards). Unnecessary
					90.0,	// Rarity ID 2 (R cards)
					9.00,	// Rarity ID 3 (SR cards)
					1.00,	// Rarity ID 4 (UR cards)
					null	// Rarity ID 5 (SSR cards). Currently not exist in SIF v3.1.x
					// And so on (if you want to add your own)
				],
				// Card list. ID in here is "unit_id" which is not equal to card ID available in album
				"unit_list":
				[
					// Rarity ID 1 (N cards). Unnecessary
					null,
					// Rarity ID 2 (R cards)
					[
						31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,286,287,288,289,290,291,292,293,294,
						339,340,341,342,343,344,345,346,347,430,431,432,433,434,435,436,437,438,494,495,496,497,498,499,500,501,502,561,562,
						563,564,565,566,567,568,569,681,682,683,684,685,686,687,688,689,751,752,753,754,755,756,757,758,759,788,789,790,791,
						792,793,794,795,796
					],
					// Rarity ID 3 (SR cards)
					[
						58,59,60,61,62,63,64,65,66,78,79,80,83,84,85,88,93,94,95,100,101,103,106,107,111,112,128,129,130,131,135,136,137,139,
						145,146,147,148,151,153,154,155,158,161,162,163,164,167,169,170,171,174,176,177,178,179,183,185,186,187,190,192,193,
						194,195,198,200,201,202,206,209,210,211,212,215,219,220,221,224,245,246,247,248,252,254,255,256,259,261,262,263,264,
						267,269,270,271,274,278,279,280,281,284,295,296,297,309,311,312,313,314,317,319,320,321,324,326,327,328,329,332,335,
						336,337,349,354,355,356,357,360,364,365,366,371,374,375,376,377,392,394,395,396,399,404,405,406,407,410,412,413,414,
						417,421,422,423,424,428,439,440,441,444,452,453,454,455,458,460,461,462,467,472,473,474,475,478,480,481,482,486,503,
						504,505,506,509,511,512,513,525,527,528,529,530,533,535,536,537,540,545,546,547,548,551,553,554,555,559,570,571,572,
						573,576,578,579,580,583,588,589,590,591,594,599,600,601,604,607,608,609,610,622,634,635,636,639,641,642,643,644,647,
						649,650,651,654,657,658,659,660,663,665,666,667,670,673,674,675,676,679,690,691,692,696,699,700,701,702,705,707,708,
						709,712,724,725,726,727,730,732,733,734,737,742,743,744,745,748,760,761,762,765,770,771,772,773,776,778,779,780,797,
						798,799,800,803,814,815,816,819,822,823,824,825,837,839,840,841,896,897
					],
					// Rarity ID 4 (UR cards)
					[
						67,68,69,71,72,81,96,108,113,132,138,149,156,165,172,180,188,196,203,213,222,249,257,265,272,282,298,315,322,330,338,
						358,367,378,397,408,415,425,442,456,463,476,483,507,514,531,538,549,556,574,581,592,602,611,637,645,652,661,668,677,
						693,703,710,728,735,746,763,774,781,801,817,826,842
					],
					// Rarity ID 5 (SSR cards). Currently not exist in SIF v3.1.x
					null
					// And so on (if you want to add your own)
				],
				// New card unit_id list (have 40% more appearance)
				// Set to null if there is no new cards.
				"new_unit_list":
				[
					null,	// N cards
					null,	// R cards
					[822, 823, 824, 825, 839, 840, 841],	// SR cards (Taisho set)
					[826, 842],			// UR cards (Taisho set)
					null
				],
				// Lists of card image preview. Can be empty if it's unnecessary
				"card_preview_path":
				[
					{
						// Card unit ID
						"unit_id": 781,
						// Unidolized card preview
						"preview_unidolized": "assets/image/units/b_normal_card_41004003.png",
						// Idolized card preview
						"preview_idolized": "assets/image/units/b_rankup_card_41004003.png"
					},
					{
						"unit_id": 774,
						"preview_unidolized": "assets/image/units/b_normal_card_42006003.png",
						"preview_idolized": "assets/image/units/b_rankup_card_42006003.png"
					}
				]
			}
		},
		// Special secretbox
		"special_secretbox":
		[
			// Example: Printemps scouting
			{
				// Secretbox name
				"name": "Printemps Scouting",
				// Secretbox description
				"description": "Scout Printemps members\nHonoka, Kotori, and Hanayo",
				// Path of the image banner. Set to null to make it not displayed in banner
				"banner_image": "assets/image/secretbox/icon/s_ba_18_1.png",
				// Path of the image banner (selected). Must be not null if above is not null
				"banner_image_selected": "assets/image/secretbox/icon/s_ba_18_1se.png",
				// Path of the image banner (displayed in Scouting menu)
				"banner_big": "assets/image/secretbox/top/s_con_n_18_1.png",
				// Path of the text title image
				"banner_title": "assets/image/secretbox/title/18.png",
				// The secretbox cost. Example here by omitting Scouting Ticket
				"cost":
				[
					{
						"type": 1,		
						"item_id": null,
						"amount": 5		
					}
				],
				"star_added": 1,
				"guarantee_rarity": 3,
				"unit_rate":
				[
					null,
					90.0,
					9.00,
					1.00,
					null
				],
				"unit_list":
				[
					null,
					[
						31,33,38,40,42,47,49,51,56,286,288,293,339,341,346,430,432,437,494,496,501,561,563,568,681,683,688,751,753,758
					],
					[
						58,60,65,78,79,85,100,111,128,135,137,139,145,154,163,169,176,178,183,190,198,200,201,202,209,221,245,248,255,261,269,
						274,278,279,281,309,319,324,335,337,354,365,366,371,374,396,404,410,412,414,421,428,440,452,453,455,474,503,504,506,
						509,525,527,530,533,535,546,553,570,579,583,588,601,604,607,610,639,641,650,651,657,660,665,673,679,690,696,701,708,
						732,734,748,760,761,770,779,780,800,814,815,823
					],
					[
						67,69,96,156,165,180,222,265,315,322,338,378,425,476,483,556,574,602,637,677,710,728,763,826,842
					],
					null
				],
				"card_preview_path": []
			}
		],
		// Coupon/Blue ticket scouting
		"coupon_scouting":
		[
			// Example: SR/UR scouting
			{
				"name": "SR/UR Scouting",
				"description": "Scout SR and UR Club Members with Scouting\nCoupons!",
				"banner_big": "assets/image/secretbox/top/s_con_n_22_1.png",
				"banner_title": "assets/image/secretbox/title/22.png",
				// Difference in here: Cost is amount of the blue ticket needed
				"cost": 5,
				"unit_rate":
				[
					null,
					null,	// No R
					80.0,
					20.0,
					null
				],
				"unit_list":
				[
					null,
					null,	// No R
					[
						58,59,60,61,62,63,64,65,66,78,79,80,83,84,85,88,93,94,95,100,101,103,106,107,111,112,128,129,130,131,135,136,137,139,
						145,146,147,148,151,153,154,155,158,161,162,163,164,167,169,170,171,174,176,177,178,179,183,185,186,187,190,192,193,
						194,195,198,200,201,202,206,209,210,211,212,215,219,220,221,224,245,246,247,248,252,254,255,256,259,261,262,263,264,
						267,269,270,271,274,278,279,280,281,284,295,296,297,309,311,312,313,314,317,319,320,321,324,326,327,328,329,332,335,
						336,337,349,354,355,356,357,360,364,365,366,371,374,375,376,377,392,394,395,396,399,404,405,406,407,410,412,413,414,
						417,421,422,423,424,428,439,440,441,444,452,453,454,455,458,460,461,462,467,472,473,474,475,478,480,481,482,486,503,
						504,505,506,509,511,512,513,525,527,528,529,530,533,535,536,537,540,545,546,547,548,551,553,554,555,559,570,571,572,
						573,576,578,579,580,583,588,589,590,591,594,599,600,601,604,607,608,609,610,622,634,635,636,639,641,642,643,644,647,
						649,650,651,654,657,658,659,660,663,665,666,667,670,673,674,675,676,679,690,691,692,696,699,700,701,702,705,707,708,
						709,712,724,725,726,727,730,732,733,734,737,742,743,744,745,748,760,761,762,765,770,771,772,773,776,778,779,780,797,
						798,799,800,803,814,815,816,819,822,823,824,825,837,839,840,841,896,897
					],
					[
						67,68,69,71,72,81,96,108,113,132,138,149,156,165,172,180,188,196,203,213,222,249,257,265,272,282,298,315,322,330,338,
						358,367,378,397,408,415,425,442,456,463,476,483,507,514,531,538,549,556,574,581,592,602,611,637,645,652,661,668,677,
						693,703,710,728,735,746,763,774,781,801,817,826,842
					],
					null
				]
			}
		]
	}

