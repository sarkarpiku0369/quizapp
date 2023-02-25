@include("inc/header")

<!-- Begin Page Content -->
<div class="container-fluid mb-5">

    <div class="row mb-3">
        <div class="col-md-6">
            <h2 class="text-dark">Questions</h2>
        </div>
        <div class="col-md-6">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block" style="float: right;">
                    <button type="button" class="close" data-dismiss="alert" style="margin-left: 20px;">×</button>	
                        <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Level</th>
                    <th>Question</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Option 3</th>
                    <th>Option 4</th>
                    <th>Correct Option</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                    <tr>
                        <td>{{$question->level}}</td>
                        <td>{{$question->question}}</td>
                        <td>{{$question->option_1}}</td>
                        <td>{{$question->option_2}}</td>
                        <td>{{$question->option_3}}</td>
                        <td>{{$question->option_4}}</td>
                        <td>{{$question->correct_option}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{url('/question/edit/')}}<?php echo "/".$question->id?>"  class="btn btn-sm btn-outline-secondary mx-1"><i class="fa fa-pen"></i></a>
                                <a href="{{url('/question/delete/')}}<?php echo "/".$question->id?>"  class="btn btn-sm btn-outline-secondary"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

<!-- /.container-fluid -->
@include("inc/footer")