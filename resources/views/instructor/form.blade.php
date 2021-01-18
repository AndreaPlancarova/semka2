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
            <label for="name">Full name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="{{ old('name', @$model->name) }}">
        </div>

        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="text" class="form-control" id="photo" name="photo" placeholder="Photo" value="{{ old('photo', @$model->photo) }}">

        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Age" value="{{ old('age', @$model->age) }}">

        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descriptiom" value="{{ old('description', @$model->description) }}">

        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary form-control">
        </div>
    </form>
</div>

