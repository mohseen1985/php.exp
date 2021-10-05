<?php
echo "<h3> Math Functions </h3>";
echo "<h3> Math Functions => round() </h3>";
echo "3.4 round : ".round(3.4). "<br>";
echo "3.5 round : ".round(3.5). "<br>";
echo "3.6 round : ".round(3.6) ."<br>";
echo round(1.5, 0, PHP_ROUND_HALF_UP) ."<br>";
echo round(1.5, 0, PHP_ROUND_HALF_DOWN) ."<br>";
echo round(1.5, 0, PHP_ROUND_HALF_EVEN) ."<br>";
echo round(1.5, 0, PHP_ROUND_HALF_ODD) ."<br>";
echo round(4.96754, 2);
echo "<hr><hr><h3> Math Functions => ceil() </h3>";
echo "3.4 ceil : ".ceil(3.4). "<br>";
echo "3.5 ceil : ".ceil(3.5). "<br>";
echo "3.6 ceil : ".ceil(3.6). "<br>";
echo "<hr><hr><h3> Math Functions => floor() </h3>";
echo "3.4 floor : ".floor(3.4). "<br>";
echo "3.5 floor : ".floor(3.5). "<br>";
echo "3.6 floor : ".floor(3.6). "<br>";
echo "<hr><hr><h3> Math Functions => sqrt() </h3>";
echo "625 sqrt : ".sqrt(625);
echo "<hr><hr><h3> Math Functions => abs() </h3>";
echo "-9987.6655 abs : ".abs(-9987.6655);
echo "<hr><hr><h3> Math Functions => min() </h3>";
echo "-9987.6655,5444,439,-10,0,-444766.55,19,444,90483,6532 min : ".min(-9987.6655, 5444, 439, -10, 0, -444766.55, 19, 444, 90483, 6532);
echo "<hr><hr><h3> Math Functions => max() </h3>";
echo "-9987.6655,5444,439,-10,0,-444766.55,19,444,90483,6532 max : ".max(-9987.6655, 5444, 439, -10, 0, -444766.55, 19, 444, 90483, 6532);
echo "<hr><hr><h3> Math Functions => pi() </h3>";
echo "pi : ".pi() ."<br>";
echo "perimeter of the circle: ". $perimeter = 2 * (pi() * 10);
echo "<hr><hr><h3> Math Functions => is_finite() </h3>";
echo "20 is finite : ". is_finite(20);
echo "<hr><hr><h3> Math Functions => is_infinite() </h3>";
echo "log(0) is infinite : ". is_infinite(log(0));
echo "<hr><hr><h3> Math Functions => decbin() </h3>";
echo "50 decbin : ". decbin(50);
echo "<hr><hr><h3> Math Functions => decbin() </h3>";
echo "78 dechex : ". dechex(78);
echo "<hr><hr><h3> Math Functions => decoct() </h3>";
echo "54 decoct : ". decoct(54);
echo "<hr><hr><h3> Math Functions => base_convert() </h3>";
echo "85,10,2 base_convert : ". base_convert(85, 10, 2);
echo "<hr><hr><h3> Math Functions => bindec() </h3>";
echo "101111 bindec : ". bindec(101111);
echo "<hr><hr><h3> Math Functions => sin() </h3>";
echo "0 sin : ". sin(0);
echo "<hr><hr><h3> Math Functions => sinh() </h3>";
echo "23 sinh : ". sinh(23);
echo "<hr><hr><h3> Math Functions => asin() </h3>";
echo "1 asin : ". asin(1);
echo "<hr><hr><h3> Math Functions => cos() </h3>";
echo "1 cos : ". cos(1);
echo "<hr><hr><h3> Math Functions => cosh() </h3>";
echo "6 cosh : ". cosh(6);
echo "<hr><hr><h3> Math Functions => acos() </h3>";
echo "45 acos : ". acos(45);
echo "<hr><hr><h3> Math Functions => tan() </h3>";
echo "45 tan : ". tan(45);
echo "<hr><hr><h3> Math Functions => tanh() </h3>";
echo "45 tanh : ". tanh(45);
echo "<hr><hr><h3> Math Functions => atan() </h3>";
echo "45 atan : ". atan(45);
echo "<hr><hr><h3> Math Functions => atan2() </h3>";
echo "180 , 60 atan2 : ". atan2(180, 60);
echo "<hr><hr><h3> Math Functions => deg2rad() </h3>";
echo "10 deg2rad : ". deg2rad(10);
echo "<hr><hr><h3> Math Functions => exp() </h3>";
echo "0 exp : ". exp(0);
echo "<hr><hr><h3> Math Functions => expm1() </h3>";
echo "1 expm1 : ". expm1(1);
echo "<hr><hr><h3> Math Functions => fmod() </h3>";
echo "25 / 5 fmod : ". fmod(25, 5);
echo "<hr><hr><h3> Math Functions => getrandmax() </h3>";
echo getrandmax();
echo "<hr><hr><h3> Math Functions => mt_getrandmax() </h3>";
echo mt_getrandmax();
echo "<hr><hr><h3> Math Functions => hypot() </h3>";
echo "8,4 hypot : ". hypot(8, 4);
echo "<hr><hr><h3> Math Functions => is_nan() </h3>";
echo "200 is_nan : ". is_nan(200);
echo "<hr><hr><h3> Math Functions => lcg_value() </h3>";
echo lcg_value();
echo "<hr><hr><h3> Math Functions => log() </h3>";
echo " log 100 : ". log(100);
echo "<hr><hr><h3> Math Functions => log10() </h3>";
echo "10000 log10 : ". log10(10000);
echo "<hr><hr><h3> Math Functions => log1p() </h3>";
echo "60 log1p : ". log1p(60);
echo "<hr><hr><h3> Math Functions => pow() </h3>";
echo "3 ^ 2 pow : ". pow(9, 2);
echo "<hr><hr><h3> Math Functions => intdiv() </h3>";
echo "6 / 3 intdiv : ". intdiv(6, 3);