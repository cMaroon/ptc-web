
/**
 * Require 
 * I guess the cleanest way to avoid the conflict would be to 
 * build a custom jquery-ui dist without the tooltip.
 */
require('./jquery');
require('./jquery-ui');
require('./bootstrap');

$(document).ready(function() {
    /**
     * Console Log
     */
    console.log(stop());

    /**
     * Sortable
     */
    $("#ui-sortable").sortable();
    $("#ui-sortable").disableSelection();

    /**
     * Tooltip
     */
    $('[data-toggle="tooltip"]').tooltip();
});

/**
 * Navigation
 */
var previousScrollPosition = $(window).scrollTop();
$(window).scroll(function() {
    var currentScrollPosition = $(window).scrollTop();
    if (previousScrollPosition > currentScrollPosition) {
        $("#navbar").css('top', "0px");
    } else {
        $("#navbar").css('top', "-" + $('#navbar').outerHeight(true) + "px");
    }
    previousScrollPosition = currentScrollPosition;
});

/**
 * Display Stop
 */
function stop() {
    return "\n\n" +
        " .d8888b.  888                       888\n" + 
        "d88P  Y88b 888                       888\n" +
        "Y88b.      888                       888    This is a browser feature intended for\n" +
        " \"Y888b.   888888  .d88b.  88888b.   888    developers. If someone told you to copy-paste\n" +
        "    \"Y88b. 888    d88\"\"88b 888 \"88b  888    something here to enable a TLIBR feature\n" +
        "      \"888 888    888  888 888  888  Y8P    or \"hack\" someone's account, it is a\n" +
        "Y88b  d88P Y88b.  Y88..88P 888 d88P         scam and will give them access to your\n" +
        " \"Y8888P\"   \"Y888  \"Y88P\"  88888P\"   888    TLIBR account.\n" +
        "                           888\n" +
        "                           888\n" +
        "                           888\n";
}
