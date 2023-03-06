<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">{{$label}}</label>
        <input type="{{$type}}" name="{{$name}}" class="form-control" />
        <span class='text-danger'>
              <!-- @error('name')
                {{$message}}
              @enderror -->
        </span>
</div>