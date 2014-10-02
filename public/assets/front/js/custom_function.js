
$(document).ready(function(){




        
	

    
});
//====================================


function  bootBarNotify(type, mess) {

    if( 'success' == type) {
        $.bootbar.success( mess , {autoDismiss: true} );
    } else if( 'info' == type) {
        $.bootbar.info( mess , {autoDismiss: true} );
        
    } else if( 'error' == type) {
        $.bootbar.danger( mess , {autoDismiss: true} );
        
    } else if( 'warning' == type) {
        $.bootbar.warning( mess , {autoDismiss: true} );
    }
    
    
}
//====================================