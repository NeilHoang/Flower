@extends('layouts.admin.admin')
@section('page-heading','Edit Product')
@section('content')

    <form method="post" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}" required>
            @if($errors->has('name'))
                {{$errors->first('name')}}
            @endif
        </div>

        <div class="form-group">
            <label>Quantity</label>
            <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}" required>
            @if($errors->has('quantity'))
                {{$errors->first('quantity')}}
            @endif
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="price" value="{{$product->price}}" required>
            @if($errors->has('price'))
                {{$errors->first('price')}}
            @endif
        </div>
        <div class="form-group">
            <label>Sale</label>
            <input type="number" class="form-control" name="sale" value="{{$product->sale}}" required>
            @if($errors->has('sale'))
                {{$errors->first('sale')}}
            @endif
        </div>
        <div class="form-group">
            <label>Size</label>
            <select class="form-control" name="size">
                @foreach($sizes as $size)
                    <option value="{{$size->id}}"
                            @if($product->size_id == $size->id) selected @endif > {{$size->size}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Form</label>
            <select class="form-control" name="form">
                @foreach($forms as $form)
                    <option value="{{$form->id}}"
                            @if($product->form_id == $form->id) selected @endif >{{$form->form}}</option>
                @endforeach
            </select>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Theme</legend>
                @foreach($themes as $theme)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="theme[]" value="{{$theme->id}}"
                               @foreach($product->themes as $themeProduct )
                               @if($themeProduct->id == $theme->id) checked @endif
                            @endforeach >
                        <label class="form-check-label" style="margin-right: 10px">
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
                        <input class="form-check-input" type="checkbox" name="type[]" value="{{$type->id}}"
                               @foreach($product->types as $typeProduct )
                               @if($typeProduct->id == $type->id) checked @endif
                            @endforeach>
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
            <textarea class="form-control ckeditor" name="description" rows="10">{{$product->description}}</textarea>
            @if($errors->has('description'))
                {{$errors->first('description')}}
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
