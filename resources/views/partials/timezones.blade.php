@foreach (\DateTimeZone::listIdentifiers(DateTimeZone::ALL) as $timezone)
	<option value="{{ $timezone }}">{{ str_replace('_', ' ', $timezone) }}</option>
@endforeach