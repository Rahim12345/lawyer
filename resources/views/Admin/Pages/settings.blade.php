@extends('Admin.Layout.master')

@section('title')
{{ __('admin_master.settings') }}
@endsection

@section('css')

@endsection

@section('content')
    <div class="mb-3 col-md-8 offset-md-2">
        <form action="" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label class="form-label" for="tel">Tel no</label>
                <input type="text" class="form-control @error('tel') is-invalid  @enderror" id="tel" name="tel" placeholder="+994775829989" value="{{ old('tel',$tel) }}">
                @error('tel')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid  @enderror" id="email" name="email" placeholder="example@gmail.com" value="{{ old('email',$email) }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="twitter">Twitter</label>
                <input type="text" class="form-control @error('twitter') is-invalid  @enderror" id="twitter" name="twitter" value="{{ old('twitter',$twitter) }}">
                @error('twitter')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="facebook">Facebook</label>
                <input type="text" class="form-control @error('facebook') is-invalid  @enderror" id="facebook" name="facebook" value="{{ old('facebook',$facebook) }}">
                @error('facebook')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="instagram">Instagram</label>
                <input type="text" class="form-control @error('instagram') is-invalid  @enderror" id="instagram" name="instagram" value="{{ old('instagram',$instagram) }}">
                @error('instagram')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="youtube">Youtube</label>
                <input type="text" class="form-control @error('youtube') is-invalid  @enderror" id="youtube" name="youtube" value="{{ old('youtube',$youtube) }}">
                @error('youtube')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="legal_solutions">{{ __('front_about.legal_solutions') }}</label>
                <input type="text" class="form-control @error('legal_solutions') is-invalid  @enderror" id="legal_solutions" name="legal_solutions" value="{{ old('legal_solutions',$legal_solutions) }}">
                @error('legal_solutions')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="cases_we_won">{{  __('front_about.cases_we_won') }}</label>
                <input type="text" class="form-control @error('cases_we_won') is-invalid  @enderror" id="cases_we_won" name="cases_we_won" value="{{ old('cases_we_won',$cases_we_won) }}">
                @error('cases_we_won')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="free_consultations">{{  __('front_about.free_consultations') }}</label>
                <input type="text" class="form-control @error('free_consultations') is-invalid  @enderror" id="free_consultations" name="free_consultations" value="{{ old('free_consultations',$free_consultations) }}">
                @error('free_consultations')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="cases_dismissed">{{  __('front_about.cases_dismissed') }}</label>
                <input type="text" class="form-control @error('cases_dismissed') is-invalid  @enderror" id="cases_dismissed" name="cases_dismissed" value="{{ old('cases_dismissed',$cases_dismissed) }}">
                @error('cases_dismissed')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary float-end" type="submit">{{ $tel == '' ? __('admin_master.save') : __('admin_master.update') }}</button>
            </div>
        </form>
    </div>
@endsection

@section('js')

@endsection
