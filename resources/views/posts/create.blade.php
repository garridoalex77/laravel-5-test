<!DOCTYPE html>
<html>
<head>
    <title>Create a Post</title>
</head>
<body>
<h1>Make a Post</h1>

<form method="POST">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
    <label>title</label>
    <input type="text" name="title">

    <label>body</label>
    <input type="text" name="body">
    <input type="submit" value="Save">
</form>
</body>
</html>