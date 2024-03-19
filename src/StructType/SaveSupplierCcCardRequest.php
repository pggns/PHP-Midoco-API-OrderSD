<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierCcCardRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierCcCardRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierCcCard
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierCcCard
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCcCard|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCcCard $MidocoSupplierCcCard = null;
    /**
     * Constructor method for SaveSupplierCcCardRequest
     * @uses SaveSupplierCcCardRequest::setMidocoSupplierCcCard()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCcCard $midocoSupplierCcCard
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCcCard $midocoSupplierCcCard = null)
    {
        $this
            ->setMidocoSupplierCcCard($midocoSupplierCcCard);
    }
    /**
     * Get MidocoSupplierCcCard value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCcCard|null
     */
    public function getMidocoSupplierCcCard(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCcCard
    {
        return $this->MidocoSupplierCcCard;
    }
    /**
     * Set MidocoSupplierCcCard value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCcCard $midocoSupplierCcCard
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCcCardRequest
     */
    public function setMidocoSupplierCcCard(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCcCard $midocoSupplierCcCard = null): self
    {
        $this->MidocoSupplierCcCard = $midocoSupplierCcCard;
        
        return $this;
    }
}
