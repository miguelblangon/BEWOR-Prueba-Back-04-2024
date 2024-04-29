<?php

namespace Test\Vocces\Company\Application;

use App\Models\Company as ModelsCompany;
use Tests\TestCase;
use Vocces\Company\Application\CompaniesAllList;
use Vocces\Company\Infrastructure\CompanyRepositoryEloquent;

final class ListAllCompaniesTest extends TestCase
{
    /**
     * @group application
     * @group company
     * @test
     */
    public function listAllCompanies()
    {
        /**
         * Preparing
         */
         $modelCompanies = ModelsCompany::all();
         /**
          * Actions
          */
          $listAll= new CompaniesAllList(new CompanyRepositoryEloquent());
          $list = $listAll->handle($modelCompanies->toArray());
          /**
         * Assert
         */
        $this->assertJson($list);
    }
}
