<?php

class Status {

    private object $object;
    private string $message;
    private string $answer;

    public function __construct(object $object, string $message, string $answer) {
        $this->object = $object;
        $this->message = $message;
        $this->answer = $answer;
    }

    public function getObject(): object {
        return $this->object;
    }

    public function getMessage(): string {
        return $this->message;
    }

    public function getAnswer(): string {
        return $this->answer;
    }

    public function setObject(object $object): void {
        $this->object = $object;
    }

    public function setMessage(string $message): void {
        $this->message = $message;
    }

    public function setAnswer(string $answer): void {
        $this->answer = $answer;
    }
}
