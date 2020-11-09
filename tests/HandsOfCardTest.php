<?php 
require_once(__DIR__ . '/../src/hands_of_card.php');

use PHPUnit\Framework\TestCase;

final class HandsOfCardTest extends TestCase
{
   public function test_hands_of_card(): void
    {
        $this->assertEquals(count(hand_of_cards()), 5);
    }
}