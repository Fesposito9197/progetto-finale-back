<h1>Lista aziende</h1>
<ul>
    @foreach ($companies as $company)
        <li>{{$company->company_name}}</li>    
    @endforeach
</ul>
