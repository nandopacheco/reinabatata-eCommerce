<?php

return [
    [
        'key'   => 'account',
        'name'  => 'shop::app.layouts.my-account',
        'route' =>'customer.profile.index',
        'sort'  => 1,
    ], [
        'key'   => 'account.profile',
        'name'  => 'shop::app.layouts.profile',
        'route' =>'customer.profile.index',
        'sort'  => 1,
    ], [
        'key'   => 'account.address',
        'name'  => 'shop::app.layouts.address',
        'route' =>'customer.address.index',
        'sort'  => 2,
    ], [
        'key'   => 'account.wishlist',
        'name'  => 'shop::app.layouts.wishlist',
        'route' =>'customer.wishlist.index',
        'sort'  => 4,
    ],  [
        'key'   => 'account.orders',
        'name'  => 'shop::app.layouts.orders',
        'route' =>'customer.orders.index',
        'sort'  => 6,
    ]
];

?>