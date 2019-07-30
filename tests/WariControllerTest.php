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
    //     '{"username":"lenaa",
    //         "password": "lenaa",
    //         "prenom": "nabienne",
    //         "nom": "diongue",
    //         "telephone": "778596541",
    //         "mail": "nabienne@gmail.com",
    //         "adresse": "fass mbao",
    //         "cni": "258963214589",
    //         "statut": "debloquer",
    //         "partenaire": "7",
    //         "profil": "user" }');
    //     $rep=$client->getResponse();
    //     var_dump($rep);
    //     $this->assertSame(201,$client->getResponse()->getStatusCode());
    // }  


    public function testLogin()
    {


        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'mbacke',
            'PHP_AUTH_PW'=>'mbaye'
         ]);      
         $crawler = $client->request('POST', '/api/login',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{"username":"mbacke",
            "password": "mbaye"}');
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(200,$client->getResponse()->getStatusCode());
    }  

    // public function testUserBloquer()
    // {
    //     $client = static::createClient([],[
    //         'PHP_AUTH_USER'=>'mbacké',
    //         'PHP_AUTH_PW'=>'var'
    //     ]);
    //         $crawler = $client->request('POST', '/api/users/bloquer',[],[],
    //         ['CONTENT_TYPE'=>"application/json"],
    //         '{"username":"dmg"}'
    //     );
    //     $rep=$client->getResponse();
    //     var_dump($rep);
    //     $this->assertSame(200,$client->getResponse()->getStatusCode());
    // }

    public function testUserDebloquer()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER'=>'mbacke',
            'PHP_AUTH_PW'=>'mbaye'
        ]);
            $crawler = $client->request('POST', '/api/users/debloquer',[],[],
            ['CONTENT_TYPE'=>"application/json"],
            '{"username":"dmg"}'
        );
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(200,$client->getResponse()->getStatusCode());
    }


}
