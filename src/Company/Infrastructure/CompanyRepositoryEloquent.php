<?php

namespace Vocces\Company\Infrastructure;

use App\Models\Company as ModelsCompany;
use Vocces\Company\Domain\Company;
use Vocces\Company\Domain\CompanyRepositoryInterface;

class CompanyRepositoryEloquent implements CompanyRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function create(Company $company): void
    {
        ModelsCompany::Create([
            'id'     => $company->id(),
            'name'   => $company->name(),
            'email'   => $company->email(),
            'address'   => $company->address(),
            'status' => $company->status()->name(),
        ]);
    }
    public function changeStatus(ModelsCompany $company, string $companyStatus ): void
    {

        $company->status = $companyStatus;
        $company->save();
    }
}
