<?php namespace ConductLab\PageV2LinkTypeExtension;

use ConductLab\PageV2LinkTypeExtension\Contract\PageV2LinkTypeInterface;
use Anomaly\PagesModule\Page\Contract\PageInterface;
use Anomaly\Streams\Platform\Model\PageV2LinkType\PageV2LinkTypePagesEntryModel;

/**
 * Class PageV2LinkTypeModel
 *
 * @link          https://behaviorlab.io/
 * @author        Behavior CPH
 * @author        Claus Hjort Bube
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
}
