@foreach ($categories as $category)

  @if ($category->children->where('published', 1)->count())
    <li class="dropdown">
      <a href="{{url("/blog/category/$category->slug")}}" class="btn btn-light" type="button" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">
        {{$category->title}} <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <button class="dropdown-item" type="button">
        @include('layouts.top_menu', ['categories' => $category->children])
      </ul>
  @else
    <li>
      <a class="dropdown-item" href="{{url("/blog/category/$category->slug")}}">{{$category->title}}</a>
  @endif
    </li>
@endforeach
