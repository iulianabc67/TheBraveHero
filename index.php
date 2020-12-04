<style>
	body {
		background-color: #222;
		color: #eee;
	}
</style>

<?php
require_once __DIR__ . '/vendor/autoload.php';

$players = [
	new Hero("Carl"),
	new Beast("TheBeast")
];

$battle = new Battle($players);

while (!$battle->getGameStatus()) {
	$battle->startRound();
}
