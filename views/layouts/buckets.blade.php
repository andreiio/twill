@extends('cms-toolkit::layouts.main')

@section('appTypeClass', 'app--buckets')

@if($search ?? false)
@section('globalNavSearch', 'true')
@endif

@section('content')
    <a17-buckets title="{{ $bucketSourceTitle or 'Available items' }}" empty-buckets="No items featured." empty-source="No items available." :restricted="{!! json_encode($restricted ?? true) !!}">
        {{ $bucketsSectionIntro or 'What would you like to feature today?' }}
    </a17-buckets>
@stop

@section('initialStore')
    window.STORE.buckets = {
        items: {!! json_encode($items) !!},
        source: {!! json_encode($source) !!},
        dataSources: {!! json_encode($dataSources) !!},
        page: 1,
        maxPage: {{ $maxPage ?? 1 }},
        offset: {{ $offset ?? 10 }},
        filter: {}
    }
@stop

@push('extra_js')
    <script src="{{ mix('/assets/admin/js/manifest.js') }}"></script>
    <script src="{{ mix('/assets/admin/js/vendor.js') }}"></script>
    <script src="{{ mix('/assets/admin/js/main-buckets.js') }}"></script>
@endpush
