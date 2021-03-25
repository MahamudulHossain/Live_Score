@extends('app')

@section('title','Live Score')

@section('content')

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="card mt-5 col-md-4 p-3">
      <div class="card-body text-center">
        <h1 id="liveScore"></h1>
        <h3>Live Score</h3>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
//Pusher.logToConsole = true;
  var pusher = new Pusher('b10ee53bb29ed1fd5012',{
    cluster: 'ap2'
  });
  var channel = pusher.subscribe('my-event');
  channel.bind('Live_Score',function(data){
    $('#liveScore').html(data['score']);
  });

</script>
@endsection
