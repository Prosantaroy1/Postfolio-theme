/**
 * Postfolio Blocks Admin Dashboard JS
 * Tab switching & AJAX 1-Click Starter Site Import
 */

( function ( $ ) {
	'use strict';

	$( function () {
		var vars = window.postfolioDashboardVars || {};
		var i18n = vars.i18n || {};

		function openTab( targetTab, updateHash ) {
			var $btn = $( '.postfolio-nav-tabs .nav-tab[data-tab="' + targetTab + '"]' );

			if ( ! $btn.length ) {
				return;
			}

			$( '.postfolio-nav-tabs .nav-tab' ).removeClass( 'nav-tab-active' ).attr( 'aria-selected', 'false' );
			$btn.addClass( 'nav-tab-active' ).attr( 'aria-selected', 'true' );

			$( '.postfolio-tab-panel' ).removeClass( 'active' );
			$( '#' + targetTab ).addClass( 'active' );

			if ( updateHash && window.history.replaceState ) {
				window.history.replaceState( null, '', '#' + targetTab );
			}
		}

		// Tab switching.
		$( '.postfolio-nav-tabs .nav-tab' ).on( 'click', function ( e ) {
			e.preventDefault();
			openTab( $( this ).attr( 'data-tab' ), true );
		} );

		// Restore tab from the URL hash, or return to Modules after saving it.
		if ( window.location.hash ) {
			openTab( window.location.hash.substring( 1 ), false );
		} else if ( /[?&]settings-updated=/.test( window.location.search ) ) {
			openTab( 'modules', true );
		}

		// "Browse Starter Sites" button.
		$( document ).on( 'click', '.postfolio-btn-browse-starters', function ( e ) {
			e.preventDefault();
			openTab( 'starter-sites', true );
		} );

		// AJAX starter site import.
		$( document ).on( 'click', '.postfolio-btn-import', function ( e ) {
			e.preventDefault();

			var $btn = $( this );
			var demoSlug = $btn.data( 'demo' );
			var demoTitle = String( $btn.data( 'title' ) );
			var confirmText = ( i18n.confirm || '%s' ).replace( '%s', demoTitle );

			if ( ! window.confirm( confirmText ) ) {
				return;
			}

			var originalHtml = $btn.html();
			var $notice = $( '#postfolio-import-notice' );

			$btn.prop( 'disabled', true ).text( i18n.importing || '…' );
			$notice.removeClass( 'success error' ).hide();

			$.ajax( {
				url: vars.ajaxUrl,
				type: 'POST',
				data: {
					action: 'postfolio_blocks_import_demo',
					demo_slug: demoSlug,
					apply_style: $( '#postfolio-apply-style' ).is( ':checked' ) ? 1 : 0,
					security: vars.nonce,
				},
			} )
				.done( function ( response ) {
					if ( response && response.success ) {
						$btn.prop( 'disabled', false ).text( i18n.imported || '' );
						$notice
							.addClass( 'success' )
							.empty()
							.append( document.createTextNode( response.data.message + ' ' ) )
							.append( $( '<a>' ).attr( { href: response.data.url, target: '_blank', rel: 'noopener' } ).text( i18n.visit || '' ) )
							.slideDown();
					} else {
						$btn.prop( 'disabled', false ).html( originalHtml );
						$notice
							.addClass( 'error' )
							.text( ( response && response.data && response.data.message ) || i18n.failed || '' )
							.slideDown();
					}
				} )
				.fail( function ( xhr ) {
					var message = xhr && xhr.responseJSON && xhr.responseJSON.data && xhr.responseJSON.data.message;

					$btn.prop( 'disabled', false ).html( originalHtml );
					$notice.addClass( 'error' ).text( message || i18n.error || '' ).slideDown();
				} );
		} );
	} );
} )( jQuery );
