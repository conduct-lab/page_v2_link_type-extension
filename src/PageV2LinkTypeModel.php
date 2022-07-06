<?php namespace ConductLab\PageV2LinkTypeExtension;

use Anomaly\FilesModule\File\Contract\FileInterface;
use Anomaly\Streams\Platform\Support\Str;
use ConductLab\PageV2LinkTypeExtension\Contract\PageV2LinkTypeInterface;
use Anomaly\PagesModule\Page\Contract\PageInterface;
use Anomaly\Streams\Platform\Model\PageV2LinkType\PageV2LinkTypePagesEntryModel;

/**
 * Class PageV2LinkTypeModel
 *
 * @link          https://behaviorlab.io/
 * @author        Behavior CPH
 * @author        Claus Hjort Bube
 *
 * @property string $title
 * @property int $page_id
 * @property PageInterface $page
 * @property string $anchor_tag
 * @property string $query_param
 * @property FileInterface $image
 * @property int $image_id
 * @property string $description
 */
class PageV2LinkTypeModel extends PageV2LinkTypePagesEntryModel implements PageV2LinkTypeInterface
{

    /**
     * Eager load these relations.
     *
     * @var array
     */
    protected $with = [
        'page',
        'translations',
    ];

    /**
     * Get the page.
     *
     * @return PageInterface
     */
    public function getPage()
    {
        return $this->page;
    }

    public function getQueryParam(): string
    {
        if (!$this->query_param) {
            return '';
        }
        if (!Str::startsWith($this->query_param, '?')) {
            return '?' . $this->query_param;
        }
        return $this->query_param;
    }

    public function getAnchorTag(): string
    {
        if (!$this->anchor_tag) {
            return '';
        }
        if (!Str::startsWith($this->anchor_tag, '#')) {
            return '#' . $this->anchor_tag;
        }
        return $this->anchor_tag;
    }

    public function getPath(): string
    {
        return $this->getPage()->getPath() . $this->getQueryParam() . $this->getAnchorTag();
    }
}
