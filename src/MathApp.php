<?php
namespace LabComposer;

class MathApp {
    public function sum($a, $b) {
        return $a + $b;
    }

    public function factorial($n) {
        return $n <= 1 ? 1 : $n * $this->factorial($n - 1);
    }
}
