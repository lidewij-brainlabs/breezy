<?php

namespace Briedis\Breezy\Structures;

class Candidate
{
    private $id;
    private $creation_date;
    private $email_address;
    private $name;
    private $overall_score;
    private $phone_number;
    private $questionnaire;
    private $stage;

    public static function fromResponse(array $rawCandidate)
    {
        $id = $rawCandidate['_id'];
        $creation_date = $rawCandidate['creation_date'];
        $email_address = $rawCandidate['email_address'];
        $name = $rawCandidate['name'];
        $overall_score = $rawCandidate['overall_score'] ?? [];
        $phone_number = $rawCandidate['phone_number'] ?? '';
        $questionnaire = $rawCandidate['questionnaire'] ?? '';
        $stage = $rawCandidate['stage'];

        return new Candidate(
            $id,
            $creation_date,
            $email_address,
            $name,
            $overall_score,
            $phone_number,
            $questionnaire,
            $stage
        );
    }

    public function __construct(
        string $id,
        $creation_date,
        string $email_address,
        string $name,
        array $overall_score,
        string $phone_number,
        string $questionnaire,
        array $stage
    ) {
        $this->id = $id;
        $this->creation_date = $creation_date;
        $this->email_address = $email_address;
        $this->name = $name;
        $this->overall_score = $overall_score;
        $this->phone_number = $phone_number;
        $this->questionnaire = $questionnaire;
        $this->stage = $stage;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCreationDate()
    {
        return $this->creation_date;
    }

    public function getEmailAddress()
    {
        return $this->email_address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getOverallScore()
    {
        return $this->overall_score;
    }

    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

    public function getStage()
    {
        return $this->stage;
    }
}
