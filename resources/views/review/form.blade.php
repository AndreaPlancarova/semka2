<div class="form-group text-danger">
    @foreach ($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
</div>
<div class="container">
    <form method="post" action="{{$action}}">
        @csrf
        @method($method)
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descriptiom" value="{{ old('description', @$model->description) }}">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary form-control">
        </div>
    </form>
</div>

