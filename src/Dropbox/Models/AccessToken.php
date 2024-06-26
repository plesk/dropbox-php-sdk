<?php
namespace Kunnu\Dropbox\Models;

class AccessToken extends BaseModel
{
    /**
     * Access Token
     *
     * @var string
     */
    protected $token;

    /**
     * Token Type
     *
     * @var string
     */
    protected $tokenType;

    /**
     * Bearer
     *
     * @var string
     */
    protected $bearer;

    /**
     * User ID
     *
     * @var string
     */
    protected $uid;

    /**
     * Account ID
     *
     * @var string
     */
    protected $accountId;

    /**
     * Team ID
     *
     * @var string
     */
    protected $teamId;

    /**
     * @var string|null
     */
    private $expiresIn;

    /**
     * @var string|null
     */
    private $refreshToken;

    /**
     * Create a new AccessToken instance
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);

        $this->token = $this->getDataProperty('access_token');
        $this->tokenType = $this->getDataProperty('tokenType');
        $this->bearer = $this->getDataProperty('bearer');
        $this->uid = $this->getDataProperty('uid');
        $this->accountId = $this->getDataProperty('accountId');
        $this->teamId = $this->getDataProperty('teamId');
        $this->expiresIn = $this->getDataProperty('expires_in');
        $this->refreshToken = $this->getDataProperty('refresh_token');
    }

    /**
     * Get Access Token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return string|null
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @return string|null
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * Get Token Type
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * Get Bearer
     *
     * @return string
     */
    public function getBearer()
    {
        return $this->bearer;
    }

    /**
     * Get User ID
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Get Account ID
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Get Team ID
     *
     * @return string
     */
    public function getTeamId()
    {
        return $this->teamId;
    }
}
