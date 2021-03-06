/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link http://vistart.name/
 * @copyright Copyright (c) 2016 vistart
 * @license http://vistart.name/license/
 */

rho.contact.contact = (function ($) {
    var pub = {
        get: function(user_no) {
            rho.post("/v1/contact/widget-get", {id: user_no});
        }
    };
    return pub;
})(jQuery);