<?php

return [
    'width' => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'options' => [
                'auto'           => 'anomaly.extension.row_block::configuration.width.option.auto',
                'one_half'       => 'anomaly.extension.row_block::configuration.width.option.one_half',
                'one_third'      => 'anomaly.extension.row_block::configuration.width.option.one_third',
                'two_thirds'     => 'anomaly.extension.row_block::configuration.width.option.two_thirds',
                'one_quarter'    => 'anomaly.extension.row_block::configuration.width.option.one_quarter',
                'three_quarters' => 'anomaly.extension.row_block::configuration.width.option.three_quarters',
                'full_width'     => 'anomaly.extension.row_block::configuration.width.option.full_width',
            ],
        ],
    ],
];
