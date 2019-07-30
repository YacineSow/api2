<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PartenaireControllerTest extends WebTestCase
{
    public function testNew()
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/api/partenaires',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{"entreprise":"agricole","raisonSocial": "SARL","ninea": "bnju2014m","adresse": "Sicap","compte": 125874123,"solde": 0,"statut": "bloquer"}');
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(201,$client->getResponse()->getStatusCode());
    }
    
}
