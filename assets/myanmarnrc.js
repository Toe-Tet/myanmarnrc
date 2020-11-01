// function when nrc_state_region input change
$('#nrc_state_region').on('change', function(){

	// get nrc_state_region input value
	var nrc_state_region = $(this).val();

	// search region_id by nrc_state_region value
	nrc_state_region = searchRegion(nrc_state_region, mmnrc_regions, mmnrc_language).id;

	// filter townships by nrc_state_region value
	var nrc_townships = mmnrc_townships.filter(function(township) {
		return township.region_id === parseInt(nrc_state_region)
	});

	// restart township select input
	$('#nrc_township').html('');

	// declare variable to assign township input select options
	var nrc_townships_options = '';

	// loop filter townships and create string for townships input select options
	nrc_townships.forEach(function(township){

		if(mmnrc_language === "mm"){
			nrc_townships_options +=
			'<option value="'+township.township_mm+'">'+
				township.township_mm+
			'</option>';
		} else {
			var township_en = mmnrc_characters[township.township_mm[0]] + mmnrc_characters[township.township_mm[1]] + mmnrc_characters[township.township_mm[2]];

			nrc_townships_options +=
			'<option value="'+township_en+'">'+
				township_en+
			'</option>';
		}
		
	});

	// set townships input select options
	$('#nrc_township').html(nrc_townships_options);
});

/**
 * Function to search Region object by nrc_state_region value
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