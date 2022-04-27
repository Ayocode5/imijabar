@php
    $settings = DB::table('general_settings')->select(
			'logo',
			'top_bar_organization_name',
			'top_bar_email',
			'top_bar_phone',
			'footer_address',
			'footer_email',
			'footer_phone',
			'footer_copyright',
			'footer_column1_heading',
			'footer_column2_heading',
			'footer_column3_heading',
		)->first();

@endphp

@extends('layouts.app')

@section('content')
    @include('layouts.components.breadcrumb')
    @include('layouts.components.404')
@endsection
