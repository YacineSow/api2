<?php

namespace App\Tests;

use App\Tests\PartenaireControllerTest;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class TransactionControllerTest extends WebTestCase
{
   
    public function testAddDepot()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'by',
            'PHP_AUTH_PW'=>'sowpoulo'
        ]);            $crawler = $client->request('POST', '/api/depots',[],[],
            ['CONTENT_TYPE'=>"application/json"],
            '{"montant":"500000","idPartenaire": "4"}');
            $rep=$client->getResponse();
            var_dump($rep);
            $this->assertSame(201,$client->getResponse()->getStatusCode());
    
    }

}
