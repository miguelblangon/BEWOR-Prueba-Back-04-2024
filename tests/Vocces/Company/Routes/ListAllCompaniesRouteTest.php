<?php

namespace Tests\Vocces\Company\Routes;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ListAllCompaniesRouteTest extends TestCase
{
    /**
     * @group route
     * @group access-interface
     * @test
     */
    public function getListAllCompaniesRoute()
    {
        /**
         * Preparing
         */

        $testCompany = DB::table('companies')->get(['id', 'name','email','address','status'])->toArray();
        $prepareCompanies= json_encode($testCompany);
        /**
         * Actions
         */
        $response = $this->json('GET', '/api/company');

        /**
         * Asserts
         */
        $response->assertStatus(201);
        $this->assertJsonStringEqualsJsonString($prepareCompanies,$response->getContent());
    }
}
