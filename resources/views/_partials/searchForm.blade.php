<h1 style="text-align:center;" >Flickr</h1>
<form method="POST" action="{{route('search')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="photoSearch">Search for photos</label>
        <input type="text" class="form-control" id="photoSearch" value="@if(isset($query)) {{$query}} @endif" name="photoSearch" placeholder="Photo...">
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <button type="submit" class="btn btn-default">Submit</button>
</form>