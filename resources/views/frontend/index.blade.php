@extends('layouts.frontend')
@section('content')
<div class="container-fluid places">

    <p class="text-center red bolded">No offers were found that met the criteria</p>
    <h1 class="text-center">Interesting places</h1>

    @foreach($objects->chunk('4') as $chunkedObjects)

        <div class="row">

            @foreach($chunkedObjects as $object)

                <div class="col-md-3 col-sm-6">

                    <div class="thumbnail">
                        <img class="img-responsive" src="{{$object->photos->first()->path??null}}" alt="...">
                        <div class="caption">
                            <h3>{{$object->name}} <small>{{$object->city->name}}</small> </h3>
                            <p>{{Str::limit($object->description, 50)}}</p>
                            <p><a href="{{ url('objekt/'.$object->id) }}" class="btn btn-primary" role="button">Details</a></p>
                        </div>
                    </div>
                </div>

            @endforeach


        </div>

    @endforeach
{{$objects}}
</div>
@endsection
