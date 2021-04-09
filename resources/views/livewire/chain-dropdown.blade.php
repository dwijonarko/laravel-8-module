<div>
    <select name="provices" id="provinces" wire:model="provinceId">
        <option value="">Select Province</option>
        @foreach ($provinces as $province)
            <option value="{{ $province->id }}">{{ $province->name }}</option>
        @endforeach
    </select>
    @if (!is_null($provinceId))
        <select>
            <option value="" selected>Select City</option>
            @foreach ($cities->cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
    @endif

</div>
