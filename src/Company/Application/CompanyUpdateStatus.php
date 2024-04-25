<?php

namespace Vocces\Company\Application;
use App\Models\Company as ModelsCompany;
use Vocces\Company\Domain\CompanyRepositoryInterface;
use Vocces\Shared\Domain\Interfaces\ServiceInterface;

class CompanyUpdateStatus implements ServiceInterface
{
    /**
     * @var CompanyRepositoryInterface $repository
     */
    private CompanyRepositoryInterface $repository;

    /**
     * Create new instance
     */
    public function __construct(CompanyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Update a status the 'inactive' to 'active'
     */
    public function handle(ModelsCompany $company,string $companiStatus )
    {
         $this->repository->changeStatus($company,$companiStatus);
        return $company;
    }
}
