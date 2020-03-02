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
	wp.blocks.unregisterBlockStyle(
		'core/button',
		[ 'default', 'outline', 'squared', 'fill' ]
	);
	wp.blocks.registerBlockStyle(
		'core/button',
		[
			{
				name: 'default',
				label: 'Default',
				isDefault: true,
			},
			{
				name: 'full-width-button',
				label: 'Full Width',
			}
		]
	);
} );
