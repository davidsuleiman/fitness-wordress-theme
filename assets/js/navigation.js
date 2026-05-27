/**
 * Redefine & Co — Navigation JS
 * Hamburger drawer + search toggle + scroll-shrink
 */
( function () {
	'use strict';

	const header   = document.getElementById( 'site-header' );
	const toggle   = header && header.querySelector( '.menu-toggle' );
	const navPanel = header && header.querySelector( '.site-navigation' );
	const overlay  = header && header.querySelector( '.mobile-overlay' );
	const searchBtn = header && header.querySelector( '.search-toggle' );
	const searchBar = header && header.querySelector( '.header-search' );

	if ( ! header ) return;

	/* ── Hamburger ── */
	function openMenu() {
		header.classList.add( 'is-menu-open' );
		if ( toggle ) toggle.setAttribute( 'aria-expanded', 'true' );
		document.body.classList.add( 'menu-is-open' );
	}
	function closeMenu() {
		header.classList.remove( 'is-menu-open' );
		if ( toggle ) toggle.setAttribute( 'aria-expanded', 'false' );
		document.body.classList.remove( 'menu-is-open' );
	}

	if ( toggle ) {
		toggle.addEventListener( 'click', function () {
			header.classList.contains( 'is-menu-open' ) ? closeMenu() : openMenu();
		} );
	}
	if ( navPanel ) {
		navPanel.addEventListener( 'click', function ( e ) {
			if ( e.target.closest( 'a' ) ) closeMenu();
		} );
	}
	if ( overlay ) {
		overlay.addEventListener( 'click', function () {
			closeMenu();
			closeSearch();
		} );
	}
	document.addEventListener( 'keydown', function ( e ) {
		if ( e.key === 'Escape' ) { closeMenu(); closeSearch(); }
	} );

	/* ── Search ── */
	function openSearch() {
		if ( ! searchBar ) return;
		searchBar.setAttribute( 'aria-hidden', 'false' );
		searchBar.classList.add( 'is-open' );
		if ( searchBtn ) searchBtn.setAttribute( 'aria-expanded', 'true' );
		const input = searchBar.querySelector( 'input[type="search"]' );
		if ( input ) setTimeout( () => input.focus(), 50 );
		// Prevent clicks inside search bar from closing it
		searchBar.addEventListener( 'click', function ( e ) {
			e.stopPropagation();
		}, { once: false } );
	}
	function closeSearch() {
		if ( ! searchBar ) return;
		searchBar.setAttribute( 'aria-hidden', 'true' );
		searchBar.classList.remove( 'is-open' );
		if ( searchBtn ) searchBtn.setAttribute( 'aria-expanded', 'false' );
	}
	if ( searchBtn ) {
		searchBtn.addEventListener( 'click', function ( e ) {
			e.stopPropagation();
			searchBar && searchBar.classList.contains( 'is-open' ) ? closeSearch() : openSearch();
		} );
	}
	// Close search when clicking outside
	document.addEventListener( 'click', function ( e ) {
		if ( searchBar && searchBar.classList.contains( 'is-open' ) ) {
			if ( ! searchBar.contains( e.target ) && ! searchBtn.contains( e.target ) ) {
				closeSearch();
			}
		}
	} );

	/* ── Scroll-shrink ── */
	function onScroll() {
		if ( window.scrollY > 60 ) {
			header.classList.add( 'is-scrolled' );
		} else {
			header.classList.remove( 'is-scrolled' );
		}
	}
	window.addEventListener( 'scroll', onScroll, { passive: true } );
	onScroll();

} )();
