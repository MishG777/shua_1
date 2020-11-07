@extends('Home')
@section('content')
    <div class="box box-primary border-b border-gray-800 bg-gray-900 text-white my-8">
        <div class="cox-header with-border">
            <h3 class="box-title mx-64 text-gray-500">EDIT</h3>
        </div>
        <form class="mx-20" method="post" enctype="multipart/form-data" action="{{route('applicant.update', $applicant_list->id)}}">
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="name" value="{{old('name', $applicant_list->name)}}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="surname" value="{{old('surname', $applicant_list->surname)}}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="position" value="{{old('position', $applicant_list->position)}}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="phone" value="{{old('phone', $applicant_list->phone)}}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="is_hired" value="{{old('is_hired', $applicant_list->is_hired)}}" required>
                </div>
            </div>
            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
            <div class="box-footer">
                <button type="submit" class="btn bg-gray-800 mx-40">UPDATE</button>
            </div>
        </form>
    </div>
@endsection
