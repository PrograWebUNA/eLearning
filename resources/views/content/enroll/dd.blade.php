@extends('layouts.master')

@section('content')
<div class="container">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Drag and Drop</div>
                <div class="panel-body" dropzone="move">

                  <div name="list-a" class="droppable">
  <h3>List A</h3>
  <div class="task-wrapper">
      <div class="draggable" id="1" name="1">
          <a href="#">Element 1</a>
      </div>
      <div class="draggable" id="2" name="3">
          <a href="#">Element 2</a>
      </div>
      <div class="draggable" id="3" name="3">
          <a href="#">Element 3</a>
      </div>
  </div>
</div>
<div name="list-b" class="droppable">
  <h3>List B</h3>
  <div class="task-wrapper">
      <div class="draggable" id="5" name="5">
          <a href="#">Element 5</a>
      </div>
      <div class="draggable" id="6" name="6">
          <a href="#">Element 6</a>
      </div>
  </div>
</div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
