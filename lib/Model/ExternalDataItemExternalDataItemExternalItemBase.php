<?php
/**
 * ExternalDataItemExternalDataItemExternalItemBase
 *
 * PHP version 5
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace swagger_client\Model;

use \ArrayAccess;
use swagger_client\ObjectSerializer;

/**
 * ExternalDataItemExternalDataItemExternalItemBase Class Doc Comment
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExternalDataItemExternalDataItemExternalItemBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'external_item_base';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_play' => 'int',
'total_like' => 'int',
'total_comment' => 'int',
'total_share' => 'int',
'avg_play_duration' => 'double'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_play' => null,
'total_like' => null,
'total_comment' => null,
'total_share' => null,
'avg_play_duration' => 'double'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'total_play' => 'total_play',
'total_like' => 'total_like',
'total_comment' => 'total_comment',
'total_share' => 'total_share',
'avg_play_duration' => 'avg_play_duration'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_play' => 'setTotalPlay',
'total_like' => 'setTotalLike',
'total_comment' => 'setTotalComment',
'total_share' => 'setTotalShare',
'avg_play_duration' => 'setAvgPlayDuration'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_play' => 'getTotalPlay',
'total_like' => 'getTotalLike',
'total_comment' => 'getTotalComment',
'total_share' => 'getTotalShare',
'avg_play_duration' => 'getAvgPlayDuration'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['total_play'] = isset($data['total_play']) ? $data['total_play'] : null;
        $this->container['total_like'] = isset($data['total_like']) ? $data['total_like'] : null;
        $this->container['total_comment'] = isset($data['total_comment']) ? $data['total_comment'] : null;
        $this->container['total_share'] = isset($data['total_share']) ? $data['total_share'] : null;
        $this->container['avg_play_duration'] = isset($data['avg_play_duration']) ? $data['avg_play_duration'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets total_play
     *
     * @return int
     */
    public function getTotalPlay()
    {
        return $this->container['total_play'];
    }

    /**
     * Sets total_play
     *
     * @param int $total_play 30???????????????
     *
     * @return $this
     */
    public function setTotalPlay($total_play)
    {
        $this->container['total_play'] = $total_play;

        return $this;
    }

    /**
     * Gets total_like
     *
     * @return int
     */
    public function getTotalLike()
    {
        return $this->container['total_like'];
    }

    /**
     * Sets total_like
     *
     * @param int $total_like 30????????????
     *
     * @return $this
     */
    public function setTotalLike($total_like)
    {
        $this->container['total_like'] = $total_like;

        return $this;
    }

    /**
     * Gets total_comment
     *
     * @return int
     */
    public function getTotalComment()
    {
        return $this->container['total_comment'];
    }

    /**
     * Sets total_comment
     *
     * @param int $total_comment 30????????????
     *
     * @return $this
     */
    public function setTotalComment($total_comment)
    {
        $this->container['total_comment'] = $total_comment;

        return $this;
    }

    /**
     * Gets total_share
     *
     * @return int
     */
    public function getTotalShare()
    {
        return $this->container['total_share'];
    }

    /**
     * Sets total_share
     *
     * @param int $total_share 30????????????
     *
     * @return $this
     */
    public function setTotalShare($total_share)
    {
        $this->container['total_share'] = $total_share;

        return $this;
    }

    /**
     * Gets avg_play_duration
     *
     * @return double
     */
    public function getAvgPlayDuration()
    {
        return $this->container['avg_play_duration'];
    }

    /**
     * Sets avg_play_duration
     *
     * @param double $avg_play_duration 30?????????????????????
     *
     * @return $this
     */
    public function setAvgPlayDuration($avg_play_duration)
    {
        $this->container['avg_play_duration'] = $avg_play_duration;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
