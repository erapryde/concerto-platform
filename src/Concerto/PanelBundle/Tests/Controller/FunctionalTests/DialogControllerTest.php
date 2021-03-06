<?php

namespace Concerto\PanelBundle\Tests\Controller\FunctionalTests;

class DialogControllerTest extends AFunctionalTest {

    public function testGenericWindowAction() {
        $client = self::createLoggedClient();

        $client->request('GET', '/admin/dialog/alert_dialog.html');
        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function testRDocumentationWindowAction() {
        $client = self::createLoggedClient();

        $client->request('GET', '/admin/dialog/r_documentation_generation_help.html');
        $this->assertTrue($client->getResponse()->isSuccessful());
    }
}
