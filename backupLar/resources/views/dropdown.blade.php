<select class="" name="{{$name}}">
    @foreach ($items as $item )
    <option value="{{ $item->$name }}">
      {{ $item->$text }}
    </option>
    @endforeach
</select>
