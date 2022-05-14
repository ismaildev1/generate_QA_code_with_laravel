@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-8">
                            <form method='post' action="{{route('qrBuilder')}}" accept-charset="UTF-8" >
                                @csrf
                                <div class="form-group">
                                    <label for="name">name</label>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                    @error('name') <span class="text-danger" > {{$message}} </span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="body">body</label>
                                    <input type="text" name="body" value="{{old('body')}}" class="form-control">
                                    @error('body') <span class="text-danger" > {{$message}} </span> @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn-btn-primary"> generate QR code </button>
                                </div>
                            </form>

                        </div>
                        <did class="col-4">
                            @if (session('code'))
                                {!! session('code') !!}
                                </div>
                            @endif
                        </did>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 