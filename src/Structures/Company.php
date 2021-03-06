<?php

namespace Briedis\Breezy\Structures;

class Company
{
    private $id;
    private $name;
    private $friendly_id;
    private $creation_date;
    private $updated_date;
    private $member_count;
    private $initial;


    public static function fromResponse(array $rawCompany)
    {
        $id = $rawCompany['_id'];
        $name = $rawCompany['name'];
        $friendly_id = $rawCompany['friendly_id'];
        $creation_date = $rawCompany['creation_date'];
        $updated_date = $rawCompany['updated_date'];
        $member_count = $rawCompany['member_count'];
        $initial = $rawCompany['initial'];

        return new Company($id, $name, $friendlyId, $creationDate, $updatedDate, $memberCount, $initial);
    }

    private function __construct(
        $id,
        $name,
        $friendlyId,
        $creationDate,
        $updatedDate,
        $memberCount,
        $initial
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->friendlyId = $friendlyId;
        $this->creationDate = $creationDate;
        $this->updatedDate = $updatedDate;
        $this->memberCount = $memberCount;
        $this->initial = $initial;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFriendlyId()
    {
        return $this->friendly_id;
    }

    public function getCreationDate()
    {
        return $this->creation_date;
    }

    public function getUpdatedDate()
    {
        return $this->updated_date;
    }

    public function getMemberCount()
    {
        return $this->member_count;
    }

    public function getInitial()
    {
        return $this->initial;
    }
}
