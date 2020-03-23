<?php
require 'function.php';
//Todo App
//
//Todo, Comment, User
class Task {
  public $description;
  public $completed = false;

  public function __construct($description) {
    $this->description=$description;
  }

  public function complete() {
    $this->completed = true;
  }

  public function isComplete () {
    return $this->completed;
  }
}

$task = new Task('Go to the store');//instantiate a new task object
$task->complete();//changes status of task
dd($task->isComplete());

$tasks = [
  new Task('Play with the kitty'),
  new Task('Play with Kat'),
  new Task('Tell Jack to pee')
];
$tasks[0]->complete();
require 'index.view.php';