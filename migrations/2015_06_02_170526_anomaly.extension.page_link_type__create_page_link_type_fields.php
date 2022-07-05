<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionPageLinkTypeCreatePageLinkTypeFields
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionPageLinkTypeCreatePageLinkTypeFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title'       => 'anomaly.field_type.text',
        'page'        => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'mode'    => 'lookup',
                'related' => 'Anomaly\PagesModule\Page\PageModel',
            ],
        ],
        'anchor_link'       => 'anomaly.field_type.text',
        'description' => 'anomaly.field_type.textarea',
        'image' => [
            'type' => 'anomaly.field_type.file',
            'config' => [
                'allowed_types' => ['gif', 'png', 'jpeg', 'jpg', 'webp', 'avif', 'svg']
            ],
        ],
    ];

}
