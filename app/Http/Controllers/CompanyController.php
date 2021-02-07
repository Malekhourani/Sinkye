<?php

namespace App\Http\Controllers;

use App\HelperTools\ValidationRulesHelper;
use App\Http\HttpTools\HttpResponse;
use App\Models\Company;
use App\Repository\Company\ICompanyRepository;
use App\Services\Validation\IValidationService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CompanyController extends Controller
{
    private Company $company;
    private HttpResponse $response;
    private ICompanyRepository $repository;
    private IValidationService $validationService;

    public function __construct(
        Company $company,
        HttpResponse $response,
        ICompanyRepository $repository,
        IValidationService $validationService
    ) {
        $this->company = $company;
        $this->response = $response;
        $this->repository = $repository;
        $this->validationService = $validationService;
    }

    public function index()
    {
        $companies = $this->repository->all();

        if ($companies == null) return $this->response->noContent();

        return $this->response->ok($companies);
    }

    public function store(Request $request)
    {
        // return $this->repo->store($request, ValidationRulesHelper::COMPANY_VALIDATION_RULES);
    }

    public function show(int $id)
    {
        $company = $this->repository->show($id, [$this->company->primaryKey, 'name', 'description']);

        if($company == null) return $this->response->notFound();

        return $this->response->ok($company);
    }

    public function update(Request $request, int $id)
    {
        // $this->repo->update($request, $id);
    }

    public function destroy(int $id)
    {
        $deletedColumns = $this->repository->destroy($id);

        if($deletedColumns == 0) return $this->response->notFound();

        return $this->response->noContent();
    }
}
