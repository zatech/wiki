<?php

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'ZATech Slack Wiki',
    'siteDescription' => 'ZATech Slack Wiki.',

    // helpers
    /*
    'isActive' => function ($page, $path): bool {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'url' => function ($page, $path): bool {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },

    'collections' => [
        'faqs' => [
            'path' => 'faqs/{filename}',
            'filter' => fn ($item) => $item->published,
        ],
    ],
    */
];
