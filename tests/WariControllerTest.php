<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WariControllerTest extends WebTestCase
{
    public function testRegister()
    {


        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'Djiby',
            'PHP_AUTH_PW'=>'sow'
         ]);      
         $crawler = $client->request('POST', '/api/register',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{"username":"nabienne",
            "password": "nabienne",
            "prenom": "nabienne",
            "nom": "diongue",
            "telephone": "778596541",
            "mail": "nabienne@gmail.com",
            "adresse": "fass mbao",
            "cni": "258963214589",
            "statut": "debloquer",
            "partenaire": "7",
            "profil": "user" }');
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(201,$client->getResponse()->getStatusCode());
    }  


    public function testLogin()
    {


        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'mairame',
            'PHP_AUTH_PW'=>'mairame'
         ]);      
         $crawler = $client->request('POST', '/api/login',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{"username":"mairame",
            "password": "mairame"}');
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(200,$client->getResponse()->getStatusCode());
    }  



}
