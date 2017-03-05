/**
 * If the jQuery plugin is loaded?
 * @param name
 * @returns
 */
function isPluginLoaded(name) {
    return $.fn[name];
}

$(document).ready(function(){
  $('.cDeleteConfirm').click(function(){
    return confirm('Are you sure you want to delete this item?');
  });
});