--TEST--
Null cannot be used as a standalone type
--FILE--
<?php

function test(): null {}

?>
--EXPECTF--
Fatal error: Null can not be used as a standalone type in %s on line %d
