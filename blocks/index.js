// Add a block style.
wp.domReady( () => {
	const { registerBlockStyle } = wp.blocks;
	registerBlockStyle( 'core/list', { name: 'large', label: 'Groß' } );
} );
