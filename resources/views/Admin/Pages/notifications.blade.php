@extends('Admin.Layout.master')

@section('title')
{{ __('admin_master.notifications') }}
@endsection

@section('css')

@endsection

@section('content')
    <div class="col-md-12">
        <div class="card" style="height: calc(24rem + 10px)">
            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                <div class="divide-y-4">
                    @foreach($notifications as $notification)
                    <div>
                        <div class="row">
                            <div class="col-auto">
                                <span class="avatar">{{ \Illuminate\Support\Str::substr($notification->name,0,2) }}</span>
                            </div>
                            <div class="col">
                                <div class="text-truncate">
                                    <strong>{{ $notification->name }}</strong> wrote message from Contact form <a
                                        href="{{ route('admin.notification.show',$notification->id) }}"><strong>"{{ $notification->subject }}"</strong></a> ...
                                </div>
                                <div class="text-muted">{{ \Carbon\Carbon::parse($notification->created_at)->toFormattedDateString() }}</div>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="badge {{ $notification->read_unread === 1 ? 'bg-primary' : 'bg-red' }}"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
