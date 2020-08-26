<?php
if(file_exists(get_template_directory().'/env.fdctheme.php')) {
    include get_template_directory().'/env.fdctheme.php';
}

if(!function_exists('env')) {
    function env($key, $default = null)
    {
        $value = getenv($key);
        if ($value === false) {
            return $default;
        }
        return $value;
    }
}
?>