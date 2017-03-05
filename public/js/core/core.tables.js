$(document).ready(function(){
    processAllCheckbox();

    /* Select & Unselect all Checkboxes */
    function processAllCheckbox() {
        var TABLE = 'table';
        var CHECK_ALL = '.cSelectAllCheckbox';
        var CHECKBOX = "tr td:first-child :checkbox";

        $(CHECK_ALL).change(function(){
            var container = $(this).closest(TABLE);
            container.find(CHECKBOX).prop('checked', this.checked);
        });

        $(CHECKBOX).on('click',function(){
            var container = $(this).closest(TABLE);
            if(container.find(CHECKBOX+':checked').length == container.find(CHECKBOX).length){
                container.find(CHECK_ALL).prop('checked',true);
            }else{
                container.find(CHECK_ALL).prop('checked',false);
            }
        });
    }
});
