<?php return array (
  'app' => 
  array (
    'name' => 'Wabizz - Lancez votre business en ligne en 5 minutes',
    'env' => 'local',
    'projecttype' => 'qrsaas',
    'isqrsaas' => true,
    'iswp' => '1',
    'isft' => false,
    'ispc' => false,
    'isag' => false,
    'isqrexact' => false,
    'ordering' => true,
    'ignore_subdomains' => 
    array (
      0 => 'www',
      1 => '127',
    ),
    'order_approve_directly' => false,
    'allow_self_deliver' => false,
    'twilio' => 
    array (
      'TWILIO_AUTH_TOKEN' => NULL,
      'TWILIO_ACCOUNT_SID' => NULL,
    ),
    'debug' => true,
    'debug_blacklist' => 
    array (
      '_COOKIE' => 
      array (
      ),
      '_SERVER' => 
      array (
        0 => 'ACLOCAL_PATH',
        1 => 'ALLUSERSPROFILE',
        2 => 'APPDATA',
        3 => 'CHERE_INVOKING',
        4 => 'COMMONPROGRAMFILES',
        5 => 'CommonProgramFiles(x86)',
        6 => 'CommonProgramW6432',
        7 => 'COMPUTERNAME',
        8 => 'COMSPEC',
        9 => 'CONFIG_SITE',
        10 => 'DISPLAY',
        11 => 'DriverData',
        12 => 'EXEPATH',
        13 => 'FPS_BROWSER_APP_PROFILE_STRING',
        14 => 'FPS_BROWSER_USER_PROFILE_STRING',
        15 => 'HOME',
        16 => 'HOMEDRIVE',
        17 => 'HOMEPATH',
        18 => 'HOSTNAME',
        19 => 'INFOPATH',
        20 => 'LC_CTYPE',
        21 => 'LOCALAPPDATA',
        22 => 'LOGONSERVER',
        23 => 'MANPATH',
        24 => 'MINGW_CHOST',
        25 => 'MINGW_PACKAGE_PREFIX',
        26 => 'MINGW_PREFIX',
        27 => 'MSYSTEM',
        28 => 'MSYSTEM_CARCH',
        29 => 'MSYSTEM_CHOST',
        30 => 'MSYSTEM_PREFIX',
        31 => 'NUMBER_OF_PROCESSORS',
        32 => 'OLDPWD',
        33 => 'OneDrive',
        34 => 'ORIGINAL_PATH',
        35 => 'ORIGINAL_TEMP',
        36 => 'ORIGINAL_TMP',
        37 => 'OS',
        38 => 'PATH',
        39 => 'PATHEXT',
        40 => 'PKG_CONFIG_PATH',
        41 => 'PLINK_PROTOCOL',
        42 => 'PROCESSOR_ARCHITECTURE',
        43 => 'PROCESSOR_IDENTIFIER',
        44 => 'PROCESSOR_LEVEL',
        45 => 'PROCESSOR_REVISION',
        46 => 'ProgramData',
        47 => 'PROGRAMFILES',
        48 => 'ProgramFiles(x86)',
        49 => 'ProgramW6432',
        50 => 'PS1',
        51 => 'PSModulePath',
        52 => 'PUBLIC',
        53 => 'PWD',
        54 => 'SESSIONNAME',
        55 => 'SHELL',
        56 => 'SHLVL',
        57 => 'SSH_ASKPASS',
        58 => 'SYSTEMDRIVE',
        59 => 'SYSTEMROOT',
        60 => 'TEMP',
        61 => 'TERM_PROGRAM',
        62 => 'TERM_PROGRAM_VERSION',
        63 => 'TMP',
        64 => 'TMPDIR',
        65 => 'USERDOMAIN',
        66 => 'USERDOMAIN_ROAMINGPROFILE',
        67 => 'USERNAME',
        68 => 'USERPROFILE',
        69 => 'WINDIR',
        70 => '_',
        71 => 'PHP_SELF',
        72 => 'SCRIPT_NAME',
        73 => 'SCRIPT_FILENAME',
        74 => 'PATH_TRANSLATED',
        75 => 'DOCUMENT_ROOT',
        76 => 'REQUEST_TIME_FLOAT',
        77 => 'REQUEST_TIME',
        78 => 'argv',
        79 => 'argc',
        80 => 'APP_NAME',
        81 => 'APP_PROJECT_TYPE',
        82 => 'IS_WHATSAPP_ORDERING_MODE',
        83 => 'APP_ENV',
        84 => 'APP_KEY',
        85 => 'APP_DEBUG',
        86 => 'APP_LOG_LEVEL',
        87 => 'APP_URL',
        88 => 'APP_LOCALE',
        89 => 'IGNORE_SUBDOMAINS',
        90 => 'TIME_ZONE',
        91 => 'CASHIER_CURRENCY',
        92 => 'ENABLE_FINANCES_ADMIN',
        93 => 'ENABLE_FINANCES_OWNER',
        94 => 'DB_CONNECTION',
        95 => 'DB_HOST',
        96 => 'DB_PORT',
        97 => 'DB_DATABASE',
        98 => 'DB_USERNAME',
        99 => 'DB_PASSWORD',
        100 => 'MAIL_MAILER',
        101 => 'MAIL_HOST',
        102 => 'MAIL_PORT',
        103 => 'MAIL_USERNAME',
        104 => 'MAIL_PASSWORD',
        105 => 'MAIL_ENCRYPTION',
        106 => 'MAIL_FROM_ADDRESS',
        107 => 'MAIL_FROM_NAME',
        108 => 'BROADCAST_DRIVER',
        109 => 'CACHE_DRIVER',
        110 => 'SESSION_DRIVER',
        111 => 'QUEUE_DRIVER',
        112 => 'REDIS_HOST',
        113 => 'REDIS_PASSWORD',
        114 => 'REDIS_PORT',
        115 => 'PUSHER_APP_ID',
        116 => 'PUSHER_APP_KEY',
        117 => 'PUSHER_APP_SECRET',
        118 => 'TIME_FORMAT',
        119 => 'DATETIME_DISPLAY_FORMAT',
        120 => 'ENABLE_PRICING',
        121 => 'FREE_PRICING_ID',
        122 => 'DB_PREFIX',
        123 => 'ADMIN_EMAIL',
        124 => 'ADMIN_PASSWORD',
        125 => 'WILDCARD_DOMAIN_READY',
        126 => 'ENABLE_GUEST_LOG',
        127 => 'HIDE_PROJECT_BRANDING',
        128 => 'DISABLE_LANDING',
        129 => 'FRONT_END_TEMPLATE',
        130 => 'QRSAAS_DISABLE_ODERING',
        131 => 'DISABLE_CONTINIUS_ORDERING',
        132 => 'ENABLE_PICKUP',
        133 => 'HIDE_COD',
        134 => 'DELIVERY_INTERVAL_IN_MINUTES',
        135 => 'DEFAULT_PAYMENT',
        136 => 'ENABLE_IMPORT_CSV',
        137 => 'demo_restaurant_slug',
        138 => 'VENDOR_ENTITY_NAME',
        139 => 'VENDOR_ENTITY_NAME_PLURAL',
        140 => 'URL_ROUTE',
        141 => 'URL_ROUTE_PLURAL',
        142 => 'EXTENDED_LICENSE_DOWNLOAD_CODE',
        143 => 'templates',
        144 => 'linkToTemplates',
        145 => 'CHARS_IN_MENU_LIST',
        146 => 'ENABLE_MILTILANGUAGE_MENUS',
        147 => 'ENABLE_CHANGELOG_IN_UPDATE',
        148 => 'LINK_TO_TS',
        149 => 'LINK_TO_PR',
        150 => 'LABEL_ON_CUSTOM_FIELDS',
        151 => 'SUBSCRIPTION_PROCESSOR',
        152 => 'FORCE_USERS_TO_PAY',
        153 => 'ENABLE_STRIPE',
        154 => 'STRIPE_KEY',
        155 => 'STRIPE_SECRET',
        156 => 'ENABLE_STRIPE_CONNECT',
        157 => 'VENDORS_OR_ADMIN_STRIPE',
        158 => 'LOCAL_TRANSFER_INFO',
        159 => 'LOCAL_TRANSFER_ACCOUNT',
        160 => 'FRONT_LANGUAGES',
        161 => 'DO_CONVERTION',
        162 => 'DATETIME_WORKING_HOURS_DISPLAY_FORMAT_NEW',
        163 => 'WHATSAPP_ORDERING_ENABLED',
        164 => 'RECAPTCHA_SITE_KEY',
        165 => 'RECAPTCHA_SECRET_KEY',
        166 => 'GOOGLE_MAPS_API_KEY',
        167 => 'GOOGLE_ANALYTICS',
        168 => 'ONESIGNAL_APP_ID',
        169 => 'ONESIGNAL_REST_API_KEY',
        170 => 'PUSHER_APP_CLUSTER',
        171 => 'ENABLE_DEFAULT_COOKIE_CONSENT',
        172 => 'SHARE_THIS_PROPERTY',
        173 => 'FUTY_KEY',
        174 => 'ENABLE_PAYPAL',
        175 => 'VENDORS_OR_ADMIN_PAYPAL',
        176 => 'PAYPAL_CLIENT_ID',
        177 => 'PAYPAL_SECRET',
        178 => 'PAYPAL_MODE',
        179 => 'ENABLE_MOLLIE',
        180 => 'VENDORS_OR_ADMIN_MOLLIE',
        181 => 'MOLLIE_PAYMENT_KEY',
        182 => 'pdf_invoice_title',
        183 => 'PAYPAL_SUBSCRIBE_CLIENT_ID',
        184 => 'PAYPAL_SUBSCRIBE_SECRET',
        185 => 'PAYPAL_SUBSCRIBE_MODE',
        186 => 'paddleVendorID',
        187 => 'CONVERT_API_SECRET',
        188 => 'SHELL_VERBOSITY',
      ),
      '_ENV' => 
      array (
        0 => 'APP_NAME',
        1 => 'APP_PROJECT_TYPE',
        2 => 'IS_WHATSAPP_ORDERING_MODE',
        3 => 'APP_ENV',
        4 => 'APP_KEY',
        5 => 'APP_DEBUG',
        6 => 'APP_LOG_LEVEL',
        7 => 'APP_URL',
        8 => 'APP_LOCALE',
        9 => 'IGNORE_SUBDOMAINS',
        10 => 'TIME_ZONE',
        11 => 'CASHIER_CURRENCY',
        12 => 'ENABLE_FINANCES_ADMIN',
        13 => 'ENABLE_FINANCES_OWNER',
        14 => 'DB_CONNECTION',
        15 => 'DB_HOST',
        16 => 'DB_PORT',
        17 => 'DB_DATABASE',
        18 => 'DB_USERNAME',
        19 => 'DB_PASSWORD',
        20 => 'MAIL_MAILER',
        21 => 'MAIL_HOST',
        22 => 'MAIL_PORT',
        23 => 'MAIL_USERNAME',
        24 => 'MAIL_PASSWORD',
        25 => 'MAIL_ENCRYPTION',
        26 => 'MAIL_FROM_ADDRESS',
        27 => 'MAIL_FROM_NAME',
        28 => 'BROADCAST_DRIVER',
        29 => 'CACHE_DRIVER',
        30 => 'SESSION_DRIVER',
        31 => 'QUEUE_DRIVER',
        32 => 'REDIS_HOST',
        33 => 'REDIS_PASSWORD',
        34 => 'REDIS_PORT',
        35 => 'PUSHER_APP_ID',
        36 => 'PUSHER_APP_KEY',
        37 => 'PUSHER_APP_SECRET',
        38 => 'TIME_FORMAT',
        39 => 'DATETIME_DISPLAY_FORMAT',
        40 => 'ENABLE_PRICING',
        41 => 'FREE_PRICING_ID',
        42 => 'DB_PREFIX',
        43 => 'ADMIN_EMAIL',
        44 => 'ADMIN_PASSWORD',
        45 => 'WILDCARD_DOMAIN_READY',
        46 => 'ENABLE_GUEST_LOG',
        47 => 'HIDE_PROJECT_BRANDING',
        48 => 'DISABLE_LANDING',
        49 => 'FRONT_END_TEMPLATE',
        50 => 'QRSAAS_DISABLE_ODERING',
        51 => 'DISABLE_CONTINIUS_ORDERING',
        52 => 'ENABLE_PICKUP',
        53 => 'HIDE_COD',
        54 => 'DELIVERY_INTERVAL_IN_MINUTES',
        55 => 'DEFAULT_PAYMENT',
        56 => 'ENABLE_IMPORT_CSV',
        57 => 'demo_restaurant_slug',
        58 => 'VENDOR_ENTITY_NAME',
        59 => 'VENDOR_ENTITY_NAME_PLURAL',
        60 => 'URL_ROUTE',
        61 => 'URL_ROUTE_PLURAL',
        62 => 'EXTENDED_LICENSE_DOWNLOAD_CODE',
        63 => 'templates',
        64 => 'linkToTemplates',
        65 => 'CHARS_IN_MENU_LIST',
        66 => 'ENABLE_MILTILANGUAGE_MENUS',
        67 => 'ENABLE_CHANGELOG_IN_UPDATE',
        68 => 'LINK_TO_TS',
        69 => 'LINK_TO_PR',
        70 => 'LABEL_ON_CUSTOM_FIELDS',
        71 => 'SUBSCRIPTION_PROCESSOR',
        72 => 'FORCE_USERS_TO_PAY',
        73 => 'ENABLE_STRIPE',
        74 => 'STRIPE_KEY',
        75 => 'STRIPE_SECRET',
        76 => 'ENABLE_STRIPE_CONNECT',
        77 => 'VENDORS_OR_ADMIN_STRIPE',
        78 => 'LOCAL_TRANSFER_INFO',
        79 => 'LOCAL_TRANSFER_ACCOUNT',
        80 => 'FRONT_LANGUAGES',
        81 => 'DO_CONVERTION',
        82 => 'DATETIME_WORKING_HOURS_DISPLAY_FORMAT_NEW',
        83 => 'WHATSAPP_ORDERING_ENABLED',
        84 => 'RECAPTCHA_SITE_KEY',
        85 => 'RECAPTCHA_SECRET_KEY',
        86 => 'GOOGLE_MAPS_API_KEY',
        87 => 'GOOGLE_ANALYTICS',
        88 => 'ONESIGNAL_APP_ID',
        89 => 'ONESIGNAL_REST_API_KEY',
        90 => 'PUSHER_APP_CLUSTER',
        91 => 'ENABLE_DEFAULT_COOKIE_CONSENT',
        92 => 'SHARE_THIS_PROPERTY',
        93 => 'FUTY_KEY',
        94 => 'ENABLE_PAYPAL',
        95 => 'VENDORS_OR_ADMIN_PAYPAL',
        96 => 'PAYPAL_CLIENT_ID',
        97 => 'PAYPAL_SECRET',
        98 => 'PAYPAL_MODE',
        99 => 'ENABLE_MOLLIE',
        100 => 'VENDORS_OR_ADMIN_MOLLIE',
        101 => 'MOLLIE_PAYMENT_KEY',
        102 => 'pdf_invoice_title',
        103 => 'PAYPAL_SUBSCRIBE_CLIENT_ID',
        104 => 'PAYPAL_SUBSCRIBE_SECRET',
        105 => 'PAYPAL_SUBSCRIBE_MODE',
        106 => 'paddleVendorID',
        107 => 'CONVERT_API_SECRET',
        108 => 'SHELL_VERBOSITY',
      ),
    ),
    'url' => 'http://127.0.0.1:8082/',
    'asset_url' => NULL,
    'company_images' => '/uploads/restorants/',
    'timezone' => 'Europe/Brussels',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:cleqsZQ0FQGaaEpuNR228wvo02JTLgsj2Qko9Y9N4LI=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'JoeDixon\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Translation\\TranslationServiceProvider',
      21 => 'Illuminate\\Validation\\ValidationServiceProvider',
      22 => 'Illuminate\\View\\ViewServiceProvider',
      23 => 'Onecentlin\\Adminer\\ServiceProvider',
      24 => 'Akaunting\\Money\\Provider',
      25 => 'Intervention\\Image\\ImageServiceProvider',
      26 => 'Biscolab\\ReCaptcha\\ReCaptchaServiceProvider',
      27 => 'Darryldecode\\Cart\\CartServiceProvider',
      28 => 'App\\Providers\\AppServiceProvider',
      29 => 'App\\Providers\\AuthServiceProvider',
      30 => 'App\\Providers\\TranslationServiceProvider',
      31 => 'App\\Providers\\EventServiceProvider',
      32 => 'App\\Providers\\RouteServiceProvider',
      33 => 'Maatwebsite\\Excel\\ExcelServiceProvider',
      34 => 'Spatie\\Geocoder\\GeocoderServiceProvider',
      35 => 'Spatie\\CookieConsent\\CookieConsentServiceProvider',
      36 => 'Spatie\\EloquentSortable\\EloquentSortableServiceProvider',
      37 => 'Unicodeveloper\\Paystack\\PaystackServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Cart' => 'Darryldecode\\Cart\\Facades\\CartFacade',
      'Image' => 'Intervention\\Image\\ImageManagerStatic',
      'Excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
      'Geocoder' => 'Spatie\\Geocoder\\Facades\\Geocoder',
      'DotenvEditor' => 'Brotzka\\DotenvEditor\\DotenvEditorFacade',
      'Paystack' => 'Unicodeveloper\\Paystack\\Facades\\Paystack',
      'Zipper' => 'Chumper\\Zipper\\Zipper',
      'ReCaptcha' => 'Biscolab\\ReCaptcha\\Facades\\ReCaptcha',
      'Pusher' => 'Pusher\\Pusher',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'eu',
          'useTLS' => true,
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\xampp\\htdocs\\wabi-dev\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => NULL,
        'secret' => NULL,
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'wabizz_lancez_votre_business_en_ligne_en_5_minutes_cache',
  ),
  'config' => 
  array (
    'version' => '3.0.6',
    'env' => 
    array (
      0 => 
      array (
        'name' => 'Setup',
        'slug' => 'setup',
        'icon' => 'ni ni-settings',
        'fields' => 
        array (
          0 => 
          array (
            'separator' => 'System',
            'title' => 'Project name',
            'key' => 'APP_NAME',
            'value' => 'Site name',
          ),
          1 => 
          array (
            'title' => 'Link to your site',
            'key' => 'APP_URL',
            'value' => 'http://localhost',
          ),
          2 => 
          array (
            'title' => 'Subdomains',
            'key' => 'IGNORE_SUBDOMAINS',
            'value' => 'www,127',
            'help' => 'Subdomain your app works in. ex if your subdomain is app.yourdomain.com, here you should have www,app ',
          ),
          3 => 
          array (
            'title' => 'App debugging',
            'key' => 'APP_DEBUG',
            'value' => 'true',
            'ftype' => 'bool',
            'help' => 'Enable if you experience error 500',
          ),
          4 => 
          array (
            'title' => 'Wildcard domain',
            'help' => 'If you have followed the procedure to enable wildcard domain, select this so you can have shopname.yourdomain.com',
            'key' => 'WILDCARD_DOMAIN_READY',
            'value' => 'false',
            'ftype' => 'bool',
          ),
          5 => 
          array (
            'title' => 'Enable guest log',
            'key' => 'ENABLE_GUEST_LOG',
            'value' => 'true',
            'ftype' => 'bool',
            'onlyin' => 'qrsaas',
          ),
          6 => 
          array (
            'title' => 'Hide project branding on menu page',
            'key' => 'HIDE_PROJECT_BRANDING',
            'value' => 'true',
            'ftype' => 'bool',
            'onlyin' => 'qrsaas',
          ),
          7 => 
          array (
            'title' => 'Disable the landing page',
            'help' => 'When landing page is disabled, the project will start from the login page. In this case it is best to have the system in subdomain',
            'key' => 'DISABLE_LANDING',
            'value' => 'false',
            'ftype' => 'bool',
            'onlyin' => 'qrsaas',
          ),
          8 => 
          array (
            'title' => 'Front end template',
            'key' => 'FRONT_END_TEMPLATE',
            'value' => 'defaulttemplate',
            'ftype' => 'select',
            'data' => 
            array (
              'defaulttemplate' => 'Default template',
              'elegant-template' => 'Elegant template',
            ),
          ),
          9 => 
          array (
            'separator' => 'Ordering and items',
            'title' => 'Completely disable ordering',
            'key' => 'QRSAAS_DISABLE_ODERING',
            'value' => 'false',
            'ftype' => 'bool',
            'onlyin' => 'qrsaas',
            'help' => 'If this is selected, then cart, and orders will not be shown',
          ),
          10 => 
          array (
            'title' => 'Directly approve order',
            'help' => 'When selected admin does not have to approve order',
            'key' => 'APP_ORDER_APPROVE_DIRECTLY',
            'value' => 'false',
            'ftype' => 'bool',
            'onlyin' => 'ft',
          ),
          11 => 
          array (
            'title' => 'Assign orders to drivers automatically',
            'key' => 'ALLOW_AUTOMATED_ASSIGN_TO_DRIVER',
            'value' => 'true',
            'ftype' => 'bool',
            'onlyin' => 'ft',
          ),
          12 => 
          array (
            'title' => 'Allow vendor to do their own delivery',
            'key' => 'APP_ALLOW_SELF_DELIVER',
            'value' => 'true',
            'ftype' => 'bool',
            'onlyin' => 'ft',
          ),
          13 => 
          array (
            'title' => 'Time for order to be prepared',
            'help' => 'Average time order is prepared, so users can not order before vendor or shop is closing',
            'key' => 'TIME_TO_PREPARE_ORDER_IN_MINUTES',
            'value' => 0,
            'type' => 'hidden',
            'onlyin' => 'ft',
          ),
          14 => 
          array (
            'title' => 'Search radius for vendors',
            'help' => 'Maximum distance that vendors are shown to user',
            'key' => 'LOCATION_SEARCH_RADIUS',
            'value' => 50,
            'type' => 'number',
            'onlyin' => 'ft',
          ),
          15 => 
          array (
            'title' => 'Search radius for drivers',
            'help' => 'When you have automatic assign to driver, this is a way to show the system for the maximum range to look for driver',
            'key' => 'DRIVER_SEARCH_RADIUS',
            'value' => 15,
            'type' => 'number',
            'onlyin' => 'ft',
          ),
          16 => 
          array (
            'title' => 'Disable continues orders',
            'help' => 'If enabled, orders done on same table will be merged, until order is not closed/finished by vendor',
            'key' => 'DISABLE_CONTINIUS_ORDERING',
            'value' => 'false',
            'ftype' => 'bool',
            'onlyin' => 'qrsaas',
          ),
          17 => 
          array (
            'title' => 'Enable pickup , system wide',
            'key' => 'ENABLE_PICKUP',
            'value' => 'true',
            'ftype' => 'bool',
          ),
          18 => 
          array (
            'title' => 'Hide cash on delivery, system wide',
            'key' => 'HIDE_COD',
            'value' => 'false',
            'ftype' => 'bool',
          ),
          19 => 
          array (
            'title' => 'Delivery / time intervals in minutes',
            'help' => 'Separate the time slots into N Minutes. ex 09:00-09-15 , 09:15-09:30 - value is 15 ',
            'key' => 'DELIVERY_INTERVAL_IN_MINUTES',
            'value' => 30,
            'type' => 'number',
          ),
          20 => 
          array (
            'title' => 'Default payment type',
            'key' => 'DEFAULT_PAYMENT',
            'value' => 'cod',
            'ftype' => 'select',
            'data' => 
            array (
              'cod' => 'Cash on Delivery',
              'stripe' => 'Stripe Card processing',
            ),
          ),
          21 => 
          array (
            'title' => 'Is your project multi city',
            'help' => 'When selected, the front page will display list of cities',
            'key' => 'MULTI_CITY',
            'value' => 'true',
            'ftype' => 'bool',
            'onlyin' => 'ft',
          ),
          22 => 
          array (
            'title' => 'Single mode - run this site for one vendor only',
            'key' => 'SINGLE_MODE',
            'value' => 'false',
            'ftype' => 'bool',
            'onlyin' => 'ft',
          ),
          23 => 
          array (
            'title' => 'The id of the vendor for single mode',
            'help' => 'If you have single mode selected, than this vendor id will be show',
            'key' => 'SINGLE_MODE_ID',
            'value' => '1',
            'type' => 'number',
            'onlyin' => 'ft',
          ),
          24 => 
          array (
            'title' => 'Enable import via CSV for vendor items',
            'key' => 'ENABLE_IMPORT_CSV',
            'value' => 'false',
            'ftype' => 'bool',
          ),
          25 => 
          array (
            'separator' => 'Delivery costs',
            'title' => 'Enable cost per distance',
            'key' => 'ENABLE_COST_PER_DISTANCE',
            'value' => 'false',
            'ftype' => 'bool',
            'onlyin' => 'ft',
          ),
          26 => 
          array (
            'title' => 'Cost per kilometer',
            'key' => 'COST_PER_KILOMETER',
            'value' => '1',
            'onlyin' => 'ft',
          ),
          27 => 
          array (
            'title' => 'Enable cost based on range',
            'help' => 'If you have enable cost based on range, the delivery cost will be calculated based on what range the distance for delivery is in',
            'key' => 'ENABLE_COST_IN_RANGE',
            'value' => 'false',
            'ftype' => 'bool',
            'onlyin' => 'ft',
          ),
          28 => 
          array (
            'help' => 'Range in kilometers ex from 0km - 5km will be 0-5',
            'title' => 'First range',
            'key' => 'RANGE_ONE',
            'value' => '0-5',
            'onlyin' => 'ft',
          ),
          29 => 
          array (
            'title' => 'Second range',
            'key' => 'RANGE_TWO',
            'value' => '5-7',
            'onlyin' => 'ft',
          ),
          30 => 
          array (
            'title' => 'Third range',
            'key' => 'RANGE_THREE',
            'value' => '7-10',
            'onlyin' => 'ft',
          ),
          31 => 
          array (
            'title' => 'Fourth range',
            'key' => 'RANGE_FOUR',
            'value' => '10-15',
            'onlyin' => 'ft',
          ),
          32 => 
          array (
            'title' => 'Fifth range',
            'key' => 'RANGE_FIVE',
            'value' => '15-20',
            'onlyin' => 'ft',
          ),
          33 => 
          array (
            'title' => 'Price for first range',
            'key' => 'RANGE_ONE_PRICE',
            'value' => '5',
            'onlyin' => 'ft',
          ),
          34 => 
          array (
            'title' => 'Price for second range',
            'key' => 'RANGE_TWO_PRICE',
            'value' => '6',
            'onlyin' => 'ft',
          ),
          35 => 
          array (
            'title' => 'Price for third range',
            'key' => 'RANGE_THREE_PRICE',
            'value' => '8',
            'onlyin' => 'ft',
          ),
          36 => 
          array (
            'title' => 'Price for fourth range',
            'key' => 'RANGE_FOUR_PRICE',
            'value' => '10',
            'onlyin' => 'ft',
          ),
          37 => 
          array (
            'title' => 'Price for fifth range',
            'key' => 'RANGE_FIVE_PRICE',
            'value' => '15',
            'onlyin' => 'ft',
          ),
          38 => 
          array (
            'title' => 'Driver percent from the order',
            'help' => 'From 0-100. Based on your business type, this value determines how much driver will make from the delivery fee. This value can be change on driver level also',
            'key' => 'DRIVER_PERCENT_FROM_DELIVERY_FEE',
            'value' => '100',
            'onlyin' => 'ft',
          ),
          39 => 
          array (
            'title' => 'Demo vendor slug',
            'separator' => 'Other settings',
            'help' => 'Enter the domain - slug of your demo vendor that will show on the landing page',
            'key' => 'demo_restaurant_slug',
            'value' => 'leukapizza',
            'onlyin' => 'qrsaas',
          ),
          40 => 
          array (
            'title' => 'Vendor entity name',
            'help' => 'Ex. Company, Restaurant, Shop, Business etc',
            'key' => 'VENDOR_ENTITY_NAME',
            'value' => 'Restaurant',
          ),
          41 => 
          array (
            'title' => 'Vendor entity name in plural',
            'help' => 'Ex. Companies, Restaurants, Shops, Businesses etc',
            'key' => 'VENDOR_ENTITY_NAME_PLURAL',
            'value' => 'Restaurants',
          ),
          42 => 
          array (
            'title' => 'Url route for vendor',
            'help' => 'If you want to change the link the vendor is open in. ex yourdomain.com/shop/shopname. shop - should be the value here',
            'key' => 'URL_ROUTE',
            'value' => 'restaurant',
          ),
          43 => 
          array (
            'title' => 'Url route for vendor in plural',
            'help' => 'If you want to change the link the vendor management is open in. ex yourdomain.com/shops. shops - should be the value here',
            'key' => 'URL_ROUTE_PLURAL',
            'value' => 'restaurants',
          ),
          44 => 
          array (
            'title' => 'Apps download code',
            'help' => 'If you have extended license, or some specific product, we will send you App download code. Send us ticket.',
            'key' => 'EXTENDED_LICENSE_DOWNLOAD_CODE',
            'value' => '',
          ),
          45 => 
          array (
            'title' => 'Print templates images',
            'help' => 'Links to images representing the images for the templates. You can use remote images',
            'key' => 'templates',
            'value' => '/impactfront/img/menu_template_1.jpg,/impactfront/img/menu_template_2.jpg',
            'onlyin' => 'qrsaas',
          ),
          46 => 
          array (
            'title' => 'Print templates zip',
            'help' => 'Link to .zip representing the template for download. You can use remote file',
            'key' => 'linkToTemplates',
            'value' => '/impactfront/img/templates.zip',
            'onlyin' => 'qrsaas',
          ),
          47 => 
          array (
            'title' => 'Chars in menu list',
            'key' => 'CHARS_IN_MENU_LIST',
            'value' => '40',
            'type' => 'number',
            'help' => 'Controls to how many chars the menu description should be trimmed',
          ),
          48 => 
          array (
            'title' => 'Enable multi language menus',
            'help' => 'When enabled, vendors can add language version to the menu',
            'key' => 'ENABLE_MILTILANGUAGE_MENUS',
            'value' => 'false',
            'ftype' => 'bool',
          ),
          49 => 
          array (
            'title' => 'Enable change log in update screen',
            'key' => 'ENABLE_CHANGELOG_IN_UPDATE',
            'value' => 'true',
            'ftype' => 'bool',
          ),
          50 => 
          array (
            'title' => 'Position for the register driver link',
            'key' => 'DRIVER_LINK_REGISTER_POSITION',
            'value' => 'footer',
            'data' => 
            array (
              'footer' => 'Footer',
              'navbar' => 'Navigation bar',
              'dontshow' => 'Hidden',
            ),
            'ftype' => 'select',
            'onlyin' => 'ft',
          ),
          51 => 
          array (
            'title' => 'Position for the register vendor link',
            'key' => 'RESTAURANT_LINK_REGISTER_POSITION',
            'value' => 'footer',
            'data' => 
            array (
              'footer' => 'Footer',
              'navbar' => 'Navigation bar',
              'dontshow' => 'Hidden',
            ),
            'ftype' => 'select',
            'onlyin' => 'ft',
          ),
          52 => 
          array (
            'title' => 'Title of driver link',
            'key' => 'DRIVER_LINK_REGISTER_TITLE',
            'value' => 'Wanna drive for us?',
            'onlyin' => 'ft',
          ),
          53 => 
          array (
            'title' => 'Title for the register vendor link',
            'key' => 'RESTAURANT_LINK_REGISTER_TITLE',
            'value' => 'Add your vendor',
            'onlyin' => 'ft',
          ),
          54 => 
          array (
            'title' => 'Mobile app secret',
            'key' => 'APP_SECRET',
            'value' => 'APP_SECRET',
          ),
          55 => 
          array (
            'title' => 'App environment',
            'key' => 'APP_ENV',
            'value' => 'local',
            'ftype' => 'select',
            'data' => 
            array (
              'local' => 'Local',
              'prodcution' => 'Production',
            ),
          ),
          56 => 
          array (
            'title' => 'Debug app level',
            'type' => 'hidden',
            'key' => 'APP_LOG_LEVEL',
            'value' => 'debug',
            'data' => 
            array (
              'debug' => 'Debug',
              'error' => 'Error',
            ),
          ),
          57 => 
          array (
            'separator' => 'Links',
            'title' => 'Link to terms and services',
            'key' => 'LINK_TO_TS',
            'value' => '/blog/terms-and-conditions',
          ),
          58 => 
          array (
            'title' => 'Link to privacy policy',
            'key' => 'LINK_TO_PR',
            'value' => '/blog/how-it-works',
          ),
          59 => 
          array (
            'separator' => 'Custom fields on order',
            'title' => 'Label on the custom fields',
            'key' => 'LABEL_ON_CUSTOM_FIELDS',
            'value' => 'Customer Info',
          ),
        ),
      ),
      1 => 
      array (
        'name' => 'Finances',
        'slug' => 'finances',
        'icon' => 'ni ni-money-coins',
        'fields' => 
        array (
          0 => 
          array (
            'separator' => 'General',
            'title' => 'Tool used for subscriptions',
            'key' => 'SUBSCRIPTION_PROCESSOR',
            'value' => 'Stripe',
            'ftype' => 'select',
            'data' => 
            array (
              'Stripe' => 'Stripe',
              'Local' => 'Local bank transfers',
              'Paddle' => 'Paddle',
              'PayPal' => 'PayPal',
            ),
          ),
          1 => 
          array (
            'title' => 'Enable Pricing',
            'key' => 'ENABLE_PRICING',
            'value' => 'true',
            'ftype' => 'bool',
          ),
          2 => 
          array (
            'title' => '',
            'key' => 'FREE_PRICING_ID',
            'value' => '1',
          ),
          3 => 
          array (
            'title' => '',
            'key' => 'FORCE_USERS_TO_PAY',
            'value' => 'false',
            'ftype' => 'bool',
          ),
          4 => 
          array (
            'title' => 'Enable Finance dashboard for owner',
            'help' => 'More advance, finance related reports for owner',
            'key' => 'ENABLE_FINANCES_OWNER',
            'value' => 'true',
            'ftype' => 'bool',
          ),
          5 => 
          array (
            'title' => 'Enable Finance dashboard for admin',
            'key' => 'ENABLE_FINANCES_ADMIN',
            'help' => 'More advance, finance related reports for admin',
            'value' => 'true',
            'ftype' => 'bool',
          ),
          6 => 
          array (
            'separator' => 'Stripe',
            'title' => 'Enable stripe for payments when ordering',
            'key' => 'ENABLE_STRIPE',
            'value' => 'true',
            'ftype' => 'bool',
          ),
          7 => 
          array (
            'title' => 'Stripe API key',
            'key' => 'STRIPE_KEY',
            'value' => 'pk_test_XXXXXXXXXXXXXX',
          ),
          8 => 
          array (
            'title' => 'Stripe API Secret',
            'key' => 'STRIPE_SECRET',
            'value' => 'sk_test_XXXXXXXXXXXXXXX',
          ),
          9 => 
          array (
            'title' => 'Enable Stripe connect',
            'help' => 'If enabled, vendors will be able to connect, and money to be send directly to them',
            'key' => 'ENABLE_STRIPE_CONNECT',
            'value' => 'true',
            'ftype' => 'bool',
          ),
          10 => 
          array (
            'title' => 'System will use',
            'key' => 'VENDORS_OR_ADMIN_STRIPE',
            'ftype' => 'select',
            'onlyin' => 'qrsaas',
            'value' => 'admin',
            'data' => 
            array (
              'admin' => 'Admin defined Stripe',
              'vendor' => 'Vendor defined Stripe',
            ),
          ),
          11 => 
          array (
            'separator' => 'Local bank transfer',
            'title' => 'Local bank transfer explanation',
            'key' => 'LOCAL_TRANSFER_INFO',
            'value' => 'Wire us the plan amout on the following bank accoun. And inform us about the wire.',
          ),
          12 => 
          array (
            'title' => 'Bank Account',
            'key' => 'LOCAL_TRANSFER_ACCOUNT',
            'value' => 'IBAN: 12112121212121',
          ),
        ),
      ),
      2 => 
      array (
        'name' => 'Localization',
        'slug' => 'localizatino',
        'icon' => 'ni ni-world-2',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Default language',
            'help' => 'If you make change, make sure you first have added the new language in Translations and you have done the translations.',
            'key' => 'APP_LOCALE',
            'value' => 'en',
            'ftype' => 'select',
            'data' => 
            array (
              'af' => 'Afrikaans',
              'ak' => 'Akan',
              'sq' => 'Albanian',
              'am' => 'Amharic',
              'ar' => 'Arabic',
              'hy' => 'Armenian',
              'as' => 'Assamese',
              'az' => 'Azerbaijani',
              'bm' => 'Bambara',
              'eu' => 'Basque',
              'be' => 'Belarusian',
              'bn' => 'Bengali',
              'bs' => 'Bosnian',
              'bg' => 'Bulgarian',
              'my' => 'Burmese',
              'ca' => 'Catalan',
              'zh' => 'Chinese',
              'kw' => 'Cornish',
              'hr' => 'Croatian',
              'cs' => 'Czech',
              'da' => 'Danish',
              'nl' => 'Dutch',
              'en' => 'English',
              'eo' => 'Esperanto',
              'et' => 'Estonian',
              'ee' => 'Ewe',
              'fo' => 'Faroese',
              'fi' => 'Finnish',
              'fr' => 'French',
              'ff' => 'Fulah',
              'gl' => 'Galician',
              'lg' => 'Ganda',
              'ka' => 'Georgian',
              'de' => 'German',
              'el' => 'Greek',
              'gu' => 'Gujarati',
              'ha' => 'Hausa',
              'he' => 'Hebrew',
              'hi' => 'Hindi',
              'hu' => 'Hungarian',
              'is' => 'Icelandic',
              'ig' => 'Igbo',
              'id' => 'Indonesian',
              'ga' => 'Irish',
              'it' => 'Italian',
              'ja' => 'Japanese',
              'kl' => 'Kalaallisut',
              'kn' => 'Kannada',
              'kk' => 'Kazakh',
              'km' => 'Khmer',
              'ki' => 'Kikuyu',
              'rw' => 'Kinyarwanda',
              'ko' => 'Korean',
              'lv' => 'Latvian',
              'lt' => 'Lithuanian',
              'mk' => 'Macedonian',
              'mg' => 'Malagasy',
              'ms' => 'Malay',
              'ml' => 'Malayalam',
              'mt' => 'Maltese',
              'gv' => 'Manx',
              'mr' => 'Marathi',
              'ne' => 'Nepali',
              'nd' => 'North Ndebele',
              'nb' => 'Norwegian Bokmål',
              'nn' => 'Norwegian Nynorsk',
              'or' => 'Oriya',
              'om' => 'Oromo',
              'ps' => 'Pashto',
              'fa' => 'Persian',
              'pl' => 'Polish',
              'pt' => 'Portuguese',
              'pa' => 'Punjabi',
              'ro' => 'Romanian',
              'rm' => 'Romansh',
              'ru' => 'Russian',
              'sg' => 'Sango',
              'sr' => 'Serbian',
              'sn' => 'Shona',
              'ii' => 'Sichuan Yi',
              'si' => 'Sinhala',
              'sk' => 'Slovak',
              'sl' => 'Slovenian',
              'so' => 'Somali',
              'es' => 'Spanish',
              'sw' => 'Swahili',
              'sv' => 'Swedish',
              'ta' => 'Tamil',
              'te' => 'Telugu',
              'th' => 'Thai',
              'bo' => 'Tibetan',
              'ti' => 'Tigrinya',
              'to' => 'Tonga',
              'tr' => 'Turkish',
              'uk' => 'Ukrainian',
              'ur' => 'Urdu',
              'uz' => 'Uzbek',
              'vi' => 'Vietnamese',
              'cy' => 'Welsh',
              'yo' => 'Yoruba',
              'zu' => 'Zulu',
            ),
          ),
          1 => 
          array (
            'title' => 'List of available language on the landing page',
            'help' => 'Define a list of Language short code and the name. If only one language is listed, the language picker will not show up',
            'key' => 'FRONT_LANGUAGES',
            'value' => 'EN,English,FR,French',
          ),
          2 => 
          array (
            'title' => 'Time zone',
            'help' => 'This value is important for correct vendors opening and closing times',
            'key' => 'TIME_ZONE',
            'value' => 'Europe/Berlin',
            'ftype' => 'select',
            'data' => 
            array (
              'Pacific/Midway' => '(UTC-11:00) Midway Island',
              'Pacific/Samoa' => '(UTC-11:00) Samoa',
              'Pacific/Honolulu' => '(UTC-10:00) Hawaii',
              'US/Alaska' => '(UTC-09:00) Alaska',
              'America/Los_Angeles' => '(UTC-08:00) Pacific Time (US &amp; Canada)',
              'America/Tijuana' => '(UTC-08:00) Tijuana',
              'US/Arizona' => '(UTC-07:00) Arizona',
              'America/Chihuahua' => '(UTC-07:00) La Paz',
              'America/Mazatlan' => '(UTC-07:00) Mazatlan',
              'US/Mountain' => '(UTC-07:00) Mountain Time (US &amp; Canada)',
              'America/Managua' => '(UTC-06:00) Central America',
              'US/Central' => '(UTC-06:00) Central Time (US &amp; Canada)',
              'America/Mexico_City' => '(UTC-06:00) Mexico City',
              'America/Monterrey' => '(UTC-06:00) Monterrey',
              'Canada/Saskatchewan' => '(UTC-06:00) Saskatchewan',
              'America/Bogota' => '(UTC-05:00) Quito',
              'US/Eastern' => '(UTC-05:00) Eastern Time (US &amp; Canada)',
              'US/East-Indiana' => '(UTC-05:00) Indiana (East)',
              'America/Lima' => '(UTC-05:00) Lima',
              'Canada/Atlantic' => '(UTC-04:00) Atlantic Time (Canada)',
              'America/Caracas' => '(UTC-04:30) Caracas',
              'America/La_Paz' => '(UTC-04:00) La Paz',
              'America/Santiago' => '(UTC-04:00) Santiago',
              'Canada/Newfoundland' => '(UTC-03:30) Newfoundland',
              'America/Sao_Paulo' => '(UTC-03:00) Brasilia',
              'America/Argentina/Buenos_Aires' => '(UTC-03:00) Georgetown',
              'America/Godthab' => '(UTC-03:00) Greenland',
              'America/Noronha' => '(UTC-02:00) Mid-Atlantic',
              'Atlantic/Azores' => '(UTC-01:00) Azores',
              'Atlantic/Cape_Verde' => '(UTC-01:00) Cape Verde Is.',
              'Africa/Casablanca' => '(UTC+00:00) Casablanca',
              'Europe/London' => '(UTC+00:00) London',
              'Etc/Greenwich' => '(UTC+00:00) Greenwich Mean Time : Dublin',
              'Europe/Lisbon' => '(UTC+00:00) Lisbon',
              'Africa/Monrovia' => '(UTC+00:00) Monrovia',
              'UTC' => '(UTC+00:00) UTC',
              'Europe/Amsterdam' => '(UTC+01:00) Amsterdam',
              'Europe/Belgrade' => '(UTC+01:00) Belgrade',
              'Europe/Berlin' => '(UTC+01:00) Berlin',
              'Europe/Bern' => '(UTC+01:00) Bern',
              'Europe/Bratislava' => '(UTC+01:00) Bratislava',
              'Europe/Brussels' => '(UTC+01:00) Brussels',
              'Europe/Budapest' => '(UTC+01:00) Budapest',
              'Europe/Copenhagen' => '(UTC+01:00) Copenhagen',
              'Europe/Ljubljana' => '(UTC+01:00) Ljubljana',
              'Europe/Madrid' => '(UTC+01:00) Madrid',
              'Europe/Paris' => '(UTC+01:00) Paris',
              'Europe/Prague' => '(UTC+01:00) Prague',
              'Europe/Rome' => '(UTC+01:00) Rome',
              'Europe/Sarajevo' => '(UTC+01:00) Sarajevo',
              'Europe/Skopje' => '(UTC+01:00) Skopje',
              'Europe/Stockholm' => '(UTC+01:00) Stockholm',
              'Europe/Vienna' => '(UTC+01:00) Vienna',
              'Europe/Warsaw' => '(UTC+01:00) Warsaw',
              'Africa/Lagos' => '(UTC+01:00) West Central Africa',
              'Europe/Zagreb' => '(UTC+01:00) Zagreb',
              'Europe/Athens' => '(UTC+02:00) Athens',
              'Europe/Bucharest' => '(UTC+02:00) Bucharest',
              'Africa/Cairo' => '(UTC+02:00) Cairo',
              'Africa/Harare' => '(UTC+02:00) Harare',
              'Europe/Helsinki' => '(UTC+02:00) Kyiv',
              'Europe/Istanbul' => '(UTC+02:00) Istanbul',
              'Asia/Jerusalem' => '(UTC+02:00) Jerusalem',
              'Africa/Johannesburg' => '(UTC+02:00) Pretoria',
              'Europe/Riga' => '(UTC+02:00) Riga',
              'Europe/Sofia' => '(UTC+02:00) Sofia',
              'Europe/Tallinn' => '(UTC+02:00) Tallinn',
              'Europe/Vilnius' => '(UTC+02:00) Vilnius',
              'Asia/Baghdad' => '(UTC+03:00) Baghdad',
              'Asia/Kuwait' => '(UTC+03:00) Kuwait',
              'Europe/Minsk' => '(UTC+03:00) Minsk',
              'Africa/Nairobi' => '(UTC+03:00) Nairobi',
              'Asia/Riyadh' => '(UTC+03:00) Riyadh',
              'Europe/Volgograd' => '(UTC+03:00) Volgograd',
              'Asia/Tehran' => '(UTC+03:30) Tehran',
              'Asia/Muscat' => '(UTC+04:00) Muscat',
              'Asia/Baku' => '(UTC+04:00) Baku',
              'Europe/Moscow' => '(UTC+04:00) St. Petersburg',
              'Asia/Tbilisi' => '(UTC+04:00) Tbilisi',
              'Asia/Yerevan' => '(UTC+04:00) Yerevan',
              'Asia/Kabul' => '(UTC+04:30) Kabul',
              'Asia/Karachi' => '(UTC+05:00) Karachi',
              'Asia/Tashkent' => '(UTC+05:00) Tashkent',
              'Asia/Calcutta' => '(UTC+05:30) Sri Jayawardenepura',
              'Asia/Kolkata' => '(UTC+05:30) Kolkata',
              'Asia/Katmandu' => '(UTC+05:45) Kathmandu',
              'Asia/Almaty' => '(UTC+06:00) Almaty',
              'Asia/Dhaka' => '(UTC+06:00) Dhaka',
              'Asia/Yekaterinburg' => '(UTC+06:00) Ekaterinburg',
              'Asia/Rangoon' => '(UTC+06:30) Rangoon',
              'Asia/Bangkok' => '(UTC+07:00) Hanoi',
              'Asia/Jakarta' => '(UTC+07:00) Jakarta',
              'Asia/Novosibirsk' => '(UTC+07:00) Novosibirsk',
              'Asia/Hong_Kong' => '(UTC+08:00) Hong Kong',
              'Asia/Chongqing' => '(UTC+08:00) Chongqing',
              'Asia/Krasnoyarsk' => '(UTC+08:00) Krasnoyarsk',
              'Asia/Kuala_Lumpur' => '(UTC+08:00) Kuala Lumpur',
              'Australia/Perth' => '(UTC+08:00) Perth',
              'Asia/Singapore' => '(UTC+08:00) Singapore',
              'Asia/Taipei' => '(UTC+08:00) Taipei',
              'Asia/Ulan_Bator' => '(UTC+08:00) Ulaan Bataar',
              'Asia/Urumqi' => '(UTC+08:00) Urumqi',
              'Asia/Irkutsk' => '(UTC+09:00) Irkutsk',
              'Asia/Tokyo' => '(UTC+09:00) Tokyo',
              'Asia/Seoul' => '(UTC+09:00) Seoul',
              'Australia/Adelaide' => '(UTC+09:30) Adelaide',
              'Australia/Darwin' => '(UTC+09:30) Darwin',
              'Australia/Brisbane' => '(UTC+10:00) Brisbane',
              'Australia/Canberra' => '(UTC+10:00) Canberra',
              'Pacific/Guam' => '(UTC+10:00) Guam',
              'Australia/Hobart' => '(UTC+10:00) Hobart',
              'Australia/Melbourne' => '(UTC+10:00) Melbourne',
              'Pacific/Port_Moresby' => '(UTC+10:00) Port Moresby',
              'Australia/Sydney' => '(UTC+10:00) Sydney',
              'Asia/Yakutsk' => '(UTC+10:00) Yakutsk',
              'Asia/Vladivostok' => '(UTC+11:00) Vladivostok',
              'Pacific/Auckland' => '(UTC+12:00) Wellington',
              'Pacific/Fiji' => '(UTC+12:00) Marshall Is.',
              'Pacific/Kwajalein' => '(UTC+12:00) International Date Line West',
              'Asia/Kamchatka' => '(UTC+12:00) Kamchatka',
              'Asia/Magadan' => '(UTC+12:00) Solomon Is.',
              'Pacific/Tongatapu' => '(UTC+13:00) Nuku\'alofa',
            ),
          ),
          3 => 
          array (
            'title' => 'Default currency',
            'key' => 'CASHIER_CURRENCY',
            'value' => 'usd',
            'ftype' => 'select',
            'data' => 
            array (
              'AED' => 'UAE Dirham - د.إ - AED',
              'AFN' => 'Afghani - ؋ - AFN',
              'ALL' => 'Lek - L - ALL',
              'AMD' => 'Armenian Dram - դր. - AMD',
              'ANG' => 'Netherlands Antillean Guilder - ƒ - ANG',
              'AOA' => 'Kwanza - Kz - AOA',
              'ARS' => 'Argentine Peso - $ - ARS',
              'AUD' => 'Australian Dollar - $ - AUD',
              'AWG' => 'Aruban Florin - ƒ - AWG',
              'AZN' => 'Azerbaijanian Manat - ₼ - AZN',
              'BAM' => 'Convertible Mark - КМ - BAM',
              'BBD' => 'Barbados Dollar - $ - BBD',
              'BDT' => 'Taka - ৳ - BDT',
              'BGN' => 'Bulgarian Lev - лв - BGN',
              'BHD' => 'Bahraini Dinar - ب.د - BHD',
              'BIF' => 'Burundi Franc - Fr - BIF',
              'BMD' => 'Bermudian Dollar - $ - BMD',
              'BND' => 'Brunei Dollar - $ - BND',
              'BOB' => 'Boliviano - Bs. - BOB',
              'BOV' => 'Mvdol - Bs. - BOV',
              'BRL' => 'Brazilian Real - R$ - BRL',
              'BSD' => 'Bahamian Dollar - $ - BSD',
              'BTN' => 'Ngultrum - Nu. - BTN',
              'BWP' => 'Pula - P - BWP',
              'BYN' => 'Belarussian Ruble - Br - BYN',
              'BZD' => 'Belize Dollar - $ - BZD',
              'CAD' => 'Canadian Dollar - $ - CAD',
              'CDF' => 'Congolese Franc - Fr - CDF',
              'CHF' => 'Swiss Franc - CHF - CHF',
              'CLF' => 'Unidades de fomento - UF - CLF',
              'CLP' => 'Chilean Peso - $ - CLP',
              'CNY' => 'Yuan Renminbi - ¥ - CNY',
              'COP' => 'Colombian Peso - $ - COP',
              'CRC' => 'Costa Rican Colon - ₡ - CRC',
              'CUC' => 'Peso Convertible - $ - CUC',
              'CUP' => 'Cuban Peso - $ - CUP',
              'CVE' => 'Cape Verde Escudo - $ - CVE',
              'CZK' => 'Czech Koruna - Kč - CZK',
              'DJF' => 'Djibouti Franc - Fdj - DJF',
              'DKK' => 'Danish Krone - kr - DKK',
              'DOP' => 'Dominican Peso - $ - DOP',
              'DZD' => 'Algerian Dinar - د.ج - DZD',
              'EGP' => 'Egyptian Pound - ج.م - EGP',
              'ERN' => 'Nakfa - Nfk - ERN',
              'ETB' => 'Ethiopian Birr - Br - ETB',
              'EUR' => 'Euro - € - EUR',
              'FJD' => 'Fiji Dollar - $ - FJD',
              'FKP' => 'Falkland Islands Pound - £ - FKP',
              'GBP' => 'Pound Sterling - £ - GBP',
              'GEL' => 'Lari - ლ - GEL',
              'GHS' => 'Ghana Cedi - ₵ - GHS',
              'GIP' => 'Gibraltar Pound - £ - GIP',
              'GMD' => 'Dalasi - D - GMD',
              'GNF' => 'Guinea Franc - Fr - GNF',
              'GTQ' => 'Quetzal - Q - GTQ',
              'GYD' => 'Guyana Dollar - $ - GYD',
              'HKD' => 'Hong Kong Dollar - $ - HKD',
              'HNL' => 'Lempira - L - HNL',
              'HRK' => 'Croatian Kuna - kn - HRK',
              'HTG' => 'Gourde - G - HTG',
              'HUF' => 'Forint - Ft - HUF',
              'IDR' => 'Rupiah - Rp - IDR',
              'ILS' => 'New Israeli Sheqel - ₪ - ILS',
              'INR' => 'Indian Rupee - ₹ - INR',
              'IQD' => 'Iraqi Dinar - ع.د - IQD',
              'IRR' => 'Iranian Rial - ﷼ - IRR',
              'ISK' => 'Iceland Krona - kr - ISK',
              'JMD' => 'Jamaican Dollar - $ - JMD',
              'JOD' => 'Jordanian Dinar - د.ا - JOD',
              'JPY' => 'Yen - ¥ - JPY',
              'KES' => 'Kenyan Shilling - KSh - KES',
              'KGS' => 'Som - som - KGS',
              'KHR' => 'Riel - ៛ - KHR',
              'KMF' => 'Comoro Franc - Fr - KMF',
              'KPW' => 'North Korean Won - ₩ - KPW',
              'KRW' => 'Won - ₩ - KRW',
              'KWD' => 'Kuwaiti Dinar - د.ك - KWD',
              'KYD' => 'Cayman Islands Dollar - $ - KYD',
              'KZT' => 'Tenge - 〒 - KZT',
              'LAK' => 'Kip - ₭ - LAK',
              'LBP' => 'Lebanese Pound - ل.ل - LBP',
              'LKR' => 'Sri Lanka Rupee - ₨ - LKR',
              'LRD' => 'Liberian Dollar - $ - LRD',
              'LSL' => 'Loti - L - LSL',
              'LTL' => 'Lithuanian Litas - Lt - LTL',
              'LVL' => 'Latvian Lats - Ls - LVL',
              'LYD' => 'Libyan Dinar - ل.د - LYD',
              'MAD' => 'Moroccan Dirham - د.م. - MAD',
              'MDL' => 'Moldovan Leu - L - MDL',
              'MGA' => 'Malagasy Ariary - Ar - MGA',
              'MKD' => 'Denar - ден - MKD',
              'MMK' => 'Kyat - K - MMK',
              'MNT' => 'Tugrik - ₮ - MNT',
              'MOP' => 'Pataca - P - MOP',
              'MRO' => 'Ouguiya - UM - MRO',
              'MUR' => 'Mauritius Rupee - ₨ - MUR',
              'MVR' => 'Rufiyaa - MVR - MVR',
              'MWK' => 'Kwacha - MK - MWK',
              'MXN' => 'Mexican Peso - $ - MXN',
              'MYR' => 'Malaysian Ringgit - RM - MYR',
              'MZN' => 'Mozambique Metical - MTn - MZN',
              'NAD' => 'Namibia Dollar - $ - NAD',
              'NGN' => 'Naira - ₦ - NGN',
              'NIO' => 'Cordoba Oro - C$ - NIO',
              'NOK' => 'Norwegian Krone - kr - NOK',
              'NPR' => 'Nepalese Rupee - ₨ - NPR',
              'NZD' => 'New Zealand Dollar - $ - NZD',
              'OMR' => 'Rial Omani - ر.ع. - OMR',
              'PAB' => 'Balboa - B/. - PAB',
              'PEN' => 'Sol - S/ - PEN',
              'PGK' => 'Kina - K - PGK',
              'PHP' => 'Philippine Peso - ₱ - PHP',
              'PKR' => 'Pakistan Rupee - ₨ - PKR',
              'PLN' => 'Zloty - zł - PLN',
              'PYG' => 'Guarani - ₲ - PYG',
              'QAR' => 'Qatari Rial - ر.ق - QAR',
              'RON' => 'New Romanian Leu - Lei - RON',
              'RSD' => 'Serbian Dinar - РСД - RSD',
              'RUB' => 'Russian Ruble - ₽ - RUB',
              'RWF' => 'Rwanda Franc - FRw - RWF',
              'SAR' => 'Saudi Riyal - ر.س - SAR',
              'SBD' => 'Solomon Islands Dollar - $ - SBD',
              'SCR' => 'Seychelles Rupee - ₨ - SCR',
              'SDG' => 'Sudanese Pound - £ - SDG',
              'SEK' => 'Swedish Krona - kr - SEK',
              'SGD' => 'Singapore Dollar - $ - SGD',
              'SHP' => 'Saint Helena Pound - £ - SHP',
              'SLL' => 'Leone - Le - SLL',
              'SOS' => 'Somali Shilling - Sh - SOS',
              'SRD' => 'Surinam Dollar - $ - SRD',
              'SSP' => 'South Sudanese Pound - £ - SSP',
              'STD' => 'Dobra - Db - STD',
              'SVC' => 'El Salvador Colon - ₡ - SVC',
              'SYP' => 'Syrian Pound - £S - SYP',
              'SZL' => 'Lilangeni - E - SZL',
              'THB' => 'Baht - ฿ - THB',
              'TJS' => 'Somoni - ЅМ - TJS',
              'TMT' => 'Turkmenistan New Manat - T - TMT',
              'TND' => 'Tunisian Dinar - د.ت - TND',
              'TOP' => 'Pa’anga - T$ - TOP',
              'TRY' => 'Turkish Lira - ₺ - TRY',
              'TTD' => 'Trinidad and Tobago Dollar - $ - TTD',
              'TWD' => 'New Taiwan Dollar - $ - TWD',
              'TZS' => 'Tanzanian Shilling - Sh - TZS',
              'UAH' => 'Hryvnia - ₴ - UAH',
              'UGX' => 'Uganda Shilling - USh - UGX',
              'USD' => 'US Dollar - $ - USD',
              'UYU' => 'Peso Uruguayo - $ - UYU',
              'UZS' => 'Uzbekistan Sum -  - UZS',
              'VEF' => 'Bolivar - Bs F - VEF',
              'VND' => 'Dong - ₫ - VND',
              'VUV' => 'Vatu - Vt - VUV',
              'WST' => 'Tala - T - WST',
              'XAF' => 'CFA Franc BEAC - Fr - XAF',
              'XAG' => 'Silver - oz t - XAG',
              'XAU' => 'Gold - oz t - XAU',
              'XCD' => 'East Caribbean Dollar - $ - XCD',
              'XDR' => 'SDR (Special Drawing Right) - SDR - XDR',
              'XOF' => 'CFA Franc BCEAO - Fr - XOF',
              'XPF' => 'CFP Franc - Fr - XPF',
              'YER' => 'Yemeni Rial - ﷼ - YER',
              'ZAR' => 'Rand - R - ZAR',
              'ZMW' => 'Zambian Kwacha - ZK - ZMW',
              'ZWL' => 'Zimbabwe Dollar - $ - ZWL',
            ),
          ),
          4 => 
          array (
            'title' => 'Money conversion',
            'help' => 'Some currencies need this field to be unselected. By default it should be selected',
            'key' => 'DO_CONVERTION',
            'value' => 'true',
            'ftype' => 'bool',
          ),
          5 => 
          array (
            'title' => 'Time format',
            'key' => 'TIME_FORMAT',
            'value' => 'AM/PM',
            'ftype' => 'select',
            'data' => 
            array (
              'AM/PM' => 'AM/PM',
              '24hours ' => '24 Hours',
            ),
          ),
          6 => 
          array (
            'title' => 'Date and time display',
            'key' => 'DATETIME_DISPLAY_FORMAT',
            'value' => 'd M Y h:i A',
          ),
          7 => 
          array (
            'title' => 'Working time display format',
            'help' => 'For 24h use \'E HH:mm\' and for AM/PM use \'E h:mm a\'',
            'key' => 'DATETIME_WORKING_HOURS_DISPLAY_FORMAT_NEW',
            'value' => 'E HH:mm',
          ),
        ),
      ),
      3 => 
      array (
        'name' => 'Apps & Plugins',
        'slug' => 'plugins',
        'icon' => 'ni ni-spaceship',
        'fields' => 
        array (
          0 => 
          array (
            'separator' => 'WhatsApp ordering',
            'title' => 'Enable WhatsApp order submit',
            'help' => 'When activated, if owner has entered his whatsapp phone  a send to whatsapp order will be shown on order completed page. Order will be sent to owner whatsapp phone',
            'key' => 'WHATSAPP_ORDERING_ENABLED',
            'value' => 'true',
            'ftype' => 'bool',
            'onlyin' => 'qrsaas',
          ),
          1 => 
          array (
            'separator' => 'WhatsApp ordering',
            'title' => 'Enable WhatsApp order submit',
            'help' => 'When activated, a send to whatsapp order will be shown on order completed page. Order will be sent to admin whatsapp phone',
            'key' => 'WHATSAPP_ORDERING_ENABLED',
            'value' => 'true',
            'ftype' => 'bool',
            'onlyin' => 'ft',
          ),
          2 => 
          array (
            'separator' => 'Google plugins',
            'title' => 'Recaptcha site key',
            'help' => 'Make empty if you can\'t make submition on register screen',
            'key' => 'RECAPTCHA_SITE_KEY',
            'value' => '',
          ),
          3 => 
          array (
            'title' => 'Recaptcha secret',
            'help' => 'Make empty if you can\'t make submition on register screen',
            'key' => 'RECAPTCHA_SECRET_KEY',
            'value' => '',
          ),
          4 => 
          array (
            'title' => 'Google maps api key',
            'key' => 'GOOGLE_MAPS_API_KEY',
            'value' => '',
          ),
          5 => 
          array (
            'title' => 'Enable location search',
            'key' => 'ENABLE_LOCATION_SEARCH',
            'value' => 'false',
            'ftype' => 'bool',
            'onlyin' => 'ft',
          ),
          6 => 
          array (
            'title' => 'Google analytics key',
            'key' => 'GOOGLE_ANALYTICS',
            'value' => '',
          ),
          7 => 
          array (
            'separator' => 'Login services',
            'title' => 'Google client id for sign in',
            'key' => 'GOOGLE_CLIENT_ID',
            'value' => '',
            'onlyin' => 'ft',
          ),
          8 => 
          array (
            'title' => 'Google client secret for sign in',
            'key' => 'GOOGLE_CLIENT_SECRET',
            'value' => '',
            'onlyin' => 'ft',
          ),
          9 => 
          array (
            'title' => 'Google redirect link for sign in',
            'key' => 'GOOGLE_REDIRECT',
            'value' => '',
            'onlyin' => 'ft',
          ),
          10 => 
          array (
            'title' => 'Facebook client id',
            'key' => 'FACEBOOK_CLIENT_ID',
            'value' => '',
            'onlyin' => 'ft',
          ),
          11 => 
          array (
            'title' => 'Facebook client secret',
            'key' => 'FACEBOOK_CLIENT_SECRET',
            'value' => '',
            'onlyin' => 'ft',
          ),
          12 => 
          array (
            'title' => 'Facebook redirec',
            'key' => 'FACEBOOK_REDIRECT',
            'value' => '',
            'onlyin' => 'ft',
          ),
          13 => 
          array (
            'separator' => 'Notifications',
            'title' => 'Onesignal App id',
            'key' => 'ONESIGNAL_APP_ID',
            'value' => '',
          ),
          14 => 
          array (
            'title' => 'Onesignal rest api key',
            'key' => 'ONESIGNAL_REST_API_KEY',
            'value' => '',
          ),
          15 => 
          array (
            'title' => 'Twillo Account SID',
            'key' => 'TWILIO_ACCOUNT_SID',
            'value' => 'SID',
            'onlyin' => 'ft',
          ),
          16 => 
          array (
            'title' => 'Twillo Account auth token',
            'key' => 'TWILIO_AUTH_TOKEN',
            'value' => 'TOKEN',
            'onlyin' => 'ft',
          ),
          17 => 
          array (
            'title' => 'Twillo from number',
            'key' => 'TWILIO_FROM',
            'value' => 'NUMBER',
            'onlyin' => 'ft',
          ),
          18 => 
          array (
            'title' => 'System should send sms notifications',
            'key' => 'SEND_SMS_NOTIFICATIONS',
            'value' => 'false',
            'ftype' => 'bool',
            'onlyin' => 'ft',
          ),
          19 => 
          array (
            'separator' => 'Pusher live notifications',
            'title' => 'Pusher app id',
            'help' => 'Pusher is used for notification for call waiter and new orders avaialbe',
            'key' => 'PUSHER_APP_ID',
            'value' => '',
            'onlyin' => 'qrsaas',
          ),
          20 => 
          array (
            'title' => 'Pusher app key',
            'key' => 'PUSHER_APP_KEY',
            'value' => '',
            'onlyin' => 'qrsaas',
          ),
          21 => 
          array (
            'title' => 'Pusher app secret',
            'key' => 'PUSHER_APP_SECRET',
            'value' => '',
            'onlyin' => 'qrsaas',
          ),
          22 => 
          array (
            'title' => 'Pusher app cluster',
            'key' => 'PUSHER_APP_CLUSTER',
            'value' => 'eu',
            'onlyin' => 'qrsaas',
          ),
          23 => 
          array (
            'title' => 'Broadcast Driver',
            'key' => 'BROADCAST_DRIVER',
            'value' => 'log',
            'ftype' => 'select',
            'data' => 
            array (
              'log' => 'Log',
              'pusher' => 'Pusher',
              'onlyin' => 'qrsaas',
            ),
          ),
          24 => 
          array (
            'separator' => 'Cookies',
            'title' => 'Cookie Consent',
            'key' => 'ENABLE_DEFAULT_COOKIE_CONSENT',
            'value' => 'true',
            'ftype' => 'bool',
            'help' => 'Cookie consent popup - you can import other via js',
          ),
          25 => 
          array (
            'separator' => 'Share this',
            'title' => 'Share this property id',
            'help' => 'You can find this number in Share this import link',
            'key' => 'SHARE_THIS_PROPERTY',
            'value' => '',
          ),
          26 => 
          array (
            'separator' => 'Futy',
            'title' => 'Futy key',
            'key' => 'FUTY_KEY',
            'value' => '',
          ),
        ),
      ),
      4 => 
      array (
        'name' => 'SMTP',
        'slug' => 'smtp',
        'icon' => 'ni ni-email-83',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Mail driver',
            'key' => 'MAIL_MAILER',
            'value' => 'smtp',
            'ftype' => 'select',
            'data' => 
            array (
              'smtp' => 'SMTP',
              'sendmail' => 'PHP Sendmail - best of port 465',
            ),
          ),
          1 => 
          array (
            'title' => 'Host',
            'key' => 'MAIL_HOST',
            'value' => 'smtp.mailtrap.io',
            'hint' => 'Your SMTP send server',
          ),
          2 => 
          array (
            'title' => 'Port',
            'key' => 'MAIL_PORT',
            'value' => '2525',
            'help' => 'Common ports are 26, 465, 587',
          ),
          3 => 
          array (
            'title' => 'Encryption',
            'key' => 'MAIL_ENCRYPTION',
            'value' => '',
            'ftype' => 'select',
            'data' => 
            array (
              'null' => 'Null - best for port 26',
              '' => 'None - best for port 587',
              'ssl' => 'SSL - best for port 465',
              'tls' => 'TLS',
              'starttls' => 'STARTTLS',
            ),
          ),
          4 => 
          array (
            'title' => 'Username',
            'key' => 'MAIL_USERNAME',
            'value' => '802fc656dd8029',
          ),
          5 => 
          array (
            'title' => 'Password',
            'key' => 'MAIL_PASSWORD',
            'value' => 'bbcf39d313eac6',
          ),
          6 => 
          array (
            'title' => 'From address',
            'key' => 'MAIL_FROM_ADDRESS',
            'value' => 'bd5d577b7c-be3ae1@inbox.mailtrap.io',
          ),
          7 => 
          array (
            'title' => 'From Name',
            'key' => 'MAIL_FROM_NAME',
            'value' => 'Your Site',
          ),
          8 => 
          array (
            'title' => '',
            'key' => 'DB_CONNECTION',
            'value' => 'mysql',
            'data' => 
            array (
              'mysql' => 'MySql',
            ),
            'type' => 'hidden',
          ),
          9 => 
          array (
            'title' => '',
            'key' => 'DB_HOST',
            'value' => '127.0.0.1',
            'hint' => 'Your SMTP send server',
            'type' => 'hidden',
          ),
          10 => 
          array (
            'title' => '',
            'key' => 'DB_PORT',
            'value' => '3306',
            'type' => 'hidden',
          ),
          11 => 
          array (
            'title' => '',
            'key' => 'DB_DATABASE',
            'value' => 'laravel',
            'type' => 'hidden',
          ),
          12 => 
          array (
            'title' => '',
            'key' => 'DB_USERNAME',
            'value' => 'laravel',
            'type' => 'hidden',
          ),
          13 => 
          array (
            'title' => '',
            'key' => 'DB_PASSWORD',
            'value' => 'laravel',
            'type' => 'hidden',
          ),
          14 => 
          array (
            'title' => '',
            'key' => 'CACHE_DRIVER',
            'value' => 'file',
            'type' => 'hidden',
          ),
          15 => 
          array (
            'title' => '',
            'key' => 'SESSION_DRIVER',
            'value' => 'file',
            'type' => 'hidden',
          ),
          16 => 
          array (
            'title' => '',
            'key' => 'QUEUE_DRIVER',
            'value' => 'sync',
            'type' => 'hidden',
          ),
          17 => 
          array (
            'title' => '',
            'key' => 'REDIS_HOST',
            'value' => '127.0.0.1',
            'type' => 'hidden',
          ),
          18 => 
          array (
            'title' => '',
            'key' => 'REDIS_PASSWORD',
            'value' => 'null',
            'type' => 'hidden',
          ),
          19 => 
          array (
            'title' => '',
            'key' => 'REDIS_PORT',
            'value' => '6379',
            'type' => 'hidden',
          ),
        ),
      ),
    ),
  ),
  'cookie-consent' => 
  array (
    'enabled' => true,
    'cookie_name' => 'laravel_cookie_consent',
    'cookie_lifetime' => 7300,
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'db_food_one',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'db_food_one',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'db_food_one',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'db_food_one',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'wabizz_lancez_votre_business_en_ligne_en_5_minutes_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => '',
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => '',
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'except' => 
    array (
      0 => 'telescope*',
      1 => 'horizon*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => 'C:\\xampp\\htdocs\\wabi-dev\\storage\\debugbar',
      'connection' => NULL,
      'provider' => '',
      'hostname' => '127.0.0.1',
      'port' => 2304,
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
      'livewire' => true,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'backtrace_exclude_paths' => 
        array (
        ),
        'timeline' => false,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => false,
        'show_copy' => false,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
    'theme' => 'auto',
  ),
  'dotenveditor' => 
  array (
    'pathToEnv' => 'C:\\xampp\\htdocs\\wabi-dev\\.env',
    'backupPath' => 'C:\\xampp\\htdocs\\wabi-dev\\resources\\backups/dotenv-editor/',
    'filePermissions' => 493,
    'activated' => true,
    'template' => 'dotenv-editor::master',
    'overview' => 'dotenv-editor::overview',
    'route' => 
    array (
      'namespace' => 'Brotzka\\DotenvEditor\\Http\\Controllers',
      'prefix' => 'admin/env',
      'as' => 'admin.env.',
      'middleware' => 
      array (
        0 => 'web',
        1 => 'isAdmin',
      ),
    ),
  ),
  'eloquent-sortable' => 
  array (
    'order_column_name' => 'order_index',
    'sort_when_creating' => true,
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
    ),
    'transactions' => 
    array (
      'handler' => 'db',
    ),
    'temporary_files' => 
    array (
      'local_path' => 'C:\\Users\\Toshiba\\AppData\\Local\\Temp',
      'remote_disk' => NULL,
      'remote_prefix' => NULL,
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\wabi-dev\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\wabi-dev\\storage\\app/public',
        'url' => 'http://127.0.0.1:8082//storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
        'endpoint' => NULL,
      ),
    ),
    'links' => 
    array (
      'C:\\xampp\\htdocs\\wabi-dev\\public\\storage' => 'C:\\xampp\\htdocs\\wabi-dev\\storage\\app/public',
    ),
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
      'report_logs' => true,
      'maximum_number_of_collected_logs' => 200,
    ),
    'send_logs_as_events' => true,
  ),
  'geocoder' => 
  array (
    'key' => '',
    'language' => '',
    'region' => '',
    'bounds' => '',
    'country' => '',
  ),
  'googletagmanager' => 
  array (
    'id' => '',
    'enabled' => false,
    'macroPath' => '',
    'sessionKey' => '_googleTagManager',
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'installer' => 
  array (
    'php' => '7.4.0',
    'core' => 
    array (
      'minPhpVersion' => '7.0.0',
    ),
    'final' => 
    array (
      'key' => true,
      'publish' => false,
    ),
    'requirements' => 
    array (
      'php' => 
      array (
        0 => 'openssl',
        1 => 'pdo',
        2 => 'mbstring',
        3 => 'tokenizer',
        4 => 'JSON',
        5 => 'cURL',
      ),
      'apache' => 
      array (
        0 => 'mod_rewrite',
      ),
    ),
    'permissions' => 
    array (
      'storage/framework/' => '775',
      'storage/logs/' => '775',
      'public/uploads/' => '775',
      'bootstrap/cache/' => '775',
    ),
    'environment' => 
    array (
      'form' => 
      array (
        'rules' => 
        array (
          'app_name' => 'required|string|max:50',
          'environment' => 'required|string|max:50',
          'environment_custom' => 'required_if:environment,other|max:50',
          'app_log_level' => 'required|string|max:50',
          'app_url' => 'required|url',
          'database_connection' => 'required|string|max:50',
          'database_hostname' => 'required|string|max:50',
          'database_port' => 'required|numeric',
          'database_name' => 'required|string|max:50',
          'database_username' => 'required|string|max:50',
          'database_password' => 'required|string|max:50',
          'broadcast_driver' => 'required|string|max:50',
          'cache_driver' => 'required|string|max:50',
          'session_driver' => 'required|string|max:50',
          'queue_driver' => 'required|string|max:50',
          'redis_hostname' => 'required|string|max:50',
          'redis_password' => 'required|string|max:50',
          'redis_port' => 'required|numeric',
          'mail_driver' => 'required|string|max:50',
          'mail_host' => 'required|string|max:50',
          'mail_port' => 'required|string|max:50',
          'mail_username' => 'required|string|max:50',
          'mail_password' => 'required|string|max:50',
          'mail_encryption' => 'required|string|max:50',
          'pusher_app_id' => 'max:50',
          'pusher_app_key' => 'max:50',
          'pusher_app_secret' => 'max:50',
        ),
      ),
    ),
    'installed' => 
    array (
      'redirectOptions' => 
      array (
        'route' => 
        array (
          'name' => 'welcome',
          'data' => 
          array (
          ),
        ),
        'abort' => 
        array (
          'type' => '404',
        ),
        'dump' => 
        array (
          'data' => 'Dumping a not found message.',
        ),
      ),
    ),
    'installedAlreadyAction' => '',
    'updaterEnabled' => 'true',
  ),
  'languages' => 
  array (
    'af' => 'Afrikaans',
    'ak' => 'Akan',
    'sq' => 'Albanian',
    'am' => 'Amharic',
    'ar' => 'Arabic',
    'hy' => 'Armenian',
    'as' => 'Assamese',
    'az' => 'Azerbaijani',
    'bm' => 'Bambara',
    'eu' => 'Basque',
    'be' => 'Belarusian',
    'bn' => 'Bengali',
    'bs' => 'Bosnian',
    'bg' => 'Bulgarian',
    'my' => 'Burmese',
    'ca' => 'Catalan',
    'zh' => 'Chinese',
    'kw' => 'Cornish',
    'hr' => 'Croatian',
    'cs' => 'Czech',
    'da' => 'Danish',
    'nl' => 'Dutch',
    'en' => 'English',
    'eo' => 'Esperanto',
    'et' => 'Estonian',
    'ee' => 'Ewe',
    'fo' => 'Faroese',
    'fi' => 'Finnish',
    'fr' => 'French',
    'ff' => 'Fulah',
    'gl' => 'Galician',
    'lg' => 'Ganda',
    'ka' => 'Georgian',
    'de' => 'German',
    'el' => 'Greek',
    'gu' => 'Gujarati',
    'ha' => 'Hausa',
    'he' => 'Hebrew',
    'hi' => 'Hindi',
    'hu' => 'Hungarian',
    'is' => 'Icelandic',
    'ig' => 'Igbo',
    'id' => 'Indonesian',
    'ga' => 'Irish',
    'it' => 'Italian',
    'ja' => 'Japanese',
    'kl' => 'Kalaallisut',
    'kn' => 'Kannada',
    'kk' => 'Kazakh',
    'km' => 'Khmer',
    'ki' => 'Kikuyu',
    'rw' => 'Kinyarwanda',
    'ko' => 'Korean',
    'lv' => 'Latvian',
    'lt' => 'Lithuanian',
    'mk' => 'Macedonian',
    'mg' => 'Malagasy',
    'ms' => 'Malay',
    'ml' => 'Malayalam',
    'mt' => 'Maltese',
    'gv' => 'Manx',
    'mr' => 'Marathi',
    'ne' => 'Nepali',
    'nd' => 'North Ndebele',
    'nb' => 'Norwegian Bokmål',
    'nn' => 'Norwegian Nynorsk',
    'or' => 'Oriya',
    'om' => 'Oromo',
    'ps' => 'Pashto',
    'fa' => 'Persian',
    'pl' => 'Polish',
    'pt' => 'Portuguese',
    'pa' => 'Punjabi',
    'ro' => 'Romanian',
    'rm' => 'Romansh',
    'ru' => 'Russian',
    'sg' => 'Sango',
    'sr' => 'Serbian',
    'sn' => 'Shona',
    'ii' => 'Sichuan Yi',
    'si' => 'Sinhala',
    'sk' => 'Slovak',
    'sl' => 'Slovenian',
    'so' => 'Somali',
    'es' => 'Spanish',
    'sw' => 'Swahili',
    'sv' => 'Swedish',
    'ta' => 'Tamil',
    'te' => 'Telugu',
    'th' => 'Thai',
    'bo' => 'Tibetan',
    'ti' => 'Tigrinya',
    'to' => 'Tonga',
    'tr' => 'Turkish',
    'uk' => 'Ukrainian',
    'ur' => 'Urdu',
    'uz' => 'Uzbek',
    'vi' => 'Vietnamese',
    'cy' => 'Welsh',
    'yo' => 'Yoruba',
    'zu' => 'Zulu',
  ),
  'laravel-auth0' => 
  array (
    'domain' => NULL,
    'client_id' => NULL,
    'client_secret' => NULL,
    'redirect_uri' => 'http://127.0.0.1:8082//auth0/callback',
    'persist_user' => true,
    'persist_access_token' => false,
    'persist_refresh_token' => false,
    'persist_id_token' => false,
    'authorized_issuers' => 
    array (
      0 => NULL,
    ),
    'secret_base64_encoded' => false,
    'supported_algs' => 
    array (
      0 => 'RS256',
    ),
  ),
  'laravelpwa' => 
  array (
    'name' => 'Wabizz - Lancez votre business en ligne en 5 minutes',
    'manifest' => 
    array (
      'name' => 'Wabizz - Lancez votre business en ligne en 5 minutes',
      'short_name' => 'Wabizz - Lancez votre business en ligne en 5 minutes',
      'start_url' => '/home',
      'background_color' => '#ffffff',
      'theme_color' => '#000000',
      'display' => 'standalone',
      'orientation' => 'any',
      'status_bar' => 'black',
      'icons' => 
      array (
        '256x256' => 
        array (
          'path' => 'android-chrome-256x256.png',
          'purpose' => 'any',
        ),
      ),
      'shortcuts' => 
      array (
        0 => 
        array (
          'name' => 'Home',
          'description' => 'Go home',
          'url' => '/',
          'icons' => 
          array (
            'src' => '/images/icons/icon-72x72.png',
            'purpose' => 'any',
          ),
        ),
      ),
      'custom' => 
      array (
      ),
      'splash' => 
      array (
        '640x1136' => '/images/icons/splash-640x1136.png',
        '750x1334' => '/images/icons/splash-750x1334.png',
        '828x1792' => '/images/icons/splash-828x1792.png',
        '1125x2436' => '/images/icons/splash-1125x2436.png',
        '1242x2208' => '/images/icons/splash-1242x2208.png',
        '1242x2688' => '/images/icons/splash-1242x2688.png',
        '1536x2048' => '/images/icons/splash-1536x2048.png',
        '1668x2224' => '/images/icons/splash-1668x2224.png',
        '1668x2388' => '/images/icons/splash-1668x2388.png',
        '2048x2732' => '/images/icons/splash-2048x2732.png',
      ),
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'C:\\xampp\\htdocs\\wabi-dev\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'C:\\xampp\\htdocs\\wabi-dev\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'C:\\xampp\\htdocs\\wabi-dev\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'ssl0.ovh.net',
        'port' => '465',
        'encryption' => 'ssl',
        'username' => 'contact@auxpetitsoins.be',
        'password' => 'APS2020??',
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
    ),
    'from' => 
    array (
      'address' => 'contact@auxpetitsoins.be',
      'name' => 'Wabizz - Lancez votre business en ligne en - de 5 minutes',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:\\xampp\\htdocs\\wabi-dev\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'module' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'enabled' => false,
      'path' => 'C:\\xampp\\htdocs\\wabi-dev/vendor/akaunting/module/src/Commands/stubs',
      'files' => 
      array (
        'routes/web' => 'Routes/web.php',
        'routes/api' => 'Routes/api.php',
        'lang/general' => 'Resources/lang/en/general.php',
        'views/index' => 'Resources/views/index.blade.php',
        'views/master' => 'Resources/views/layouts/master.blade.php',
        'scaffold/config' => 'Config/config.php',
        'composer' => 'composer.json',
        'assets/js/app' => 'Resources/assets/js/app.js',
        'assets/sass/app' => 'Resources/assets/sass/app.scss',
        'webpack' => 'webpack.mix.js',
        'package' => 'package.json',
      ),
      'replacements' => 
      array (
        'routes/web' => 
        array (
          0 => 'ALIAS',
          1 => 'STUDLY_NAME',
        ),
        'routes/api' => 
        array (
          0 => 'ALIAS',
          1 => 'STUDLY_NAME',
        ),
        'webpack' => 
        array (
          0 => 'ALIAS',
        ),
        'json' => 
        array (
          0 => 'ALIAS',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
        ),
        'lang/general' => 
        array (
          0 => 'ALIAS',
          1 => 'STUDLY_NAME',
        ),
        'views/index' => 
        array (
          0 => 'ALIAS',
          1 => 'STUDLY_NAME',
        ),
        'views/master' => 
        array (
          0 => 'ALIAS',
          1 => 'STUDLY_NAME',
        ),
        'scaffold/config' => 
        array (
          0 => 'STUDLY_NAME',
        ),
        'composer' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'VENDOR',
          3 => 'AUTHOR_NAME',
          4 => 'AUTHOR_EMAIL',
          5 => 'MODULE_NAMESPACE',
        ),
      ),
      'gitkeep' => true,
    ),
    'paths' => 
    array (
      'modules' => 'C:\\xampp\\htdocs\\wabi-dev\\modules',
      'assets' => 'C:\\xampp\\htdocs\\wabi-dev\\public\\modules',
      'migration' => 'C:\\xampp\\htdocs\\wabi-dev\\database/migrations',
      'generator' => 
      array (
        'config' => 
        array (
          'path' => 'Config',
          'generate' => true,
        ),
        'command' => 
        array (
          'path' => 'Console',
          'generate' => true,
        ),
        'migration' => 
        array (
          'path' => 'Database/Migrations',
          'generate' => true,
        ),
        'seeder' => 
        array (
          'path' => 'Database/Seeds',
          'generate' => true,
        ),
        'factory' => 
        array (
          'path' => 'Database/Factories',
          'generate' => true,
        ),
        'model' => 
        array (
          'path' => 'Models',
          'generate' => true,
        ),
        'controller' => 
        array (
          'path' => 'Http/Controllers',
          'generate' => true,
        ),
        'middleware' => 
        array (
          'path' => 'Http/Middleware',
          'generate' => true,
        ),
        'request' => 
        array (
          'path' => 'Http/Requests',
          'generate' => true,
        ),
        'resource' => 
        array (
          'path' => 'Http/Resources',
          'generate' => false,
        ),
        'provider' => 
        array (
          'path' => 'Providers',
          'generate' => true,
        ),
        'asset' => 
        array (
          'path' => 'Resources/assets',
          'generate' => true,
        ),
        'lang' => 
        array (
          'path' => 'Resources/lang/en',
          'generate' => true,
        ),
        'view' => 
        array (
          'path' => 'Resources/views',
          'generate' => true,
        ),
        'test' => 
        array (
          'path' => 'Tests',
          'generate' => false,
        ),
        'repository' => 
        array (
          'path' => 'Repositories',
          'generate' => false,
        ),
        'event' => 
        array (
          'path' => 'Events',
          'generate' => false,
        ),
        'listener' => 
        array (
          'path' => 'Listeners',
          'generate' => true,
        ),
        'policy' => 
        array (
          'path' => 'Policies',
          'generate' => false,
        ),
        'rules' => 
        array (
          'path' => 'Rules',
          'generate' => false,
        ),
        'job' => 
        array (
          'path' => 'Jobs',
          'generate' => false,
        ),
        'email' => 
        array (
          'path' => 'Emails',
          'generate' => false,
        ),
        'notification' => 
        array (
          'path' => 'Notifications',
          'generate' => false,
        ),
        'route' => 
        array (
          'path' => 'Routes',
          'generate' => true,
        ),
        'component' => 
        array (
          'path' => 'View/Components',
          'generate' => false,
        ),
      ),
    ),
    'scan' => 
    array (
      'enabled' => false,
      'paths' => 
      array (
        0 => 'C:\\xampp\\htdocs\\wabi-dev\\vendor/*/*',
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'akaunting',
      'author' => 
      array (
        'name' => 'Akaunting',
        'email' => 'info@akaunting.com',
      ),
    ),
    'cache' => 
    array (
      'enabled' => false,
      'key' => 'module',
      'lifetime' => 60,
    ),
    'register' => 
    array (
      'translations' => true,
      'files' => 'register',
    ),
  ),
  'money' => 
  array (
    'AED' => 
    array (
      'name' => 'UAE Dirham',
      'code' => 784,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'د.إ',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'AFN' => 
    array (
      'name' => 'Afghani',
      'code' => 971,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '؋',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ALL' => 
    array (
      'name' => 'Lek',
      'code' => 8,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'L',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'AMD' => 
    array (
      'name' => 'Armenian Dram',
      'code' => 51,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'դր.',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ANG' => 
    array (
      'name' => 'Netherlands Antillean Guilder',
      'code' => 532,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ƒ',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'AOA' => 
    array (
      'name' => 'Kwanza',
      'code' => 973,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Kz',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ARS' => 
    array (
      'name' => 'Argentine Peso',
      'code' => 32,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'AUD' => 
    array (
      'name' => 'Australian Dollar',
      'code' => 36,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ' ',
    ),
    'AWG' => 
    array (
      'name' => 'Aruban Florin',
      'code' => 533,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ƒ',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'AZN' => 
    array (
      'name' => 'Azerbaijanian Manat',
      'code' => 944,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₼',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BAM' => 
    array (
      'name' => 'Convertible Mark',
      'code' => 977,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'КМ',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BBD' => 
    array (
      'name' => 'Barbados Dollar',
      'code' => 52,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BDT' => 
    array (
      'name' => 'Taka',
      'code' => 50,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '৳',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BGN' => 
    array (
      'name' => 'Bulgarian Lev',
      'code' => 975,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'лв',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => ' ',
    ),
    'BHD' => 
    array (
      'name' => 'Bahraini Dinar',
      'code' => 48,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'ب.د',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BIF' => 
    array (
      'name' => 'Burundi Franc',
      'code' => 108,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BMD' => 
    array (
      'name' => 'Bermudian Dollar',
      'code' => 60,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BND' => 
    array (
      'name' => 'Brunei Dollar',
      'code' => 96,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BOB' => 
    array (
      'name' => 'Boliviano',
      'code' => 68,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Bs.',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BOV' => 
    array (
      'name' => 'Mvdol',
      'code' => 984,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Bs.',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BRL' => 
    array (
      'name' => 'Brazilian Real',
      'code' => 986,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'R$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BSD' => 
    array (
      'name' => 'Bahamian Dollar',
      'code' => 44,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BTN' => 
    array (
      'name' => 'Ngultrum',
      'code' => 64,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Nu.',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BWP' => 
    array (
      'name' => 'Pula',
      'code' => 72,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'P',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BYN' => 
    array (
      'name' => 'Belarussian Ruble',
      'code' => 974,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Br',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => ' ',
    ),
    'BZD' => 
    array (
      'name' => 'Belize Dollar',
      'code' => 84,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CAD' => 
    array (
      'name' => 'Canadian Dollar',
      'code' => 124,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CDF' => 
    array (
      'name' => 'Congolese Franc',
      'code' => 976,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CHF' => 
    array (
      'name' => 'Swiss Franc',
      'code' => 756,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'CHF',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CLF' => 
    array (
      'name' => 'Unidades de fomento',
      'code' => 990,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'UF',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CLP' => 
    array (
      'name' => 'Chilean Peso',
      'code' => 152,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CNY' => 
    array (
      'name' => 'Yuan Renminbi',
      'code' => 156,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '¥',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'COP' => 
    array (
      'name' => 'Colombian Peso',
      'code' => 170,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CRC' => 
    array (
      'name' => 'Costa Rican Colon',
      'code' => 188,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₡',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CUC' => 
    array (
      'name' => 'Peso Convertible',
      'code' => 931,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CUP' => 
    array (
      'name' => 'Cuban Peso',
      'code' => 192,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CVE' => 
    array (
      'name' => 'Cape Verde Escudo',
      'code' => 132,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CZK' => 
    array (
      'name' => 'Czech Koruna',
      'code' => 203,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Kč',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'DJF' => 
    array (
      'name' => 'Djibouti Franc',
      'code' => 262,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fdj',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'DKK' => 
    array (
      'name' => 'Danish Krone',
      'code' => 208,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'kr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'DOP' => 
    array (
      'name' => 'Dominican Peso',
      'code' => 214,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'DZD' => 
    array (
      'name' => 'Algerian Dinar',
      'code' => 12,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'د.ج',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'EGP' => 
    array (
      'name' => 'Egyptian Pound',
      'code' => 818,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ج.م',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ERN' => 
    array (
      'name' => 'Nakfa',
      'code' => 232,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Nfk',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ETB' => 
    array (
      'name' => 'Ethiopian Birr',
      'code' => 230,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Br',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'EUR' => 
    array (
      'name' => 'Euro',
      'code' => 978,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '€',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'FJD' => 
    array (
      'name' => 'Fiji Dollar',
      'code' => 242,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'FKP' => 
    array (
      'name' => 'Falkland Islands Pound',
      'code' => 238,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GBP' => 
    array (
      'name' => 'Pound Sterling',
      'code' => 826,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GEL' => 
    array (
      'name' => 'Lari',
      'code' => 981,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ლ',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GHS' => 
    array (
      'name' => 'Ghana Cedi',
      'code' => 936,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₵',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GIP' => 
    array (
      'name' => 'Gibraltar Pound',
      'code' => 292,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GMD' => 
    array (
      'name' => 'Dalasi',
      'code' => 270,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'D',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GNF' => 
    array (
      'name' => 'Guinea Franc',
      'code' => 324,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GTQ' => 
    array (
      'name' => 'Quetzal',
      'code' => 320,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Q',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GYD' => 
    array (
      'name' => 'Guyana Dollar',
      'code' => 328,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'HKD' => 
    array (
      'name' => 'Hong Kong Dollar',
      'code' => 344,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'HNL' => 
    array (
      'name' => 'Lempira',
      'code' => 340,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'L',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'HRK' => 
    array (
      'name' => 'Croatian Kuna',
      'code' => 191,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'kn',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'HTG' => 
    array (
      'name' => 'Gourde',
      'code' => 332,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'G',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'HUF' => 
    array (
      'name' => 'Forint',
      'code' => 348,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Ft',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'IDR' => 
    array (
      'name' => 'Rupiah',
      'code' => 360,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Rp',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ILS' => 
    array (
      'name' => 'New Israeli Sheqel',
      'code' => 376,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₪',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'INR' => 
    array (
      'name' => 'Indian Rupee',
      'code' => 356,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₹',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'IQD' => 
    array (
      'name' => 'Iraqi Dinar',
      'code' => 368,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'ع.د',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'IRR' => 
    array (
      'name' => 'Iranian Rial',
      'code' => 364,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '﷼',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ISK' => 
    array (
      'name' => 'Iceland Krona',
      'code' => 352,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'kr',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'JMD' => 
    array (
      'name' => 'Jamaican Dollar',
      'code' => 388,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'JOD' => 
    array (
      'name' => 'Jordanian Dinar',
      'code' => 400,
      'precision' => 3,
      'subunit' => 100,
      'symbol' => 'د.ا',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'JPY' => 
    array (
      'name' => 'Yen',
      'code' => 392,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '¥',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KES' => 
    array (
      'name' => 'Kenyan Shilling',
      'code' => 404,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'KSh',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KGS' => 
    array (
      'name' => 'Som',
      'code' => 417,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'som',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KHR' => 
    array (
      'name' => 'Riel',
      'code' => 116,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '៛',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KMF' => 
    array (
      'name' => 'Comoro Franc',
      'code' => 174,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KPW' => 
    array (
      'name' => 'North Korean Won',
      'code' => 408,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₩',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KRW' => 
    array (
      'name' => 'Won',
      'code' => 410,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '₩',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KWD' => 
    array (
      'name' => 'Kuwaiti Dinar',
      'code' => 414,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'د.ك',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KYD' => 
    array (
      'name' => 'Cayman Islands Dollar',
      'code' => 136,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KZT' => 
    array (
      'name' => 'Tenge',
      'code' => 398,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '〒',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LAK' => 
    array (
      'name' => 'Kip',
      'code' => 418,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₭',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LBP' => 
    array (
      'name' => 'Lebanese Pound',
      'code' => 422,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ل.ل',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LKR' => 
    array (
      'name' => 'Sri Lanka Rupee',
      'code' => 144,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LRD' => 
    array (
      'name' => 'Liberian Dollar',
      'code' => 430,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LSL' => 
    array (
      'name' => 'Loti',
      'code' => 426,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'L',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LTL' => 
    array (
      'name' => 'Lithuanian Litas',
      'code' => 440,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Lt',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LVL' => 
    array (
      'name' => 'Latvian Lats',
      'code' => 428,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Ls',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LYD' => 
    array (
      'name' => 'Libyan Dinar',
      'code' => 434,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'ل.د',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MAD' => 
    array (
      'name' => 'Moroccan Dirham',
      'code' => 504,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'د.م.',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MDL' => 
    array (
      'name' => 'Moldovan Leu',
      'code' => 498,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'L',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MGA' => 
    array (
      'name' => 'Malagasy Ariary',
      'code' => 969,
      'precision' => 2,
      'subunit' => 5,
      'symbol' => 'Ar',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MKD' => 
    array (
      'name' => 'Denar',
      'code' => 807,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ден',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MMK' => 
    array (
      'name' => 'Kyat',
      'code' => 104,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'K',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MNT' => 
    array (
      'name' => 'Tugrik',
      'code' => 496,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₮',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MOP' => 
    array (
      'name' => 'Pataca',
      'code' => 446,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'P',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MRO' => 
    array (
      'name' => 'Ouguiya',
      'code' => 478,
      'precision' => 2,
      'subunit' => 5,
      'symbol' => 'UM',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MUR' => 
    array (
      'name' => 'Mauritius Rupee',
      'code' => 480,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MVR' => 
    array (
      'name' => 'Rufiyaa',
      'code' => 462,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'MVR',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MWK' => 
    array (
      'name' => 'Kwacha',
      'code' => 454,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'MK',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MXN' => 
    array (
      'name' => 'Mexican Peso',
      'code' => 484,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MYR' => 
    array (
      'name' => 'Malaysian Ringgit',
      'code' => 458,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'RM',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MZN' => 
    array (
      'name' => 'Mozambique Metical',
      'code' => 943,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'MTn',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'NAD' => 
    array (
      'name' => 'Namibia Dollar',
      'code' => 516,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'NGN' => 
    array (
      'name' => 'Naira',
      'code' => 566,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₦',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'NIO' => 
    array (
      'name' => 'Cordoba Oro',
      'code' => 558,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'C$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'NOK' => 
    array (
      'name' => 'Norwegian Krone',
      'code' => 578,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'kr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'NPR' => 
    array (
      'name' => 'Nepalese Rupee',
      'code' => 524,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'NZD' => 
    array (
      'name' => 'New Zealand Dollar',
      'code' => 554,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'OMR' => 
    array (
      'name' => 'Rial Omani',
      'code' => 512,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'ر.ع.',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PAB' => 
    array (
      'name' => 'Balboa',
      'code' => 590,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'B/.',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PEN' => 
    array (
      'name' => 'Sol',
      'code' => 604,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'S/',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PGK' => 
    array (
      'name' => 'Kina',
      'code' => 598,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'K',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PHP' => 
    array (
      'name' => 'Philippine Peso',
      'code' => 608,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₱',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PKR' => 
    array (
      'name' => 'Pakistan Rupee',
      'code' => 586,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PLN' => 
    array (
      'name' => 'Zloty',
      'code' => 985,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'zł',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => ' ',
    ),
    'PYG' => 
    array (
      'name' => 'Guarani',
      'code' => 600,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '₲',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'QAR' => 
    array (
      'name' => 'Qatari Rial',
      'code' => 634,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ر.ق',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'RON' => 
    array (
      'name' => 'New Romanian Leu',
      'code' => 946,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Lei',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'RSD' => 
    array (
      'name' => 'Serbian Dinar',
      'code' => 941,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'РСД',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'RUB' => 
    array (
      'name' => 'Russian Ruble',
      'code' => 643,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₽',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'RWF' => 
    array (
      'name' => 'Rwanda Franc',
      'code' => 646,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'FRw',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SAR' => 
    array (
      'name' => 'Saudi Riyal',
      'code' => 682,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ر.س',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SBD' => 
    array (
      'name' => 'Solomon Islands Dollar',
      'code' => 90,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SCR' => 
    array (
      'name' => 'Seychelles Rupee',
      'code' => 690,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SDG' => 
    array (
      'name' => 'Sudanese Pound',
      'code' => 938,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SEK' => 
    array (
      'name' => 'Swedish Krona',
      'code' => 752,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'kr',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => ' ',
    ),
    'SGD' => 
    array (
      'name' => 'Singapore Dollar',
      'code' => 702,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SHP' => 
    array (
      'name' => 'Saint Helena Pound',
      'code' => 654,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SLL' => 
    array (
      'name' => 'Leone',
      'code' => 694,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Le',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SOS' => 
    array (
      'name' => 'Somali Shilling',
      'code' => 706,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Sh',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SRD' => 
    array (
      'name' => 'Surinam Dollar',
      'code' => 968,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SSP' => 
    array (
      'name' => 'South Sudanese Pound',
      'code' => 728,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'STD' => 
    array (
      'name' => 'Dobra',
      'code' => 678,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Db',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SVC' => 
    array (
      'name' => 'El Salvador Colon',
      'code' => 222,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₡',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SYP' => 
    array (
      'name' => 'Syrian Pound',
      'code' => 760,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£S',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SZL' => 
    array (
      'name' => 'Lilangeni',
      'code' => 748,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'E',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'THB' => 
    array (
      'name' => 'Baht',
      'code' => 764,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '฿',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TJS' => 
    array (
      'name' => 'Somoni',
      'code' => 972,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ЅМ',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TMT' => 
    array (
      'name' => 'Turkmenistan New Manat',
      'code' => 934,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'T',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TND' => 
    array (
      'name' => 'Tunisian Dinar',
      'code' => 788,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'د.ت',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TOP' => 
    array (
      'name' => 'Pa’anga',
      'code' => 776,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'T$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TRY' => 
    array (
      'name' => 'Turkish Lira',
      'code' => 949,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₺',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TTD' => 
    array (
      'name' => 'Trinidad and Tobago Dollar',
      'code' => 780,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TWD' => 
    array (
      'name' => 'New Taiwan Dollar',
      'code' => 901,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TZS' => 
    array (
      'name' => 'Tanzanian Shilling',
      'code' => 834,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Sh',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'UAH' => 
    array (
      'name' => 'Hryvnia',
      'code' => 980,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₴',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'UGX' => 
    array (
      'name' => 'Uganda Shilling',
      'code' => 800,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'USh',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'USD' => 
    array (
      'name' => 'US Dollar',
      'code' => 840,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'UYU' => 
    array (
      'name' => 'Peso Uruguayo',
      'code' => 858,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'UZS' => 
    array (
      'name' => 'Uzbekistan Sum',
      'code' => 860,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => NULL,
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'VEF' => 
    array (
      'name' => 'Bolivar',
      'code' => 937,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Bs F',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'VND' => 
    array (
      'name' => 'Dong',
      'code' => 704,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '₫',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'VUV' => 
    array (
      'name' => 'Vatu',
      'code' => 548,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Vt',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'WST' => 
    array (
      'name' => 'Tala',
      'code' => 882,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'T',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XAF' => 
    array (
      'name' => 'CFA Franc BEAC',
      'code' => 950,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XAG' => 
    array (
      'name' => 'Silver',
      'code' => 961,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'oz t',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XAU' => 
    array (
      'name' => 'Gold',
      'code' => 959,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'oz t',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XCD' => 
    array (
      'name' => 'East Caribbean Dollar',
      'code' => 951,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XDR' => 
    array (
      'name' => 'SDR (Special Drawing Right)',
      'code' => 960,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'SDR',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XOF' => 
    array (
      'name' => 'CFA Franc BCEAO',
      'code' => 952,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XPF' => 
    array (
      'name' => 'CFP Franc',
      'code' => 953,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'YER' => 
    array (
      'name' => 'Yemeni Rial',
      'code' => 886,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '﷼',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ZAR' => 
    array (
      'name' => 'Rand',
      'code' => 710,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'R',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ZMW' => 
    array (
      'name' => 'Zambian Kwacha',
      'code' => 967,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ZK',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ZWL' => 
    array (
      'name' => 'Zimbabwe Dollar',
      'code' => 932,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
  ),
  'notify' => 
  array (
    'theme' => 'light',
    'demo' => true,
    'preset-messages' => 
    array (
      'user-updated' => 
      array (
        'message' => 'The user has been updated successfully.',
        'type' => 'success',
        'model' => 'connect',
        'title' => 'User Updated',
      ),
    ),
  ),
  'onesignal' => 
  array (
    'app_id' => 'YOUR-APP-ID-HERE',
    'rest_api_key' => 'YOUR-REST-API-KEY-HERE',
    'user_auth_key' => 'YOUR-USER-AUTH-KEY',
  ),
  'permission' => 
  array (
    'models' => 
    array (
      'permission' => 'Spatie\\Permission\\Models\\Permission',
      'role' => 'Spatie\\Permission\\Models\\Role',
    ),
    'table_names' => 
    array (
      'roles' => 'roles',
      'permissions' => 'permissions',
      'model_has_permissions' => 'model_has_permissions',
      'model_has_roles' => 'model_has_roles',
      'role_has_permissions' => 'role_has_permissions',
    ),
    'column_names' => 
    array (
      'model_morph_key' => 'model_id',
    ),
    'display_permission_in_exception' => false,
    'display_role_in_exception' => false,
    'enable_wildcard_permission' => false,
    'cache' => 
    array (
      'expiration_time' => 
      DateInterval::__set_state(array(
         'y' => 0,
         'm' => 0,
         'd' => 0,
         'h' => 24,
         'i' => 0,
         's' => 0,
         'f' => 0.0,
         'weekday' => 0,
         'weekday_behavior' => 0,
         'first_last_day_of' => 0,
         'invert' => 0,
         'days' => false,
         'special_type' => 0,
         'special_amount' => 0,
         'have_weekday_relative' => 0,
         'have_special_relative' => 0,
      )),
      'key' => 'spatie.permission.cache',
      'model_key' => 'name',
      'store' => 'default',
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => NULL,
        'secret' => NULL,
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'suffix' => NULL,
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'recaptcha' => 
  array (
    'api_site_key' => '',
    'api_secret_key' => '',
    'version' => 'invisible',
    'curl_timeout' => 10,
    'skip_ip' => 
    array (
    ),
    'default_validation_route' => 'biscolab-recaptcha/validate',
    'default_token_parameter_name' => 'token',
    'default_language' => NULL,
    'default_form_id' => 'registerform',
    'explicit' => false,
    'api_domain' => 'www.google.com',
    'tag_attributes' => 
    array (
      'theme' => 'light',
      'size' => 'normal',
      'tabindex' => 0,
      'callback' => NULL,
      'expired-callback' => NULL,
      'error-callback' => NULL,
    ),
  ),
  'self-update' => 
  array (
    'default' => 'http',
    'version_installed' => '3.0.6',
    'repository_types' => 
    array (
      'github' => 
      array (
        'type' => 'github',
        'repository_vendor' => '',
        'repository_name' => '',
        'repository_url' => '',
        'download_path' => '/tmp',
        'private_access_token' => '',
        'use_branch' => '',
      ),
      'http' => 
      array (
        'type' => 'http',
        'repository_url' => 'http://updates.restoqr.online/v3/3.0.6/',
        'pkg_filename_format' => 'v_VERSION_',
        'download_path' => '/tmp',
        'private_access_token' => '',
      ),
    ),
    'exclude_folders' => 
    array (
      0 => '__MACOSX',
      1 => 'node_modules',
      2 => 'bower',
      3 => 'storage/app',
      4 => 'storage/framework',
      5 => 'storage/logs',
      6 => 'storage/self-update',
    ),
    'log_events' => false,
    'notifications' => 
    array (
      'notifications' => 
      array (
        'Codedge\\Updater\\Notifications\\Notifications\\UpdateSucceeded' => 
        array (
          0 => 'mail',
        ),
        'Codedge\\Updater\\Notifications\\Notifications\\UpdateFailed' => 
        array (
          0 => 'mail',
        ),
        'Codedge\\Updater\\Notifications\\Notifications\\UpdateAvailable' => 
        array (
          0 => 'mail',
        ),
      ),
      'notifiable' => 'Codedge\\Updater\\Notifications\\Notifiable',
      'mail' => 
      array (
        'to' => 
        array (
          'address' => 'notifications@example.com',
          'name' => '',
        ),
        'from' => 
        array (
          'address' => 'updater@example.com',
          'name' => 'Update',
        ),
      ),
    ),
    'artisan_commands' => 
    array (
      'pre_update' => 
      array (
      ),
      'post_update' => 
      array (
      ),
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'google' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'facebook' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'onesignal' => 
    array (
      'app_id' => '',
      'rest_api_key' => '',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\xampp\\htdocs\\wabi-dev\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'wabizz_lancez_votre_business_en_ligne_en_5_minutes_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'settings' => 
  array (
    'front_languages' => 'EN,English,FR,French',
    'onesignal_android_app_id' => '',
    'onesignal_ios_app_id' => '',
    'enable_birth_date_on_register' => false,
    'minimum_years_to_register' => 18,
    'enable_sms_verification' => false,
    'google_maps_api_key' => '',
    'paginate' => 10,
    'cashier_currency' => 'EUR',
    'site_currency' => 'EUR',
    'site_do_currency' => true,
    'do_convertion' => true,
    'time_format' => '24hours',
    'delivery_interval_in_minutes' => '30',
    'time_to_prepare_order_in_minutes' => 0,
    'app_secret' => NULL,
    'stripe_secret' => 'EMnTk2l0CNNXmquGRGI40IslcNTshSzxvU0u1-2O1RSpWpKNWgm8PZifz9w1YTMSAv6-lHJuNY10ACUy',
    'hide_cod' => false,
    'enable_stripe' => true,
    'stripe_key' => 'AfCtgNBCqjrB_jEttJSY4Eow8eheZE_vP7zlaQPDANQ-EflksPD9jZ8bRFd4zzsfrOIdXkyjDf0vcJn8',
    'stripe_useVendor' => true,
    'stripe_useAdmin' => false,
    'enable_stripe_ideal' => true,
    'default_payment' => 'stripe',
    'google_client_id' => '',
    'google_client_secret' => NULL,
    'facebook_client_id' => '',
    'facebook_client_secret' => NULL,
    'single_mode' => false,
    'single_mode_id' => NULL,
    'enable_cost_per_distance' => false,
    'enable_cost_per_range' => false,
    'range_one' => '0-0',
    'range_two' => '0-0',
    'range_three' => '0-0',
    'range_four' => '0-0',
    'range_five' => '0-0',
    'range_one_price' => '1',
    'range_two_price' => '1',
    'range_three_price' => '1',
    'range_four_price' => '1',
    'range_five_price' => '1',
    'cost_per_kilometer' => NULL,
    'multi_city' => false,
    'min_phone_number' => 9,
    'disable_landing' => true,
    'app_locale' => 'en',
    'app_name' => 'Wabizz - Lancez votre business en ligne en 5 minutes',
    'qr_landing' => 'home',
    'location_search_radius' => 50,
    'most_nearby_limit' => 4,
    'disable_deliver' => false,
    'disable_continius_ordering' => false,
    'demo_restaurant_slug' => 'wabizz',
    'app_url' => 'http://127.0.0.1:8082/',
    'futy_key' => '',
    'link_to_ts' => '/blog/terms-and-conditions',
    'link_to_pr' => '/blog/how-it-works',
    'front_end_template' => 'elegant-template',
    'is_pos_cloud_mode' => false,
    'landing_to_use' => 'system',
    'showlandingmanagment' => false,
    'is_whatsapp_ordering_mode' => '1',
    'is_agris_mode' => false,
    'is_facebook_ordering_mode' => false,
    'whatsapp_ordering_enabled' => true,
    'enable_facebook_ordering' => false,
    'whatsapp_ordering' => true,
    'facebook_ordering' => false,
    'social_mode' => true,
    'enable_stripe_connect' => true,
    'stripe_fee' => 2.6,
    'stripe_static_fee' => 0.3,
    'driver_search_radius' => 15,
    'allow_automated_assign_to_driver' => 'true',
    'subscription_processor' => 'PayPal',
    'free_pricing_id' => '1',
    'driver_percent_from_deliver' => 100,
    'vendor_entity_name' => 'eShop',
    'vendor_entity_name_plural' => 'eShops',
    'url_route' => 'eshop',
    'url_route_plural' => 'shops',
    'wildcard_domain_ready' => false,
    'templates' => '/impactfront/img/menu_template_1.jpg,/impactfront/img/menu_template_2.jpg',
    'recaptcha_site_key' => '',
    'directly_approve_resstaurant' => false,
    'enable_call_waiter' => false,
    'enalbe_change_log_in_update' => true,
    'app_project_type' => 'qrsaas',
    'is_demo' => false,
    'is_show_credentials' => false,
    'chars_in_menu_list' => '40',
    'extended_license_download_code' => 'exwabzjud874832kjsdex',
    'enable_miltilanguage_menus' => true,
    'onesignal_app_id' => '',
    'twilio_account_sid' => false,
    'send_sms_notifications' => false,
    'auth0_token' => '',
    'auth_connection' => '',
    'twilio_sid' => NULL,
    'twilio_auth_token' => NULL,
    'twilio_from' => '',
    'playstore' => '',
    'appstore' => '',
    'demo_data' => true,
    'admin_name' => 'Admin Admin',
    'admin_email' => 'makhtar3107@icloud.com',
    'admin_password' => 'Mughal90.',
    'enable_pickup' => true,
    'enable_default_cookie_consent' => true,
    'datetime_display_format' => 'd M Y h:i A',
    'datetime_workinghours_display_format_new' => 'E HH:mm',
    'restaurant_link_register_position' => 'footer',
    'restaurant_link_register_title' => 'Register your restaurant',
    'driver_link_register_position' => 'footer',
    'driver_link_register_title' => 'Become driver',
    'enable_location_search' => false,
    'enable_pricing' => true,
    'enable_finances_admin' => true,
    'enable_finances_owner' => true,
    'hide_project_branding' => true,
    'enable_guest_log' => false,
    'app_dev' => false,
    'qrsaas_disable_odering' => false,
    'restoloyalty_token' => '',
    'google_analytics' => '',
    'local_transfer_info' => 'Wire us the plan amout on the following bank account. And inform us about the wire.',
    'local_transfer_account' => 'LT76 3250 0621 5803 9469',
    'enable_import_csv' => true,
    'share_this_property' => '',
    'label_on_custom_fields' => 'Customer Info',
    'hideApps' => false,
    'makePureSaaS' => false,
    'forceUserToPay' => false,
  ),
  'shopping_cart' => 
  array (
    'format_numbers' => false,
    'decimals' => 0,
    'dec_point' => '.',
    'thousands_sep' => ',',
    'storage' => NULL,
    'events' => NULL,
  ),
  'sitemap' => 
  array (
    'guzzle_options' => 
    array (
      'cookies' => true,
      'connect_timeout' => 10,
      'timeout' => 10,
      'allow_redirects' => false,
    ),
    'execute_javascript' => false,
    'chrome_binary_path' => NULL,
    'crawl_profile' => 'Spatie\\Sitemap\\Crawler\\Profile',
  ),
  'timezones' => 
  array (
    'Pacific/Midway' => '(UTC-11:00) Midway Island',
    'Pacific/Samoa' => '(UTC-11:00) Samoa',
    'Pacific/Honolulu' => '(UTC-10:00) Hawaii',
    'US/Alaska' => '(UTC-09:00) Alaska',
    'America/Los_Angeles' => '(UTC-08:00) Pacific Time (US &amp; Canada)',
    'America/Tijuana' => '(UTC-08:00) Tijuana',
    'US/Arizona' => '(UTC-07:00) Arizona',
    'America/Chihuahua' => '(UTC-07:00) La Paz',
    'America/Mazatlan' => '(UTC-07:00) Mazatlan',
    'US/Mountain' => '(UTC-07:00) Mountain Time (US &amp; Canada)',
    'America/Managua' => '(UTC-06:00) Central America',
    'US/Central' => '(UTC-06:00) Central Time (US &amp; Canada)',
    'America/Mexico_City' => '(UTC-06:00) Mexico City',
    'America/Monterrey' => '(UTC-06:00) Monterrey',
    'Canada/Saskatchewan' => '(UTC-06:00) Saskatchewan',
    'America/Bogota' => '(UTC-05:00) Quito',
    'US/Eastern' => '(UTC-05:00) Eastern Time (US &amp; Canada)',
    'US/East-Indiana' => '(UTC-05:00) Indiana (East)',
    'America/Lima' => '(UTC-05:00) Lima',
    'Canada/Atlantic' => '(UTC-04:00) Atlantic Time (Canada)',
    'America/Caracas' => '(UTC-04:30) Caracas',
    'America/La_Paz' => '(UTC-04:00) La Paz',
    'America/Santiago' => '(UTC-04:00) Santiago',
    'Canada/Newfoundland' => '(UTC-03:30) Newfoundland',
    'America/Sao_Paulo' => '(UTC-03:00) Brasilia',
    'America/Argentina/Buenos_Aires' => '(UTC-03:00) Georgetown',
    'America/Godthab' => '(UTC-03:00) Greenland',
    'America/Noronha' => '(UTC-02:00) Mid-Atlantic',
    'Atlantic/Azores' => '(UTC-01:00) Azores',
    'Atlantic/Cape_Verde' => '(UTC-01:00) Cape Verde Is.',
    'Africa/Casablanca' => '(UTC+00:00) Casablanca',
    'Europe/London' => '(UTC+00:00) London',
    'Etc/Greenwich' => '(UTC+00:00) Greenwich Mean Time : Dublin',
    'Europe/Lisbon' => '(UTC+00:00) Lisbon',
    'Africa/Monrovia' => '(UTC+00:00) Monrovia',
    'UTC' => '(UTC+00:00) UTC',
    'Europe/Amsterdam' => '(UTC+01:00) Amsterdam',
    'Europe/Belgrade' => '(UTC+01:00) Belgrade',
    'Europe/Berlin' => '(UTC+01:00) Berlin',
    'Europe/Bern' => '(UTC+01:00) Bern',
    'Europe/Bratislava' => '(UTC+01:00) Bratislava',
    'Europe/Brussels' => '(UTC+01:00) Brussels',
    'Europe/Budapest' => '(UTC+01:00) Budapest',
    'Europe/Copenhagen' => '(UTC+01:00) Copenhagen',
    'Europe/Ljubljana' => '(UTC+01:00) Ljubljana',
    'Europe/Madrid' => '(UTC+01:00) Madrid',
    'Europe/Paris' => '(UTC+01:00) Paris',
    'Europe/Prague' => '(UTC+01:00) Prague',
    'Europe/Rome' => '(UTC+01:00) Rome',
    'Europe/Sarajevo' => '(UTC+01:00) Sarajevo',
    'Europe/Skopje' => '(UTC+01:00) Skopje',
    'Europe/Stockholm' => '(UTC+01:00) Stockholm',
    'Europe/Vienna' => '(UTC+01:00) Vienna',
    'Europe/Warsaw' => '(UTC+01:00) Warsaw',
    'Africa/Lagos' => '(UTC+01:00) West Central Africa',
    'Europe/Zagreb' => '(UTC+01:00) Zagreb',
    'Europe/Athens' => '(UTC+02:00) Athens',
    'Europe/Bucharest' => '(UTC+02:00) Bucharest',
    'Africa/Cairo' => '(UTC+02:00) Cairo',
    'Africa/Harare' => '(UTC+02:00) Harare',
    'Europe/Helsinki' => '(UTC+02:00) Kyiv',
    'Europe/Istanbul' => '(UTC+02:00) Istanbul',
    'Asia/Jerusalem' => '(UTC+02:00) Jerusalem',
    'Africa/Johannesburg' => '(UTC+02:00) Pretoria',
    'Europe/Riga' => '(UTC+02:00) Riga',
    'Europe/Sofia' => '(UTC+02:00) Sofia',
    'Europe/Tallinn' => '(UTC+02:00) Tallinn',
    'Europe/Vilnius' => '(UTC+02:00) Vilnius',
    'Asia/Baghdad' => '(UTC+03:00) Baghdad',
    'Asia/Kuwait' => '(UTC+03:00) Kuwait',
    'Europe/Minsk' => '(UTC+03:00) Minsk',
    'Africa/Nairobi' => '(UTC+03:00) Nairobi',
    'Asia/Riyadh' => '(UTC+03:00) Riyadh',
    'Europe/Volgograd' => '(UTC+03:00) Volgograd',
    'Asia/Tehran' => '(UTC+03:30) Tehran',
    'Asia/Muscat' => '(UTC+04:00) Muscat',
    'Asia/Baku' => '(UTC+04:00) Baku',
    'Europe/Moscow' => '(UTC+04:00) St. Petersburg',
    'Asia/Tbilisi' => '(UTC+04:00) Tbilisi',
    'Asia/Yerevan' => '(UTC+04:00) Yerevan',
    'Asia/Kabul' => '(UTC+04:30) Kabul',
    'Asia/Karachi' => '(UTC+05:00) Karachi',
    'Asia/Tashkent' => '(UTC+05:00) Tashkent',
    'Asia/Calcutta' => '(UTC+05:30) Sri Jayawardenepura',
    'Asia/Kolkata' => '(UTC+05:30) Kolkata',
    'Asia/Katmandu' => '(UTC+05:45) Kathmandu',
    'Asia/Almaty' => '(UTC+06:00) Almaty',
    'Asia/Dhaka' => '(UTC+06:00) Dhaka',
    'Asia/Yekaterinburg' => '(UTC+06:00) Ekaterinburg',
    'Asia/Rangoon' => '(UTC+06:30) Rangoon',
    'Asia/Bangkok' => '(UTC+07:00) Hanoi',
    'Asia/Jakarta' => '(UTC+07:00) Jakarta',
    'Asia/Novosibirsk' => '(UTC+07:00) Novosibirsk',
    'Asia/Hong_Kong' => '(UTC+08:00) Hong Kong',
    'Asia/Chongqing' => '(UTC+08:00) Chongqing',
    'Asia/Krasnoyarsk' => '(UTC+08:00) Krasnoyarsk',
    'Asia/Kuala_Lumpur' => '(UTC+08:00) Kuala Lumpur',
    'Australia/Perth' => '(UTC+08:00) Perth',
    'Asia/Singapore' => '(UTC+08:00) Singapore',
    'Asia/Taipei' => '(UTC+08:00) Taipei',
    'Asia/Ulan_Bator' => '(UTC+08:00) Ulaan Bataar',
    'Asia/Urumqi' => '(UTC+08:00) Urumqi',
    'Asia/Irkutsk' => '(UTC+09:00) Irkutsk',
    'Asia/Tokyo' => '(UTC+09:00) Tokyo',
    'Asia/Seoul' => '(UTC+09:00) Seoul',
    'Australia/Adelaide' => '(UTC+09:30) Adelaide',
    'Australia/Darwin' => '(UTC+09:30) Darwin',
    'Australia/Brisbane' => '(UTC+10:00) Brisbane',
    'Australia/Canberra' => '(UTC+10:00) Canberra',
    'Pacific/Guam' => '(UTC+10:00) Guam',
    'Australia/Hobart' => '(UTC+10:00) Hobart',
    'Australia/Melbourne' => '(UTC+10:00) Melbourne',
    'Pacific/Port_Moresby' => '(UTC+10:00) Port Moresby',
    'Australia/Sydney' => '(UTC+10:00) Sydney',
    'Asia/Yakutsk' => '(UTC+10:00) Yakutsk',
    'Asia/Vladivostok' => '(UTC+11:00) Vladivostok',
    'Pacific/Auckland' => '(UTC+12:00) Wellington',
    'Pacific/Fiji' => '(UTC+12:00) Marshall Is.',
    'Pacific/Kwajalein' => '(UTC+12:00) International Date Line West',
    'Asia/Kamchatka' => '(UTC+12:00) Kamchatka',
    'Asia/Magadan' => '(UTC+12:00) Solomon Is.',
    'Pacific/Tongatapu' => '(UTC+13:00) Nuku\'alofa',
  ),
  'translatable' => 
  array (
    'fallback_locale' => NULL,
  ),
  'translation' => 
  array (
    'driver' => 'file',
    'route_group_config' => 
    array (
      'middleware' => 
      array (
        0 => 'web',
        1 => 'isAdmin',
      ),
    ),
    'translation_methods' => 
    array (
      0 => 'trans',
      1 => '__',
    ),
    'scan_paths' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wabi-dev\\app',
      1 => 'C:\\xampp\\htdocs\\wabi-dev\\resources',
      2 => 'C:\\xampp\\htdocs\\wabi-dev\\app/../modules',
    ),
    'ui_url' => 'admin/languages',
    'database' => 
    array (
      'connection' => '',
      'languages_table' => 'languages',
      'translations_table' => 'translations',
    ),
  ),
  'twilio-notification-channel' => 
  array (
    'username' => NULL,
    'password' => NULL,
    'auth_token' => NULL,
    'account_sid' => NULL,
    'from' => NULL,
    'alphanumeric_sender' => NULL,
    'sms_service_sid' => NULL,
    'debug_to' => NULL,
    'ignored_error_codes' => 
    array (
      0 => 21608,
      1 => 21211,
      2 => 21614,
      3 => 21408,
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wabi-dev\\resources\\views',
    ),
    'compiled' => 'C:\\xampp\\htdocs\\wabi-dev\\storage\\framework\\views',
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'cashier' => 
  array (
    'key' => 'AfCtgNBCqjrB_jEttJSY4Eow8eheZE_vP7zlaQPDANQ-EflksPD9jZ8bRFd4zzsfrOIdXkyjDf0vcJn8',
    'secret' => 'EMnTk2l0CNNXmquGRGI40IslcNTshSzxvU0u1-2O1RSpWpKNWgm8PZifz9w1YTMSAv6-lHJuNY10ACUy',
    'path' => 'stripe',
    'webhook' => 
    array (
      'secret' => NULL,
      'tolerance' => 300,
    ),
    'model' => 'App\\User',
    'currency' => 'EUR',
    'currency_locale' => 'en',
    'payment_notification' => NULL,
    'paper' => 'letter',
    'logger' => NULL,
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 94,
  ),
  'mollie' => 
  array (
    'name' => 'Mollie',
    'enabled' => true,
    'useVendor' => true,
    'useAdmin' => false,
    'mollie_payment_key' => '',
    'key' => 'test_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
  ),
  'global' => 
  array (
    'id' => 1,
    'created_at' => '2021-12-11T22:58:13.000000Z',
    'updated_at' => '2021-12-26T19:45:06.000000Z',
    'site_name' => 'Wabizz',
    'site_logo' => '/uploads/settings/6ae5497b-105a-4ded-abe2-44389e8329ff_logo.jpg',
    'search' => '/default/cover.jpg',
    'restorant_details_image' => '/uploads/settings/d081ea6d-f9c1-44d5-b3ab-199b88259ba8_large.jpg',
    'restorant_details_cover_image' => '/uploads/settings/d827f547-6cbb-410e-bb11-bec972e62dd4_cover.jpg',
    'description' => 'Lancez votre business en 5 minutes!',
    'header_title' => '',
    'header_subtitle' => '',
    'currency' => 'USD',
    'facebook' => '',
    'instagram' => '',
    'playstore' => '',
    'appstore' => '',
    'maps_api_key' => 'AIzaSyCZhq0g1x1ttXPa1QB3ylcDQPTAzp_KUgA',
    'delivery' => 0.0,
    'typeform' => '',
    'mobile_info_title' => '',
    'mobile_info_subtitle' => '',
    'order_options' => 
    array (
    ),
    'site_logo_dark' => '/uploads/settings/70c5e55c-903c-4f1e-ade8-60b1b042ebeb_site_logo_dark.jpg',
    'order_fields' => NULL,
    'modules' => 
    array (
      0 => 'coupons',
      1 => 'defaulttax',
      2 => 'domain',
      3 => 'elegant-template',
      4 => 'feautureclients',
      5 => 'googletranslate',
      6 => 'impressum',
      7 => 'mollie',
      8 => 'paddle-subscribe',
      9 => 'paypal',
      10 => 'paypal-subscribe',
      11 => 'pdf-invoice',
      12 => 'print-node',
      13 => 'staff',
      14 => 'timezone',
      15 => 'timprepare',
    ),
  ),
  'coupons' => 
  array (
    'name' => 'Coupons',
  ),
  'defaulttax' => 
  array (
    'name' => 'Defaulttax',
  ),
  'domain' => 
  array (
    'name' => 'Domain',
  ),
  'elegant-template' => 
  array (
    'name' => 'ElegantTemplate',
  ),
  'feautureclients' => 
  array (
    'name' => 'Feautureclients',
  ),
  'googletranslate' => 
  array (
    'name' => 'Googletranslate',
  ),
  'impressum' => 
  array (
    'name' => 'Impressum',
  ),
  'paddle-subscribe' => 
  array (
    'name' => 'PaddleSubscribe',
    'paddlevendorid' => '',
  ),
  'paypal' => 
  array (
    'name' => 'PayPal',
    'enabled' => true,
    'useVendor' => true,
    'useAdmin' => false,
    'client_id' => 'ATNYxu3ZmNAzWO6Q4bnQPCN6PA1aQYZn9-XAr0Hu5tgKLFhQ4XEjohZIo0iwHB34itFootORYICriHWi',
    'secret' => 'ELBsBdpDYY6XPeacmc98Ia0Ha3_0wmRZwnV_1BG6a7mjTHKOhn3wNCv2sy4uKzUp0vCrvRGZ_-adhbwP',
    'mode' => 'live',
  ),
  'paypal-subscribe' => 
  array (
    'name' => 'PaypalSubscribe',
    'client_id' => 'AVc_I32JNRT01NOwacDglni1mbhv1B9v_waHVbB0xuVRl9yyRkwCMvCETu75n8foOh9TQ0ZPzAHW4Pwl',
    'secret' => 'EAsOLGFpE5H8PV4j1o_teliUpRQA3zRYIk6Fw5rkge-G3uIR80y0lXRozSH6fjo5wnZUOb21AC13GAMH',
    'mode' => 'live',
  ),
  'pdf-invoice' => 
  array (
    'name' => 'PdfInvoice',
    'invoiceTitle' => 'Commande',
  ),
  'print-node' => 
  array (
    'name' => 'PrintNode',
    'convert_api_secret' => '',
  ),
  'staff' => 
  array (
    'name' => 'Staff',
  ),
  'timezone' => 
  array (
    'name' => 'Timezone',
  ),
  'timprepare' => 
  array (
    'name' => 'Timprepare',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
