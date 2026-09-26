/**
 * Postfolio Blocks Admin Dashboard JS
 * Tab switching & AJAX 1-Click Starter Site Import
 */

(function($) {
	'use strict';

	$(document).ready(function() {

		// Tab Switching Logic
		$('.postfolio-nav-tabs .nav-tab').on('click', function(e) {
			e.preventDefault();
			var targetTab = $(this).attr('data-tab');

			$('.postfolio-nav-tabs .nav-tab').removeClass('nav-tab-active');
			$(this).addClass('nav-tab-active');

			$('.postfolio-tab-panel').removeClass('active');
			$('#' + targetTab).addClass('active');

			// Update URL hash without scroll
			if (history.pushState) {
				history.pushState(null, null, '#' + targetTab);
			} else {
				location.hash = targetTab;
			}
		});

		// Check hash in URL on load
		if (window.location.hash) {
			var hash = window.location.hash.substring(1);
			var $targetTabBtn = $('.postfolio-nav-tabs .nav-tab[data-tab="' + hash + '"]');
			if ($targetTabBtn.length) {
				$targetTabBtn.trigger('click');
			}
		}

		// "Browse Starter Sites" Button Click
		$(document).on('click', '.postfolio-btn-browse-starters', function(e) {
			e.preventDefault();
			$('.postfolio-nav-tabs .nav-tab[data-tab="starter-sites"]').trigger('click');
		});

		// AJAX Demo Import Handler
		$(document).on('click', '.postfolio-btn-import', function(e) {
			e.preventDefault();

			var $btn = $(this);
			var demoSlug = $btn.data('demo');
			var demoTitle = $btn.data('title');

			if (!confirm('Are you sure you want to import the "' + demoTitle + '" starter site? This will create a demo homepage and configure your reading settings.')) {
				return;
			}

			var originalText = $btn.html();
			$btn.prop('disabled', true).html('<span class="dashicons dashicons-update spin" style="margin-right: 5px; animation: spin 1s linear infinite;"></span> Importing...');

			var $notice = $('#postfolio-import-notice');
			$notice.removeClass('success error').hide();

			$.ajax({
				url: postfolioDashboardVars.ajaxUrl,
				type: 'POST',
				data: {
					action: 'postfolio_blocks_import_demo',
					demo_slug: demoSlug,
					security: postfolioDashboardVars.nonce
				},
				success: function(response) {
					if (response.success) {
						$btn.html('<span class="dashicons dashicons-yes"></span> Imported!');
						$notice.addClass('success').html(response.data.message).slideDown();
					} else {
						$btn.prop('disabled', false).html(originalText);
						$notice.addClass('error').html(response.data.message || 'Import failed. Please try again.').slideDown();
					}
				},
				error: function() {
					$btn.prop('disabled', false).html(originalText);
					$notice.addClass('error').html('An unexpected server error occurred during import.').slideDown();
				}
			});
		});

	});

})(jQuery);
