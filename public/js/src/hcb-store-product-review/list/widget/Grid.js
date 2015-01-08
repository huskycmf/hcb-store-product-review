define([
    "dojo/_base/declare",
    "dojo/_base/lang",
    "hcb-store-product-review/store/ReviewStore",
    "dgrid/OnDemandGrid",
    "dgrid/extensions/ColumnHider",
    "dgrid/extensions/ColumnResizer",
    "dgrid/extensions/DijitRegistry",
    "hc-backend/dgrid/_Selection",
    "hc-backend/dgrid/_Refresher",
    "hc-backend/dgrid/columns/timestamp",
    "hc-backend/dgrid/columns/editor",
    "dgrid/Keyboard",
    "dgrid/Selector",
    "dojo/i18n!../../nls/List"
], function(declare, lang, ReviewStore,
            OnDemandGrid, ColumnHider, ColumnResizer, DijitRegistry,
            _Selection, _Refresher, timestamp, editor, Keyboard,
            selector, translation) {

    return declare('hcb-store-product-review.list.widget.Grid',
                   [ OnDemandGrid, ColumnHider, ColumnResizer,
                     Keyboard, _Selection, _Refresher, DijitRegistry ], {
        //  summary:
        //      Grid widget for displaying all available clients
        //      as list
        store: ReviewStore,
        columns: [
            selector({ label: "", width: 40, selectorType: "checkbox" }),

            {label: translation['idLabel'],
             field: 'id', hidden: true,
             sortable: false, resizable: false},

            {label: translation['productTitleLabel'],
             field: 'productTitle', hidden: false,
             sortable: false, resizable: false},

            {label: translation['enabledLabel'],
             field: 'enabled', hidden: false,
             sortable: false, resizable: false},

            {label: translation['advantagesLabel'],
             field: 'adv', hidden: false,
             sortable: false,  resizable: false},

            {label: translation['disadvantagesLabel'],
             field: 'dis', hidden: false,
             sortable: false, resizable: false},

            {label: translation['commentLabel'],
             field: 'comment', hidden: false,
             sortable: false, resizable: false},

            {label: translation['timestampLabel'],
                field: 'timestamp', hidden: false,
                sortable: false, resizable: false}
        ],

        loadingMessage: translation['loadingMessage'],
        noDataMessage: translation['noDataMessage'],

        showHeader: true,
        allowTextSelection: true
    });
});
