<?php

$randomArray = array_fill(0, 1000, random_int(0, 1000));
?>
<div style="max-height: 500px; overflow: scroll; background-color: #303030; color :#FFFFFF;">
<pre>
<?php
var_dump($randomArray);
?>
</pre>
</div>