@props(['icon', 'title', 'relevantLink', 'technologies'])
<div {{ $attributes->merge(['class' => 'my-card rounded p-4 shadow-sm rounded']) }}>
    <div class="my-card-header d-flex flex-row align-items-center">
        <div
            class="my-card-icon bg-primary p-4 rounded-circle text-white d-flex align-items-center justify-content-center service-icon ">
            <i class="{{ $icon }} fs-4"></i>
        </div>
        <h5 class="my-card-title my-2 text-center ms-2">
            <strong>{{ $title }}</strong>
        </h5>
    </div>
    <div class="card-division w-100 bg-primary my-2" style="height:.1px;"></div>
    <div class="my-card-body text-secondary" style="height: 230px; font-size: .9rem; overflow: hidden; text-overflow: ellipsis; white-space: normal;">
        {{ $slot }}
    </div>

    @if (!empty($technologies))
        <div class="my-2 small d-none d-lg-block">
            @foreach ($technologies as $technology)
                <span class="btn btn-sm mt-2 rounded-pill" style="background-color:#0659c5"><strong class="text-white">
                        {{ $technology }}</strong></span>
            @endforeach
        </div>
    @endif
</div>
