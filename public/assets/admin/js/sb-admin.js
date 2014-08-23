$(function() {
    
    $(document).on('click', '.remove_records', function(){
		
        bootbox.confirm('Are you sure want to delete this record?', function(res){
            
            if (res == true) {
                $('#frm_delete').submit();
                return true;
            } else {
                bootbox.hideAll();
                return false;
            }
        });
        return false;
    });
    //=====================================
    
    
    $('#side-menu').metisMenu();
    //=====================================
    
    
    $(window).bind("load resize", function() {
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.sidebar-collapse').addClass('collapse')
        } else {
            $('div.sidebar-collapse').removeClass('collapse')
        }
    });
    //=====================================
    
    
    //bootbox.alert('Hello Boot Box');
    //bootbox.confirm('Are you sure?', function(){
    //    bootbox.alert('Hello Boot Box');
    //});
    
    //bootbox.prompt('Prompt', function(){
    //    bootbox.alert('Hello Boot Box');
    //});
    
    //bootbox.dialog({
    //    message: "I am a custom dialog",
    //    title: "Custom title",
    //    onEscape: function() {
    //        bootbox.alert('Its escap button');
    //    },
    //    show: true,
    //    backdrop: true,
    //    closeButton: true,
    //    animate: true,
    //    className: "my-modal",
    //    
    //    buttons: {
    //        success: {
    //            label: "Success!",
    //            className: "btn-success",
    //            callback: function() {
    //                
    //                bootbox.alert('Its success button');
    //            }
    //            
    //        },
    //        
    //        "Danger!": {
    //            className: "btn-danger",
    //            callback: function() {
    //                
    //                bootbox.alert('Its danger button');
    //            }
    //        },
    //        
    //        
    //    }
    //    
    //    
    //});
})
