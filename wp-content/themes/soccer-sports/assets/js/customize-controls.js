( function( api ) {

	// Extends our custom "soccer-sports" section.
	api.sectionConstructor['soccer-sports'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );