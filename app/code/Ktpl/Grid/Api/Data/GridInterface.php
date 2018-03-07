<?php
namespace Ktpl\Grid\Api\Data;

interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ENTITY_ID = 'entity_id';
    const NAME = 'name';
    const GENDER = 'gender';
    const PURPOSE = 'purpose';
    const BOOKING_DATE = 'booking_date';
    const IS_BOOKABLE = 'is_bookable';
    const UPDATE_TIME = 'update_time';
    const CREATED_AT = 'created_at';

   /**
    * Get EntityId.
    *
    * @return int
    */
    public function getEntityId();

   /**
    * Set EntityId.
    */
    public function setEntityId($entityId);

   /**
    * Get Name.
    *
    * @return varchar
    */
    public function getName();

   /**
    * Set Name.
    */
    public function setName($name);

    /**
    * Get Gender.
    *
    * @return varchar
    */
    public function getGender();

   /**
    * Set Gender.
    */
    public function setGender($gender);

   /**
    * Get Purpose.
    *
    * @return varchar
    */
    public function getPurpose();

   /**
    * Set Purpose.
    */
    public function setPurpose($purpose);

   /**
    * Get BookingDate.
    *
    * @return varchar
    */
    public function getBookingDate();

   /**
    * Set BookingDate.
    */
    public function setBookingDate($bookingDate);

   /**
    * Get IsBookable.
    *
    * @return varchar
    */
    public function getIsBookable();

   /**
    * Set IsBookable.
    */
    public function setIsBookable($isBookable);

   /**
    * Get CreatedAt.
    *
    * @return varchar
    */
    public function getCreatedAt();

   /**
    * Set CreatedAt.
    */
    public function setCreatedAt($createdAt);
}
