@extends('layouts.app')
@section('content')

    <!-- Dashboard start -->
    <script type="text/javascript">
        const data = @json($data);
    </script>
    <div id="createProduct"></div>
@stop
