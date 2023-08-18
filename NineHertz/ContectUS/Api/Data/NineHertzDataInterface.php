<?php
declare(strict_types=1);

namespace NineHertz\ContectUS\Api\Data;

interface NineHertzDataInterface
{

    const EMAIL = 'email';
    const L_NAME = 'l_name';
    const NINEHERTZDATA_ID = 'ninehertzdata_id';
    const NUM = 'num';
    const COMPANY = 'company';
    const F_NAME = 'f_name';
    const AGE = 'Age';

    /**
     * Get ninehertzdata_id
     * @return string|null
     */
    public function getNinehertzdataId();

    /**
     * Set ninehertzdata_id
     * @param string $ninehertzdataId
     * @return \NineHertz\ContectUS\NineHertzData\Api\Data\NineHertzDataInterface
     */
    public function setNinehertzdataId($ninehertzdataId);

    /**
     * Get f_name
     * @return string|null
     */
    public function getFName();

    /**
     * Set f_name
     * @param string $fName
     * @return \NineHertz\ContectUS\NineHertzData\Api\Data\NineHertzDataInterface
     */
    public function setFName($fName);

    /**
     * Get l_name
     * @return string|null
     */
    public function getLName();

    /**
     * Set l_name
     * @param string $lName
     * @return \NineHertz\ContectUS\NineHertzData\Api\Data\NineHertzDataInterface
     */
    public function setLName($lName);

    /**
     * Get email
     * @return string|null
     */
    public function getEmail();

    /**
     * Set email
     * @param string $email
     * @return \NineHertz\ContectUS\NineHertzData\Api\Data\NineHertzDataInterface
     */
    public function setEmail($email);

    /**
     * Get num
     * @return string|null
     */
    public function getNum();

    /**
     * Set num
     * @param string $num
     * @return \NineHertz\ContectUS\NineHertzData\Api\Data\NineHertzDataInterface
     */
    public function setNum($num);

    /**
     * Get Age
     * @return string|null
     */
    public function getAge();

    /**
     * Set Age
     * @param string $age
     * @return \NineHertz\ContectUS\NineHertzData\Api\Data\NineHertzDataInterface
     */
    public function setAge($age);

    /**
     * Get company
     * @return string|null
     */
    public function getCompany();

    /**
     * Set company
     * @param string $company
     * @return \NineHertz\ContectUS\NineHertzData\Api\Data\NineHertzDataInterface
     */
    public function setCompany($company);
}

