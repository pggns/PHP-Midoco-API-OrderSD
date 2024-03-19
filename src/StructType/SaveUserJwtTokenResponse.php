<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUserJwtTokenResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveUserJwtTokenResponse extends AbstractStructBase
{
    /**
     * The MidocoUserJwtToken
     * Meta information extracted from the WSDL
     * - ref: MidocoUserJwtToken
     * @var \Pggns\MidocoApi\OrderSD\StructType\UsersJwtTokenDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\UsersJwtTokenDTO $MidocoUserJwtToken = null;
    /**
     * Constructor method for SaveUserJwtTokenResponse
     * @uses SaveUserJwtTokenResponse::setMidocoUserJwtToken()
     * @param \Pggns\MidocoApi\OrderSD\StructType\UsersJwtTokenDTO $midocoUserJwtToken
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\UsersJwtTokenDTO $midocoUserJwtToken = null)
    {
        $this
            ->setMidocoUserJwtToken($midocoUserJwtToken);
    }
    /**
     * Get MidocoUserJwtToken value
     * @return \Pggns\MidocoApi\OrderSD\StructType\UsersJwtTokenDTO|null
     */
    public function getMidocoUserJwtToken(): ?\Pggns\MidocoApi\OrderSD\StructType\UsersJwtTokenDTO
    {
        return $this->MidocoUserJwtToken;
    }
    /**
     * Set MidocoUserJwtToken value
     * @param \Pggns\MidocoApi\OrderSD\StructType\UsersJwtTokenDTO $midocoUserJwtToken
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveUserJwtTokenResponse
     */
    public function setMidocoUserJwtToken(?\Pggns\MidocoApi\OrderSD\StructType\UsersJwtTokenDTO $midocoUserJwtToken = null): self
    {
        $this->MidocoUserJwtToken = $midocoUserJwtToken;
        
        return $this;
    }
}
