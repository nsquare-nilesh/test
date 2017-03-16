<?php

// Set Parameters
define('CONSUMER_KEY', SJB_Settings::getSettingByName('li_apiKey'));
define('CONSUMER_SECRET', SJB_Settings::getSettingByName('li_secKey'));

class SJB_LinkedIn
{
	const _GET_RESPONSE = 'lResponse';
	const OAUTH_PROBLEM = 'oauth_problem';

    /**
     * permissions to send with scope parameter
     * @info https://developer.linkedin.com/documents/profile-fields
     * @var string
     */
    private $permissions = 'r_basicprofile r_emailaddress';

	/**
	 * profile linkedin fields
	 * @var array
	 */
	private $_aProfileFields = array(
		'id',
		'email-address',
		'first-name',
		'main-address',
		'last-name',
		'headline',
		'date-of-birth',
		'industry',
		'summary',
		'positions',
		'educations',
		'specialties',
		'picture-url',
		'phone-numbers',
		'twitter-accounts',
		'public-profile-url',
		'location'
	);

	private $_options = array(
		'siteUrl'               => 'https://api.linkedin.com/uas/oauth',
		'requestTokenUrl'       => 'https://api.linkedin.com/uas/oauth/requestToken',
		'userAuthorisationUrl'  => 'https://www.linkedin.com/uas/oauth/authorize',
		'accessTokenUrl'        => 'https://api.linkedin.com/uas/oauth/accessToken',
		'consumerKey'           => CONSUMER_KEY,
		'consumerSecret'        => CONSUMER_SECRET,
		'version'               => '1.0', // there is no other version�
		'invalidateTokenUrl'    => 'https://api.linkedin.com/uas/oauth/invalidateToken',
	);

	/**
	 * @var null|Zend_Oauth_Consumer
	 */
	private $_oConsumer = null;

	/**
	 * @var null|Zend_Oauth_Token_Access
	 */
	private $_accessToken = null;

	public function __construct($callbackUrl = null, $aProfileFields = array())
	{
		$this->_options['localUrl'] = SJB_System::getSystemSettings('SITE_URL');
		$this->_options['callbackUrl'] = SJB_System::getSystemSettings('SITE_URL') . '?network=linkedin';

		if (!empty($callbackUrl)) {
			$this->_options['callbackUrl'] = $callbackUrl;
		}

		if (is_array($aProfileFields)) {
			$this->_aProfileFields = $aProfileFields;
		}

		$this->_oConsumer = new Zend_Oauth_Consumer($this->_options);
	}

	public function _getRequestToken()
	{
		$token = $this->_oConsumer->getRequestToken(array('scope' => $this->permissions));
		$_SESSION['linkedin']['requestToken'] = serialize($token);
		$this->_oConsumer->redirect();
	}

	public function _getAccessToken($accessToken = null)
	{
		if (!empty($accessToken)) {
			$this->_accessToken = $accessToken;
		}
		elseif (!empty($_SESSION['linkedin']['accessToken'])) {
			$this->_accessToken = unserialize($_SESSION['linkedin']['accessToken']);
		}
		elseif (!empty($_SESSION['linkedin']['requestToken'])) {
			$this->_accessToken = $this->_oConsumer->getAccessToken($_REQUEST, unserialize($_SESSION['linkedin']['requestToken']));
		}

		if ($this->_accessToken) {
			$_SESSION['linkedin']['accessToken'] = serialize($this->_accessToken);
			return $this->_accessToken;
		}
	}

	public function getAccessToken()
	{
		return $this->_accessToken;
	}

	public function getProfileInfo($aFields = array(), $profileID = null)
	{
		if (!empty($aFields)) {
			$this->_aProfileFields = $aFields;
		}

		if ($this->_accessToken && $this->_accessToken instanceof  Zend_Oauth_Token_Access) {
			$client = $this->_accessToken->getHttpClient($this->_options);

			// Set LinkedIn URI
			$sParams = '~';
			
			if (!is_null($profileID)) {
				$sParams = 'id=' . $profileID;
			}

			$client->setUri('https://api.linkedin.com/v1/people/' . $sParams . ':('.implode(',', $this->_aProfileFields).')');
			$client->setMethod(Zend_Http_Client::GET);
			$response = $client->request();
			return $response->getBody();
		}
	}

	public function revoke()
	{
		if ($this->_accessToken && $this->_accessToken instanceof  Zend_Oauth_Token_Access) {
			$client = $this->_accessToken->getHttpClient($this->_options);

			// Set LinkedIn URI
			$client->setUri($this->_options['invalidateTokenUrl']);

			$client->setMethod(Zend_Http_Client::GET);
			$response = $client->request();

			return $response->getMessage() == 'OK' ? true : false;
		}
	}

	/**
	 * @param $accessToken
	 */
	public function setAccessToken($accessToken)
	{
		$this->_accessToken = $accessToken;
	}

}
