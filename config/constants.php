<?php

return [

	'user_roles' => [
		'admin' => 'Администратор',
		'manager' => 'Менеджер',
		'contractor' => 'Подрядчик (исполнитель)',
	],

	'order_statuses' => [
		['name' => false, 'title' => '---', 'color' => ''],
		['name' => 'open', 'title' => 'открыт', 'color' => 'info'],
		['name' => 'booked', 'title' => 'забронирован', 'color' => 'warning'],
		['name' => 'in_work', 'title' => 'в работе', 'color' => 'primary'],
		['name' => 'completed', 'title' => 'выполнен', 'color' => 'success'],
	],
];