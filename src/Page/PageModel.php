<?php namespace ConductLab\ResourceHubPageHandlerExtension\Page;

use ConductLab\ResourceHubPageHandlerExtension\Page\Contract\PageInterface;
use Anomaly\Streams\Platform\Model\ResourceHubPageHandler\ResourceHubPageHandlerPagesEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageModel extends ResourceHubPageHandlerPagesEntryModel implements PageInterface
{
    use HasFactory;

    /**
     * @return PageFactory
     */
    protected static function newFactory()
    {
        return PageFactory::new();
    }
}
