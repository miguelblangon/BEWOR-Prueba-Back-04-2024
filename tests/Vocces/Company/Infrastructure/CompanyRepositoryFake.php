<?php

namespace Tests\Vocces\Company\Infrastructure;

use App\Models\Company as ModelsCompany;
use Vocces\Company\Domain\Company;
use Vocces\Company\Domain\CompanyRepositoryInterface;

class CompanyRepositoryFake implements CompanyRepositoryInterface
{
    public bool $callMethodCreate = false;

    /**
     * @inheritdoc
     */
    public function create(Company $company): void
    {
        $this->callMethodCreate = true;
    }
    public function changeStatus(ModelsCompany $company, string $companyStatus): void
    {
        $this->callMethodCreate = true;
    }
}
