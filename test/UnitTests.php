<?php
/**
 * User: Naveen Gopala
 * Date: 1/25/16
 * Time: 4:58 PM
 */
 
use PHPUnit\Framework\TestCase;

class UnitTests extends TestCase
{

    /*
	 * Test 0 - login
	 */
    public function testLogin()
    {
        $testConfig = new TestConfig();

        $config = new DocuSign\Rooms\Configuration();
        $config->setHost($testConfig->getHost());

        $testConfig->setApiClient(new DocuSign\Rooms\Client\ApiClient($config));
        $testConfig->getApiClient()->getOAuth()->setBasePath($testConfig->getHost());

        $scope = ["signature", "impersonation",
        "dtr.rooms.read", "dtr.rooms.write",
        "dtr.company.read","dtr.company.write"];

        $token = $testConfig->getApiClient()->requestJWTUserToken($testConfig->getIntegratorKey(),$testConfig->getUserId(), $testConfig->getClientKey(), $scope);

        $this->assertInstanceOf('DocuSign\Rooms\Client\Auth\OAuthToken', $token[0]);
        $this->assertArrayHasKey('access_token', $token[0]);

        $user = $testConfig->getApiClient()->getUserInfo($token[0]['access_token']);

        $this->assertNotEmpty($user);
        $this->assertEquals($user[1], 200);

        $this->assertInstanceOf('DocuSign\Rooms\Client\Auth\UserInfo', $user[0]);
        $this->assertNotEmpty($user[0]);

        $this->assertArrayHasKey('accounts', $user[0]);
        $loginAccount = $user[0]['accounts'][0];
        $accountId = $loginAccount->getAccountId();

        $this->assertNotEmpty($accountId);

        $testConfig->setAccountId($accountId);

        return $testConfig;
    }
    
    /**
     * @depends testLogin
     */
    public function testRooms($testConfig)
    {
        $roomsApi = new DocuSign\Rooms\Api\RoomsApi($testConfig->getApiClient());
        $rooms = $roomsApi->getRooms($testConfig->getAccountId());
        
        $this->assertNotEmpty($rooms);
        $this->assertNotEmpty($rooms->getRooms());
    }
}

?>
