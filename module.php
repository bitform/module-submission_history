<?php

/**
 * Module file: Submission History
 */

$MODULE["author"]          = "Encore Web Studios";
$MODULE["author_email"]    = "formtools@encorewebstudios.com";
$MODULE["author_link"]     = "http://www.encorewebstudios.com";
$MODULE["version"]         = "1.1.5";
$MODULE["date"]            = "2011-11-04";
$MODULE["origin_language"] = "en_us";

// define the module navigation - the keys are keys defined in the language file. This lets
// the navigation - like everything else - be customized to the users language. The paths are always built
// relative to the module's root, so help/index.php means: /[form tools root]/modules/export_manager/help/index.php
$MODULE["nav"] = array(
  "module_name"   => array('{$module_dir}/index.php', false),
  "word_settings" => array('{$module_dir}/settings.php', true),
  "word_help"     => array('{$module_dir}/help.php', true)
);
