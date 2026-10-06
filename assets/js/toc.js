/**
 * Postfolio Blocks — automatic table of contents.
 *
 * Fills every Group with the class `postfolio-toc` with links to the H2/H3
 * headings of the post content. The first List block inside the group is
 * used as the container; the box hides itself when there are no headings.
 */
( function () {
	'use strict';

	function slugify( text ) {
		return (
			text
				.toLowerCase()
				.normalize( 'NFKD' )
				.replace( /[̀-ͯ]/g, '' )
				.replace( /[^a-z0-9\s-]/g, '' )
				.trim()
				.replace( /[\s-]+/g, '-' ) || 'section'
		);
	}

	function build() {
		var boxes = document.querySelectorAll( '.postfolio-toc' );
		var content = document.querySelector( '.wp-block-post-content' );

		if ( ! boxes.length ) {
			return;
		}

		var headings = content ? content.querySelectorAll( 'h2, h3' ) : [];
		var used = {};

		Array.prototype.forEach.call( headings, function ( heading ) {
			if ( ! heading.id ) {
				var base = slugify( heading.textContent );
				var id = base;
				var n = 2;
				while ( used[ id ] || document.getElementById( id ) ) {
					id = base + '-' + n++;
				}
				heading.id = id;
			}
			used[ heading.id ] = true;
		} );

		boxes.forEach( function ( box ) {
			var list = box.querySelector( 'ol, ul' );

			if ( ! headings.length ) {
				box.classList.add( 'is-empty' );
				return;
			}

			if ( ! list ) {
				list = document.createElement( 'ol' );
				box.appendChild( list );
			}

			list.innerHTML = '';

			Array.prototype.forEach.call( headings, function ( heading ) {
				var item = document.createElement( 'li' );
				var link = document.createElement( 'a' );

				link.href = '#' + heading.id;
				link.textContent = heading.textContent;
				if ( heading.tagName === 'H3' ) {
					item.className = 'postfolio-toc__sub';
				}
				item.appendChild( link );
				list.appendChild( item );
			} );

			if ( ! box.getAttribute( 'aria-label' ) ) {
				var title = box.querySelector( 'h2, h3, h4, p' );
				box.setAttribute( 'role', 'navigation' );
				box.setAttribute( 'aria-label', title ? title.textContent.trim() : 'Table of contents' );
			}
		} );

		// Highlight the section currently being read.
		if ( 'IntersectionObserver' in window ) {
			var links = document.querySelectorAll( '.postfolio-toc a[href^="#"]' );
			var observer = new IntersectionObserver(
				function ( entries ) {
					entries.forEach( function ( entry ) {
						if ( ! entry.isIntersecting ) {
							return;
						}
						links.forEach( function ( link ) {
							link.setAttribute( 'aria-current', link.getAttribute( 'href' ) === '#' + entry.target.id ? 'true' : 'false' );
						} );
					} );
				},
				{ rootMargin: '0px 0px -70% 0px' }
			);
			Array.prototype.forEach.call( headings, function ( heading ) {
				observer.observe( heading );
			} );
		}
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', build );
	} else {
		build();
	}
} )();
