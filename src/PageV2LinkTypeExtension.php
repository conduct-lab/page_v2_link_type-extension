<?php namespace ConductLab\PageV2LinkTypeExtension;

use Anomaly\NavigationModule\Link\Contract\LinkInterface;
use Anomaly\NavigationModule\Link\Type\Contract\LinkTypeInterface;
use Anomaly\NavigationModule\Link\Type\LinkTypeExtension;
use ConductLab\PageV2LinkTypeExtension\Form\PageV2LinkTypeFormBuilder;
use Anomaly\PagesModule\Page\Contract\PageInterface;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class PageV2LinkTypeExtension
 *
 * @link          https://behaviorlab.io/
 * @author        Behavior CPH
 * @author        Claus Hjort Bube
 */
class PageV2LinkTypeExtension extends LinkTypeExtension implements LinkTypeInterface
{

    /**
     * This extension provides the page
     * link type for the Navigation module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.navigation::link_type.page_v2';

    /**
     * Return the entry URL.
     *
     * @param  LinkInterface $link
     * @return string
     */
    public function url(LinkInterface $link)
    {
        /* @var PageV2LinkTypeModel $entry */
        if (!$entry = $link->getEntry()) {
            return url('');
        }

        if (!$page = $entry->getPage()) {
            return url('');
        }

        return url($page->getPath());
    }

    /**
     * Return the entry title.
     *
     * @param  LinkInterface $link
     * @return string
     */
    public function title(LinkInterface $link)
    {
        /* @var PageV2LinkTypeModel $entry */
        if (!$entry = $link->getEntry()) {
            return '[Broken Link]';
        }

        if (!$page = $entry->getPage()) {
            return '[Broken Link]';
        }

        return $entry->getTitle() ?: $page->getTitle();
    }

    /**
     * Return if the link exists or not.
     *
     * @param  LinkInterface $link
     * @return bool
     */
    public function exists(LinkInterface $link)
    {
        /* @var PageV2LinkTypeModel $entry */
        if (!$entry = $link->getEntry()) {
            return false;
        }

        return (bool)$entry->getPage();
    }

    /**
     * Return if the link is enabled or not.
     *
     * @param  LinkInterface $link
     * @return bool
     */
    public function enabled(LinkInterface $link)
    {
        /* @var PageV2LinkTypeModel $entry */
        if (!$entry = $link->getEntry()) {
            return false;
        }

        /* @var PageInterface $page */
        if (!$page = $entry->getPage()) {
            return false;
        }

        return $page->isEnabled();
    }

    /**
     * Return the form builder for
     * the link type entry.
     *
     * @return FormBuilder
     */
    public function builder()
    {
        return app(PageV2LinkTypeFormBuilder::class);
    }
}
