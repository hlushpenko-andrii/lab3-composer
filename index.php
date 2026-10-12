
<?php
require __DIR__ . '/vendor/autoload.php';

use LabComposer\Hello;
use LabComposer\TimeApp;
use LabComposer\MathApp;

// Використання Hello
$hello = new Hello();
echo "<h2>Hello App</h2>";
echo "<p>" . $hello->say("Студент") . "</p>";
echo "<p>" . $hello->say("Викладач") . "</p>";

// Використання TimeApp
$time = new TimeApp();
echo "<h2>Time App</h2>";
echo "<p>Зараз: " . $time->now() . "</p>";

// Використання MathApp
$math = new MathApp();
echo "<h2>Math App</h2>";
echo "<p>Сума 5 + 7 = " . $math->sum(5, 7) . "</p>";
echo "<p>Факторіал 5 = " . $math->factorial(5) . "</p>";
