<?php

return [

	'user_roles' => [
		'admin' => 'Администратор',
		'manager' => 'Менеджер',
		'contractor' => 'Подрядчик (исполнитель)',
	],

	'order_statuses' => [
		'open' => ['title' => 'открыт', 'color' => 'info'],
		'booked' => ['title' => 'забронирован', 'color' => 'warning'],
		'in_work' => ['title' => 'в работе', 'color' => 'primary'],
		'completed' => ['title' => 'выполнен', 'color' => 'success'],
	],
]

?>