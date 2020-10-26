<div>
    <form method="post" enctype="multipart/form-data" action="{{route('update', $employee->id)}}">
        <div class="box-body">

            <div class="form-group">
                <label for="exampleInputEmail1">name</label>
                <input type="text" class="form-control" placeholder="post text" name="name" value="{{ old('name', $employee->name) }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">surname</label>
                <input type="text" class="form-control" placeholder="post text" name="username" value="{{ old('surname', $employee->surname) }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">position</label>
                <input type="text" class="form-control" placeholder="post text" name="position" value="{{ old('position', $employee->position) }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">phone</label>
                <input type="text" class="form-control" placeholder="post text" name="phone" value="{{ old('phone', $employee->phone) }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">is_hired</label>
                <input type="text" class="form-control" placeholder="post text" name="is_hired" value="{{ old('is_hired', $employee->is_hired) }}">
            </div>

        </div>
        <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{url ('employees')}}">Home page</a>
        </div>
    </form>
</div>
