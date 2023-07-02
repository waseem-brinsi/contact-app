<div class="col">
    <select class="custom-select">
            <option value="" selected>All Companies</option>

            @foreach ($companies as $id => $companie)
            <option value="{{$id}}">{{$id}} - {{$companie["name"]}}</option>
            @endforeach

    </select>
</div>
