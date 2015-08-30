<?php 

$rt=exec("mail <in.txt 1>umail.out 2>umail.err");
echo "Rc=".$rt;

exec("cat umail.err");
exec("cat umail.out");

?>
