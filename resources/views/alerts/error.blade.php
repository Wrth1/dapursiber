@foreach ($errors->all() as $error)
    <div class="alert alert-error">{{ $error }}</div>
@endforeach

<!--
@if ($errors->has('authorization'))
    <div class="alert alert-danger">{{ $errors->first('authorization') }}</div>
@endif -->
