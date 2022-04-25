<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemReferences StructType
 * Meta information extracted from the WSDL
 * - documentation: Export Declaration Line Item's References
 * @subpackage Structs
 */
class ItemReferences extends AbstractStructBase
{
    /**
     * The ItemReference
     * Meta information extracted from the WSDL
     * - documentation: Customs Invoice Reference entry
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\ItemReference|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\ItemReference $ItemReference = null;
    /**
     * Constructor method for ItemReferences
     * @uses ItemReferences::setItemReference()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ItemReference $itemReference
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\ItemReference $itemReference = null)
    {
        $this
            ->setItemReference($itemReference);
    }
    /**
     * Get ItemReference value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemReference|null
     */
    public function getItemReference(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\ItemReference
    {
        return $this->ItemReference;
    }
    /**
     * Set ItemReference value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ItemReference $itemReference
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemReferences
     */
    public function setItemReference(?\Maetva\DhlExpress\ExpressRateBook\StructType\ItemReference $itemReference = null): self
    {
        $this->ItemReference = $itemReference;
        
        return $this;
    }
}
