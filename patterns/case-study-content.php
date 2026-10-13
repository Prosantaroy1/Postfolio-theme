<?php
/**
 * Title: Case study: challenge, process, result, metrics
 * Slug: postfolio-blocks/case-study-content
 * Categories: postfolio-blocks, postfolio-blocks-showcase
 * Keywords: case study, project, portfolio, work, results, metrics
 * Block Types: core/post-content
 * Post Types: post
 * Description: The body of a case study: project facts, the challenge, a three-step process, the result with a client quote and the impact in numbers. Put it in a post in the "Work" category.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

echo postfolio_blocks_case_study_markup(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped in the partial.
