@extends('layouts.app')

@section('title', 'VEXORIQ - Think Smart. Build Beyond.')

@section('content')
    @include('sections.hero')
    @include('sections.problem_solution')
    @include('sections.services')
    @include('sections.about')
    @include('sections.why_choose_me')
    @include('sections.process')
    @include('sections.projects')
    @include('sections.testimonials')
    @include('sections.estimator_preview')
    @include('sections.faq')
@endsection
