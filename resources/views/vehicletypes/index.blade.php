@extends('layouts.app')

@section('content')
<section class="content-header">
  <h1>{{Lang::get('core.vehicletypes')}}</h1>
</section>

  <div class="content">
		<div class="resultData"></div>
		<div class="ajaxLoading"></div>
		<div id="transferView"></div>
		<div id="transferGrid"></div>
	</div>
	<!-- End Content -->

<script>
$(document).ready(function(){
	reloadData('#transfer','transfer/data');
});
</script>
@endsection
