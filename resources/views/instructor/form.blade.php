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
            <label for="exampleFormControlTextarea1">Popis</label>
            <textarea class="form-control" name="popis" >{{ old('description', @$model->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Vek</label>
            <textarea class="form-control" name="vek">{{ old('age', @$model->age) }}</textarea>
        </div>
        <button type="submit" class="btn btn-secondary btn-lg btn-block">Submit</button>
    </form>
</div>
