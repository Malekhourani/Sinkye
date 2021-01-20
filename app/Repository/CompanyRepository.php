<?php


namespace App\Repository;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Repository\IRepository;

class CompanyRepository implements IRepository
{
    public function all()
    {
        return Company::all();
    }

    public function store(Request $request)
    {
        //do vaildation 

        $company = new Company;

        //$request->dd();

        // $request->input('name');

        $company->name =  $request->input('name');
        $company->description = $request->input('description');
        $company->founded = new DateTime($request->input('founded'));

        $company->save();
    }

    public function update(Request $request)
    {
        $company = Company::find($request->company_id);

        $company->name = $request->name;
        $company->description = $request->description;
        $company->founded = new DateTime($request->founded);

        $company->save();
    }

    public function destroy(int $id)
    {
        Company::find($id)->delete();
    }

    public function read(int $id)
    {
        return Company::find($id);
    }
}
