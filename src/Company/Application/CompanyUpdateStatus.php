<?php

namespace Vocces\Company\Application;

use Vocces\Company\Domain\Company;
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
    public function handle(Company $company,int $companiStatus )
    {
         $this->repository->changeStatus($company,$companiStatus);
        return $company;
    }
}
