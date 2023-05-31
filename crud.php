<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>
<body>
    <h1>New user</h1>
    <div class="newUser">
        <form id="newUser" class="newuser">
        <input type="text" name="username" id="one">
        <input type="password" name="password" id="two">
        <input type="submit" value="Add user">
        </form>
    </div>
    <hr>
    <h1>Users</h1>
    <table border="1" width="50%">
        <thead>
        <tr>
            <td>Username</td>
            <td>Email</td>
            <td>Edit User</td>
            <td>Delete User</td>
        </tr>  
        </thead> 
               
    </table>



        <script>

        $(document).ready(()=>{
            getUsers();
            // Add user
                $('form.newuser').submit((e)=>{
                    e.preventDefault();
                    data = $('form').serialize();
                    $.post('functions.php', data,(resp)=>{
                         console.log(resp);
                         getUsers();
                    });
                })
                $('form.editForm').submit((e)=>{
                    e.preventDefault();
                    // data = $('form').serialize();
                    // $.post('functions.php', data,(resp)=>{
                    //      console.log(resp);
                    //      getUsers();
                    // });
                })




                // list users

                function getUsers(){
                    $('table').append('<tbody></tbody>');
                    $('table tbody').empty();
                    $.get('functions.php?get_users',(resp)=>{
                       
                        data = JSON.parse(resp);
                        data.forEach((item)=>{
                            $('table tbody').append(`
                                <tr class="user">
                                    <td>${item.username}</td>
                                    <td>${item.password}</td>
                                    <td><a href="" class="editButton" data-id="${item.id}">Редактировать</a></td></a></td>
                                    <td><a href="" class="deleteButton" data-id="${item.id}">Удалить</a></td></a></td>

                                <tr>

                            `)
                        })
                    }).then(()=>{
                        $('.editButton').click((e)=>{
                        e.preventDefault();
                       
                        id = $(e.target).data("id");
                        $.get('functions.php?edit_user=true&id='+id,(resp)=>{
                            data = JSON.parse(resp);
                            console.log(data);
                            $('input[name="username"]').val(data[0].username);
                            $('input[name="password"]').val(data[0].password);
                            $('input[type="submit"]').val("редактировать").attr("data-id",id);
                            $('form.newuser').addClass('editForm').removeClass('newuser');


                    })
                })
                    });

                }


                // get data by id

                

               
        })
    </script>
</body>
</html>

