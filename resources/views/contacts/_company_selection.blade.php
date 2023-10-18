<form method="GET">
    <div class="col">
        <select class="custom-select" name="company_id" onchange="submit()">
                <option value="" selected>All Companies</option>

                @foreach ($companies as $id => $company)
                <option value="{{$company->id}}" @if ($company->id==request("company_id")) selected @endif>
                    {{$company->id}} - {{$company->name}} - {{$company->contacts()->count()}}
                </option>
                @endforeach
        </select>
    </div>
</form>
