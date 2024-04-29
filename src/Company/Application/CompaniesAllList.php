<?php

namespace Vocces\Company\Application;
use Vocces\Company\Domain\Company;
use Vocces\Company\Domain\CompanyRepositoryInterface;
use Vocces\Shared\Domain\Interfaces\ServiceInterface;

class CompaniesAllList implements ServiceInterface
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
     * Create all companies
     */
    public function handle(array $list)
    {

        $companiesList=[];
        foreach ($list as  $value) {
            $companiesList[]=  Company::fromDataArray($value)->toArray();
        }
        return   $this->repository->listAll($companiesList);
    }
}
