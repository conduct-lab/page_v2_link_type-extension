<?php namespace ConductLab\PageV2LinkTypeExtension\Contract;

use Anomaly\PagesModule\Page\Contract\PageInterface;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface PageLinkTypeInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
interface PageV2LinkTypeInterface extends EntryInterface
{

    /**
     * Get the page.
     *
     * @return PageInterface
     */
    public function getPage();
}
