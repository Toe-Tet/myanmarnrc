// function when state_region input change
$('#state_region').on('change', function(){

	// get state_region input value
	var state_region = $(this).val();

	// search region_id by state_region value
	state_region = searchRegion(state_region, nrc_regions, nrc_language).id;

	// filter townships by state_region value
	var townships = nrc_townships.filter(function(township) {
		return township.region_id === parseInt(state_region)
	});

	// restart townwhip select input
	$('#township').html('');

	// declare variable to assign township input select options
	var townships_options = '';

	// loop filter townships and create string for townships input select options
	townships.forEach(function(township){

		if(nrc_language === "mm"){
			townships_options +=
			'<option value="'+township.township_mm+'">'+
				township.township_mm+
			'</option>';
		} else {
			var township_en = nrc_characters[township.township_mm[0]] + nrc_characters[township.township_mm[1]] + nrc_characters[township.township_mm[2]];

			townships_options +=
			'<option value="'+township_en+'">'+
				township_en+
			'</option>';
		}
		
	});

	// set townships input select options
	$('#township').html(townships_options);
});

/**
 * Function to search Region object by state_region value
 *
 * @param {string} value
 * @param {array} arr
 * @param {string} language  
 */
function searchRegion(value, arr, language = 'en'){
    for (var i=0; i < arr.length; i++) {
    	if(language === 'mm'){
    		if (arr[i].region_mm === value) {
	            return arr[i];
	        }
    	} 
    	if (arr[i].region_en === value) {
            return arr[i];
        }
    }
}