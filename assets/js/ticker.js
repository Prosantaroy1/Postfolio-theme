/**
 * Postfolio Blocks — breaking news ticker.
 *
 * Duplicates the headline list once so the marquee loops seamlessly, sets
 * the speed from the content width and adds a pause/play button (moving
 * content must be pausable, WCAG 2.2.2). Visitors who prefer reduced motion
 * get a static, horizontally scrollable list instead (see custom.css).
 */
( function () {
	'use strict';

	var reduceMotion = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
	var labels = window.postfolioTicker || { pause: 'Pause headlines', play: 'Play headlines' };

	function init( ticker ) {
		var list = ticker.querySelector( '.wp-block-post-template' );

		if ( ! list || ticker.classList.contains( 'is-ready' ) || reduceMotion ) {
			return;
		}

		Array.prototype.slice.call( list.children ).forEach( function ( item ) {
			var clone = item.cloneNode( true );
			clone.setAttribute( 'aria-hidden', 'true' );
			clone.querySelectorAll( 'a' ).forEach( function ( link ) {
				link.setAttribute( 'tabindex', '-1' );
			} );
			list.appendChild( clone );
		} );

		// About 70px per second, whatever the number of headlines.
		var seconds = Math.max( 20, Math.round( list.scrollWidth / 2 / 70 ) );
		ticker.style.setProperty( '--postfolio-ticker-duration', seconds + 's' );

		var button = document.createElement( 'button' );
		button.type = 'button';
		button.className = 'postfolio-ticker__toggle';
		button.setAttribute( 'aria-pressed', 'false' );
		button.setAttribute( 'aria-label', labels.pause );
		button.innerHTML = '<span aria-hidden="true"></span>';
		button.addEventListener( 'click', function () {
			var paused = ticker.classList.toggle( 'is-paused' );
			button.setAttribute( 'aria-pressed', paused ? 'true' : 'false' );
			button.setAttribute( 'aria-label', paused ? labels.play : labels.pause );
		} );
		ticker.appendChild( button );

		ticker.classList.add( 'is-ready' );
	}

	function run() {
		document.querySelectorAll( '.postfolio-ticker' ).forEach( init );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', run );
	} else {
		run();
	}
} )();
