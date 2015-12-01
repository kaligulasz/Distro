/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/
CKEDITOR.editorConfig = function( config )
{   
  // config.styleSet is an array of objects that define each style available
  // in the font styles tool in the ckeditor toolbar
  config.stylesSet =
  [
        /* Block Styles */

        // Each style is an object whose properties define how it is displayed
        // in the dropdown, as well as what it outputs as html into the editor
        // text area.
        { name : 'Styl blokowy'   , element : 'div', styles: {
            'clear': 'both'
        } },
        { name : 'Styl tytułowy'   , element : 'h3' },
        { name : 'Duży'   , element : 'span', styles: {
            'font-size': '130%'
        } },
        { name : 'Normalny'   , element : 'span', styles: {
            'font-size': '100%'
        } },
        { name : 'Mały'   , element : 'span', styles: {
            'font-size': '70%'
        } }
  ];
  
  config.colorButton_colors = '0c4173,828282,f9a03a,f6fb03,F03A3A';
  config.colorButton_enableMore = false;

  

};

config.fillEmptyBlocks = false;
config.fullPage = false;
config.enterMode = CKEDITOR.ENTER_BR;
writer.lineBreakChars = ''; 

config.extraPlugins = 'wordcount';
