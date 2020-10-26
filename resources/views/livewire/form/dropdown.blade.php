<div>
    <label class="inline-block w-32 font-bold">Country:</label>
    <select name="country" wire:model="country" class="border shadow p-2 bg-white">
        <option value=''>Choose a country</option>
        @foreach($countries as $country)
            <option value={{ $country->id }}>{{ $country->name }}</option>
        @endforeach
    </select>
    <br>
    @if(count($cities) > 0)
        <div class="mb-8">
            <label class="inline-block w-32 font-bold">City:</label>
            <select name="city" wire:model="city"
                    class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                <option value=''>Choose a city</option>
                @foreach($cities as $city)
                    <option value={{ $city->id }}>{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
</div>
