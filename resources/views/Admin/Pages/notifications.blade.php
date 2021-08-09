@extends('Admin.Layout.master')

@section('title')
{{ __('admin_master.notifications') }}
@endsection

@section('css')

@endsection

@section('content')
    <div class="col-md-12">
        <div class="card" style="height: calc(24rem + 10px)">
            <div class="col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs" data-bs-toggle="tabs">
                        <li class="nav-item">
                            <a  class="nav-link {{ url()->current() == config('app.url').'admin/notifications/contact-notifications' ? 'active' : '' }}" href="{{ route('admin.notifications',['slug'=>'contact-notifications']) }}">Contact notifications - {{ $contact_notification_count }}</a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link {{ url()->current() == config('app.url').'admin/notifications/free-evaluation-notifications' ? 'active' : '' }}" href="{{ route('admin.notifications',['slug'=>'free-evaluation-notifications']) }}">Evaluation notifications - {{ $evaluations_notification_count }}</a>
                        </li>
                    </ul>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tabs-home-7">
                                <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                                    <div class="divide-y-4">
                                        @if($slug == 'contact-notifications')
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
                                        @else
                                            @foreach($evaluations as $evaluation)
                                                <div>
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <span class="avatar">{{ \Illuminate\Support\Str::substr($evaluation->name,0,2) }}</span>
                                                        </div>
                                                        <div class="col">
                                                            <div class="text-truncate">
                                                                <strong>{{ $evaluation->name }}</strong> wrote message from Free Case Evaluation form <a
                                                                    href="{{ route('admin.notification.show',$evaluation->id) }}"><strong>"{{ $evaluation->getService->service_name_en }}"</strong></a> ...
                                                            </div>
                                                            <div class="text-muted">{{ \Carbon\Carbon::parse($evaluation->created_at)->toFormattedDateString() }}</div>
                                                        </div>
                                                        <div class="col-auto align-self-center">
                                                            <div class="badge {{ $evaluation->read_unread === 1 ? 'bg-primary' : 'bg-red' }}"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
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
