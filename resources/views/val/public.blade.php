@extends('layouts.master')



@section('content')


{{$user->email." ".$user->blood." ".$user->lastname." ".$user->phoneContact}}


@endsection
