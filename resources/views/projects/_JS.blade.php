@section('customJS')
    <script>
        $(document).ready(function(){
            $('.icon-bar').hide();
            $('.card').hover(function () {
                $(this).find('.icon-bar').toggle();
            })
        })
    </script>
@endsection
