<?php
/**
 * VideoSearchVideoSearchSearchVideo
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
 * VideoSearchVideoSearchSearchVideo Class Doc Comment
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VideoSearchVideoSearchSearchVideo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'search_video';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sec_item_id' => 'string',
'item_id' => 'string',
'title' => 'string',
'cover' => 'string',
'is_top' => 'bool',
'create_time' => 'int',
'is_reviewed' => 'bool',
'share_url' => 'string',
'open_id' => 'string',
'avatar' => 'string',
'nickname' => 'string',
'statistics' => '\swagger_client\Model\VideoSearchVideoSearchSearchVideoStatistics'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sec_item_id' => null,
'item_id' => null,
'title' => null,
'cover' => null,
'is_top' => null,
'create_time' => 'int64',
'is_reviewed' => null,
'share_url' => null,
'open_id' => null,
'avatar' => null,
'nickname' => null,
'statistics' => null    ];

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
        'sec_item_id' => 'sec_item_id',
'item_id' => 'item_id',
'title' => 'title',
'cover' => 'cover',
'is_top' => 'is_top',
'create_time' => 'create_time',
'is_reviewed' => 'is_reviewed',
'share_url' => 'share_url',
'open_id' => 'open_id',
'avatar' => 'avatar',
'nickname' => 'nickname',
'statistics' => 'statistics'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sec_item_id' => 'setSecItemId',
'item_id' => 'setItemId',
'title' => 'setTitle',
'cover' => 'setCover',
'is_top' => 'setIsTop',
'create_time' => 'setCreateTime',
'is_reviewed' => 'setIsReviewed',
'share_url' => 'setShareUrl',
'open_id' => 'setOpenId',
'avatar' => 'setAvatar',
'nickname' => 'setNickname',
'statistics' => 'setStatistics'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sec_item_id' => 'getSecItemId',
'item_id' => 'getItemId',
'title' => 'getTitle',
'cover' => 'getCover',
'is_top' => 'getIsTop',
'create_time' => 'getCreateTime',
'is_reviewed' => 'getIsReviewed',
'share_url' => 'getShareUrl',
'open_id' => 'getOpenId',
'avatar' => 'getAvatar',
'nickname' => 'getNickname',
'statistics' => 'getStatistics'    ];

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
        $this->container['sec_item_id'] = isset($data['sec_item_id']) ? $data['sec_item_id'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['cover'] = isset($data['cover']) ? $data['cover'] : null;
        $this->container['is_top'] = isset($data['is_top']) ? $data['is_top'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['is_reviewed'] = isset($data['is_reviewed']) ? $data['is_reviewed'] : null;
        $this->container['share_url'] = isset($data['share_url']) ? $data['share_url'] : null;
        $this->container['open_id'] = isset($data['open_id']) ? $data['open_id'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['nickname'] = isset($data['nickname']) ? $data['nickname'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sec_item_id'] === null) {
            $invalidProperties[] = "'sec_item_id' can't be null";
        }
        if ($this->container['item_id'] === null) {
            $invalidProperties[] = "'item_id' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['cover'] === null) {
            $invalidProperties[] = "'cover' can't be null";
        }
        if ($this->container['is_top'] === null) {
            $invalidProperties[] = "'is_top' can't be null";
        }
        if ($this->container['create_time'] === null) {
            $invalidProperties[] = "'create_time' can't be null";
        }
        if ($this->container['is_reviewed'] === null) {
            $invalidProperties[] = "'is_reviewed' can't be null";
        }
        if ($this->container['share_url'] === null) {
            $invalidProperties[] = "'share_url' can't be null";
        }
        if ($this->container['open_id'] === null) {
            $invalidProperties[] = "'open_id' can't be null";
        }
        if ($this->container['avatar'] === null) {
            $invalidProperties[] = "'avatar' can't be null";
        }
        if ($this->container['nickname'] === null) {
            $invalidProperties[] = "'nickname' can't be null";
        }
        if ($this->container['statistics'] === null) {
            $invalidProperties[] = "'statistics' can't be null";
        }
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
     * Gets sec_item_id
     *
     * @return string
     */
    public function getSecItemId()
    {
        return $this->container['sec_item_id'];
    }

    /**
     * Sets sec_item_id
     *
     * @param string $sec_item_id ?????????????????????id????????????????????????????????????????????????
     *
     * @return $this
     */
    public function setSecItemId($sec_item_id)
    {
        $this->container['sec_item_id'] = $sec_item_id;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id ??????id
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title ????????????
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets cover
     *
     * @return string
     */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
     * Sets cover
     *
     * @param string $cover ????????????
     *
     * @return $this
     */
    public function setCover($cover)
    {
        $this->container['cover'] = $cover;

        return $this;
    }

    /**
     * Gets is_top
     *
     * @return bool
     */
    public function getIsTop()
    {
        return $this->container['is_top'];
    }

    /**
     * Sets is_top
     *
     * @param bool $is_top ????????????
     *
     * @return $this
     */
    public function setIsTop($is_top)
    {
        $this->container['is_top'] = $is_top;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return int
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param int $create_time ?????????????????????
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets is_reviewed
     *
     * @return bool
     */
    public function getIsReviewed()
    {
        return $this->container['is_reviewed'];
    }

    /**
     * Sets is_reviewed
     *
     * @param bool $is_reviewed ???????????????????????????????????????????????????????????????true??????????????????false???
     *
     * @return $this
     */
    public function setIsReviewed($is_reviewed)
    {
        $this->container['is_reviewed'] = $is_reviewed;

        return $this;
    }

    /**
     * Gets share_url
     *
     * @return string
     */
    public function getShareUrl()
    {
        return $this->container['share_url'];
    }

    /**
     * Sets share_url
     *
     * @param string $share_url ?????????????????????????????????????????????????????????????????????????????????/video/data/???????????????????????????
     *
     * @return $this
     */
    public function setShareUrl($share_url)
    {
        $this->container['share_url'] = $share_url;

        return $this;
    }

    /**
     * Gets open_id
     *
     * @return string
     */
    public function getOpenId()
    {
        return $this->container['open_id'];
    }

    /**
     * Sets open_id
     *
     * @param string $open_id ??????openID
     *
     * @return $this
     */
    public function setOpenId($open_id)
    {
        $this->container['open_id'] = $open_id;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string $avatar ??????
     *
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string $nickname ??????
     *
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets statistics
     *
     * @return \swagger_client\Model\VideoSearchVideoSearchSearchVideoStatistics
     */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
     * Sets statistics
     *
     * @param \swagger_client\Model\VideoSearchVideoSearchSearchVideoStatistics $statistics statistics
     *
     * @return $this
     */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;

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
