@extends('layouts.crud-master')

@section('title')
    APP::CRUD
@stop


@section('content')

<h2 class="text-center">Welcome</h2>
<div class="container mt-4">
    <table class="table table-hover" id="postTable" style="visibility: hidden;">
        <thead>
        <tr>
            <th>[#]ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>ICheck</th>
            <th>Time</th>
            <th><a  href="#" class="btn btn-primary btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-plus"></i> Add</a></th>
        </tr>
        {{ csrf_field() }}
        </thead>
        <tbody class="table-hover">
        <tr>
            <th>1</th>
            <td>This is title</td>
            <td>This is content</td>
            <td>default</td>
            <td>Time</td>
            <td>
                <button class="show-modal btn btn-success" data-id="" data-title="" data-content="">
                    <i class="far fa-eye"></i> Show</button>

                <button class="edit-modal btn btn-info" data-id="" data-title="" data-content="">
                    <i class="fas fa-edit"></i> Edit</button>

                <button class="delete-modal btn btn-danger" data-id="" data-title="" data-content="">
                    <i class="fas fa-trash"></i> Delete</button>
            </td>
        </tr>

        </tbody>
    </table>
</div>

<div class="container">{{--Modal add post--}}
<!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="title of post">
                            <strong hidden class="text-danger" id="error_title">111</strong>
                        </div>


                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control" id="content" rows="3" placeholder="this is content of post"></textarea>
                            <strong hidden class="text-danger" id="error_content">111</strong>

                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button id="add-post" type="button" class="btn btn-success" {{--data-dismiss="modal"--}}><i class="fas fa-check"></i> Add Post</button>
                    <button type="button" class="btn btn-info"><i class="fas fa-times"></i> Close</button>
                </div>
            </div>
        </div>
    </div>
</div>{{--/. Modal add post--}}

@stop




@section('scripts')
    <!-- Delay table load until everything else is loaded -->
    <script>
        $(window).on('load',function() {
            $('#postTable').removeAttr('style');
        })

        const $errTitle = $('#error_title');
        const $errContent = $('#error_content');

        $errTitle.addClass('hidden');
        $errContent.addClass('hidden');

        $('.modal-footer').on('click','#add-post',function(e) {
            e.preventDefault();


            $.ajax({
                type: 'post',
                url: '/crud-app/add',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'title': $('#title').val(),
                    'content': $('#content').val()
                },
                success: function(response) {



                    console.log('OKE oke ');
                    console.log(response);

                },
                error: function(err) {

                    console.log('ERROR ERROR');

                    const errs = err.responseJSON.errors;
                    if (errs) {
                        /*setTimeout(function () {
                            //$('#addModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);*/


                        toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});

                        if (errs.title) {
                            $errTitle.removeClass('hidden');
                            $errTitle.text(errs.title);
                            //console.log(errs.title);
                        } else {
                            $errTitle.addClass('hidden');
                            //$errTitle.text(errs.title);
                        }
                        if (errs.content) {
                            $errContent.removeClass('hidden');
                            $errContent.text(errs.content);
                            //console.log(errs.title);
                        }


                    }else {
                        console.log('content err');
                    }



                },

            });


        })
    </script>



@stop