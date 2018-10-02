<?php

namespace Briedis\Breezy\Structures;

class CandidateMetaData
{
    private $tasks;
    private $background_checks;
    private $notepad;
    private $team_notepad;
    private $assessments;
    private $stream;
    private $schedule;
    private $documents;
    private $questionnaires;
    private $conversation;
    private $references;
    private $scorecards;

    public static function fromResponse(array $rawCandidateMetaData)
    {
        $tasks = $rawCandidateMetaData['tasks'];
        $background_checks = $rawCandidateMetaData['background_checks'];
        $notepad = $rawCandidateMetaData['notepad'];
        $team_notepad = $rawCandidateMetaData['team_notepad'];
        $assessments = $rawCandidateMetaData['assessments'];
        $stream = $rawCandidateMetaData['stream'];
        $schedule = $rawCandidateMetaData['schedule'];
        $documents = $rawCandidateMetaData['documents'];
        $questionnaires = $rawCandidateMetaData['questionnaires'];
        $conversation = $rawCandidateMetaData['conversation'];
        $references = $rawCandidateMetaData['references'];
        $scorecards = $rawCandidateMetaData['scorecards'];

        return new CandidateMetaData(
            $tasks,
            $background_checks,
            $notepad,
            $team_notepad,
            $assessments,
            $stream,
            $schedule,
            $documents,
            $questionnaires,
            $conversation,
            $references,
            $scorecards
        );
    }

    public function __construct(
        $tasks,
        $background_checks,
        $notepad,
        $team_notepad,
        $assessments,
        $stream,
        $schedule,
        $documents,
        $questionnaires,
        $conversation,
        $references,
        $scorecards
    ) {
        $this->tasks = $tasks;
        $this->background_checks = $background_checks;
        $this->notepad = $notepad;
        $this->team_notepad = $team_notepad;
        $this->assessments = $assessments;
        $this->stream = $stream;
        $this->schedule = $schedule;
        $this->documents = $documents;
        $this->questionnaires = $questionnaires;
        $this->conversation = $conversation;
        $this->references = $references;
        $this->scorecards = $scorecards;
    }

    /**
     * @return mixed
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * @return mixed
     */
    public function getBackgroundChecks()
    {
        return $this->background_checks;
    }

    /**
     * @return mixed
     */
    public function getNotepad()
    {
        return $this->notepad;
    }

    /**
     * @return mixed
     */
    public function getTeamNotepad()
    {
        return $this->team_notepad;
    }

    /**
     * @return mixed
     */
    public function getAssessments()
    {
        return $this->assessments;
    }

    /**
     * @return mixed
     */
    public function getStream()
    {
        return $this->stream;
    }

    /**
     * @return mixed
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * @return mixed
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @return mixed
     */
    public function getQuestionnaires()
    {
        return $this->questionnaires;
    }

    /**
     * @return mixed
     */
    public function getConversation()
    {
        return $this->conversation;
    }

    /**
     * @return mixed
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * @return mixed
     */
    public function getScorecards()
    {
        return $this->scorecards;
    }
}
