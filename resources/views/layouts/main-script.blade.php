<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script type="text/javascript">
    $(function() {
        let $flag = $('#registration');

        let $input = $flag.closest('form').find('input[name="email"]');
        let $hasError = $flag.closest('form').find('b');


        // Ajax Register
        $input.on('blur', function() {
            //console.log($(this).val());
            //e.preventDefault();
            $.ajax({
                url:'/emailjs',
                type:'get',
                data: {
                    'email': $input.val(),
                    '_token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res) {
                    $hasError.html(res);
                },
                error: function (err) {
                    console.log(err);
                },

            });
        });


        let $flagLoginAjax = $('#loginAjax');

        let $inputLoginAjax = $flagLoginAjax.closest('form').find('input[name="email"]');
        let $hasErrorLoginAjax = $flagLoginAjax.closest('form').find('b');
        // Ajax Login
        $inputLoginAjax.on('blur', function() {
            //console.log($(this).val());
            //e.preventDefault();
            $.ajax({
                url:'/ajaxlogin',
                type:'get',
                data: {
                    'email': $inputLoginAjax.val(),
                    '_token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res) {
                    $hasErrorLoginAjax.html(res).addClass('alert-danger');
                },
                error: function (err) {
                    console.log(err);
                },

            });
        });
    });
</script>
{{--git-lr5/lr5-basic/[laravel]--}}

@section('scripts-11')
    <!-- jQuery library -->
    {{--<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>--}}
    <!-- Latest compiled JavaScript -->
    {{--<script src="{{ asset('js/bootstrap.js') }}"></script>--}}

    <script type="text/javascript">

        $(function() {
            $('#form-add').on('submit', function(e){
                e.preventDefault();

                const $title = $('#title');
                const $content = $('#content');

                axios.post(this.action,{
                    'title': $title.val(),
                    'content': $content.val(),
                })
                    .then((response) => {

                    })
                    .catch((error) => {

                    })
            })
        });
    </script>

@stop