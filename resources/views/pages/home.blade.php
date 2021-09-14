@extends('template.main')



@section('content')
<div class="container mb-5">
    <h1 class="text-center">Bienvenu sur la page home</h1>

    @include('partials.sections.section1')
    @include('partials.sections.section2')
    @include('partials.sections.section3')
    @include('partials.sections.section4')
    @include('partials.sections.section5')
    @include('partials.sections.section6')
    @include('partials.sections.section7')
    @include('partials.sections.section8')
</div>
@endsection