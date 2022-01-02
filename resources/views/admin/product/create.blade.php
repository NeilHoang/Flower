@extends('layouts.admin.admin')
@section('page-heading','Add Product')
@section('content')
    <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name"  value="{{old('name')}}" required>
            @if($errors->has('name'))
                {{$errors->first('name')}}
            @endif
        </div>

        <div class="form-group">

            <label>Quantity</label>
            <input type="number" class="form-control" name="quantity" value="{{old('quantity')}}" required>
            @if($errors->has('quantity'))
                {{$errors->first('quantity')}}
            @endif
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="price" value="{{old('price')}}" required>
            @if($errors->has('price'))
                {{$errors->first('price')}}
            @endif
        </div>
        <div class="form-group">
            <label>Sale</label>
            <input type="number" class="form-control" name="sale" value="{{old('sale')}}" required>
            @if($errors->has('sale'))
                {{$errors->first('sale')}}
            @endif
        </div>
        <div class="form-group">
            <label>Size</label>
            <select class="form-control" name="size">
                @foreach($sizes as $size)
                    <option value="{{$size->id}}"> {{$size->size}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Form</label>
            <select class="form-control" name="form">
                @foreach($forms as $form)
                    <option value="{{$form->id}}">{{$form->form}}</option>
                @endforeach
            </select>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Theme</legend>
                @foreach($themes as $theme)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="theme[]" value="{{$theme->id}}">
                        <label class="form-check-label"  style="margin-right: 10px">
                            {{$theme->theme}}
                        </label>
                    </div>
                @endforeach
            </div>
            @if($errors->has('theme'))
                {{$errors->first('theme')}}
            @endif
        </fieldset>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Type</legend>
                @foreach($types as $type)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="type[]" value="{{$type->id}}" >
                        <label class="form-check-label" style="margin-right: 10px">
                            {{$type->type}}
                        </label>
                    </div>
                @endforeach
            </div>
            @if($errors->has('type'))
                {{$errors->first('type')}}
            @endif
        </fieldset>
        <div class="form-group">
            <label>image</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control ckeditor" name="description" rows="10">{{old('description')}}</textarea>
            @if($errors->has('description'))
                {{$errors->first('description')}}
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
