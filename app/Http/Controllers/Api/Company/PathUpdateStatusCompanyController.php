<?php

namespace App\Http\Controllers\Api\Company;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Company as ModelsCompany;
use Vocces\Company\Application\CompanyUpdateStatus;
use Vocces\Company\Domain\ValueObject\CompanyStatus;

class PathUpdateStatusCompanyController extends Controller
{
    /**
     * Update company
     *
     * @param  ModelsCompany $company
     * @param  CompanyUpdateStatus $service
     */
    public function __invoke(ModelsCompany $company ,CompanyUpdateStatus $service )
    {
        DB::beginTransaction();
        try {
            $companyStatus= new CompanyStatus(1);
            $return = $service->handle($company, $companyStatus->name());
            DB::commit();
            return response($return->toArray(),201);
        } catch (\Throwable $error) {
            DB::rollback();
            throw $error;
        }
    }
}
