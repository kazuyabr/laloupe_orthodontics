<?php

namespace OrthoBundle\Tests\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase;

class FormulaireControllerTest extends WebTestCase
{
    public function testConnexionFormulaire()
    {
        $fixtures = array(
            'OrthoBundle\DataFixtures\ORM\LoadAdjonctionsData',
            'OrthoBundle\DataFixtures\ORM\LoadAppareillagesData',
            'OrthoBundle\DataFixtures\ORM\LoadCouleurData',
            'OrthoBundle\DataFixtures\ORM\LoadMotifData',
            'OrthoBundle\DataFixtures\ORM\LoadUtilisateursData'
        );

        $this->fixtures = $this->loadFixtures($fixtures, null, 'doctrine', true)->getReferenceRepository();

        $client = static::createClient(array(), array(
        'PHP_AUTH_USER' => 'superadmin',
            'PHP_AUTH_PW' => 'superadmin',
        ));

        $crawler = $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('UserBundle\Controller\SecurityFOSUser1Controller::loginAction', $client->getRequest()->attributes->get('_controller'));

        $this->assertTrue($crawler->filter('form input[name="_username"]')->count() == 1);
        $this->assertTrue($crawler->filter('form input[name="_password"]')->count() == 1);

        $form = $crawler->selectButton('Connexion')->form();
        $form['_username'] = 'superadmin';
        $form['_password'] = 'superadmin';

        $client->submit($form);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('OrthoBundle\Controller\FormulaireController::createFormulaireAction', $client->getRequest()->attributes->get('_controller'));




    }
}
