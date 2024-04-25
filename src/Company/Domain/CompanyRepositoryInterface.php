<?php

namespace Vocces\Company\Domain;

use App\Models\Company as ModelsCompany;
use Vocces\Company\Domain\ValueObject\CompanyStatus;

interface CompanyRepositoryInterface
{
    /**
     * Persist a new company instance
     *
     * @param Company $company
     *
     * @return void
     */
    public function create(Company $company): void;
    public function changeStatus(ModelsCompany $company,string $companyStatus): void;
}
