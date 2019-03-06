<?php
// Входные данные
$number1 = '430312423444132312647612368424044413231264700031232134132003021343454356457542139213430312423443279723431233253241203943423423';
$number2 = '4233213453208334732942455745324043200004324732874920043298471231311138294729432748375289479827384923749234284032844801';

print(bigIntSum($number1, $number2));

/**
 * Get sum of two big numbers
 *
 * @param mixed $number1 Number 1
 * @param mixed $number2 Number 2
 * @return string
 */
function bigIntSum($number1, $number2)
{
    $number1 = trim($number1);
    $number2 = trim($number2);
    $resultNumber = '';

    $maxLength = max(strlen($number1), strlen($number2));

    $number1 = str_pad($number1, $maxLength, '0', STR_PAD_LEFT);
    $number2 = str_pad($number2, $maxLength, '0', STR_PAD_LEFT);

    $remainder = 0;
    for ($i = ($maxLength - 1); $i >= 0; $i--) {
        $sum = $number1{$i} + $number2{$i} + $remainder;
        $remainder = 0;

        if ($sum > 9) {
            $remainder = 1;
            $sum = $sum - 10;
        }

        $resultNumber .= $sum;
    }
    // Revert result string
    return strrev($resultNumber);
}
