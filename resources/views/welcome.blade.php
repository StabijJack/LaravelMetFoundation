@extends('layouts/app')
@section('content')
<h1>xy grid</h1>
<div class="grid-x">
    <div class="cell">full width cell</div>
    <div class="cell">full width cell</div>
  </div>
  <div class="grid-x">
    <div class="cell small-6">6 cells</div>
    <div class="cell small-6">6 cells</div>
  </div>
  <div class="grid-x">
    <div class="cell medium-6 large-4">12/6/4 cells</div>
    <div class="cell medium-6 large-8">12/6/8 cells</div>
  </div>
<h1>float format</h1>
<div class="row">
    <div class="columns small-2 large-4">testtekst</div>
    <div class="columns small-4 large-4">testtekst</div>
    <div class="columns small-6 large-4">testtekst</div>
  </div>
  <div class="row">
    <div class="columns large-3">testtekst</div>
    <div class="columns large-6">testtekst</div>
    <div class="columns large-3">testtekst</div>
  </div>
  <div class="row">
    <div class="columns small-6 large-2">testtekst</div>
    <div class="columns small-6 large-8">testtekst</div>
    <div class="columns small-12 large-2">testtekst</div>
  </div>
  <div class="row">
    <div class="columns small-3">testtekst</div>
    <div class="columns small-9">testtekst</div>
  </div>
  <div class="row">
    <div class="columns large-4">testtekst</div>
    <div class="columns large-8">testtekst</div>
  </div>
  <div class="row">
    <div class="columns small-6 large-5">testtekst</div>
    <div class="columns small-6 large-7">testtekst</div>
  </div>
  <div class="row">
    <div class="columns large-6">testtekst</div>
    <div class="columns large-6">testtekst</div>
  </div>
  <h1>flex grid</h1>
  <div class="row">
    <div class="columns small-6">6 columns</div>
    <div class="columns small-6">6 columns</div>
  </div>
  <div class="row">
    <div class="columns medium-6 large-4">12/6/4 columns</div>
    <div class="columns medium-6 large-8">12/6/8 columns</div>
  </div>
@endsection
