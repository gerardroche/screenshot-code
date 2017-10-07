<?php

echo "x $x";
echo "x ${$x}";
echo "x $x[0]";
echo "x $x[xyz]";
echo "x $x->y";
echo "{$x} {$x->y} {$x['y']}";
echo "x {$x->$y}";
echo "x {$x->{$y[1]}} z";

$x = <<<EOT
<div>
    <p>$x</p>
    <p>${x}</p>
    <p>{$x}</p>
    <p>{ $x }</p>
    <p>{$x[1]}</p>
    <p>{$x['y']}</p>
    <p>$x->y</p>
    <p>{$x->y}</p>
    <p>{$x->y[1]}</p>
    <p>{$x->y()}</p>
    <p>{$x->y()->z()}</p>
</div>
EOT;



