<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionPageLinkTypeCreatePageLinksStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionPageLinkTypeCreatePageLinksStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'pages',
        'title_column' => 'title',
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title' => [
            'translatable' => true,
        ],
        'page' => [
            'required' => true,
        ],
        'query_param' => [
            'required' => false,
            'translatable' => false,
        ],
        'anchor_tag' => [
            'required' => false,
            'translatable' => false,
        ],
        'image' => [
            'required' => false,
            'translatable' => true,
        ],
        'description' => [
            'translatable' => true,
        ],
    ];

}
