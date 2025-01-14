@foreach($category->children as $child)
    <option value="{{$child->id}}">{{$prefix}} {{$child->name}}</option>
    @include('backend.partials.category_option', ['category' => $child, 'prefix' => $prefix.'--'])
@endforeach 