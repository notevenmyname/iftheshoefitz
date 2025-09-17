( function( api ) {

	// Extends our custom "honey-shop" section.
	api.sectionConstructor['honey-shop'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );