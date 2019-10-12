<?php

return \StubsGenerator\Finder::create()
    ->in('wordpress')
    // Shim for load-styles.php and load-scripts.php.
    ->notPath('wp-admin/includes/noop.php')
    // This file is not included by WordPress.
    ->notPath('wp-admin/install-helper.php')
    // Plugins and themes.
    ->notPath('wp-content')
    // Missing theme files.
    ->notPath('wp-includes/theme-compat')
    // Backward compatibility files.
    // $ find -iname "*compat*"
    ->notPath('wp-includes/compat.php')
    ->notPath('wp-includes/spl-autoload-compat.php')
    ->notPath('wp-includes/random_compat')
    ->sortByName()
;
