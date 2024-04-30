<?php

namespace App\Http\Controllers\Api\Company;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Vocces\Company\Application\CompaniesAllList;

class GetListAllCompaniesController extends Controller
{
    /**
     * List All companies
     *
     */
    public function __invoke(CompaniesAllList $service)
    {
        DB::beginTransaction();
        $data= Company::all()->toArray();
        try {
            $company = $service->handle($data);
            DB::commit();
            return response($company, 201);
        } catch (\Throwable $error) {
            DB::rollback();
            throw $error;
        }
    }
}
