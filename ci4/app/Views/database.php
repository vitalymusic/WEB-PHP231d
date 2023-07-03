<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{title}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>{title}</h1>
    <nav>
        <table class="table">
        {table}
        <tr>
            <td>{username}</td>
            <td>{email}</td>
            <td>{password}</td>
            <td><a href="edituser/{id}">Edit</a></td>
        </tr>    
        {/table}
        </table>
    </nav>
</body>
</html>