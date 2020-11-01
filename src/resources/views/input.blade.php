@php
	$nrc_language = config('myanmarnrc.language');
	$nrc_regions = config('myanmarnrc.regions_states');
	$nrc_townships = config('myanmarnrc.townships');
	$nrc_citizens = config('myanmarnrc.citizens');
	$nrc_characters = config('myanmarnrc.characters');
@endphp

<div class="col-md-12" style="padding-left: 0px;">
	<label for="nrc_input">NRC</label>
	<div class="row" style="padding-top: 0px; margin-top: 0px;">
		<div class="col-md-2 col-5 pr-1">
			<select class="form-control" name="nrc_state_region" id="nrc_state_region" style="padding-top: 0px; margin-top: 0px !important; margin-bottom: 0px;">
				<option value="" disabled selected></option>
			  @foreach($nrc_regions as $region)
				  	<option value="{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en'] }}">
				  		{{ $nrc_language == 'mm' ? $region['region_mm'] : $region['region_en']  }}
				  	</option>
			  @endforeach
			</select>
		</div>
		<div class="col-md-3 col-7 px-1">
			<select class="form-control" name="nrc_township" id="nrc_township" style="margin-top: 0px; margin-bottom: 0px;">
				<option value="" disabled selected></option>
			</select>
		</div>
		<div class="col-md-2 col-5 px-1">
			<select class="form-control" name="nrc_citizen" id="nrc_citizen" style="margin-top: 0px; margin-bottom: 0px;">
				<option value="" disabled selected></option>
			  @foreach($nrc_citizens as $citizen)
			  <option value="{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}">
			  	{{ $nrc_language == 'mm' ? $citizen['citizen_mm'] : $citizen['citizen_en'] }}
			  </option>
			  @endforeach
			</select>
		</div>
		
		<div class="col-md-5 col-7 pl-1">
			<input type="text" name="nrc_number" pattern=".{6,6}" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');"  maxlength="6" minlength="6" placeholder="">
		</div>
	</div>
</div>

<script>
	// get NRC Townships data from myanmarnrc.php config file
	var mmnrc_regions = {!! json_encode($nrc_regions) !!};

	// get NRC Townships data from myanmarnrc.php config file
	var mmnrc_townships = {!! json_encode($nrc_townships) !!};

	// get NRC characters data from myanmarnrc.php config file
	var mmnrc_characters = {!! json_encode($nrc_characters) !!};

	// get language data from myanmarnrc.php config file
	var mmnrc_language = "{{ $nrc_language }}";
</script>

<script src="{{ asset('vendor/myanmarnrc/myanmarnrc.js') }}"></script>