<div class="row">
    <select name="provices" id="provinces" wire:model="provinceId" class="col-md-4 form-control">
        <option value="">Select Province</option>
        @foreach ($provinces as $province)
            <option value="{{ $province->id }}">{{ $province->name }}</option>
        @endforeach
    </select>
    @if (!is_null($provinceId))
        <div class="col-md-1"></div>
        <select class="col-md-4 form-control">
            <option value="" selected>Select City</option>
            @foreach ($cities->cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
    @endif

</div>
