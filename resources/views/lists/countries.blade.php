@foreach($countries as $item)
    <option value="{{ $item->id }}" {{ request()->country == $item->id ? 'selected' : '' }}>
        {{ $item->name }}
    </option>
@endforeach
