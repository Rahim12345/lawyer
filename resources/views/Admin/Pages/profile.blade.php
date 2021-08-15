@extends('Admin.layout.master')

@section('title')
    Profil ayarları
@endsection

@section('css')

@endsection

@section('content')
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('admin.profile.update') }}">
                    @csrf

                    <div class="form-group row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Ad</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{ old('name',$user->name) }}" class="form-control" id="name" placeholder="Rahim">
                            @error('name')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" value="{{ old('email',$user->email) }}" class="form-control" id="email" placeholder="example@gmail.com">
                            @error('email')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="old_password" class="col-sm-2 col-form-label">Köhnə şifrə</label>
                        <div class="col-sm-10">
                            <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Köhnə şifrə">
                            @error('old_password')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="new_password" class="col-sm-2 col-form-label">Yeni şifrə</label>
                        <div class="col-sm-10">
                            <input type="password" name="new_password" class="form-control" id="new_password" placeholder="8-40 simvoldan ibarət bir şifrə">
                            @error('new_password')
                            <small class="form-hint text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary float-end">Redaktə et</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
