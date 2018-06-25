<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">

<link rel="stylesheet" href="{{ URL::asset('css/sidebar.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/menucss.css') }}">


<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/js.js') }}"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

   		   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
   		    <script>
        $(document).ready(function(){
            $('.tag').select2({
                placeholder : 'Please select user',
                tags: true
            });
        });
    </script>

