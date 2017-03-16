<?php

return [
    'display_name' => 'Payment',
    'description' => 'Handles payment routines',

    'startup_script' => [],

    'functions' => [
        'gateways' => [
            'display_name' => 'Payment Gateway Control Panel',
            'script' => 'gateways.php',
            'type' => 'admin',
            'access_type' => ['admin'],
            'raw_output' => false,
        ],
        'configure_gateway' => [
            'display_name' => 'Payment Gateway Control Panel',
            'script' => 'configure_gateway.php',
            'type' => 'admin',
            'access_type' => ['admin'],
            'raw_output' => false,
        ],
        'get_product_price' => [
            'display_name' => 'Get product price',
            'script' => 'get_product_price.php',
            'type' => 'admin',
            'access_type' => ['admin'],
            'raw_output' => false,
        ],
        'manage_invoices' => [
            'display_name' => 'Manage Invoices',
            'script' => 'manage_invoices.php',
            'type' => 'admin',
            'access_type' => ['admin'],
        ],
        'edit_invoice' => [
            'display_name' => 'Edit Invoice',
            'script' => 'edit_invoice.php',
            'type' => 'admin',
            'access_type' => ['admin'],
        ],
        'payment_page' => [
            'display_name' => 'Payment',
            'script' => 'payment_page.php',
            'type' => 'user',
            'access_type' => ['user'],
            'raw_output' => false,
        ],
        'paypal_pro_fill_payment_card' => [
            'display_name' => 'PayPal Payments Pro',
            'script' => 'paypal_pro_fill_payment_card.php',
            'type' => 'user',
            'access_type' => ['user'],
            'raw_output' => false,
        ],
        'callback' => [
            'display_name' => 'Payment',
            'script' => 'callback_payment_page.php',
            'type' => 'user',
            'access_type' => ['user'],
            'raw_output' => false,
        ],
        'notifications' => [
            'display_name' => 'Payment notifications',
            'script' => 'notifications_payment_page.php',
            'type' => 'user',
            'access_type' => ['user'],
            'raw_output' => false,
        ],
        'cancel_recurring' => [
            'display_name' => 'Cancel recurring',
            'script' => 'cancel_recurring.php',
            'type' => 'user',
            'access_type' => ['user'],
            'raw_output' => false,
        ],
        'products' => [
            'display_name' => 'Products',
            'script' => 'products.php',
            'type' => 'admin',
            'access_type' => ['admin'],
            'raw_output' => false,
        ],
        'add_product' => [
            'display_name' => 'Add Product',
            'script' => 'add_product.php',
            'type' => 'admin',
            'access_type' => ['admin'],
            'raw_output' => false,
        ],
        'edit_product' => [
            'display_name' => 'Edit Product',
            'script' => 'edit_product.php',
            'type' => 'admin',
            'access_type' => ['admin'],
            'raw_output' => false,
        ],
        'user_products' => [
            'display_name' => 'Products',
            'script' => 'products.php',
            'type' => 'user',
            'access_type' => ['user'],
            'raw_output' => false,
            'params' => ['action', 'userGroupID']
        ],
        'shopping_cart' => [
            'display_name' => 'Shopping Cart',
            'script' => 'shopping_cart.php',
            'type' => 'user',
            'access_type' => ['user'],
            'raw_output' => false,
        ],
        'user_product' => [
            'display_name' => 'User Product',
            'script' => 'user_product.php',
            'type' => 'admin',
            'access_type' => ['admin'],
            'raw_output' => false,
            'params' => ['action']
        ],
        'show_shopping_cart' => [
            'display_name' => 'Show Shopping Cart',
            'script' => 'show_shopping_cart.php',
            'type' => 'user',
            'access_type' => ['user'],
            'raw_output' => false,
        ],
        'manage_promotions' => [
            'display_name' => 'Manage Discounts',
            'script' => 'manage_promotions.php',
            'type' => 'admin',
            'access_type' => ['admin'],
            'raw_output' => false,
            'params' => ['action']
        ],
        'promotions_log' => [
            'display_name' => 'Discounts Log',
            'script' => 'promotions_log.php',
            'type' => 'admin',
            'access_type' => ['admin'],
            'raw_output' => false,
        ],
        'invoice' => [
            'display_name' => 'Invoice',
            'script' => 'invoice.php',
            'type' => 'user',
            'access_type' => ['user'],
            'raw_output' => false,
        ],
    ],
];
