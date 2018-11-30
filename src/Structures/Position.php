<?php

namespace Briedis\Breezy\Structures;

class Position
{
    const STATE_DRAFT = 'draft';
    const STATE_CLOSED = 'closed';
    const STATE_PUBLISHED = 'published';
    const STATE_ARCHIVED = 'archived';
    const STATE_PENDING = 'pending';

    private $id;
    private $state;
    private $name;
    private $friendly_id;
    private $description;
    private $questionnaire_id;
    private $scorecard_id;

    public static function fromResponse(array $rawPosition)
    {
        $id = $rawPosition['_id'];
        $state = $rawPosition['state'];
        $name = $rawPosition['name'];
        $friendly_id = $rawPosition['friendly_id'];
        $description = $rawPosition['description'] ?? '';
        $questionnaire_id = $rawPosition['questionnaire_id'] ?? '';
        $scorecard_id = $rawPosition['scorecard_id'] ?? '';
        
        return new Position(
            $id,
            $state,
            $name,
            $friendly_id,
            $description,
            $questionnaire_id,
            $scorecard_id
        );
    }

    public function __construct(
        string $id,
        string $state,
        string $name,
        string $friendly_id,
        string $description,
        string $questionnaire_id,
        string $scorecard_id
    ) {
        $this->id = $id;
        $this->state = $state;
        $this->name = $name;
        $this->friendly_id = $friendly_id;
        $this->description = $description;
        $this->questionnaire_id = $questionnaire_id;
        $this->scorecard_id = $scorecard_id;
    }

    public function isPublished()
    {
        return $this->state === self::STATE_PUBLISHED;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFriendlyId()
    {
        return $this->friendly_id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getQuestionnaireId()
    {
        return $this->questionnaire_id;
    }

    public function getScorecardId()
    {
        return $this->scorecard_id;
    }
}
