<?php

define('BASE_URL', '/wp-content/themes/' . get_template());
define("THEME_NAME", get_template());

require_once __DIR__ . '/utils/Lang.php';
require_once __DIR__ . '/utils/Assets.php';
require_once __DIR__ . '/utils/SingletonOptions.php';

require_once __DIR__ . '/core/addCss.php';
require_once __DIR__ . '/core/addScripts.php';
require_once __DIR__ . '/core/menu.php';

require_once __DIR__ . '/core/cmb2/themeSettings.php';

require_once __DIR__ . '/core/customTypes/Work.php';
require_once __DIR__ . '/core/cmb2/workFields.php';

require_once __DIR__ . '/core/customTypes/Customer.php';
require_once __DIR__ . '/core/cmb2/customerFields.php';
