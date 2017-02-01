/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */
CKEDITOR.config.fontSize_sizes = '8/8px;9/9px;10/10px;11/11px;12/12px;14/14px;16/16px;18/18px;20/20px;22/22px;24/24px;26/26px;28/28px;36/36px;48/48px;54/54px;60/60px;72/72px';
CKEDITOR.config.allowedContent = true;
var full = window.location.host;
var parts = full.split('.');
var sub = parts[0];
if (parts.length > 2) {
  CKEDITOR.config.bodyClass = 'purl-modifier-' + sub;
}
CKEDITOR.plugins.add( 'allowspan', {
  onLoad: function() {
    CKEDITOR.dtd.$removeEmpty.span = 0;
    CKEDITOR.dtd.$removeEmpty.i = 0;
  }
} );

