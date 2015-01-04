define([
    "dojo/_base/declare",
    "hc-backend/layout/main/content/package",
    "dojo/i18n!./nls/Package",
    "xstyle/css!./css/review.css"
], function(declare, _Package, translation) {
    return declare("ReviewPackage", [ _Package ], {
        title: translation['packageTitle']
    });
});
