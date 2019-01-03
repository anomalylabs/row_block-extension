<?php namespace Anomaly\RowBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Anomaly\RowBlockExtension\Block\BlockModel;

/**
 * Class RowBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class RowBlockExtension extends BlockExtension
{

    /**
     * The block category.
     *
     * @var string
     */
    protected $category = 'layout';

    /**
     * This extension provides a column
     * block for the blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.row';

    /**
     * The content view.
     *
     * @var string
     */
    protected $view = 'anomaly.extension.row_block::content';

    /**
     * The block wrapper.
     *
     * @var string
     */
    protected $wrapper = 'anomaly.extension.row_block::wrapper';

    /**
     * The block model.
     *
     * @var string
     */
    protected $model = BlockModel::class;

}
