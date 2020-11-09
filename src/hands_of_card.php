<?php 

function get_all_standard_cards()
{
    $cards = [];
    foreach(['c','d','h','s'] as $type)
    {
        foreach(['a','2','3','4','5','6','7','8','9','j','q','k'] as $number)
        {
            $cards[] = $number.$type;
        }
    }
    return $cards;
}

function shuffle_cards($cards)
{
    shuffle($cards);
    return $cards;
}

function hand_of_cards()
{
    return array_slice(shuffle_cards(get_all_standard_cards()), 0, 5);
}