<?php

return [
    'importers' => [
        'customers' => [
            'title' => 'গ্রাহকগণ',

            'validation' => [
                'errors' => [
                    'duplicate-email'        => 'ইমেল: \'%s\' ইম্পোর্ট ফাইলে একাধিকবার পাওয়া গেছে।',
                    'duplicate-phone'        => 'ফোন: \'%s\' ইম্পোর্ট ফাইলে একাধিকবার পাওয়া গেছে।',
                    'email-not-found'        => 'ইমেল: \'%s\' সিস্টেমে পাওয়া যায়নি।',
                    'invalid-customer-group' => 'গ্রাহক গ্রুপ অবৈধ বা সমর্থিত নয়',
                ],
            ],
        ],

        'products' => [
            'title' => 'পণ্যসমূহ',

            'validation' => [
                'errors' => [
                    'duplicate-url-key'         => 'URL কী: \'%s\' ইতিমধ্যে আইটেমের জন্য তৈরি হয়েছে, SKU: \'%s\'.',
                    'invalid-attribute-family'  => 'অ্যাট্রিবিউট ফ্যামিলি কলামের জন্য অবৈধ মান (অ্যাট্রিবিউট ফ্যামিলি বিদ্যমান নেই?)',
                    'invalid-type'              => 'পণ্যের ধরণ অবৈধ বা সমর্থিত নয়',
                    'sku-not-found'             => 'নির্দিষ্ট SKU সহ পণ্য পাওয়া যায়নি',
                    'super-attribute-not-found' => 'সুপার গুণগুলির কোড: \'%s\' পাওয়া যায়নি অথবা সেই গুণগুলির পরিবারের অংশ নয়: \'%s\'',
                ],
            ],
        ],

        'tax-rates' => [
            'title' => 'করের হার',

            'validation' => [
                'errors' => [
                    'duplicate-identifier' => 'আইডেন্টিফায়ার: \'%s\' ইম্পোর্ট ফাইলে একাধিকবার পাওয়া গিয়েছে।',
                    'identifier-not-found' => 'আইডেন্টিফায়ার: \'%s\' সিস্টেমে পাওয়া যায়নি।',
                ],
            ],
        ],
    ],

    'validation' => [
        'errors' => [
            'column-empty-headers' => 'কলাম সংখ্যা "%s" ফাঁকা শিরোনাম রয়েছে।',
            'column-name-invalid'  => 'অবৈধ কলাম নাম: "%s"।',
            'column-not-found'     => 'প্রয়োজনীয় কলাম পাওয়া যায়নি: %s।',
            'column-numbers'       => 'কলামের সংখ্যা শিরোনামের সাথে সামঞ্জস্য ধরে না।',
            'invalid-attribute'    => 'শিরোনামে অবৈধ গুণগুলি রয়েছে: "%s"।',
            'system'               => 'অপ্রত্যাশিত সিস্টেম ত্রুটি ঘটেছে।',
            'wrong-quotes'         => 'সোজা উদ্ধৃতির পরিবর্তে কাপড় উদ্ধৃতি ব্যবহৃত হয়েছে।',
        ],
    ],
];
