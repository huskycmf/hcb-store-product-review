<?php
return array(
    'type' => 'literal',
    'options' => array(
        'route' => '/review'
    ),
    'may_terminate' => false,
    'child_routes' => array(
        'resource' => array(
            'type' => 'segment',
            'options' => array(
                'route' => '/:id',
                'constraints' => array( 'id' => '[0-9]+' ),
                'defaults' => array(
                    'controller' =>
                        'HcbStoreProductReview-Controller-View'
                )
            )
        ),
        'delete' => array(
            'type' => 'literal',
            'options' => array(
                'route' => '/delete'
            ),
            'may_terminate' => false,
            'child_routes' => array(
                'delete' => array(
                    'type' => 'method',
                    'options' => array(
                        'verb' => 'post',
                        'defaults' => array(
                            'controller' =>
                                'HcbStoreProductReview-Controller-Collection-Delete'
                        )
                    )
                )
            )
        ),
        'accept' => array(
            'type' => 'literal',
            'options' => array(
                'route' => '/accept'
            ),
            'may_terminate' => false,
            'child_routes' => array(
                'delete' => array(
                    'type' => 'method',
                    'options' => array(
                        'verb' => 'post',
                        'defaults' => array(
                            'controller' =>
                                'HcbStoreProductReview-Controller-Collection-Accept'
                        )
                    )
                )
            )
        ),
        'decline' => array(
            'type' => 'literal',
            'options' => array(
                'route' => '/decline'
            ),
            'may_terminate' => false,
            'child_routes' => array(
                'delete' => array(
                    'type' => 'method',
                    'options' => array(
                        'verb' => 'post',
                        'defaults' => array(
                            'controller' =>
                                'HcbStoreProductReview-Controller-Collection-Decline'
                        )
                    )
                )
            )
        ),
        'list' => array(
            'type' => 'method',
            'options' => array(
                'verb' => 'get'
            ),
            'may_terminate' => false,
            'child_routes' => array(
                'show' => array(
                    'type' => 'XRequestedWith',
                    'options' => array(
                        'with' => 'XMLHttpRequest',
                        'defaults' => array(
                            'controller' =>
                                'HcbStoreProductReview-Controller-Collection-List'
                        )
                    )
                )
            )
        )
    )
);
