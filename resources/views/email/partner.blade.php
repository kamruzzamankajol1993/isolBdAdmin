@if($status == 'Rejected')
<h2>Your Application Rejected</h2>

@else


<h2>Login Access:</h2>
<p>Email : {{ $email }}</p>
<p>Password: {{ $password }}</p>
@endif
