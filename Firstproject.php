<?php
$a;$b;$c;$d;$i;
        $Rimdigit='';
        $digit=readln();

        $a = $digit / 1000;
        $b = $digit / 100 % 10;
        $c = $digit / 10 % 10;
        $d = $digit % 10;

        if ($a !== 0)
        {
            for ($i=1; $i<$a+1; $i++)
              $Rimdigit = "{$Rimdigit}";
        }
        if ($b !== 0)
        {
            if ($b < 4)
                for ($i=1; $i<$b+1; $i++)
                    $Rimdigit = "{$Rimdigit}C";
            if ($b === 4)
                $Rimdigit = "{$Rimdigit}CD";
            if (b === 5)
                $Rimdigit = "{$Rimdigit}D";
            if ($b > 5 && $b < 9)
            {
                $Rimdigit = "{$Rimdigit}D";
                for ($i=1; $i<$b-5+1; $i++)
                    $Rimdigit = "{$Rimdigit}C";
            }
            if ($b === 9)
                $Rimdigit = "{$Rimdigit}CM";
        }
        if ($c !== 0)
        {
            if ($c < 4)
                for ($i=1; $i<$c+1; $i++)
                    $Rimdigit = "{$Rimdigit}X";
            if ($c === 4)
                $Rimdigit = "{$Rimdigit}XL";
            if ($c === 5)
                $Rimdigit = "{$Rimdigit}L";
            if ($c > 5 && $c < 9)
            {
                $Rimdigit = "{$Rimdigit}L";
                for ($i=1; $i<$c-5+1; $i++)
                    $Rimdigit = "{$Rimdigit}X";
            }
            if ($c === 9)
                $Rimdigit = "{$Rimdigit}XC";
        }
        if ($d !== 0)
        {
            if ($d < 4)
                for ($i=1; $i<$d+1; $i++)
                    $Rimdigit = "{$Rimdigit}I";
            if ($d === 4)
                $Rimdigit = "{$Rimdigit}IV";
            if ($d === 5)
                $Rimdigit = "{$Rimdigit}V";
            if ($d > 5 && $d < 9)
            {
                $Rimdigit = "{$Rimdigit}V";
                for ($i=1; $i<$d-5+1; $i++)
                    $Rimdigit = "{$Rimdigit}I";
            }
            if ($d === 9)
                $Rimdigit = "{$Rimdigit}IX";
            }
            
print_r("n");
print_r($Rimdigit);
?>     



