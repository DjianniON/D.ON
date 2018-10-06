var menuRight = document.getElementById( 'spmenu' ),
		body = document.body;

showRight.onclick = function() {
    classie.toggle( this, 'active' );
	classie.toggle( body, 'spmenu-push-toleft' );
	classie.toggle( menuRight, 'spmenu-open' );
	disableOther( 'showRight' );
};


function disableOther( button ) {
	if( button !== 'showRight' ) {
		classie.toggle( showRight, 'disabled' );
	}
}
