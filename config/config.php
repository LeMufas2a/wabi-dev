<?php

if(env('APP_ENV') == 'local'){
    return [
        'version' => '3.0.6',
    'env'=>[
            [
                'name'=>'Setup',
                'slug'=>'setup',
                'icon'=>'ni ni-settings',
                'fields'=>[
                    ['separator'=>'System', 'title'=>'Project name', 'key'=>'APP_NAME', 'value'=>env('APP_NAME')],
                    ['title'=>'Link to your site', 'key'=>'APP_URL', 'value'=>env('APP_URL')],
                    ['title'=>'Subdomains', 'key'=>'IGNORE_SUBDOMAINS', 'value'=>env('IGNORE_SUBDOMAINS'), 'help'=>'Subdomain your app works in. ex if your subdomain is app.yourdomain.com, here you should have www,app '],
                    ['title'=>'App debugging', 'key'=>'APP_DEBUG', 'value'=>env('APP_DEBUG'), 'ftype'=>'bool', 'help'=>'Enable if you experience error 500'],
                    ['title'=>'Wildcard domain', 'help'=>'If you have followed the procedure to enable wildcard domain, select this so you can have shopname.yourdomain.com', 'key'=>'WILDCARD_DOMAIN_READY', 'value'=>env('WILDCARD_DOMAIN_READY'), 'ftype'=>'bool'],
                    ['title'=>'Enable guest log', 'key'=>'ENABLE_GUEST_LOG', 'value'=>env('ENABLE_GUEST_LOG'), 'ftype'=>'bool', 'onlyin'=>'qrsaas'],
                    ['title'=>'Hide project branding on menu page', 'key'=>'HIDE_PROJECT_BRANDING', 'value'=>env('HIDE_PROJECT_BRANDING'), 'ftype'=>'bool', 'onlyin'=>'qrsaas'],
                    ['title'=>'Disable the landing page', 'help'=>'When landing page is disabled, the project will start from the login page. In this case it is best to have the system in subdomain', 'key'=>'DISABLE_LANDING', 'value'=>env('DISABLE_LANDING'), 'ftype'=>'bool', 'onlyin'=>'qrsaas'],
                    ['title'=>'Front end template', 'key'=>'FRONT_END_TEMPLATE', 'value'=>env('FRONT_END_TEMPLATE'), 'ftype'=>'select', 'data'=>[]],
                    
                    ['separator'=>'Ordering and items', 'title'=>'Completely disable ordering', 'key'=>'QRSAAS_DISABLE_ODERING', 'value'=>env('QRSAAS_DISABLE_ODERING'), 'ftype'=>'bool', 'onlyin'=>'qrsaas', 'help'=>'If this is selected, then cart, and orders will not be shown'],
                    ['title'=>'Directly approve order', 'help'=>'When selected admin does not have to approve order', 'key'=>'APP_ORDER_APPROVE_DIRECTLY', 'value'=>'false', 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['title'=>'Assign orders to drivers automatically', 'key'=>'ALLOW_AUTOMATED_ASSIGN_TO_DRIVER', 'value'=>env('ALLOW_AUTOMATED_ASSIGN_TO_DRIVER'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['title'=>'Allow vendor to do their own delivery', 'key'=>'APP_ALLOW_SELF_DELIVER', 'value'=>env('APP_ALLOW_SELF_DELIVER'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['title'=>'Time for order to be prepared', 'help'=>'Average time order is prepared, so users can not order before vendor or shop is closing', 'key'=>'TIME_TO_PREPARE_ORDER_IN_MINUTES', 'value'=>env('TIME_TO_PREPARE_ORDER_IN_MINUTES'), 'type'=>'hidden', 'onlyin'=>'ft'],
                    ['title'=>'Search radius for vendors', 'help'=>'Maximum distance that vendors are shown to user', 'key'=>'LOCATION_SEARCH_RADIUS', 'value'=>env('LOCATION_SEARCH_RADIUS'), 'type'=>'number', 'onlyin'=>'ft'],
                    ['title'=>'Search radius for drivers', 'help'=>'When you have automatic assign to driver, this is a way to show the system for the maximum range to look for driver', 'key'=>'DRIVER_SEARCH_RADIUS', 'value'=>env('DRIVER_SEARCH_RADIUS'), 'type'=>'number', 'onlyin'=>'ft'],
                    ['title'=>'Disable continues orders', 'help'=>'If enabled, orders done on same table will be merged, until order is not closed/finished by vendor', 'key'=>'DISABLE_CONTINIUS_ORDERING', 'value'=>env('DISABLE_CONTINIUS_ORDERING'), 'ftype'=>'bool', 'onlyin'=>'qrsaas'],
                    ['title'=>'Enable pickup , system wide', 'key'=>'ENABLE_PICKUP', 'value'=>env('ENABLE_PICKUP'), 'ftype'=>'bool'],
                    ['title'=>'Hide cash on delivery, system wide', 'key'=>'HIDE_COD', 'value'=>env('HIDE_COD'), 'ftype'=>'bool'],
                    ['title'=>'Delivery / time intervals in minutes', 'help'=>'Separate the time slots into N Minutes. ex 09:00-09-15 , 09:15-09:30 - value is 15 ', 'key'=>'DELIVERY_INTERVAL_IN_MINUTES', 'value'=>env('DELIVERY_INTERVAL_IN_MINUTES'), 'type'=>'number'],
                    ['title'=>'Default payment type', 'key'=>'DEFAULT_PAYMENT', 'value'=>env('DEFAULT_PAYMENT'), 'ftype'=>'select', 'data'=>['cod'=>'Cash on Delivery', 'stripe'=>'Stripe Card processing']],
                    ['title'=>'Is your project multi city', 'help'=>'When selected, the front page will display list of cities', 'key'=>'MULTI_CITY', 'value'=>env('MULTI_CITY'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['title'=>'Single mode - run this site for one vendor only', 'key'=>'SINGLE_MODE', 'value'=>env('SINGLE_MODE'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['title'=>'The id of the vendor for single mode', 'help'=>'If you have single mode selected, than this vendor id will be show', 'key'=>'SINGLE_MODE_ID', 'value'=>env('SINGLE_MODE_ID'), 'type'=>'number', 'onlyin'=>'ft'],
                    ['title'=>'Enable import via CSV for vendor items', 'key'=>'ENABLE_IMPORT_CSV', 'value'=>env('ENABLE_IMPORT_CSV'), 'ftype'=>'bool'],  
                    ['separator'=>'Delivery costs', 'title'=>'Enable cost per distance', 'key'=>'ENABLE_COST_PER_DISTANCE', 'value'=>env('ENABLE_COST_PER_DISTANCE'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['title'=>'Cost per kilometer', 'key'=>'COST_PER_KILOMETER', 'value'=>env('COST_PER_KILOMETER'), 'onlyin'=>'ft'],
                    ['title'=>'Enable cost based on range', 'help'=>'If you have enable cost based on range, the delivery cost will be calculated based on what range the distance for delivery is in', 'key'=>'ENABLE_COST_IN_RANGE', 'value'=>env('ENABLE_COST_IN_RANGE'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['help'=>'Range in kilometers ex from 0km - 5km will be 0-5', 'title'=>'First range', 'key'=>'RANGE_ONE', 'value'=>env('RANGE_ONE'), 'onlyin'=>'ft'],
                    ['title'=>'Second range', 'key'=>'RANGE_TWO', 'value'=>env('RANGE_TWO'), 'onlyin'=>'ft'],
                    ['title'=>'Third range', 'key'=>'RANGE_THREE', 'value'=>env('RANGE_THREE'), 'onlyin'=>'ft'],
                    ['title'=>'Fourth range', 'key'=>'RANGE_FOUR', 'value'=>env('RANGE_FOUR'), 'onlyin'=>'ft'],
                    ['title'=>'Fifth range', 'key'=>'RANGE_FIVE', 'value'=>env('RANGE_FIVE'), 'onlyin'=>'ft'],

                    ['title'=>'Price for first range', 'key'=>'RANGE_ONE_PRICE', 'value'=>env('RANGE_ONE_PRICE'), 'onlyin'=>'ft'],
                    ['title'=>'Price for second range', 'key'=>'RANGE_TWO_PRICE', 'value'=>env('RANGE_TWO_PRICE'), 'onlyin'=>'ft'],
                    ['title'=>'Price for third range', 'key'=>'RANGE_THREE_PRICE', 'value'=>env('RANGE_THREE_PRICE'), 'onlyin'=>'ft'],
                    ['title'=>'Price for fourth range', 'key'=>'RANGE_FOUR_PRICE', 'value'=>env('RANGE_FOUR_PRICE'), 'onlyin'=>'ft'],
                    ['title'=>'Price for fifth range', 'key'=>'RANGE_FIVE_PRICE', 'value'=>env('RANGE_FIVE_PRICE'), 'onlyin'=>'ft'],

                    ['title'=>'Driver percent from the order', 'help'=>'From 0-100. Based on your business type, this value determines how much driver will make from the delivery fee. This value can be change on driver level also', 'key'=>'DRIVER_PERCENT_FROM_DELIVERY_FEE', 'value'=>env('DRIVER_PERCENT_FROM_DELIVERY_FEE'), 'onlyin'=>'ft'],

                    ['title'=>'Demo vendor slug', 'separator'=>'Other settings', 'help'=>'Enter the domain - slug of your demo vendor that will show on the landing page', 'key'=>'demo_restaurant_slug', 'value'=>env('demo_restaurant_slug'), 'onlyin'=>'qrsaas'],
                    ['title'=>'Vendor entity name', 'help'=>'Ex. Company, Restaurant, Shop, Business etc', 'key'=>'VENDOR_ENTITY_NAME', 'value'=>env('VENDOR_ENTITY_NAME')],
                    ['title'=>'Vendor entity name in plural', 'help'=>'Ex. Companies, Restaurants, Shops, Businesses etc', 'key'=>'VENDOR_ENTITY_NAME_PLURAL', 'value'=>env('VENDOR_ENTITY_NAME_PLURAL')],
                    ['title'=>'Url route for vendor', 'help'=>'If you want to change the link the vendor is open in. ex yourdomain.com/shop/shopname. shop - should be the value here', 'key'=>'URL_ROUTE', 'value'=>env('URL_ROUTE')],
                    ['title'=>'Url route for vendor in plural', 'help'=>'If you want to change the link the vendor management is open in. ex yourdomain.com/shops. shops - should be the value here', 'key'=>'URL_ROUTE_PLURAL', 'value'=>env('URL_ROUTE_PLURAL')],
                    ['title'=>'Apps download code', 'help'=>'If you have extended license, or some specific product, we will send you App download code. Send us ticket.', 'key'=>'EXTENDED_LICENSE_DOWNLOAD_CODE', 'value'=>env('EXTENDED_LICENSE_DOWNLOAD_CODE')], 
                    ['title'=>'Print templates images', 'help'=>'Links to images representing the images for the templates. You can use remote images', 'key'=>'templates', 'value'=>env('templates'), 'onlyin'=>'qrsaas'],
                    ['title'=>'Print templates zip', 'help'=>'Link to .zip representing the template for download. You can use remote file', 'key'=>'linkToTemplates', 'value'=>env('linkToTemplates'), 'onlyin'=>'qrsaas'],

                    ['title'=>'Chars in menu list', 'key'=>'CHARS_IN_MENU_LIST', 'value'=>env('CHARS_IN_MENU_LIST'), 'type'=>"number", 'help'=>'Controls to how many chars the menu description should be trimmed'],
                    ['title'=>'Enable multi language menus', 'help'=>'When enabled, vendors can add language version to the menu', 'key'=>'ENABLE_MILTILANGUAGE_MENUS', 'value'=>env('ENABLE_MILTILANGUAGE_MENUS'), 'ftype'=>'bool'],

                    ['title'=>'Enable change log in update screen', 'key'=>'ENABLE_CHANGELOG_IN_UPDATE', 'value'=>env('ENABLE_CHANGELOG_IN_UPDATE'), 'ftype'=>'bool'],

                    ['title'=>'Position for the register driver link', 'key'=>'DRIVER_LINK_REGISTER_POSITION', 'value'=>env('DRIVER_LINK_REGISTER_POSITION'), 'data'=>['footer'=>'Footer', 'navbar'=>'Navigation bar', 'dontshow'=>'Hidden'], 'ftype'=>'select', 'onlyin'=>'ft'],
                    ['title'=>'Position for the register vendor link', 'key'=>'RESTAURANT_LINK_REGISTER_POSITION', 'value'=>env('RESTAURANT_LINK_REGISTER_POSITION'), 'data'=>['footer'=>'Footer', 'navbar'=>'Navigation bar', 'dontshow'=>'Hidden'], 'ftype'=>'select', 'onlyin'=>'ft'],

                    ['title'=>'Title of driver link', 'key'=>'DRIVER_LINK_REGISTER_TITLE', 'value'=>env('DRIVER_LINK_REGISTER_TITLE'), 'onlyin'=>'ft'],
                    ['title'=>'Title for the register vendor link', 'key'=>'RESTAURANT_LINK_REGISTER_TITLE', 'value'=>env('RESTAURANT_LINK_REGISTER_TITLE'), 'onlyin'=>'ft'],

                    ['title'=>'Mobile app secret', 'key'=>'APP_SECRET', 'value'=>'APP_SECRET'],
                    ['title'=>'App environment', 'key'=>'APP_ENV', 'value'=>'local', 'ftype'=>'select', 'data'=>['local'=>'Local', 'production'=>'Production']],
                    ['title'=>'Debug app level', 'type'=>'hidden', 'key'=>'APP_LOG_LEVEL', 'value'=>env('APP_LOG_LEVEL'), 'data'=>['debug'=>'Debug', 'error'=>'Error']],
                    ['separator'=>'Links', 'title'=>'Link to terms and services', 'key'=>'LINK_TO_TS', 'value'=>env('LINK_TO_TS')],
                    [ 'title'=>'Link to privacy policy', 'key'=>'LINK_TO_PR', 'value'=>env('LINK_TO_PR')],
                
                    ['separator'=>"Custom fields on order", 'title'=>'Label on the custom fields', 'key'=>'LABEL_ON_CUSTOM_FIELDS', 'value'=>env('LABEL_ON_CUSTOM_FIELDS')]
                    
                
                ],
            ],

            [
                'name'=>'Finances',
                'slug'=>'finances',
                'icon'=>'ni ni-money-coins',
                'fields'=>[
                    ['separator'=>'General', 'title'=>'Tool used for subscriptions', 'key'=>'SUBSCRIPTION_PROCESSOR', 'value'=>env('SUBSCRIPTION_PROCESSOR'), 'ftype'=>'select', 'data'=>[]],
                    ['title'=>'Enable Pricing','key'=>'ENABLE_PRICING', 'value'=>env('ENABLE_PRICING'), 'ftype'=>'bool'],
                    ['title'=>'The free plan ID','title'=>'', 'key'=>'FREE_PRICING_ID', 'value'=>env('FREE_PRICING_ID')],
                    ['title'=>'Force users to use paid plan','title'=>'', 'key'=>'FORCE_USERS_TO_PAY', 'value'=>env('FORCE_USERS_TO_PAY'),'ftype'=>'bool'],

                    
                    ['title'=>'Enable Finance dashboard for owner', 'help'=>'More advance, finance related reports for owner', 'key'=>'ENABLE_FINANCES_OWNER', 'value'=>env('ENABLE_FINANCES_OWNER'), 'ftype'=>'bool'],
                    ['title'=>'Enable Finance dashboard for admin', 'key'=>'ENABLE_FINANCES_ADMIN', 'help'=>'More advance, finance related reports for admin', 'value'=>env('ENABLE_FINANCES_ADMIN'), 'ftype'=>'bool'],


                    ['separator'=>'Stripe', 'title'=>'Enable stripe for payments when ordering', 'key'=>'ENABLE_STRIPE', 'value'=>env('ENABLE_STRIPE'), 'ftype'=>'bool'],
                    ['title'=>'Stripe API key', 'key'=>'STRIPE_KEY', 'value'=>env('STRIPE_KEY')],
                    ['title'=>'Stripe API Secret', 'key'=>'STRIPE_SECRET', 'value'=>env('STRIPE_SECRET')],
                    ['title'=>'Enable Stripe connect', 'help'=>'If enabled, vendors will be able to connect, and money to be send directly to them', 'key'=>'ENABLE_STRIPE_CONNECT', 'value'=>env('ENABLE_STRIPE_CONNECT'), 'ftype'=>'bool'],
                    ["title"=> "System will use", "key" => "VENDORS_OR_ADMIN_STRIPE", "ftype" => "select", "onlyin"=>"qrsaas", "value"=>env('VENDORS_OR_ADMIN_STRIPE'),"data"=>[ "admin"=>"Admin defined Stripe", "vendor"=>"Vendor defined Stripe"]],

                    ['separator'=>'Local bank transfer', 'title'=>'Local bank transfer explanation', 'key'=>'LOCAL_TRANSFER_INFO', 'value'=>env('LOCAL_TRANSFER_INFO')],
                    ['title'=>'Bank Account', 'key'=>'LOCAL_TRANSFER_ACCOUNT', 'value'=>env('LOCAL_TRANSFER_ACCOUNT')],
                    
                    ],
            ],
            [
                'name'=>'Apps & Plugins',
                'slug'=>'plugins',
                'icon'=>'ni ni-spaceship',
                'fields'=>[

                    
                    ['separator'=>'WhatsApp ordering', 'title'=>'Enable WhatsApp order submit', 'help'=>'When activated, if owner has entered his whatsapp phone  a send to whatsapp order will be shown on order completed page. Order will be sent to owner whatsapp phone', 'key'=>'WHATSAPP_ORDERING_ENABLED', 'value'=>env('WHATSAPP_ORDERING_ENABLED'), 'ftype'=>'bool', 'onlyin'=>'qrsaas'],
                    ['separator'=>'WhatsApp ordering','title'=>'Enable WhatsApp order submit', 'help'=>'When activated, a send to whatsapp order will be shown on order completed page. Order will be sent to admin whatsapp phone', 'key'=>'WHATSAPP_ORDERING_ENABLED', 'value'=>env('WHATSAPP_ORDERING_ENABLED'), 'ftype'=>'bool', 'onlyin'=>'ft'],


                    ['separator'=>'Google plugins', 'title'=>'Recaptcha site key', 'help'=>"Make empty if you can't make submition on register screen", 'key'=>'RECAPTCHA_SITE_KEY', 'value'=>env('RECAPTCHA_SITE_KEY')],
                    ['title'=>'Recaptcha secret', 'help'=>"Make empty if you can't make submition on register screen", 'key'=>'RECAPTCHA_SECRET_KEY', 'value'=>env('RECAPTCHA_SECRET_KEY')],
                    ['title'=>'Google maps api key', 'key'=>'GOOGLE_MAPS_API_KEY', 'value'=>env('GOOGLE_MAPS_API_KEY')],
                    ['title'=>'Enable location search', 'key'=>'ENABLE_LOCATION_SEARCH', 'value'=>env('ENABLE_LOCATION_SEARCH'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['title'=>'Google analytics key', 'key'=>'GOOGLE_ANALYTICS', 'value'=>env('GOOGLE_ANALYTICS')],
                    ['separator'=>'Login services', 'title'=>'Google client id for sign in', 'key'=>'GOOGLE_CLIENT_ID', 'value'=>env('GOOGLE_CLIENT_ID'), 'onlyin'=>'ft'],
                    ['title'=>'Google client secret for sign in', 'key'=>'GOOGLE_CLIENT_SECRET', 'value'=>env('GOOGLE_CLIENT_SECRET'), 'onlyin'=>'ft'],
                    ['title'=>'Google redirect link for sign in', 'key'=>'GOOGLE_REDIRECT', 'value'=>env('GOOGLE_REDIRECT'), 'onlyin'=>'ft'],
                    ['title'=>'Facebook client id', 'key'=>'FACEBOOK_CLIENT_ID', 'value'=>env('FACEBOOK_CLIENT_ID'), 'onlyin'=>'ft'],
                    ['title'=>'Facebook client secret', 'key'=>'FACEBOOK_CLIENT_SECRET', 'value'=>env('FACEBOOK_CLIENT_SECRET'), 'onlyin'=>'ft'],
                    ['title'=>'Facebook redirec', 'key'=>'FACEBOOK_REDIRECT', 'value'=>env('FACEBOOK_REDIRECT'), 'onlyin'=>'ft'],
                    ['separator'=>'Notifications', 'title'=>'Onesignal App id', 'key'=>'ONESIGNAL_APP_ID', 'value'=>env('ONESIGNAL_APP_ID')],
                    ['title'=>'Onesignal rest api key', 'key'=>'ONESIGNAL_REST_API_KEY', 'value'=>env('ONESIGNAL_REST_API_KEY')],
                    ['title'=>'Twillo Account SID', 'key'=>'TWILIO_ACCOUNT_SID', 'value'=>env('TWILIO_ACCOUNT_SID'), 'onlyin'=>'ft'],
                    ['title'=>'Twillo Account auth token', 'key'=>'TWILIO_AUTH_TOKEN', 'value'=>env('TWILIO_AUTH_TOKEN'), 'onlyin'=>'ft'],
                    ['title'=>'Twillo from number', 'key'=>'TWILIO_FROM', 'value'=>env('TWILIO_FROM'), 'onlyin'=>'ft'],
                    ['title'=>'System should send sms notifications', 'key'=>'SEND_SMS_NOTIFICATIONS', 'value'=>env('SEND_SMS_NOTIFICATIONS'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['separator'=>'Pusher live notifications', 'title'=>'Pusher app id', 'help'=>'Pusher is used for notification for call waiter and new orders avaialbe', 'key'=>'PUSHER_APP_ID', 'value'=>env('PUSHER_APP_ID'), 'onlyin'=>'qrsaas'],
                    ['title'=>'Pusher app key', 'key'=>'PUSHER_APP_KEY', 'value'=>env('PUSHER_APP_KEY'),'onlyin'=>'qrsaas'],
                    ['title'=>'Pusher app secret', 'key'=>'PUSHER_APP_SECRET', 'value'=>env('PUSHER_APP_SECRET'),'onlyin'=>'qrsaas'],
                    ['title'=>'Pusher app cluster', 'key'=>'PUSHER_APP_CLUSTER', 'value'=>env('PUSHER_APP_CLUSTER'),'onlyin'=>'qrsaas'],
                    ['title'=>'Broadcast Driver', 'key'=>'BROADCAST_DRIVER', 'value'=>env('BROADCAST_DRIVER'), 'ftype'=>'select', 'data'=>['log'=>'Log', 'pusher'=>'Pusher','onlyin'=>'qrsaas']],

                    ['separator'=>'Cookies','title'=>'Cookie Consent', 'key'=>'ENABLE_DEFAULT_COOKIE_CONSENT', 'value'=>env('ENABLE_DEFAULT_COOKIE_CONSENT'), 'ftype'=>'bool', 'help'=>'Cookie consent popup - you can import other via js'],

                    

                    ['separator'=>'Share this', 'title'=>'Share this property id', 'help'=>'You can find this number in Share this import link', 'key'=>'SHARE_THIS_PROPERTY', 'value'=>env('SHARE_THIS_PROPERTY')],
                    ['separator'=>'Futy', 'title'=>'Futy key', 'key'=>'FUTY_KEY', 'value'=>env('FUTY_KEY')],

                ],
            ],
            [
                'name'=>'SMTP',
                'slug'=>'smtp',
                'icon'=>'ni ni-email-83',
                'fields'=>[
                    ['title'=>'Mail driver', 'key'=>'MAIL_MAILER', 'value'=>'smtp', 'ftype'=>'select', 'data'=>['smtp'=>'SMTP', 'sendmail'=>'PHP Sendmail - best of port 465']],
                    ['title'=>'Host', 'key'=>'MAIL_HOST', 'value'=>'smtp.mailtrap.io', 'hint'=>'Your SMTP send server'],
                    ['title'=>'Port', 'key'=>'MAIL_PORT', 'value'=>'2525', 'help'=>'Common ports are 26, 465, 587'],
                    ['title'=>'Encryption', 'key'=>'MAIL_ENCRYPTION', 'value'=>'', 'ftype'=>'select', 'data'=>['null'=>'Null - best for port 26', ''=>'None - best for port 587', 'ssl'=>'SSL - best for port 465','tls'=>"TLS",'starttls'=>"STARTTLS"]],

                    ['title'=>'Username', 'key'=>'MAIL_USERNAME', 'value'=>'802fc656dd8029'],
                    ['title'=>'Password', 'key'=>'MAIL_PASSWORD', 'value'=>'bbcf39d313eac6'],
                    ['title'=>'From address', 'key'=>'MAIL_FROM_ADDRESS', 'value'=>'bd5d577b7c-be3ae1@inbox.mailtrap.io'],
                    ['title'=>'From Name', 'key'=>'MAIL_FROM_NAME', 'value'=>'Your Site'],

                    ['title'=>'', 'key'=>'DB_CONNECTION', 'value'=>'mysql', 'data'=>['mysql'=>'MySql'], 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'DB_HOST', 'value'=>'127.0.0.1', 'hint'=>'Your SMTP send server', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'DB_PORT', 'value'=>'3306', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'DB_DATABASE', 'value'=>'db_food_one', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'DB_USERNAME', 'value'=>'root', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'DB_PASSWORD', 'value'=>'', 'type'=>'hidden'],

                    ['title'=>'', 'key'=>'CACHE_DRIVER', 'value'=>'file', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'SESSION_DRIVER', 'value'=>'file', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'QUEUE_DRIVER', 'value'=>'sync', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'REDIS_HOST', 'value'=>'127.0.0.1', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'REDIS_PASSWORD', 'value'=>'null', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'REDIS_PORT', 'value'=>'6379', 'type'=>'hidden'],

                ],
            ],
    ],
    ];       
}

if(env('APP_ENV') == 'production'){
    // dd("here");
    return [
        'version' => '3.0.6',
    'env'=>[
            [
                'name'=>'Setup',
                'slug'=>'setup',
                'icon'=>'ni ni-settings',
                'fields'=>[
                    ['separator'=>'System', 'title'=>'Project name', 'key'=>'APP_NAME', 'value'=>env('APP_NAME')],
                    ['title'=>'Link to your site', 'key'=>'APP_URL', 'value'=>env('APP_URL')],
                    ['title'=>'Subdomains', 'key'=>'IGNORE_SUBDOMAINS', 'value'=>env('IGNORE_SUBDOMAINS'), 'help'=>'Subdomain your app works in. ex if your subdomain is app.yourdomain.com, here you should have www,app '],
                    ['title'=>'App debugging', 'key'=>'APP_DEBUG', 'value'=>env('APP_DEBUG'), 'ftype'=>'bool', 'help'=>'Enable if you experience error 500'],
                    ['title'=>'Wildcard domain', 'help'=>'If you have followed the procedure to enable wildcard domain, select this so you can have shopname.yourdomain.com', 'key'=>'WILDCARD_DOMAIN_READY', 'value'=>env('WILDCARD_DOMAIN_READY'), 'ftype'=>'bool'],
                    ['title'=>'Enable guest log', 'key'=>'ENABLE_GUEST_LOG', 'value'=>env('ENABLE_GUEST_LOG'), 'ftype'=>'bool', 'onlyin'=>'qrsaas'],
                    ['title'=>'Hide project branding on menu page', 'key'=>'HIDE_PROJECT_BRANDING', 'value'=>env('HIDE_PROJECT_BRANDING'), 'ftype'=>'bool', 'onlyin'=>'qrsaas'],
                    ['title'=>'Disable the landing page', 'help'=>'When landing page is disabled, the project will start from the login page. In this case it is best to have the system in subdomain', 'key'=>'DISABLE_LANDING', 'value'=>env('DISABLE_LANDING'), 'ftype'=>'bool', 'onlyin'=>'qrsaas'],
                    ['title'=>'Front end template', 'key'=>'FRONT_END_TEMPLATE', 'value'=>env('FRONT_END_TEMPLATE'), 'ftype'=>'select', 'data'=>[]],
                    
                    ['separator'=>'Ordering and items', 'title'=>'Completely disable ordering', 'key'=>'QRSAAS_DISABLE_ODERING', 'value'=>env('QRSAAS_DISABLE_ODERING'), 'ftype'=>'bool', 'onlyin'=>'qrsaas', 'help'=>'If this is selected, then cart, and orders will not be shown'],
                    ['title'=>'Directly approve order', 'help'=>'When selected admin does not have to approve order', 'key'=>'APP_ORDER_APPROVE_DIRECTLY', 'value'=>'false', 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['title'=>'Assign orders to drivers automatically', 'key'=>'ALLOW_AUTOMATED_ASSIGN_TO_DRIVER', 'value'=>env('ALLOW_AUTOMATED_ASSIGN_TO_DRIVER'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['title'=>'Allow vendor to do their own delivery', 'key'=>'APP_ALLOW_SELF_DELIVER', 'value'=>env('APP_ALLOW_SELF_DELIVER'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['title'=>'Time for order to be prepared', 'help'=>'Average time order is prepared, so users can not order before vendor or shop is closing', 'key'=>'TIME_TO_PREPARE_ORDER_IN_MINUTES', 'value'=>env('TIME_TO_PREPARE_ORDER_IN_MINUTES'), 'type'=>'hidden', 'onlyin'=>'ft'],
                    ['title'=>'Search radius for vendors', 'help'=>'Maximum distance that vendors are shown to user', 'key'=>'LOCATION_SEARCH_RADIUS', 'value'=>env('LOCATION_SEARCH_RADIUS'), 'type'=>'number', 'onlyin'=>'ft'],
                    ['title'=>'Search radius for drivers', 'help'=>'When you have automatic assign to driver, this is a way to show the system for the maximum range to look for driver', 'key'=>'DRIVER_SEARCH_RADIUS', 'value'=>env('DRIVER_SEARCH_RADIUS'), 'type'=>'number', 'onlyin'=>'ft'],
                    ['title'=>'Disable continues orders', 'help'=>'If enabled, orders done on same table will be merged, until order is not closed/finished by vendor', 'key'=>'DISABLE_CONTINIUS_ORDERING', 'value'=>env('DISABLE_CONTINIUS_ORDERING'), 'ftype'=>'bool', 'onlyin'=>'qrsaas'],
                    ['title'=>'Enable pickup , system wide', 'key'=>'ENABLE_PICKUP', 'value'=>env('ENABLE_PICKUP'), 'ftype'=>'bool'],
                    ['title'=>'Hide cash on delivery, system wide', 'key'=>'HIDE_COD', 'value'=>env('HIDE_COD'), 'ftype'=>'bool'],
                    ['title'=>'Delivery / time intervals in minutes', 'help'=>'Separate the time slots into N Minutes. ex 09:00-09-15 , 09:15-09:30 - value is 15 ', 'key'=>'DELIVERY_INTERVAL_IN_MINUTES', 'value'=>env('DELIVERY_INTERVAL_IN_MINUTES'), 'type'=>'number'],
                    ['title'=>'Default payment type', 'key'=>'DEFAULT_PAYMENT', 'value'=>env('DEFAULT_PAYMENT'), 'ftype'=>'select', 'data'=>['cod'=>'Cash on Delivery', 'stripe'=>'Stripe Card processing']],
                    ['title'=>'Is your project multi city', 'help'=>'When selected, the front page will display list of cities', 'key'=>'MULTI_CITY', 'value'=>env('MULTI_CITY'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['title'=>'Single mode - run this site for one vendor only', 'key'=>'SINGLE_MODE', 'value'=>env('SINGLE_MODE'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['title'=>'The id of the vendor for single mode', 'help'=>'If you have single mode selected, than this vendor id will be show', 'key'=>'SINGLE_MODE_ID', 'value'=>env('SINGLE_MODE_ID'), 'type'=>'number', 'onlyin'=>'ft'],
                    ['title'=>'Enable import via CSV for vendor items', 'key'=>'ENABLE_IMPORT_CSV', 'value'=>env('ENABLE_IMPORT_CSV'), 'ftype'=>'bool'],  
                    ['separator'=>'Delivery costs', 'title'=>'Enable cost per distance', 'key'=>'ENABLE_COST_PER_DISTANCE', 'value'=>env('ENABLE_COST_PER_DISTANCE'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['title'=>'Cost per kilometer', 'key'=>'COST_PER_KILOMETER', 'value'=>env('COST_PER_KILOMETER'), 'onlyin'=>'ft'],
                    ['title'=>'Enable cost based on range', 'help'=>'If you have enable cost based on range, the delivery cost will be calculated based on what range the distance for delivery is in', 'key'=>'ENABLE_COST_IN_RANGE', 'value'=>env('ENABLE_COST_IN_RANGE'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['help'=>'Range in kilometers ex from 0km - 5km will be 0-5', 'title'=>'First range', 'key'=>'RANGE_ONE', 'value'=>env('RANGE_ONE'), 'onlyin'=>'ft'],
                    ['title'=>'Second range', 'key'=>'RANGE_TWO', 'value'=>env('RANGE_TWO'), 'onlyin'=>'ft'],
                    ['title'=>'Third range', 'key'=>'RANGE_THREE', 'value'=>env('RANGE_THREE'), 'onlyin'=>'ft'],
                    ['title'=>'Fourth range', 'key'=>'RANGE_FOUR', 'value'=>env('RANGE_FOUR'), 'onlyin'=>'ft'],
                    ['title'=>'Fifth range', 'key'=>'RANGE_FIVE', 'value'=>env('RANGE_FIVE'), 'onlyin'=>'ft'],

                    ['title'=>'Price for first range', 'key'=>'RANGE_ONE_PRICE', 'value'=>env('RANGE_ONE_PRICE'), 'onlyin'=>'ft'],
                    ['title'=>'Price for second range', 'key'=>'RANGE_TWO_PRICE', 'value'=>env('RANGE_TWO_PRICE'), 'onlyin'=>'ft'],
                    ['title'=>'Price for third range', 'key'=>'RANGE_THREE_PRICE', 'value'=>env('RANGE_THREE_PRICE'), 'onlyin'=>'ft'],
                    ['title'=>'Price for fourth range', 'key'=>'RANGE_FOUR_PRICE', 'value'=>env('RANGE_FOUR_PRICE'), 'onlyin'=>'ft'],
                    ['title'=>'Price for fifth range', 'key'=>'RANGE_FIVE_PRICE', 'value'=>env('RANGE_FIVE_PRICE'), 'onlyin'=>'ft'],

                    ['title'=>'Driver percent from the order', 'help'=>'From 0-100. Based on your business type, this value determines how much driver will make from the delivery fee. This value can be change on driver level also', 'key'=>'DRIVER_PERCENT_FROM_DELIVERY_FEE', 'value'=>env('DRIVER_PERCENT_FROM_DELIVERY_FEE'), 'onlyin'=>'ft'],

                    ['title'=>'Demo vendor slug', 'separator'=>'Other settings', 'help'=>'Enter the domain - slug of your demo vendor that will show on the landing page', 'key'=>'demo_restaurant_slug', 'value'=>env('demo_restaurant_slug'), 'onlyin'=>'qrsaas'],
                    ['title'=>'Vendor entity name', 'help'=>'Ex. Company, Restaurant, Shop, Business etc', 'key'=>'VENDOR_ENTITY_NAME', 'value'=>env('VENDOR_ENTITY_NAME')],
                    ['title'=>'Vendor entity name in plural', 'help'=>'Ex. Companies, Restaurants, Shops, Businesses etc', 'key'=>'VENDOR_ENTITY_NAME_PLURAL', 'value'=>env('VENDOR_ENTITY_NAME_PLURAL')],
                    ['title'=>'Url route for vendor', 'help'=>'If you want to change the link the vendor is open in. ex yourdomain.com/shop/shopname. shop - should be the value here', 'key'=>'URL_ROUTE', 'value'=>env('URL_ROUTE')],
                    ['title'=>'Url route for vendor in plural', 'help'=>'If you want to change the link the vendor management is open in. ex yourdomain.com/shops. shops - should be the value here', 'key'=>'URL_ROUTE_PLURAL', 'value'=>env('URL_ROUTE_PLURAL')],
                    ['title'=>'Apps download code', 'help'=>'If you have extended license, or some specific product, we will send you App download code. Send us ticket.', 'key'=>'EXTENDED_LICENSE_DOWNLOAD_CODE', 'value'=>env('EXTENDED_LICENSE_DOWNLOAD_CODE')], 
                    ['title'=>'Print templates images', 'help'=>'Links to images representing the images for the templates. You can use remote images', 'key'=>'templates', 'value'=>env('templates'), 'onlyin'=>'qrsaas'],
                    ['title'=>'Print templates zip', 'help'=>'Link to .zip representing the template for download. You can use remote file', 'key'=>'linkToTemplates', 'value'=>env('linkToTemplates'), 'onlyin'=>'qrsaas'],

                    ['title'=>'Chars in menu list', 'key'=>'CHARS_IN_MENU_LIST', 'value'=>env('CHARS_IN_MENU_LIST'), 'type'=>"number", 'help'=>'Controls to how many chars the menu description should be trimmed'],
                    ['title'=>'Enable multi language menus', 'help'=>'When enabled, vendors can add language version to the menu', 'key'=>'ENABLE_MILTILANGUAGE_MENUS', 'value'=>env('ENABLE_MILTILANGUAGE_MENUS'), 'ftype'=>'bool'],

                    ['title'=>'Enable change log in update screen', 'key'=>'ENABLE_CHANGELOG_IN_UPDATE', 'value'=>env('ENABLE_CHANGELOG_IN_UPDATE'), 'ftype'=>'bool'],

                    ['title'=>'Position for the register driver link', 'key'=>'DRIVER_LINK_REGISTER_POSITION', 'value'=>env('DRIVER_LINK_REGISTER_POSITION'), 'data'=>['footer'=>'Footer', 'navbar'=>'Navigation bar', 'dontshow'=>'Hidden'], 'ftype'=>'select', 'onlyin'=>'ft'],
                    ['title'=>'Position for the register vendor link', 'key'=>'RESTAURANT_LINK_REGISTER_POSITION', 'value'=>env('RESTAURANT_LINK_REGISTER_POSITION'), 'data'=>['footer'=>'Footer', 'navbar'=>'Navigation bar', 'dontshow'=>'Hidden'], 'ftype'=>'select', 'onlyin'=>'ft'],

                    ['title'=>'Title of driver link', 'key'=>'DRIVER_LINK_REGISTER_TITLE', 'value'=>env('DRIVER_LINK_REGISTER_TITLE'), 'onlyin'=>'ft'],
                    ['title'=>'Title for the register vendor link', 'key'=>'RESTAURANT_LINK_REGISTER_TITLE', 'value'=>env('RESTAURANT_LINK_REGISTER_TITLE'), 'onlyin'=>'ft'],

                    ['title'=>'Mobile app secret', 'key'=>'APP_SECRET', 'value'=>'APP_SECRET'],
                    ['title'=>'App environment', 'key'=>'APP_ENV', 'value'=>'production', 'ftype'=>'select', 'data'=>['local'=>'Local', 'production'=>'Production']],
                    ['title'=>'Debug app level', 'type'=>'hidden', 'key'=>'APP_LOG_LEVEL', 'value'=>env('APP_LOG_LEVEL'), 'data'=>['debug'=>'Debug', 'error'=>'Error']],
                    ['separator'=>'Links', 'title'=>'Link to terms and services', 'key'=>'LINK_TO_TS', 'value'=>env('LINK_TO_TS')],
                    [ 'title'=>'Link to privacy policy', 'key'=>'LINK_TO_PR', 'value'=>env('LINK_TO_PR')],
                
                    ['separator'=>"Custom fields on order", 'title'=>'Label on the custom fields', 'key'=>'LABEL_ON_CUSTOM_FIELDS', 'value'=>env('LABEL_ON_CUSTOM_FIELDS')]
                    
                
                ],
            ],

            [
                'name'=>'Finances',
                'slug'=>'finances',
                'icon'=>'ni ni-money-coins',
                'fields'=>[
                    ['separator'=>'General', 'title'=>'Tool used for subscriptions', 'key'=>'SUBSCRIPTION_PROCESSOR', 'value'=>env('SUBSCRIPTION_PROCESSOR'), 'ftype'=>'select', 'data'=>[]],
                    ['title'=>'Enable Pricing','key'=>'ENABLE_PRICING', 'value'=>env('ENABLE_PRICING'), 'ftype'=>'bool'],
                    ['title'=>'The free plan ID','title'=>'', 'key'=>'FREE_PRICING_ID', 'value'=>env('FREE_PRICING_ID')],
                    ['title'=>'Force users to use paid plan','title'=>'', 'key'=>'FORCE_USERS_TO_PAY', 'value'=>env('FORCE_USERS_TO_PAY'),'ftype'=>'bool'],

                    
                    ['title'=>'Enable Finance dashboard for owner', 'help'=>'More advance, finance related reports for owner', 'key'=>'ENABLE_FINANCES_OWNER', 'value'=>env('ENABLE_FINANCES_OWNER'), 'ftype'=>'bool'],
                    ['title'=>'Enable Finance dashboard for admin', 'key'=>'ENABLE_FINANCES_ADMIN', 'help'=>'More advance, finance related reports for admin', 'value'=>env('ENABLE_FINANCES_ADMIN'), 'ftype'=>'bool'],


                    ['separator'=>'Stripe', 'title'=>'Enable stripe for payments when ordering', 'key'=>'ENABLE_STRIPE', 'value'=>env('ENABLE_STRIPE'), 'ftype'=>'bool'],
                    ['title'=>'Stripe API key', 'key'=>'STRIPE_KEY', 'value'=>env('STRIPE_KEY')],
                    ['title'=>'Stripe API Secret', 'key'=>'STRIPE_SECRET', 'value'=>env('STRIPE_SECRET')],
                    ['title'=>'Enable Stripe connect', 'help'=>'If enabled, vendors will be able to connect, and money to be send directly to them', 'key'=>'ENABLE_STRIPE_CONNECT', 'value'=>env('ENABLE_STRIPE_CONNECT'), 'ftype'=>'bool'],
                    ["title"=> "System will use", "key" => "VENDORS_OR_ADMIN_STRIPE", "ftype" => "select", "onlyin"=>"qrsaas", "value"=>env('VENDORS_OR_ADMIN_STRIPE'),"data"=>[ "admin"=>"Admin defined Stripe", "vendor"=>"Vendor defined Stripe"]],

                    ['separator'=>'Local bank transfer', 'title'=>'Local bank transfer explanation', 'key'=>'LOCAL_TRANSFER_INFO', 'value'=>env('LOCAL_TRANSFER_INFO')],
                    ['title'=>'Bank Account', 'key'=>'LOCAL_TRANSFER_ACCOUNT', 'value'=>env('LOCAL_TRANSFER_ACCOUNT')],
                    
                    ],
            ],
            [
                'name'=>'Apps & Plugins',
                'slug'=>'plugins',
                'icon'=>'ni ni-spaceship',
                'fields'=>[

                    
                    ['separator'=>'WhatsApp ordering', 'title'=>'Enable WhatsApp order submit', 'help'=>'When activated, if owner has entered his whatsapp phone  a send to whatsapp order will be shown on order completed page. Order will be sent to owner whatsapp phone', 'key'=>'WHATSAPP_ORDERING_ENABLED', 'value'=>env('WHATSAPP_ORDERING_ENABLED'), 'ftype'=>'bool', 'onlyin'=>'qrsaas'],
                    ['separator'=>'WhatsApp ordering','title'=>'Enable WhatsApp order submit', 'help'=>'When activated, a send to whatsapp order will be shown on order completed page. Order will be sent to admin whatsapp phone', 'key'=>'WHATSAPP_ORDERING_ENABLED', 'value'=>env('WHATSAPP_ORDERING_ENABLED'), 'ftype'=>'bool', 'onlyin'=>'ft'],


                    ['separator'=>'Google plugins', 'title'=>'Recaptcha site key', 'help'=>"Make empty if you can't make submition on register screen", 'key'=>'RECAPTCHA_SITE_KEY', 'value'=>env('RECAPTCHA_SITE_KEY')],
                    ['title'=>'Recaptcha secret', 'help'=>"Make empty if you can't make submition on register screen", 'key'=>'RECAPTCHA_SECRET_KEY', 'value'=>env('RECAPTCHA_SECRET_KEY')],
                    ['title'=>'Google maps api key', 'key'=>'GOOGLE_MAPS_API_KEY', 'value'=>env('GOOGLE_MAPS_API_KEY')],
                    ['title'=>'Enable location search', 'key'=>'ENABLE_LOCATION_SEARCH', 'value'=>env('ENABLE_LOCATION_SEARCH'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['title'=>'Google analytics key', 'key'=>'GOOGLE_ANALYTICS', 'value'=>env('GOOGLE_ANALYTICS')],
                    ['separator'=>'Login services', 'title'=>'Google client id for sign in', 'key'=>'GOOGLE_CLIENT_ID', 'value'=>env('GOOGLE_CLIENT_ID'), 'onlyin'=>'ft'],
                    ['title'=>'Google client secret for sign in', 'key'=>'GOOGLE_CLIENT_SECRET', 'value'=>env('GOOGLE_CLIENT_SECRET'), 'onlyin'=>'ft'],
                    ['title'=>'Google redirect link for sign in', 'key'=>'GOOGLE_REDIRECT', 'value'=>env('GOOGLE_REDIRECT'), 'onlyin'=>'ft'],
                    ['title'=>'Facebook client id', 'key'=>'FACEBOOK_CLIENT_ID', 'value'=>env('FACEBOOK_CLIENT_ID'), 'onlyin'=>'ft'],
                    ['title'=>'Facebook client secret', 'key'=>'FACEBOOK_CLIENT_SECRET', 'value'=>env('FACEBOOK_CLIENT_SECRET'), 'onlyin'=>'ft'],
                    ['title'=>'Facebook redirec', 'key'=>'FACEBOOK_REDIRECT', 'value'=>env('FACEBOOK_REDIRECT'), 'onlyin'=>'ft'],
                    ['separator'=>'Notifications', 'title'=>'Onesignal App id', 'key'=>'ONESIGNAL_APP_ID', 'value'=>env('ONESIGNAL_APP_ID')],
                    ['title'=>'Onesignal rest api key', 'key'=>'ONESIGNAL_REST_API_KEY', 'value'=>env('ONESIGNAL_REST_API_KEY')],
                    ['title'=>'Twillo Account SID', 'key'=>'TWILIO_ACCOUNT_SID', 'value'=>env('TWILIO_ACCOUNT_SID'), 'onlyin'=>'ft'],
                    ['title'=>'Twillo Account auth token', 'key'=>'TWILIO_AUTH_TOKEN', 'value'=>env('TWILIO_AUTH_TOKEN'), 'onlyin'=>'ft'],
                    ['title'=>'Twillo from number', 'key'=>'TWILIO_FROM', 'value'=>env('TWILIO_FROM'), 'onlyin'=>'ft'],
                    ['title'=>'System should send sms notifications', 'key'=>'SEND_SMS_NOTIFICATIONS', 'value'=>env('SEND_SMS_NOTIFICATIONS'), 'ftype'=>'bool', 'onlyin'=>'ft'],
                    ['separator'=>'Pusher live notifications', 'title'=>'Pusher app id', 'help'=>'Pusher is used for notification for call waiter and new orders avaialbe', 'key'=>'PUSHER_APP_ID', 'value'=>env('PUSHER_APP_ID'), 'onlyin'=>'qrsaas'],
                    ['title'=>'Pusher app key', 'key'=>'PUSHER_APP_KEY', 'value'=>env('PUSHER_APP_KEY'),'onlyin'=>'qrsaas'],
                    ['title'=>'Pusher app secret', 'key'=>'PUSHER_APP_SECRET', 'value'=>env('PUSHER_APP_SECRET'),'onlyin'=>'qrsaas'],
                    ['title'=>'Pusher app cluster', 'key'=>'PUSHER_APP_CLUSTER', 'value'=>env('PUSHER_APP_CLUSTER'),'onlyin'=>'qrsaas'],
                    ['title'=>'Broadcast Driver', 'key'=>'BROADCAST_DRIVER', 'value'=>env('BROADCAST_DRIVER'), 'ftype'=>'select', 'data'=>['log'=>'Log', 'pusher'=>'Pusher','onlyin'=>'qrsaas']],

                    ['separator'=>'Cookies','title'=>'Cookie Consent', 'key'=>'ENABLE_DEFAULT_COOKIE_CONSENT', 'value'=>env('ENABLE_DEFAULT_COOKIE_CONSENT'), 'ftype'=>'bool', 'help'=>'Cookie consent popup - you can import other via js'],

                    

                    ['separator'=>'Share this', 'title'=>'Share this property id', 'help'=>'You can find this number in Share this import link', 'key'=>'SHARE_THIS_PROPERTY', 'value'=>env('SHARE_THIS_PROPERTY')],
                    ['separator'=>'Futy', 'title'=>'Futy key', 'key'=>'FUTY_KEY', 'value'=>env('FUTY_KEY')],

                ],
            ],
            [
                'name'=>'SMTP',
                'slug'=>'smtp',
                'icon'=>'ni ni-email-83',
                'fields'=>[
                    ['title'=>'Mail driver', 'key'=>'MAIL_MAILER', 'value'=>env('MAIL_MAILER'), 'ftype'=>'select', 'data'=>['smtp'=>'SMTP', 'sendmail'=>'PHP Sendmail - best of port 465']],
                    ['title'=>'Host', 'key'=>'MAIL_HOST', 'value'=>env('MAIL_HOST'), 'hint'=>'Your SMTP send server'],
                    ['title'=>'Port', 'key'=>'MAIL_PORT', 'value'=>env('MAIL_PORT'), 'help'=>'Common ports are 26, 465, 587'],
                    ['title'=>'Encryption', 'key'=>'MAIL_ENCRYPTION', 'value'=>env('MAIL_ENCRYPTION'), 'ftype'=>'select', 'data'=>['null'=>'Null - best for port 26', ''=>'None - best for port 587', 'ssl'=>'SSL - best for port 465','tls'=>"TLS",'starttls'=>"STARTTLS"]],

                    ['title'=>'Username', 'key'=>'MAIL_USERNAME', 'value'=>env('MAIL_USERNAME')],
                    ['title'=>'Password', 'key'=>'MAIL_PASSWORD', 'value'=>env('MAIL_PASSWORD')],
                    ['title'=>'From address', 'key'=>'MAIL_FROM_ADDRESS', 'value'=>env('MAIL_FROM_ADDRESS')],
                    ['title'=>'From Name', 'key'=>'MAIL_FROM_NAME', 'value'=>env('MAIL_FROM_NAME')],

                    ['title'=>'', 'key'=>'DB_CONNECTION', 'value'=>'mysql', 'data'=>['mysql'=>'MySql'], 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'DB_HOST', 'value'=>env('DB_HOST'), 'hint'=>'Your SMTP send server', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'DB_PORT', 'value'=>env('DB_PORT'), 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'DB_DATABASE', 'value'=>env('DB_DATABASE'), 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'DB_USERNAME', 'value'=>env('DB_USERNAME'), 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'DB_PASSWORD', 'value'=>env('DB_PASSWORD'), 'type'=>'hidden'],

                    ['title'=>'', 'key'=>'CACHE_DRIVER', 'value'=>'file', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'SESSION_DRIVER', 'value'=>'file', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'QUEUE_DRIVER', 'value'=>'sync', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'REDIS_HOST', 'value'=>'127.0.0.1', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'REDIS_PASSWORD', 'value'=>'null', 'type'=>'hidden'],
                    ['title'=>'', 'key'=>'REDIS_PORT', 'value'=>'6379', 'type'=>'hidden'],

                ],
            ],
    ],
    ]; 
}

