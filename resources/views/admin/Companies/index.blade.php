<h1>Lista aziende</h1>
<ul>
    @foreach ($companies as $company)
        <li>
            <a href="{{route('admin.companies.show',$company)}}">{{$company->company_name}}</a>
        </li>    
    @endforeach
</ul>
