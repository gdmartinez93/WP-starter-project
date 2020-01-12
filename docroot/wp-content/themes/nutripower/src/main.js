'use strict'

$ = jQuery;

var header = require('./organisms/header/header')();

var pageSorting = require('./pages/page-sorting/page-sorting')();

var menuNavigation = require('./molecules/menu-navigation/menu-navigation')();
var product = require('./molecules/product/product')();

var forms = require('./molecules/forms/forms')();

var homepage = require('./pages/homepage/homepage')();
var productPage = require('./pages/product/product')();
var pageContent = require('./pages/page-content/page-content')();