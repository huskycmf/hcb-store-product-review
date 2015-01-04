<?php
return array(
    'routes' => array(
        'hc-backend' => array(
            'child_routes' => array(
                'store' => array(
                    'type' => 'literal',
                    'options' => array(
                        'route' => '/store'
                    ),
                    'may_terminate' => false,
                    'child_routes' => array(
                        'product' => array(
                            'route'=>'/product',
                            'child_routes' => array(
                                'review' => include __DIR__ . '/router/review.config.php'
                            )
                        )
                    )
                )
            )
        )
    )
);
