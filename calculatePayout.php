<?php

// Get posted params from form
$params['straight'] = intval($_POST['straight']);
$params['split'] = intval($_POST['split']);
$params['street'] = intval($_POST['street']);
$params['corner'] = intval($_POST['corner']);
$params['six'] = intval($_POST['six']);

$calculate = new calculate();
$betPays = $calculate->calculateBaseBets($params);

class calculate{

    public function calculateBaseBets($params)
    {

        foreach ($params as $key => $value) {
            switch ($key) {
                case 'straight':
                    $params[$key] = $value * 35;
                    break;

                case 'split':
                    $params[$key] = $value * 17;
                    break;

                case 'street':
                    $params[$key] = $value * 11;
                    break;

                case 'corner':
                    $params[$key] = $value * 8;
                    break;

                case 'six':
                    $params[$key] = $value * 5;
                    break;
            }

        }
        $payout = array_sum($params);

        if ($payout > 0) {

            return $payout;
        }
    }
}



