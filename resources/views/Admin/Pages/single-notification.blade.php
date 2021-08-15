@extends('Admin.Layout.master')

@section('title')
    {{ $notification->name }}
@endsection

@section('css')

@endsection

@section('content')
    <div class="col-md-12">
        <div class="card" style="height: calc(24rem + 10px)">
            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                <div class="divide-y-4">
                    <div>
                        <div class="row">
                            <div class="col-auto">
                                <span class="avatar">{{ \Illuminate\Support\Str::substr($notification->name,0,2) }}</span>
                            </div>
                            <div class="col">
                                <div class="text-truncate">
                                    <strong>{{ $notification->name }}</strong> || <strong>"{{ $notification->email }}"</strong>
                                </div>
                                <div class="card-body">
                                    @if($type == 'contact')
                                        <div class="row">
                                            <span style="border-bottom: 1px solid black">{{ __('front_master.subject') }} :</span>
                                            <p style="border: 1px dotted grey;margin-top: 5px;border-radius: 5px;padding: 10px">{{ $notification->subject }}</p>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <span style="border-bottom: 1px solid black">{{ __('front_master.message') }} :</span>
                                        <p style="border: 1px dotted grey;margin-top: 5px;border-radius: 5px;padding: 10px">{{ $notification->message }}</p>
                                    </div>
                                    @if($type == 'evaluation')
                                        <div class="row">
                                            <span style="border-bottom: 1px solid black">{{ __('front_master.contact') }} :</span>
                                            <p style="border: 1px dotted grey;margin-top: 5px;border-radius: 5px;padding: 10px">{{ $notification->phone }}</p>
                                        </div>
                                        <div class="row">
                                            <span style="border-bottom: 1px solid black">Xidmət növü :</span>
                                            <p style="border: 1px dotted grey;margin-top: 5px;border-radius: 5px;padding: 10px">{{ $notification->getService->service_name_en }}</p>
                                        </div>
                                        <div class="row">
                                            <span style="border-bottom: 1px solid black">Görüş təyin etdiyi vaxt :</span>
                                            <p style="border: 1px dotted grey;margin-top: 5px;border-radius: 5px;padding: 10px">{{ $notification->date .' '.$notification->clock }}</p>
                                        </div>
                                    @endif
                                </div>
                                <div class="text-muted">{{ \Carbon\Carbon::parse($notification->created_at)->toFormattedDateString() }}</div>
                            </div>
                            <div class="form-group">
                                <a target="_blank" class="btn btn-primary float-end" href="mailto:{{ $notification->email }}">{{ __('admin_contact.reply') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
