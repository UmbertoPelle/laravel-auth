@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-body">
                <form action="{{ route('emp-update', $emp -> id)}}" method="post">
                  @csrf
                  @method('POST')
                  <div>
                    <label for="firstname">Firstname:</label><br>
                    <input type="text" name="firstname" value="{{ $emp -> firstname}}">
                  </div>
                  <div>
                    <label for="lastname">Lastname:</label><br>
                    <input type="text" name="lastname" value="{{ $emp -> lastname}}">
                  </div>
                  <div>
                    <label for="date_of_birth">Date of Birth:</label><br>
                    <input type="date" name="date_of_birth" value="{{ $emp -> date_of_birth}}">
                  </div>
                  <div>
                    Location:
                  </div>
                  <select name="{{$emp -> location_id}}">
                    @foreach ($locs as $loc)
                      <option value="{{$loc -> id}}"
                        @if ($emp -> location_id === $loc -> id)
                          selected
                        @endif
                        >{{$loc -> city }} - {{$loc -> state}}</option>
                    @endforeach
                  </select>
                  <br><br>
                  <button type="submit" name="button">Send</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
