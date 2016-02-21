// ==UserScript==
// @name Facebook Chat Hidden People
// @description Hides selected people in chat's contact list but keeps your online status for them.
// @author Michal Wirth
// @version 0.0.0
// @license GPLv3
// @namespace https://github.com/wirthmi/utilities
// @include https://www.facebook.com/*
// @grant none
// @require https://code.jquery.com/jquery-1.11.2.min.js
// ==/UserScript==

( function ( $ ) {

  // each person is defined by an appropriate li's data-id attribute
  var hiddenPeopleDataIds = [
    "0123456789",                 // First Guy
    "0123456789"                  // Second Guy
  ];

  var checkInterval = 2000;

  /*
   * I hope i won't go to hell for such "active waiting" implementation. If you
   * know some better solution, i.e. how to be notified by Facebook itself that
   * the Chat contact list has changed, please let me know and I will fix it.
   */

  setInterval( function ( ) {

    $( "div.fbChatOrderedList ul li" ).each( function ( ) {

      var isPersonExpectedToBeHidden =
        ( $.inArray( $( this ).attr( "data-id" ), hiddenPeopleDataIds ) !== -1 );

      if ( isPersonExpectedToBeHidden ) {
        // not using hide() because it won't trigger refilling of the
        // list by some other person's contact instead of this one
        $( this ).remove( );
      }

    } );

  }, checkInterval );

} )( jQuery.noConflict( true ) );
