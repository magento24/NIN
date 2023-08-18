<?php
declare(strict_types=1);

namespace NineHertz\ContectUS\Model;

use Magento\Framework\Model\AbstractModel;
use NineHertz\ContectUS\Api\Data\NineHertzDataInterface;

class NineHertzData extends AbstractModel implements NineHertzDataInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\NineHertz\ContectUS\Model\ResourceModel\NineHertzData::class);
    }

    /**
     * @inheritDoc
     */
    public function getNinehertzdataId()
    {
        return $this->getData(self::NINEHERTZDATA_ID);
    }

    /**
     * @inheritDoc
     */
    public function setNinehertzdataId($ninehertzdataId)
    {
        return $this->setData(self::NINEHERTZDATA_ID, $ninehertzdataId);
    }

    /**
     * @inheritDoc
     */
    public function getFName()
    {
        return $this->getData(self::F_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setFName($fName)
    {
        return $this->setData(self::F_NAME, $fName);
    }

    /**
     * @inheritDoc
     */
    public function getLName()
    {
        return $this->getData(self::L_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setLName($lName)
    {
        return $this->setData(self::L_NAME, $lName);
    }

    /**
     * @inheritDoc
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * @inheritDoc
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * @inheritDoc
     */
    public function getNum()
    {
        return $this->getData(self::NUM);
    }

    /**
     * @inheritDoc
     */
    public function setNum($num)
    {
        return $this->setData(self::NUM, $num);
    }

    /**
     * @inheritDoc
     */
    public function getAge()
    {
        return $this->getData(self::AGE);
    }

    /**
     * @inheritDoc
     */
    public function setAge($age)
    {
        return $this->setData(self::AGE, $age);
    }

    /**
     * @inheritDoc
     */
    public function getCompany()
    {
        return $this->getData(self::COMPANY);
    }

    /**
     * @inheritDoc
     */
    public function setCompany($company)
    {
        return $this->setData(self::COMPANY, $company);
    }
}

