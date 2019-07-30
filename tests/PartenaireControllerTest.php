<?php

namespace App\Tests;
use PHPUnit\Framework\Exception;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PartenaireControllerTest extends WebTestCase
{
    public function testNew()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'KabirouWari',
            'PHP_AUTH_PW'=>'123wari'
         ]);      
         $crawler = $client->request('POST', '/api/partenaires',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{"entreprise":"elevage",
            "raisonSocial": "SUARL",
            "ninea": "GJ856",
            "adresse": "Sicap MBAO",
            "compte": "58525",
            "solde": "0",
            "statut": "bloquer"}');
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(201,$client->getResponse()->getStatusCode());
    }  
    

    public function testShow()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'KabirouWari',
            'PHP_AUTH_PW'=>'123wari'
        ]);       
        $crawler =$client->request('GET', '/api/partenaires/11');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testUpdate()
    {


        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'KabirouWari',
            'PHP_AUTH_PW'=>'123wari'
        ]);

            $crawler = $client->request('PUT', '/api/partenaires/11',[],[],
            ['CONTENT_TYPE'=>"application/json"],
            '{"entreprise":"EELEEVAGE","raisonSocial": "SUARL","ninea": "GJ856","adresse": "Sicap MBAO","compte": "58525","solde": "0","statut": "bloquer"}');
            $rep=$client->getResponse();
            var_dump($rep);
            $this->assertSame(200,$client->getResponse()->getStatusCode());
    
    }
  
   
}
