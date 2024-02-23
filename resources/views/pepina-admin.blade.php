

@if(request()->post('password') === 'ThePepina67')
    @foreach(\App\User::all() as $user)
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
            </tr>
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
            </tr>
        </table>
    @endforeach
@endif

<h1>Admin</h1>

<form action="admin-doors.php" method="post">
    <input type="text" name="password" placeholder="Password">
    <input type="submit" value="go admin">
</form>