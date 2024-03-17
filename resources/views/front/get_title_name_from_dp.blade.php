
<option>Please Select</option>
@foreach($get_dp as $all_get_dp)
<option value="{{ $all_get_dp->name }}">{{ $all_get_dp->name }}</option>
@endforeach
