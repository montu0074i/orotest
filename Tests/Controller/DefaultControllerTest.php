<?php

namespace BvTestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase {
    
    private $client = null;

    public function setUp() {
        $this->client = static::createClient();
    }
    
    // Functional test case for the finder method..
    public function testBviFinderTest(){
        
        // call the URL
        $crawler = $this->client->request('POST', '/default/index');
        $this->client->getRequest()->attributes->get('_controller');
        
        // compare the both the URLs
        $this->assertEquals('BvTestBundle\Controller\DefaultController::indexAction', $this->client->getRequest()->attributes->get('_controller'));
        
        // Submit the form using user defined value..
        $form = $crawler->selectButton('submitButton')->form(array(
            'search' => 'BVI'
        ));
        $crawler = $this->client->submit($form);
        
    }

}
