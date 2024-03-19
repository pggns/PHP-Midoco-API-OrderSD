<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessibleComponentsByRoleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAccessibleComponentsByRoleRequest extends AbstractStructBase
{
    /**
     * The MidocoAccessibleComponentByRole
     * Meta information extracted from the WSDL
     * - ref: MidocoAccessibleComponentByRole
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoAccessibleComponentByRoleType|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoAccessibleComponentByRoleType $MidocoAccessibleComponentByRole = null;
    /**
     * Constructor method for GetAccessibleComponentsByRoleRequest
     * @uses GetAccessibleComponentsByRoleRequest::setMidocoAccessibleComponentByRole()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole = null)
    {
        $this
            ->setMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole);
    }
    /**
     * Get MidocoAccessibleComponentByRole value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoAccessibleComponentByRoleType|null
     */
    public function getMidocoAccessibleComponentByRole(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoAccessibleComponentByRoleType
    {
        return $this->MidocoAccessibleComponentByRole;
    }
    /**
     * Set MidocoAccessibleComponentByRole value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAccessibleComponentsByRoleRequest
     */
    public function setMidocoAccessibleComponentByRole(?\Pggns\MidocoApi\OrderSD\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole = null): self
    {
        $this->MidocoAccessibleComponentByRole = $midocoAccessibleComponentByRole;
        
        return $this;
    }
}
