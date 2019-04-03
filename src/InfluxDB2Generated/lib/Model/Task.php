<?php
/**
 * Task
 *
 * PHP version 5
 *
 * @category Class
 * @package  InfluxDB2Generated
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Influx API Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 0.1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace InfluxDB2Generated\Model;

use \ArrayAccess;
use \InfluxDB2Generated\ObjectSerializer;

/**
 * Task Class Doc Comment
 *
 * @category Class
 * @package  InfluxDB2Generated
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Task implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Task';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'org_id' => 'string',
        'org' => 'string',
        'name' => 'string',
        'status' => 'string',
        'labels' => '\InfluxDB2Generated\Model\Label[]',
        'authorization_id' => 'string',
        'flux' => 'string',
        'every' => 'string',
        'cron' => 'string',
        'offset' => 'string',
        'latest_completed' => '\DateTime',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'links' => '\InfluxDB2Generated\Model\TaskLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'org_id' => null,
        'org' => null,
        'name' => null,
        'status' => null,
        'labels' => null,
        'authorization_id' => null,
        'flux' => null,
        'every' => null,
        'cron' => null,
        'offset' => null,
        'latest_completed' => 'date-time',
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'links' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'org_id' => 'orgID',
        'org' => 'org',
        'name' => 'name',
        'status' => 'status',
        'labels' => 'labels',
        'authorization_id' => 'authorizationID',
        'flux' => 'flux',
        'every' => 'every',
        'cron' => 'cron',
        'offset' => 'offset',
        'latest_completed' => 'latestCompleted',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'org_id' => 'setOrgId',
        'org' => 'setOrg',
        'name' => 'setName',
        'status' => 'setStatus',
        'labels' => 'setLabels',
        'authorization_id' => 'setAuthorizationId',
        'flux' => 'setFlux',
        'every' => 'setEvery',
        'cron' => 'setCron',
        'offset' => 'setOffset',
        'latest_completed' => 'setLatestCompleted',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'org_id' => 'getOrgId',
        'org' => 'getOrg',
        'name' => 'getName',
        'status' => 'getStatus',
        'labels' => 'getLabels',
        'authorization_id' => 'getAuthorizationId',
        'flux' => 'getFlux',
        'every' => 'getEvery',
        'cron' => 'getCron',
        'offset' => 'getOffset',
        'latest_completed' => 'getLatestCompleted',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'links' => 'getLinks'
    ];

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
        return self::$openAPIModelName;
    }

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['org_id'] = isset($data['org_id']) ? $data['org_id'] : null;
        $this->container['org'] = isset($data['org']) ? $data['org'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'active';
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['authorization_id'] = isset($data['authorization_id']) ? $data['authorization_id'] : null;
        $this->container['flux'] = isset($data['flux']) ? $data['flux'] : null;
        $this->container['every'] = isset($data['every']) ? $data['every'] : null;
        $this->container['cron'] = isset($data['cron']) ? $data['cron'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['latest_completed'] = isset($data['latest_completed']) ? $data['latest_completed'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['flux'] === null) {
            $invalidProperties[] = "'flux' can't be null";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets org_id
     *
     * @return string|null
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param string|null $org_id The ID of the organization that owns this Task.
     *
     * @return $this
     */
    public function setOrgId($org_id)
    {
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets org
     *
     * @return string|null
     */
    public function getOrg()
    {
        return $this->container['org'];
    }

    /**
     * Sets org
     *
     * @param string|null $org The organization that owns this Task.
     *
     * @return $this
     */
    public function setOrg($org)
    {
        $this->container['org'] = $org;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name A description of the task.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The current status of the task. When updated to 'inactive', cancels all queued jobs of this task.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return \InfluxDB2Generated\Model\Label[]|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \InfluxDB2Generated\Model\Label[]|null $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets authorization_id
     *
     * @return string|null
     */
    public function getAuthorizationId()
    {
        return $this->container['authorization_id'];
    }

    /**
     * Sets authorization_id
     *
     * @param string|null $authorization_id The ID of the authorization used when this task communicates with the query engine.
     *
     * @return $this
     */
    public function setAuthorizationId($authorization_id)
    {
        $this->container['authorization_id'] = $authorization_id;

        return $this;
    }

    /**
     * Gets flux
     *
     * @return string
     */
    public function getFlux()
    {
        return $this->container['flux'];
    }

    /**
     * Sets flux
     *
     * @param string $flux The Flux script to run for this task.
     *
     * @return $this
     */
    public function setFlux($flux)
    {
        $this->container['flux'] = $flux;

        return $this;
    }

    /**
     * Gets every
     *
     * @return string|null
     */
    public function getEvery()
    {
        return $this->container['every'];
    }

    /**
     * Sets every
     *
     * @param string|null $every A simple task repetition schedule; parsed from Flux.
     *
     * @return $this
     */
    public function setEvery($every)
    {
        $this->container['every'] = $every;

        return $this;
    }

    /**
     * Gets cron
     *
     * @return string|null
     */
    public function getCron()
    {
        return $this->container['cron'];
    }

    /**
     * Sets cron
     *
     * @param string|null $cron A task repetition schedule in the form '* * * * * *'; parsed from Flux.
     *
     * @return $this
     */
    public function setCron($cron)
    {
        $this->container['cron'] = $cron;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return string|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param string|null $offset Duration to delay after the schedule, before executing the task; parsed from flux.
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets latest_completed
     *
     * @return \DateTime|null
     */
    public function getLatestCompleted()
    {
        return $this->container['latest_completed'];
    }

    /**
     * Sets latest_completed
     *
     * @param \DateTime|null $latest_completed Timestamp of latest scheduled, completed run, RFC3339.
     *
     * @return $this
     */
    public function setLatestCompleted($latest_completed)
    {
        $this->container['latest_completed'] = $latest_completed;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \InfluxDB2Generated\Model\TaskLinks|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \InfluxDB2Generated\Model\TaskLinks|null $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


