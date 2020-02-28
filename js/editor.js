wp.domReady( () => {
	wp.blocks.registerBlockStyle( 'core/heading', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'cursive',
			label: 'Cursive',
		},
		{
			name: 'uppercase',
			label: 'Uppercase',
		}
	]);
} );
