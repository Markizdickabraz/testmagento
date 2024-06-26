<?php
namespace Magento\Bundle\Model\Product\Type;

/**
 * Interceptor class for @see \Magento\Bundle\Model\Product\Type
 */
class Interceptor extends \Magento\Bundle\Model\Product\Type implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\Option $catalogProductOption, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Model\Product\Type $catalogProductType, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Registry $coreRegistry, \Psr\Log\LoggerInterface $logger, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Helper\Product $catalogProduct, \Magento\Catalog\Helper\Data $catalogData, \Magento\Bundle\Model\SelectionFactory $bundleModelSelection, \Magento\Bundle\Model\ResourceModel\BundleFactory $bundleFactory, \Magento\Bundle\Model\ResourceModel\Selection\CollectionFactory $bundleCollection, \Magento\Catalog\Model\Config $config, \Magento\Bundle\Model\ResourceModel\Selection $bundleSelection, \Magento\Bundle\Model\OptionFactory $bundleOption, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockStateInterface $stockState, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null, ?\Magento\Bundle\Model\ResourceModel\Selection\Collection\FilterApplier $selectionCollectionFilterApplier = null, ?\Magento\Framework\Stdlib\ArrayUtils $arrayUtility = null, ?\Magento\Framework\File\UploaderFactory $uploaderFactory = null, ?\Magento\Bundle\Model\ResourceModel\Option\AreBundleOptionsSalable $areBundleOptionsSalable = null)
    {
        $this->___init();
        parent::__construct($catalogProductOption, $eavConfig, $catalogProductType, $eventManager, $fileStorageDb, $filesystem, $coreRegistry, $logger, $productRepository, $catalogProduct, $catalogData, $bundleModelSelection, $bundleFactory, $bundleCollection, $config, $bundleSelection, $bundleOption, $storeManager, $priceCurrency, $stockRegistry, $stockState, $serializer, $metadataPool, $selectionCollectionFilterApplier, $arrayUtility, $uploaderFactory, $areBundleOptionsSalable);
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRelationInfo');
        return $pluginInfo ? $this->___callPlugins('getRelationInfo', func_get_args(), $pluginInfo) : parent::getRelationInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenIds($parentId, $required = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenIds');
        return $pluginInfo ? $this->___callPlugins('getChildrenIds', func_get_args(), $pluginInfo) : parent::getChildrenIds($parentId, $required);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentIdsByChild($childId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentIdsByChild');
        return $pluginInfo ? $this->___callPlugins('getParentIdsByChild', func_get_args(), $pluginInfo) : parent::getParentIdsByChild($childId);
    }

    /**
     * {@inheritdoc}
     */
    public function getSku($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSku');
        return $pluginInfo ? $this->___callPlugins('getSku', func_get_args(), $pluginInfo) : parent::getSku($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getWeight($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWeight');
        return $pluginInfo ? $this->___callPlugins('getWeight', func_get_args(), $pluginInfo) : parent::getWeight($product);
    }

    /**
     * {@inheritdoc}
     */
    public function isVirtual($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isVirtual');
        return $pluginInfo ? $this->___callPlugins('isVirtual', func_get_args(), $pluginInfo) : parent::isVirtual($product);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        return $pluginInfo ? $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo) : parent::beforeSave($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptions');
        return $pluginInfo ? $this->___callPlugins('getOptions', func_get_args(), $pluginInfo) : parent::getOptions($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionsIds($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionsIds');
        return $pluginInfo ? $this->___callPlugins('getOptionsIds', func_get_args(), $pluginInfo) : parent::getOptionsIds($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionsCollection($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionsCollection');
        return $pluginInfo ? $this->___callPlugins('getOptionsCollection', func_get_args(), $pluginInfo) : parent::getOptionsCollection($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectionsCollection($optionIds, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectionsCollection');
        return $pluginInfo ? $this->___callPlugins('getSelectionsCollection', func_get_args(), $pluginInfo) : parent::getSelectionsCollection($optionIds, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function updateQtyOption($options, \Magento\Framework\DataObject $option, $value, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateQtyOption');
        return $pluginInfo ? $this->___callPlugins('updateQtyOption', func_get_args(), $pluginInfo) : parent::updateQtyOption($options, $option, $value, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareQuoteItemQty($qty, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareQuoteItemQty');
        return $pluginInfo ? $this->___callPlugins('prepareQuoteItemQty', func_get_args(), $pluginInfo) : parent::prepareQuoteItemQty($qty, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function isSalable($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSalable');
        return $pluginInfo ? $this->___callPlugins('isSalable', func_get_args(), $pluginInfo) : parent::isSalable($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecifyOptionMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSpecifyOptionMessage');
        return $pluginInfo ? $this->___callPlugins('getSpecifyOptionMessage', func_get_args(), $pluginInfo) : parent::getSpecifyOptionMessage();
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectionsByIds($selectionIds, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectionsByIds');
        return $pluginInfo ? $this->___callPlugins('getSelectionsByIds', func_get_args(), $pluginInfo) : parent::getSelectionsByIds($selectionIds, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionsByIds($optionIds, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionsByIds');
        return $pluginInfo ? $this->___callPlugins('getOptionsByIds', func_get_args(), $pluginInfo) : parent::getOptionsByIds($optionIds, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderOptions($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrderOptions');
        return $pluginInfo ? $this->___callPlugins('getOrderOptions', func_get_args(), $pluginInfo) : parent::getOrderOptions($product);
    }

    /**
     * {@inheritdoc}
     */
    public function shakeSelections($firstItem, $secondItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'shakeSelections');
        return $pluginInfo ? $this->___callPlugins('shakeSelections', func_get_args(), $pluginInfo) : parent::shakeSelections($firstItem, $secondItem);
    }

    /**
     * {@inheritdoc}
     */
    public function hasOptions($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasOptions');
        return $pluginInfo ? $this->___callPlugins('hasOptions', func_get_args(), $pluginInfo) : parent::hasOptions($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getForceChildItemQtyChanges($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForceChildItemQtyChanges');
        return $pluginInfo ? $this->___callPlugins('getForceChildItemQtyChanges', func_get_args(), $pluginInfo) : parent::getForceChildItemQtyChanges($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchableData($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSearchableData');
        return $pluginInfo ? $this->___callPlugins('getSearchableData', func_get_args(), $pluginInfo) : parent::getSearchableData($product);
    }

    /**
     * {@inheritdoc}
     */
    public function checkProductBuyState($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkProductBuyState');
        return $pluginInfo ? $this->___callPlugins('checkProductBuyState', func_get_args(), $pluginInfo) : parent::checkProductBuyState($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsToPurchaseByReqGroups($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductsToPurchaseByReqGroups');
        return $pluginInfo ? $this->___callPlugins('getProductsToPurchaseByReqGroups', func_get_args(), $pluginInfo) : parent::getProductsToPurchaseByReqGroups($product);
    }

    /**
     * {@inheritdoc}
     */
    public function processBuyRequest($product, $buyRequest)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processBuyRequest');
        return $pluginInfo ? $this->___callPlugins('processBuyRequest', func_get_args(), $pluginInfo) : parent::processBuyRequest($product, $buyRequest);
    }

    /**
     * {@inheritdoc}
     */
    public function canConfigure($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canConfigure');
        return $pluginInfo ? $this->___callPlugins('canConfigure', func_get_args(), $pluginInfo) : parent::canConfigure($product);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteTypeSpecificData');
        return $pluginInfo ? $this->___callPlugins('deleteTypeSpecificData', func_get_args(), $pluginInfo) : parent::deleteTypeSpecificData($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentities(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdentities');
        return $pluginInfo ? $this->___callPlugins('getIdentities', func_get_args(), $pluginInfo) : parent::getIdentities($product);
    }

    /**
     * {@inheritdoc}
     */
    public function setTypeId($typeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTypeId');
        return $pluginInfo ? $this->___callPlugins('setTypeId', func_get_args(), $pluginInfo) : parent::setTypeId($typeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getSetAttributes($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSetAttributes');
        return $pluginInfo ? $this->___callPlugins('getSetAttributes', func_get_args(), $pluginInfo) : parent::getSetAttributes($product);
    }

    /**
     * {@inheritdoc}
     */
    public function attributesCompare($attributeOne, $attributeTwo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'attributesCompare');
        return $pluginInfo ? $this->___callPlugins('attributesCompare', func_get_args(), $pluginInfo) : parent::attributesCompare($attributeOne, $attributeTwo);
    }

    /**
     * {@inheritdoc}
     */
    public function getEditableAttributes($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEditableAttributes');
        return $pluginInfo ? $this->___callPlugins('getEditableAttributes', func_get_args(), $pluginInfo) : parent::getEditableAttributes($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeById($attributeId, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeById');
        return $pluginInfo ? $this->___callPlugins('getAttributeById', func_get_args(), $pluginInfo) : parent::getAttributeById($attributeId, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function processConfiguration(\Magento\Framework\DataObject $buyRequest, $product, $processMode = 'lite')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processConfiguration');
        return $pluginInfo ? $this->___callPlugins('processConfiguration', func_get_args(), $pluginInfo) : parent::processConfiguration($buyRequest, $product, $processMode);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareForCartAdvanced(\Magento\Framework\DataObject $buyRequest, $product, $processMode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareForCartAdvanced');
        return $pluginInfo ? $this->___callPlugins('prepareForCartAdvanced', func_get_args(), $pluginInfo) : parent::prepareForCartAdvanced($buyRequest, $product, $processMode);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareForCart(\Magento\Framework\DataObject $buyRequest, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareForCart');
        return $pluginInfo ? $this->___callPlugins('prepareForCart', func_get_args(), $pluginInfo) : parent::prepareForCart($buyRequest, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function processFileQueue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processFileQueue');
        return $pluginInfo ? $this->___callPlugins('processFileQueue', func_get_args(), $pluginInfo) : parent::processFileQueue();
    }

    /**
     * {@inheritdoc}
     */
    public function addFileQueue($queueOptions)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFileQueue');
        return $pluginInfo ? $this->___callPlugins('addFileQueue', func_get_args(), $pluginInfo) : parent::addFileQueue($queueOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function save($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($product);
    }

    /**
     * {@inheritdoc}
     */
    public function isComposite($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isComposite');
        return $pluginInfo ? $this->___callPlugins('isComposite', func_get_args(), $pluginInfo) : parent::isComposite($product);
    }

    /**
     * {@inheritdoc}
     */
    public function canUseQtyDecimals()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseQtyDecimals');
        return $pluginInfo ? $this->___callPlugins('canUseQtyDecimals', func_get_args(), $pluginInfo) : parent::canUseQtyDecimals();
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionSku($product, $sku = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionSku');
        return $pluginInfo ? $this->___callPlugins('getOptionSku', func_get_args(), $pluginInfo) : parent::getOptionSku($product, $sku);
    }

    /**
     * {@inheritdoc}
     */
    public function hasRequiredOptions($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasRequiredOptions');
        return $pluginInfo ? $this->___callPlugins('hasRequiredOptions', func_get_args(), $pluginInfo) : parent::hasRequiredOptions($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreFilter($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreFilter');
        return $pluginInfo ? $this->___callPlugins('getStoreFilter', func_get_args(), $pluginInfo) : parent::getStoreFilter($product);
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreFilter($store, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreFilter');
        return $pluginInfo ? $this->___callPlugins('setStoreFilter', func_get_args(), $pluginInfo) : parent::setStoreFilter($store, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function assignProductToOption($optionProduct, $option, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'assignProductToOption');
        return $pluginInfo ? $this->___callPlugins('assignProductToOption', func_get_args(), $pluginInfo) : parent::assignProductToOption($optionProduct, $option, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function setConfig($config)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setConfig');
        return $pluginInfo ? $this->___callPlugins('setConfig', func_get_args(), $pluginInfo) : parent::setConfig($config);
    }

    /**
     * {@inheritdoc}
     */
    public function checkProductConfiguration($product, $buyRequest)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkProductConfiguration');
        return $pluginInfo ? $this->___callPlugins('checkProductConfiguration', func_get_args(), $pluginInfo) : parent::checkProductConfiguration($product, $buyRequest);
    }

    /**
     * {@inheritdoc}
     */
    public function hasWeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasWeight');
        return $pluginInfo ? $this->___callPlugins('hasWeight', func_get_args(), $pluginInfo) : parent::hasWeight();
    }

    /**
     * {@inheritdoc}
     */
    public function setImageFromChildProduct(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setImageFromChildProduct');
        return $pluginInfo ? $this->___callPlugins('setImageFromChildProduct', func_get_args(), $pluginInfo) : parent::setImageFromChildProduct($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getAssociatedProducts($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAssociatedProducts');
        return $pluginInfo ? $this->___callPlugins('getAssociatedProducts', func_get_args(), $pluginInfo) : parent::getAssociatedProducts($product);
    }

    /**
     * {@inheritdoc}
     */
    public function isPossibleBuyFromList($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPossibleBuyFromList');
        return $pluginInfo ? $this->___callPlugins('isPossibleBuyFromList', func_get_args(), $pluginInfo) : parent::isPossibleBuyFromList($product);
    }
}
