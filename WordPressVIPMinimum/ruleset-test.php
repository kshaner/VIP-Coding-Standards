<?php
/**
 * Ruleset test for the WordPressVIPMinimum ruleset
 *
 * The expected errors, warnings, and messages listed here, should match what is expected to be reported
 * when ruleset-test.inc is run against PHP_CodeSniffer and the WordPressVIPMinimum standard.
 *
 * To run the test, see ../bin/ruleset-tests.
 *
 * @package VIPCS\WordPressVIPMinimum
 */

namespace WordPressVIPMinimum;

// Expected values.
$expected = [
	'errors'   => [
		4   => 1,
		7   => 1,
		11  => 1,
		16  => 1,
		17  => 1,
		21  => 1,
		27  => 2,
		35  => 1,
		45  => 1,
		54  => 1,
		73  => 1,
		88  => 1,
		104 => 1,
		110 => 1,
		117 => 1,
		118 => 1,
		124 => 1,
		130 => 1,
		147 => 1,
		150 => 1,
		153 => 1,
		156 => 1,
		159 => 1,
		162 => 1,
		165 => 1,
		168 => 1,
		171 => 1,
		174 => 1,
		177 => 1,
		190 => 1,
		193 => 1,
		204 => 1,
		205 => 1,
		206 => 1,
		207 => 1,
		208 => 1,
		209 => 1,
		210 => 1,
		211 => 1,
		212 => 1,
		213 => 1,
		214 => 1,
		215 => 1,
		216 => 1,
		226 => 1,
		227 => 1,
		228 => 1,
		229 => 1,
		230 => 1,
		231 => 1,
		232 => 1,
		233 => 1,
		234 => 1,
		235 => 1,
		236 => 1,
		237 => 1,
		238 => 1,
		259 => 1,
		274 => 1,
		285 => 1,
		290 => 1,
		295 => 1,
		296 => 1,
		299 => 1,
		303 => 1,
		304 => 1,
		308 => 1,
		311 => 1,
		312 => 1,
		313 => 1,
		314 => 1,
		315 => 1,
		316 => 1,
		317 => 1,
		318 => 1,
		319 => 1,
		320 => 1,
		321 => 1,
		322 => 1,
		323 => 1,
		324 => 1,
		325 => 1,
		326 => 1,
		327 => 1,
		328 => 1,
		329 => 1,
		330 => 1,
		331 => 1,
		332 => 1,
		333 => 1,
		334 => 1,
		335 => 1,
		336 => 1,
		337 => 1,
		338 => 1,
		339 => 1,
		340 => 1,
		341 => 1,
		342 => 1,
		343 => 1,
		344 => 1,
		345 => 1,
		346 => 1,
		347 => 1,
		348 => 1,
		349 => 1,
		350 => 1,
		351 => 1,
		352 => 1,
		353 => 1,
		354 => 1,
		355 => 1,
		356 => 1,
		357 => 1,
		358 => 1,
		359 => 1,
		360 => 1,
		361 => 1,
		362 => 1,
		363 => 1,
		364 => 1,
		365 => 1,
		366 => 1,
		367 => 1,
		368 => 1,
		369 => 1,
		371 => 1,
		372 => 1,
		375 => 1,
		376 => 1,
		377 => 1,
		378 => 1,
		379 => 1,
		380 => 1,
		381 => 1,
		382 => 1,
		383 => 1,
		384 => 1,
		385 => 1,
		386 => 1,
		387 => 1,
		388 => 1,
		389 => 1,
		390 => 1,
		391 => 1,
		392 => 1,
		393 => 1,
		394 => 1,
		395 => 1,
		402 => 1,
		415 => 1,
		425 => 1,
		451 => 1,
		463 => 1,
		465 => 1,
		469 => 1,
		471 => 1,
		477 => 1,
		483 => 1,
		491 => 1,
		505 => 1,
		509 => 1,
		510 => 1,
		511 => 1,
		512 => 1,
		513 => 1,
		514 => 1,
		515 => 1,
		516 => 1,
		517 => 1,
		518 => 1,
		519 => 1,
		523 => 1,
		525 => 1,
		550 => 1,
		551 => 1,
		554 => 1,
		569 => 1,
		570 => 1,
		573 => 1,
		574 => 1,
		575 => 1,
		578 => 1,
		581 => 1,
		582 => 1,
		583 => 1,
		588 => 1,
		590 => 1,
		594 => 1,
		595 => 1,
		596 => 1,
		597 => 1,
		612 => 1,
		614 => 1,
		618 => 1,
	],
	'warnings' => [
		32  => 1,
		39  => 1,
		41  => 1,
		42  => 1,
		60  => 2,
		64  => 1,
		67  => 1,
		68  => 1,
		69  => 1,
		76  => 1,
		80  => 1,
		84  => 1,
		98  => 1,
		126 => 1,
		138 => 1,
		139 => 1,
		140 => 1,
		141 => 1,
		142 => 1,
		143 => 1,
		144 => 1,
		180 => 1,
		181 => 1,
		182 => 1,
		183 => 1,
		184 => 1,
		185 => 1,
		186 => 1,
		187 => 1,
		217 => 1,
		239 => 1,
		242 => 1,
		243 => 1,
		244 => 1,
		245 => 1,
		246 => 1,
		247 => 1,
		248 => 1,
		249 => 1,
		250 => 1,
		251 => 1,
		252 => 1,
		253 => 1,
		254 => 1,
		255 => 1,
		256 => 1,
		264 => 2,
		279 => 1,
		282 => 1,
		288 => 1,
		293 => 1,
		294 => 1,
		396 => 1,
		397 => 1,
		398 => 1,
		399 => 1,
		400 => 1,
		401 => 1,
		403 => 1,
		404 => 1,
		405 => 1,
		406 => 1,
		407 => 1,
		408 => 1,
		411 => 1,
		412 => 1,
		432 => 1,
		437 => 1,
		438 => 1,
		439 => 1,
		440 => 1,
		441 => 1,
		447 => 1,
		454 => 1,
		457 => 1,
		458 => 1,
		459 => 1,
		499 => 1,
		500 => 1,
		504 => 1,
		528 => 1,
		529 => 1,
		530 => 1,
		531 => 1,
		532 => 1,
		535 => 1,
		538 => 1,
		545 => 1,
		559 => 1,
		565 => 1,
		589 => 1,
	],
	'messages' => [
		130 => [
			'`eval()` is a security risk, please refrain from using it.',
		],
		242 => [
			'Using cURL functions is highly discouraged within VIP context. Please see: https://docs.wpvip.com/technical-references/code-quality-and-best-practices/retrieving-remote-data/.',
		],
		243 => [
			'Using cURL functions is highly discouraged within VIP context. Please see: https://docs.wpvip.com/technical-references/code-quality-and-best-practices/retrieving-remote-data/.',
		],
		244 => [
			'Using cURL functions is highly discouraged within VIP context. Please see: https://docs.wpvip.com/technical-references/code-quality-and-best-practices/retrieving-remote-data/.',
		],
		259 => [
			'`get_children()` performs a no-LIMIT query by default, make sure to set a reasonable `posts_per_page`. `get_children()` will do a -1 query by default, a maximum of 100 should be used.',
		],
	],
];

require __DIR__ . '/../tests/RulesetTest.php';

// Run the tests!
$test = new RulesetTest( 'WordPressVIPMinimum', $expected );
if ( $test->passes() ) {
	printf( 'All WordPressVIPMinimum tests passed!' . PHP_EOL ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	exit( 0 );
}

exit( 1 );
