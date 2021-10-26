@foreach($categories as $item)
    <option value="{{ $item->id }}" {{ request()->category == $item->id ? 'selected' : '' }}>
        {{ $item->name }}
    </option>
@endforeach
