@extends('layouts.Admin-app')

@section('content')
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
               Add section
            </div>
            <div class="panel-body">
                <form method="post">
                    {{csrf_field()}}

                    <input type="text" name="name" class="form-control">
                    <div class="form-group">
                        <select name="admin">
                            <option>

                            </option>
                            @forelse($users as $user)
                                <option>
                                    {{$user->id}}
                                </option>


                                @endforeach

                        </select>


                    </div>



                    <input type="submit" class="btn btn-primary">




                </form>
            </div>

            </div>
            <div class="panel-footer">
                Panel Footer
            </div>
        </div>
    </div>


@endsection
