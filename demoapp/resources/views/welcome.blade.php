<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <title>Laravel-Demo</title>
    </head>
    <body>
        <h2 class="text-center">Laravel Demo - Contacts Page</h2>
        <br>
        <div class="mx-auto p-1" style="width: 400px;">
        <button type="button" id="testdb" data-toggle="modal" data-target="#exampleModalCenter" data-url="{{ $currenturl }}" class="btn btn-sm btn-outline-primary mb-3">Test Database Conn</button>

            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody id="res_table">
                </tbody>
            </table>

            <div id="successbadge" hidden class="alert alert-success" role="alert">
                Database is connected!
            </div>
            <div id="failurebadge" hidden class="alert alert-danger" role="alert">
                Retreival Error: Please check your db connection, and make sure you have some data in there!
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script type="text/javascript">
      
      $(document).ready(function () {
            $('body').on('click', '#testdb', function () {
                var murl = $(this).data('url') + '/api/contact';
                $.get(murl, function (data) {

                    if(!data.contacts){
                        $('#failurebadge').removeAttr('hidden');
                    }
                    $.each(data.contacts, function( index, value ) {
                        var markup = "<tr><td>"+value.id+"</td><td>"+value.name+"</td><td>"+value.email+"</td></tr>";
                        $('#res_table').append(markup);
                        $('#successbadge').removeAttr('hidden');
                    });
                })
            });
            
        });
    </script>
</html>
