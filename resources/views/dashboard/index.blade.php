@extends('dashboard/layouts.app')
<!-- section title -->
@section('title')
- Nom page
@endsection
<!-- end section title -->

<!-- section CSS -->
@section('css')
<!-- uikit -->
<link rel="stylesheet" href="{{asset('bower_components/uikit/css/uikit.almost-flat.min.css')}}" media="all">
<!-- altair admin -->
<link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}" media="all">
@endsection
<!-- end section CSS -->


<!-- section content -->
@section('content')
<div id="page_content">
<div id="page_content_inner">

</div>
</div>
@endsection
<!-- end section content -->


<!-- section JS -->
@section('js')
<!-- common functions -->
<script src="{{asset('assets/js/common.min.js')}}"></script>
<!-- uikit functions -->
<script src="{{asset('assets/js/uikit_custom.min.js')}}"></script>
<!-- altair common functions/helpers -->
<script src="{{asset('assets/js/altair_admin_common.min.js')}}"></script>
@endsection
<!-- end section JS -->