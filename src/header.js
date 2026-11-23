function initStickyHeaderScroll() {
	const header = document.querySelector( '.site-header' );
	if ( ! header ) {
		return;
	}

	let ticking = false;

	function updateScrolledState() {
		header.classList.toggle( 'is-scrolled', window.scrollY > 0 );
		ticking = false;
	}

	window.addEventListener(
		'scroll',
		function () {
			if ( ! ticking ) {
				window.requestAnimationFrame( updateScrolledState );
				ticking = true;
			}
		},
		{ passive: true }
	);

	// Handle the case where the page loads already scrolled (e.g. anchor link, back button).
	updateScrolledState();
}

export default initStickyHeaderScroll;
