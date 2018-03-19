@extends('layouts.app')

@section('content')
  <h1>Jobs</h1>
  @if(count($jobs) > 0)
    @foreach($jobs as $job)
      <h5><a href="/jobs/{{$job->id}}">{{$job->name}}</a></h5>
    @endforeach
    {{$jobs->links()}}
  @else
    <p>No jobs found</p>
  @endif
@endsection
