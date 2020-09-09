<?php
echo "<table>";
for ($r = 1 ; $r <= 255 ; $r += 10) {
    for ($g = 1 ; $g <= 255 ; $g += 10) {
        echo "<tr>";
        for ($b = 1 ; $b <= 255 ; $b += 10) {
            echo "<td style='background-color: rgb($r , $g , $b)'></td>";
        }
    }
}