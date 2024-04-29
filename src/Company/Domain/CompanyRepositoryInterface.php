<?php

namespace Vocces\Company\Domain;
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
    public function changeStatus(Company $company, int $companyStatus): void;
    public function listAll(array $list): string;
}
