
<form method="POST" action="">
@csrf
Username: <input type="text" name="username" /> <br /><br />
First Name: <input type="text" name="first_name" />
<br />
<br />
<button type="sumit"> Submit </button>
</form>

<br />
<br />
<div class="container">
@foreach ($users as $user)
    {{ $user->username }}
@endforeach
</div>

{{ $users->links() }}