<?php

namespace App;

class Calculator {
    public function addition($a, $b) {
        return number_format($a + $b, 2);
    }

    public function subtract($a, $b) {
        return number_format($a - $b, 2);
    }

    public function computeTVA($price) {
        return number_format($price*1.2, 2);
    }
}