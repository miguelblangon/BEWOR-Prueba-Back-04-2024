<?php

namespace Test\Vocces\Company\Application;

use Tests\TestCase;
use Illuminate\Support\Str;
use Vocces\Company\Domain\Company;
use Vocces\Company\Application\CompanyCreator;
use Tests\Vocces\Company\Infrastructure\CompanyRepositoryFake;
use Vocces\Company\Domain\ValueObject\CompanyAddress;
use Vocces\Company\Domain\ValueObject\CompanyEmail;
use Vocces\Company\Domain\ValueObject\CompanyId;
use Vocces\Company\Domain\ValueObject\CompanyName;
use Vocces\Company\Domain\ValueObject\CompanyStatus;

final class UpdateStatusCompanyTest extends TestCase
{
    /**
     * @group application
     * @group company
     * @test
     */
    public function UpdateStatusCompany()
    {
        /**
         * Preparing
         */
        $company=0;


        $faker = \Faker\Factory::create();
        $testCompany = [
            'id'     => Str::uuid(),
            'name'   => $faker->name,
            'email'   => $faker->email,
            'address'   => $faker->address,
            'status' => 'inactive',
        ];

        /**
         * Actions
         */
        $company= new Company(
            new CompanyId($testCompany['id']) ,
            new CompanyName($testCompany['name']) ,
            new CompanyEmail($testCompany['email']) ,
            new CompanyAddress($testCompany['address']) ,
            new CompanyStatus(CompanyStatus::DISABLED)
        );
        $company->setStatus(1);
        /**
         * Assert
         */
        $this->assertInstanceOf(Company::class, $company);
        $this->assertEquals(['status'=>'active'],['status'=>$company->status()->name()]);
    }
}
