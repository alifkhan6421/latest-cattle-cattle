@extends('layouts.app')

@section('content-header')
    <h1>{{__('milk.edit_milk')}}</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('milks.index') }}">
                <i class="fa fa-dashboard"></i> {{__('milk.milks')}}
            </a>
        </li>
        <li class="active">{{__('commons.edit')}}</li>
    </ol>
@endsection

@section('content')

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">
                {{ !empty($title) ? ucfirst($title) : 'Milk' }}
            </h3>

            <div class="box-tools pull-right">
                <a href="{{ route('milks.index') }}" class="btn btn-sm btn-info"
                   title="{{__('buttonTitle.show_all_milk')}}">
                    <i class="fa fa-th-list" aria-hidden="true"></i>
                </a>

                <a href="{{ route('milks.create') }}" class="btn btn-sm btn-success"
                   title="{{__('buttonTitle.create_new_milk')}}">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <form method="POST"
              action="{{ route('milks.update', $milk->id) }}"
              id="edit_milk_form"
              name="edit_milk_form" accept-charset="UTF-8" >
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            <div class="box-body">

                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                @include ('milks.form', ['milk' => $milk,])
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">{{__('commons.update')}}</button>
            </div>
        </form>

    </div>

@endsection