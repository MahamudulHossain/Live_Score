@extends('app')

@section('title','Update Score')

@section('content')

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="card mt-5 col-md-4 p-3">
      <div class="card-body text-center">
        <h3>Update Score</h3>
        <input class="form-control text-center m-2 input_form" type="text">
        <button class="btn btn-block btn-success m-2 update_btn" type="button" name="button">Update Score</button>
        <h4 class="latestScore"> </h4>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
  $('.update_btn').click(function(){
    var score = $('.input_form').val();
    axios.post('/liveScoreUpdate',{score: score})
      .then(function(response){
        $('.latestScore').html(response.data);
      })
        .catch(function(error){

        })
  });
</script>
@endsection
