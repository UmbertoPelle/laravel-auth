@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  {{ $emp -> firstname}}
                  {{ $emp -> lastname}}
                </div>

                <div class="card-body">
                    <ol>
                      <li>
                        Date of Birth: {{$emp -> date_of_birth}}
                      </li>
                      <li>
                        Location:
                        {{ $emp -> location -> state}}
                        {{ $emp -> location -> city}},
                        {{ $emp -> location -> street}}
                      </li>
                      @auth
                        <li>
                          Private Code: {{ $emp -> private_code}}
                        </li>
                      @endauth
                    </ol>
                    @auth
                      <a class="btn btn-primary" href={{ route('emp-edit', $emp -> id )}}>edit</a>
                      <a class='btn btn-danger'href={{ route('emp-delete', $emp -> id)}}>delete</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
