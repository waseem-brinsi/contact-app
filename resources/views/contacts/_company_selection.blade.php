<div class="col">
    <select class="custom-select">
            <option value="" selected>All Companies</option>

            @foreach ($companies as $id => $companie)
            <option value="{{$id}}"> - {{$companie}}</option>
            @endforeach

    </select>
</div>
