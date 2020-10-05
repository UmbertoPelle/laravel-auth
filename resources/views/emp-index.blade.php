@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employees:</div>

                <div class="card-body">
                    <ol>
                      @foreach ($emps as $emp)
                        <li>
                          <a href={{ route('emp-show', $emp -> id)}}>
                            {{ $emp -> firstname}}
                            {{ $emp -> lastname}}
                          </a>
                        </li>
                      @endforeach
                    </ol>
                    @auth
                      <h3>NEW Employee + </h3>
                      <form action={{ route('emp-store') }} method="post">
                        @csrf
                        @method('POST')
                        <div>
                          <label for="firstname">Firstname:</label><br>
                          <input type="text" name="firstname">
                        </div>
                        <div>
                          <label for="lastname">Lastname:</label><br>
                          <input type="text" name="lastname">
                        </div>
                        <div>
                          <label for="date_of_birth">Date of Birth:</label><br>
                          <input type="date" name="date_of_birth">
                        </div>
                        <div>
                          <label for="private_code">Private Code:</label><br>
                          <input type="text" name="private_code">
                        </div>
                        <div>
                          Location:
                        </div>
                        <select name="location_id">
                          @foreach ($locs as $loc)
                            <option value="{{$loc -> id}}">{{$loc -> city }} - {{$loc -> state}}</option>
                          @endforeach
                        </select>
                        <br><br>
                        <button type="submit" name="button">Send</button>
                      </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
