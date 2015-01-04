<?php
return array(
    'HcbStoreProductReview-Controller-Collection-List' => array(
        'parameters' => array(
            'paginatorDataFetchService' =>
                'HcbStoreProductReview-Service-Collection-FetchQbBuilder',
            'viewModel' => 'HcbStoreProductReview-Paginator-ViewModel-JsonModel'
        )
    ),

    'HcbStoreProductReview-Controller-Collection-Delete' => array(
        'parameters' => array(
            'inputData' => 'HcbStoreProductReview-Data-Collection-Entities-ByIds',
            'serviceCommand' => 'HcbStoreProductReview-Service-Collection-Delete',
            'jsonResponseModelFactory' =>
                'HcbStoreProductReview-Json-View-StatusMessageDataModelFactory'
        )
    ),

    'HcbStoreProductReview-Controller-View' => array(
        'parameters' => array(
            'fetchService' => 'HcbStoreProductReview-Service-FetchService',
            'extractor' => 'HcbStoreProductReview-Stdlib-Extractor-Resource'
        )
    ),

    'HcbStoreProductReview-Controller-Collection-Accept' => array(
        'parameters' => array(
            'inputData' => 'HcbStoreProductReview-Data-Collection-Entities-ByIds',
            'serviceCommand' => 'HcbStoreProductReview-Service-Collection-Accept',
            'jsonResponseModelFactory' =>
                'HcbStoreProductReview-Json-View-StatusMessageDataModelFactory'
        )
    ),

    'HcbStoreProductReview-Controller-Collection-Decline' => array(
        'parameters' => array(
            'inputData' => 'HcbStoreProductReview-Data-Collection-Entities-ByIds',
            'serviceCommand' => 'HcbStoreProductReview-Service-Collection-Decline',
            'jsonResponseModelFactory' =>
                'HcbStoreProductReview-Json-View-StatusMessageDataModelFactory'
        )
    )
);
