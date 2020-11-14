@extends('Home')
@section('content')
    <div class="box box-primary border-b border-gray-800 bg-gray-900 text-white my-8">
        <div class="cox-header with-border">
            <h3 class="box-title mx-64 text-gray-500">EDIT</h3>
        </div>
        <title>Applicants edit</title>

{{--            @if($errors->any())--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    {{$error}}--}}
{{--                @endforeach--}}
{{--            @endif--}}
        <form class="mx-20" method="post" enctype="multipart/form-data" action="{{route('applicant.update', $applicant_list->id)}}">
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="name" value="{{old('name', $applicant_list->name)}}" >
                    @if($errors->first('name'))
                    <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="surname" value="{{old('surname', $applicant_list->surname)}}">
                    @if($errors->first('surname'))
                        <p class="text-danger">{{$errors->first('surname')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="position" value="{{old('position', $applicant_list->position)}}" >
                    @if($errors->first('position'))
                        <p class="text-danger">{{$errors->first('position')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="phone" value="{{old('phone', $applicant_list->phone)}}">
                    @if($errors->first('phone'))
                        <p class="text-danger">{{$errors->first('phone')}}</p>
                    @endif
                </div>
                <div class="form-group">

                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="is_hired" value="{{old('is_hired', $applicant_list->is_hired)}}">

                    @if($errors->first('is_hired'))
                        <p class="text-danger">{{$errors->first('is_hired')}}</p>
                    @endif
                </div>
            </div>
            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
            <div class="box-footer">
                <button type="submit" class="btn bg-gray-800 mx-40">UPDATE</button>
            </div>
        </form>
    </div>
@endsection
