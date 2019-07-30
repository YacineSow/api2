<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WariControllerTest extends WebTestCase
{
    // public function testRegister()
    // {


    //     $client = static::createClient([],[
    //         'PHP_AUTH_USER'=>'by',
    //         'PHP_AUTH_PW'=>'sowpoulo'
    //      ]);      
    //      $crawler = $client->request('POST', '/api/register',[],[],
    //     ['CONTENT_TYPE'=>"application/json"],
    //     '{"username":"nabienne",
    //         "password": "nabienne",
    //         "prenom": "nabienne",
    //         "nom": "diongue",
    //         "telephone": "778596541",
    //         "mail": "nabienne@gmail.com",
    //         "adresse": "fass mbao",
    //         "cni": "258963214589",
    //         "statut": "debloquer",
    //         "partenaire": "7"}');
    //     $rep=$client->getResponse();
    //     var_dump($rep);
    //     $this->assertSame(201,$client->getResponse()->getStatusCode());
    // }  


    public function testLogin()
    {


        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'mbacké',
            'PHP_AUTH_PW'=>'var'
         ]);      
         $crawler = $client->request('POST', '/api/login',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{"username":"mbacké",
            "password": "var"}');
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(200,$client->getResponse()->getStatusCode());
    }  



}