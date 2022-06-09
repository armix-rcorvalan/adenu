jQuery(document).ready(function($) {

	// Init Objet
	var search_array = {
		programa: -1,
		modalidad: -1,
		search: '',
	};

	// Busca String
	$.expr[':'].icontains = function (obj, index, meta, stack) {
        return (obj.textContent || obj.innerText || jQuery(obj).text() || '').toLowerCase().indexOf(meta[3].toLowerCase()) >= 0;
    };

    // Get Data
	function estudiar_get_data()
	{
		search_array.programa  = jQuery('#tipos-de-programa').val();
		search_array.modalidad = jQuery('#modalidades').val();
		search_array.search    = jQuery('#search').val();
	}

	// Filter
	function estudiar_filter()
	{
		var list_item = jQuery('.estudiar-list-item');
		list_item.each(function(index, el) {

			var current_search = jQuery(el).find('.estudiar-list-item__title').is(':icontains("' + search_array.search + '")');
			
			var current_modalidad = jQuery(el).data('modalidad');
			var current_programa  = jQuery(el).data('programa');

			var modalidad_match = ( current_modalidad == search_array.modalidad ) || ( search_array.modalidad == -1 );
			var programa_match  = ( current_programa == search_array.programa ) || ( search_array.programa == -1 );

			if ( modalidad_match && programa_match && current_search ) {
				jQuery(el).show();
			} else {
				jQuery(el).hide();
			}


		});

	}

	// Init
	estudiar_get_data();
	estudiar_filter();

	jQuery('#modalidades').on('change', function(event) {
		estudiar_get_data();
		estudiar_filter();
	});

	jQuery('#tipos-de-programa').on('change', function(event) {
		estudiar_get_data();
		estudiar_filter();
	});

	jQuery('#search').on('input', function(event) {
		estudiar_get_data();
		estudiar_filter();
	});


});