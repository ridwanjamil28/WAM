<?php
function setting($key)
{
    return \App\Models\Setting::where('key', $key)->value('value');
}

?>
