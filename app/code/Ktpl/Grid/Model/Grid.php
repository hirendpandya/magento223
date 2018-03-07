<?php
namespace Ktpl\Grid\Model;

use Ktpl\Grid\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'kt_grid_records';

    /**
     * @var string
     */
    protected $_cacheTag = 'kt_grid_records';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'kt_grid_records';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Ktpl\Grid\Model\ResourceModel\Grid');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set EntityId.
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get Name.
     *
     * @return varchar
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Set Name.
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get Gender.
     *
     * @return varchar
     */
    public function getGender()
    {
        return $this->getData(self::GENDER);
    }

    /**
     * Set Gender.
     */
    public function setGender($gender)
    {
        return $this->setData(self::GENDER, $gender);
    }

    /**
     * Get Purpose.
     *
     * @return varchar
     */
    public function getPurpose()
    {
        return $this->getData(self::PURPOSE);
    }

    /**
     * Set Purpose.
     */
    public function setPurpose($purpose)
    {
        return $this->setData(self::PURPOSE, $purpose);
    }

    /**
     * Get BookingDate.
     *
     * @return varchar
     */
    public function getBookingDate()
    {
        return $this->getData(self::BOOKING_DATE);
    }

    /**
     * Set PublishDate.
     */
    public function setBookingDate($bookingDate)
    {
        return $this->setData(self::BOOKING_DATE, $bookingDate);
    }

    /**
     * Get IsBookable.
     *
     * @return varchar
     */
    public function getIsBookable()
    {
        return $this->getData(self::IS_BOOKABLE);
    }

    /**
     * Set IsBookable.
     */ 
    public function setIsBookable($isBookable)
    {
        return $this->setData(self::IS_BOOKABLE, $isBookable);
    }

    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
}
