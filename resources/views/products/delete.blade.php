<! - resources/views/users/delete.blade.php →
<!DOCTYPE html>
<html>
<head>
 <title>Delete User</title>
</head>
<body>
 <h1>Delete User</h1>
 <p>Are you sure you want to delete this user?</p>
 <form method="post" action="{{ route('users.destroy', $user->id) }}">
 @csrf
 @method('DELETE')
 <button type="submit">Delete</button>
 </form>
</body>
</html>